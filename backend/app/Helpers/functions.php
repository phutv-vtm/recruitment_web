<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

function getCurUser(int $role): object
{
    $user = Auth::user();

    if ($user->role != $role) {
        throw new Exception('no permission', 405);
    } else return $user;
}
function array2String($arr)
{
    $string = "";
    for ($j = 0; $j < count($arr); $j++) {
        $string = $string . $arr[$j];
        if ($j != count($arr) - 1) {
            $string = $string . ", ";
        }
    }
    return $string;
}
function formatDateTime($dt)
{
    $res = Carbon::parse($dt)->format('d/m/Y H:i');

    return $res;
}

// --- Supabase Storage helpers ---

function _sbBucket(string $folder): string
{
    static $map = [
        'candidate_avatars' => 'candidate-avatars',
        'resumes'           => 'resumes',
        'certificates'      => 'certificates',
        'prizes'            => 'prizes',
        'applied_resumes'   => 'applied-resumes',
        'employer_logos'    => 'employer-logos',
        'employer_images'   => 'employer-images',
        'suitable_resumes'  => 'suitable-resumes',
    ];
    return $map[$folder] ?? str_replace('_', '-', $folder);
}

function _sbHeaders(): array
{
    $key = env('SUPABASE_SERVICE_ROLE_KEY');
    return [
        'Authorization' => 'Bearer ' . $key,
        'apikey'        => $key,
    ];
}

function _sbBaseUrl(): string
{
    return rtrim(env('SUPABASE_URL'), '/');
}

function supabasePublicUrl(string $folder, string $filename): string
{
    return _sbBaseUrl() . '/storage/v1/object/public/' . _sbBucket($folder) . '/' . rawurlencode($filename);
}

function supabaseCopyFile(string $srcFolder, string $srcFilename, string $destFolder, string $destFilename): void
{
    $response = Http::withHeaders(array_merge(_sbHeaders(), ['Content-Type' => 'application/json']))
        ->post(_sbBaseUrl() . '/storage/v1/object/copy', [
            'bucketId'          => _sbBucket($srcFolder),
            'sourceKey'         => $srcFilename,
            'destinationBucket' => _sbBucket($destFolder),
            'destinationKey'    => $destFilename,
        ]);

    if (!$response->successful()) {
        throw new \Exception('Supabase copy failed [' . $response->status() . ']: ' . $response->body());
    }
}

function supabaseDeleteFiles(string $folder, array $filenames): void
{
    Http::withHeaders(array_merge(_sbHeaders(), ['Content-Type' => 'application/json']))
        ->delete(_sbBaseUrl() . '/storage/v1/object/' . _sbBucket($folder), [
            'prefixes' => $filenames,
        ]);
}

function supabaseFileExists(string $folder, string $filename): bool
{
    $res = Http::withHeaders(_sbHeaders())
               ->head(_sbBaseUrl() . '/storage/v1/object/' . _sbBucket($folder) . '/' . $filename);
    return $res->successful();
}

function supabaseUploadContent(string $folder, string $filename, string $content, string $mimeType = 'text/plain'): void
{
    $bucket   = _sbBucket($folder);
    $response = Http::withHeaders(array_merge(_sbHeaders(), ['x-upsert' => 'true']))
        ->withBody($content, $mimeType)
        ->post(_sbBaseUrl() . "/storage/v1/object/{$bucket}/" . rawurlencode($filename));

    if (!$response->successful()) {
        throw new \Exception('Supabase upload failed [' . $response->status() . ']: ' . $response->body());
    }
}

function supabaseDownload(string $folder, string $filename): ?string
{
    $res = Http::withHeaders(_sbHeaders())
               ->get(_sbBaseUrl() . '/storage/v1/object/' . _sbBucket($folder) . '/' . $filename);
    return $res->successful() ? $res->body() : null;
}

function uploadToStorage(
    $file,
    $folder,
    $filename = null,
    $option = ['isImage' => false, 'isText' => false]
) {
    $isImage = isset($option['isImage']) && $option['isImage'];
    $isText  = isset($option['isText'])  && $option['isText'];

    $ext = $file->getClientOriginalExtension();
    if (!$filename) {
        $originalName = $file->getClientOriginalName();
        $i = strrpos($originalName, '.');
        $baseName = substr($originalName, 0, $i);
        // Supabase rejects non-ASCII characters in storage keys
        $baseName = transliterator_transliterate('Any-Latin; Latin-ASCII', $baseName);
        $baseName = preg_replace('/[^A-Za-z0-9_\-]/', '_', $baseName);
        $filename = $baseName . '_' . time() . '.' . $ext;
    }

    $bucket   = _sbBucket($folder);
    $mimeType = $isText ? 'text/plain' : $file->getMimeType();
    $content  = $isText
        ? 'data:image/' . $ext . ';base64,' . base64_encode(file_get_contents($file->getRealPath()))
        : file_get_contents($file->getRealPath());

    $response = Http::withHeaders(array_merge(_sbHeaders(), ['x-upsert' => 'true']))
        ->withBody($content, $mimeType)
        ->post(_sbBaseUrl() . "/storage/v1/object/{$bucket}/" . rawurlencode($filename));

    if (!$response->successful()) {
        throw new \Exception('Supabase upload failed [' . $response->status() . ']: ' . $response->body());
    }

    if ($isText) return $folder . '/' . $filename;
    return supabasePublicUrl($folder, $filename);
}

function getStorageFileUrl(string $path): string
{
    [$folder, $filename] = explode('/', $path, 2);
    return supabasePublicUrl($folder, $filename);
}

function getStorageImageUrl(string $path): string
{
    [$folder, $filename] = explode('/', $path, 2);
    return supabasePublicUrl($folder, $filename);
}

function deleteStorageFile(string $_path): void
{
    [$folder, $basename] = explode('/', $_path, 2);
    $filenames = [];
    foreach (['png', 'jpg', 'jpeg', 'webp', ''] as $ext) {
        $filenames[] = $ext ? $basename . '.' . $ext : $basename;
    }
    supabaseDeleteFiles($folder, $filenames);
}

function checkStorageFile(string $_path): string|false
{
    [$folder, $basename] = explode('/', $_path, 2);
    foreach (['png', 'jpg', 'jpeg', 'webp', ''] as $ext) {
        $filename = $ext ? $basename . '.' . $ext : $basename;
        if (supabaseFileExists($folder, $filename)) return $ext;
    }
    return false;
}
