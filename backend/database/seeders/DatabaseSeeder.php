<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([UserSeeder::class]);
        $this->call([LocationSeeder::class]);
        $this->call([JtypeSeeder::class]);
        $this->call([JlevelSeeder::class]);
        $this->call([IndustrySeeder::class]);
        $this->call([EmployerSeeder::class]);
        $this->call([EmployerLocationSeeder::class]);
        $this->call([JobSeeder::class]);
        $this->call([JobIndustrySeeder::class]);
        $this->call([JobLocationSeeder::class]);
        $this->call([CandidateSeeder::class]);
        $this->call([EducationSeeder::class]);
        $this->call([ExperienceSeeder::class]);
        $this->call([SkillSeeder::class]);
        $this->call([ProjectSeeder::class]);
        $this->call([CertificateSeeder::class]);
        // $this->call([PrizeSeeder::class]);
        $this->call([ActivitySeeder::class]);
        // $this->call([OtherSeeder::class]);
        $this->call([JobApplyingSeeder::class]);

        $this->resetSequences();
    }

    private function resetSequences(): void
    {
        $tables = [
            'users',
            'locations',
            'jtypes',
            'jlevels',
            'industries',
            'jobs',
            'educations',
            'experiences',
            'skills',
            'projects',
            'certificates',
            'activities',
            'job_applying',
        ];

        foreach ($tables as $table) {
            \DB::statement("SELECT setval('{$table}_id_seq', COALESCE((SELECT MAX(id) FROM {$table}), 1))");
        }
    }
}
