<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('jobs')->insert([
            [
                'id' => 1,
                'employer_id' => 11,
                'jtype_id' => 3,
                'jlevel_id' => 1,
                'jname' => 'Thực Tập Sinh Lập Trình PHP',
                'address' => 'Hà Nội: Láng Thượng, Đống Đa',
                'amount' => 4,
                'min_salary' => null,
                'max_salary' => null,
                'yoe' => 0,
                'gender' => 0,
                'description' => '- Học các công cụ, framework mà công ty đang sử dụng
                - Xây dựng, chỉnh sửa giao diện HTML, CSS, Javascript
                - Cập nhật các tính năng của website bằng Laravel
                - Tìm hiểu, tra cứu tài liệu trên internet để xử lý công việc
                - Cụ thể trao đổi khi phỏng vấn',
                'requirements' => '● Đam mê tìm hiểu về các công nghệ lập trình.
                ● Vừa tốt nghiệp hoặc sinh viên năm cuối đang trong kì đồ án các trường cao đẳng, đại học,....
                ● Chăm chỉ, có khả năng tự nghiên cứu, giao tiếp tốt.Có kinh nghiệm làm việc với: HTML, CSS, SASS, PHP, Javascript
                ● Biết về chuẩn BEM, PSR coding convention
                ● Sử dụng thành thạo: Laravel, Bootstrap
                ● Có kiến thức về OOP, MVC
                ● Có kinh nghiệm làm việc với: Git, Git bash, VSCode Git Extension
                ● Sử dụng thành thạo VSCode, Sublime Text
                ● Ưu tiên ứng viên biết về: Angular, React
                ● Chăm chỉ, kiên trì, cẩn thận trong công việc
                ● Đam mê, có tinh thần cầu tiến
                ● Có khả năng tự học
                ● Ưu tiên ứng viên biết tiếng Anh',
                'benefits' => '● Công việc năng động, sáng tạo, được học hỏi kinh nghiệm trong các dự án thực tế với các dự án hiện đại, đa dạng của nước ngoài.
                ● Môi trường làm việc thân thiện, văn minh, chuyên nghiệp.
                ● Được làm việc theo quy trình chuyên nghiệp, theo mô hình Agile
                ● Cơ hội nâng cao trình độ ngoại ngữ và kỹ năng phát triển nghề nghiệp, có nhiều cơ hội thăng tiến trong công việc.
                ● Các chế độ phúc lợi, chế độ bảo hiểm theo quy định của Công ty và pháp luật Nhà nước sau khi trở thành nhân viên chính thức của công ty.
                ● Thời gian thực tập có thể rút ngắn tùy năng lực của bạn. Cơ hội lên chính thức và deal lương sau quá trình thực tập.',
                'expire_at' => Carbon::now()->addMonth()->setDay(rand(1, 28))->format('Y/m/d'),
                'interview_round_num' => 3,
                'latitude' => 21.011024, 
                'longitude' => 105.814989,
                'is_active' => 1,
                'created_at' => Carbon::now()->subDays(2),
                'updated_at' => Carbon::now()->subDays(2),
            ],
            [
                'id' => 2,
                'employer_id' => 11,
                'jtype_id' => 3,
                'jlevel_id' => 1,
                'jname' => 'Thực Tập Sinh Lập Trình Viên JavaScript',
                'address' => 'Hà Nội: Láng Thượng, Đống Đa',
                'amount' => 4,
                'min_salary' => null,
                'max_salary' => null,
                'yoe' => 0,
                'gender' => 0,
                'description' => '● Sử dụng Javascript tham gia phát triển các website, ứng dụng mobile.
                ● Làm việc, phối hợp công việc theo nhóm dưới sự phân công công việc của quản lý dự án.                
                ● Chi tiết trao đổi khi phỏng vấn',
                'requirements' => '● Định hướng fullstack Nestjs + Angular

                ●Tư duy lập trình, tư duy logic hệ thống
                ● Ham học hỏi & có khả năng thích nghi với Ngôn ngữ lập trình và Công nghệ mới
                ● Tinh thần tự giác, làm việc cẩn thận, trách nhiệm
                ● Có kiến thức về HTML/CSS
                ● Có kiến thức về Javascript, NodeJS
                ● Có hiểu biết về thiết kế cơ sở dữ liệu: MySQL, Postgres, MongoDB, ...
                ● Có hiểu biết về OOP, MVC, Design pattern
                
                Ưu tiên:
                ● Ưu tiên sinh viên năm cuối hoặc mới tốt nghiệp.
                ● Ưu tiên ứng viên đã từng sử dụng các thư viện hoặc framework liên quan đến javascript: Node.js, ExpressJS, Angular, React, Vuejs, React-native,...',
                'benefits' => '● Có mức hỗ trợ thực tập + thưởng Lễ, Tết,...
                ● Lộ trình thăng tiến rõ ràng, cơ hội lên làm nhân viên chính thức. Môi trường năng động, sáng tạo, được leader giỏi chỉ dẫn, được làm việc với các dự án hiện đại, đa dạng của nước ngoài.
                ● Quy trình chuẩn mực theo tiêu chuẩn Agile.
                ● Các chế độ phúc lợi, chế độ bảo hiểm theo quy định của Công ty và pháp luật Nhà nước khi trở thành nhân viên chính thức
                ● Đồng nghiệp thân thiện, được tham gia các hoạt động của công ty: team building, happy hour,...',
                'expire_at' => Carbon::now()->addMonth()->setDay(rand(1, 28))->format('Y/m/d'),
                'interview_round_num' => 3,
                'latitude' => 21.011024, 
                'longitude' => 105.814989,
                'is_active' => 1,
                'created_at' => Carbon::now()->subDays(2),
                'updated_at' => Carbon::now()->subDays(2),
            ],
            [
                'id' => 3,
                'employer_id' => 11,
                'jtype_id' => 1,
                'jlevel_id' => 2,
                'jname' => 'Nhân Viên Kinh Doanh',
                'address' => 'Hà Nội: 85 Nguyễn Chí Thanh, Láng Hạ, Đống Đa',
                'amount' => 1,
                'min_salary' => 7,
                'max_salary' => 15,
                'yoe' => null,
                'gender' => null,
                'description' => 'Chăm sóc khách hàng để xúc tiến gia hạn hợp đồng:
                - Thông báo hợp đồng hết hạn.
                - Làm hợp đồng gia hạn với khách hàng.
                - Cập nhật thông tin khách hàng khi có thay đổi.
                Tiếp nhận các yêu cầu về dịch vụ từ khách hàng và chuyển tiếp tới các bộ phận xử lý yêu cầu.
                Tư vấn bán hàng khi có phát sinh:
                - Tư vấn, báo giá các dịch vụ của công ty tới khách hàng có nhu cầu (các dịch vụ tên miền, hosting, SSL, email, thiết kế website...)
                - Làm hợp đồng cung cấp dịch vụ với khách hàng.
                Đăng tin sản phẩm, chương trình khuyến mại diễn đàn thông tin, Blog, mạng xã hội ...
                Thực hiện các công việc khác theo phân công của trưởng bộ phận',
                'requirements' => 'Ưu tiên có 01 năm kinh nghiệm sale
                Đã có kinh nghiệm làm việc trong các công ty về lĩnh vực công nghệ thông tin là một lợi thế, chưa có kinh nghiệm sẽ được hướng dẫn, đào tạo.
                Có khả năng làm việc độc lập và làm việc nhóm tốt;
                Có tính năng động, giọng nói rõ ràng, lưu loát;
                Có tính cẩn thận và trách nhiệm với công việc;
                Sẵn sàng làm việc theo ca kíp khi công việc yêu cầu;
                Ưu tiên các bạn có các kiến thức, kỹ năng về chăm sóc khách hàng;
                Điểm cộng:
                - Có hiểu biết về website, mobile app;
                - Có hiểu biết về Marketing (FB ads, Google adwords,...) là một lợi thế.',
                'benefits' => 'Công việc ổn định, phát triển;
                Được làm việc trong môi trường thân thiện, trẻ trung, vui vẻ mang tính xây dựng cao;
                Được làm việc, nâng cao trình độ và kỹ năng nghề nghiệp, chuyên môn.
                Được đào tạo thêm kiến thức về công nghệ thông tin
                Được thưởng các ngày nghỉ Lễ, Tết.
                Được hưởng các chế độ phúc lợi, chế độ bảo hiểm theo quy định của Công ty và pháp luật Nhà nước.',
                'expire_at' => Carbon::now()->addMonth()->setDay(rand(1, 28))->format('Y/m/d'),
                'interview_round_num' => 1,
                'latitude' => 21.011024, 
                'longitude' => 105.814989,
                'is_active' => 1,
                'created_at' => Carbon::now()->subDays(6),
                'updated_at' => Carbon::now()->subDays(6),
            ],
            [
                'id' => 4,
                'employer_id' => 12,
                'jtype_id' => 3,
                'jlevel_id' => 1,
                'jname' => 'Thực Tập Lập Trình PHP',
                'address' => 'Hà Nội: 91 Nguyễn Chí Thanh, Đống Đa',
                'amount' => 5,
                'min_salary' => 2,
                'max_salary' => 3,
                'yoe' => null,
                'gender' => null,
                'description' => 'Tham gia vào các dự án phát triển website thương mại điện tử (Laravel)
                Nâng cấp các sản phẩm hoặc viết mới theo nhu cầu của công ty. -
                Các công việc khác theo chỉ đạo của Manager.',
                'requirements' => '- Có kiến thức căn bản về Laravel, PHP, MySQL/JS, HTML/CSS...
                - Sắp/đã tốt nghiệp chuyên ngành CNTT, điện tử viễn thông hoặc các ngành liên quan.
                - Có kiến thức cơ bản về một trong những ngôn ngữ trên, đã có kinh nghiệm làm Bài tập lớn, đồ án, thực tập...
                - Có ý tốt trong công việc: Nghiêm túc thực hiện và hoàn thành các công việc được giao.',
                'benefits' => '- Được training on job dự án thực tế của Netbase, tham gia toàn bộ quá trình phát triển sản phẩm thực tế của công ty.
                - Nâng cao năng lực chuyên môn, ngoại ngữ và kỹ năng mềm trong suốt quá trình làm việc.
                - Trải nghiệm cùng học tập và làm việc cùng các chuyên gia công nghệ hàng đầu tại Netbase. Được các anh Mentors hàng đầu Netbase hướng dẫn đào tạo.
                - Xác định lộ trình nghề nghiệp rõ ràng, đãi ngộ xứng đáng và nhiều cơ hội thăng tiến.
                - Có phụ cấp lương và gửi xe trong thời gian thực tập.',
                'expire_at' => Carbon::now()->addMonth()->setDay(rand(1, 28))->format('Y/m/d'),
                'interview_round_num' => 3,
                'latitude' => 21.00822, 
                'longitude' => 105.807611,
                'is_active' => 1,
                'created_at' => Carbon::now()->subDays(6),
                'updated_at' => Carbon::now()->subDays(6),
            ],
            [
                'id' => 5,
                'employer_id' => 12,
                'jtype_id' => 3,
                'jlevel_id' => 1,
                'jname' => 'Thực Tập Lập Trình React JS',
                'address' => 'Hà Nội: 91 Nguyễn Chí Thanh, Đống Đa',
                'amount' => 2,
                'min_salary' => 2,
                'max_salary' => 3,
                'yoe' => null,
                'gender' => null,
                'description' => '- Tham gia vào các dự án phát triển website thương mại điện tử, nâng cấp các sản phẩm hoặc viết mới theo nhu cầu của công ty.
                - Đảm bảo codes chất lượng và được tối ưu hoá.
                - Làm việc theo mô hình Scrum, quy trình Agile, hệ thống quản lý dự án Redmine/Jira/Git ...',
                'requirements' => '- Có kiến thức căn bản về MySQL, JS, HTML/CSS/ReactJS
                - Sắp/đã tốt nghiệp chuyên ngành Công nghệ thông tin, Toán tin, Khoa học máy tính, Kỹ thuật phần mềm... hoặc các chuyên ngành có liên quan.
                - Ưu tiên từng có project (dự án thật hoặc đồ án hoặc sản phẩm) làm bằng react.
                - Có ý tốt trong công việc: Nghiêm túc thực hiện và hoàn thành các công việc được giao.
                
                -Ưu tiên UV làm fullstack',
                'benefits' => '- Được trainning on job dự án thực tế của Netbase, tham gia toàn bộ quá trình phát triển sản phẩm thực tế của công ty.
                - Nâng cao năng lực chuyên môn, ngoại ngữ và kỹ năng mềm trong suốt quá trình làm việc.
                - Trải nghiệm cùng học tập và làm việc cùng các chuyên gia công nghệ hàng đầu tại Netbase. Được các anh Mentors hàng đầu Netbase hướng dẫn đào tạo.
                - Xác định lộ trình nghề nghiệp rõ ràng, đãi ngộ xứng đáng và nhiều cơ hội thăng tiến.
                - Có phụ cấp trong thời gian thực tập.
                - Được tham gia các khóa học đào tạo về kỹ năng phát triển con người.',
                'expire_at' => Carbon::now()->addMonth()->setDay(rand(1, 28))->format('Y/m/d'),
                'interview_round_num' => 3,
                'latitude' => 21.00822, 
                'longitude' => 105.807611,
                'is_active' => 1,
                'created_at' => Carbon::now()->subDays(2),
                'updated_at' => Carbon::now()->subDays(2),
            ],
            [
                'id' => 6,
                'employer_id' => 12,
                'jtype_id' => 1,
                'jlevel_id' => 2,
                'jname' => 'WordPress Developer Fullstack',
                'address' => 'Hà Nội: 91 Nguyễn Chí Thanh, Đống Đa',
                'amount' => 2,
                'min_salary' => 7,
                'max_salary' => 12,
                'yoe' => 1,
                'gender' => 0,
                'description' => 'Phát triển các website trên nền tảng WordPress Theme Framework đã xây dựng hoặc làm mới.
                Tham gia lập trình website dự án bằng WordPress, thành thạo ngôn ngữ PHP, cơ sở dữ liệu MySQL; HTML5, CSS3, JavaScript.
                Tham gia các dự án xây dựng ứng dụng phục vụ nhu cầu của Công ty.
                Phối hợp cùng team Account tiếp nhận và tư vấn giải pháp website cho khách hàng
                Phối hợp với BA, Designer và Developer khác để project được thực hiện đúng yêu cầu và deadline, xử lý lỗi và tối ưu hóa vận hành cho các tính năng hiện có.
                Sử dụng công cụ Git (như GitHub, GitLab, BitBucket,...) để quản lý code và làm việc nhóm.',
                'requirements' => 'Có ít nhất 1 năm kinh nghiệm lập trình WordPress
                Thành thạo WordPress cả Front End lẫn Back End.
                Kiến thức cơ bản về HTML/CSS/JAVASCRIPT, thành thạo sử dụng bootstrap version 4.0 trở lên;
                Có tư duy hệ thống, tư duy logic tốt, tiếp thu kiến thức mới nhanh, có khả năng chủ động giải quyết vấn đề;
                Có khả năng đọc hiểu tiếng Anh phục vụ công việc.',
                'benefits' => 'Luôn được hướng dẫn tư duy Logic nghiệp vụ
                Các buổi training chuyên sâu kỹ thuật/ kỹ năng mềm định kỳ
                Làm việc tại một môi trường thoải mái về đồng phục nhưng chuẩn mực về thái độ
                Leader luôn tạo điều kiện học hỏi và phát triển thông qua các buổi Seminar, giúp nâng cao tay nghề, tư duy làm việc chuyên nghiệp
                Mức lương hấp dẫn dựa trên năng lực và kinh nghiệm
                Lương tháng 13 + thưởng triền miên cả năm: thưởng theo dự án, thưởng sáng kiến, thưởng nóng/đột xuất
                Được hưởng đầy đủ các chính sách về lao động theo luật lao động: Ngày làm 8 tiếng, luân phiên nghỉ thứ Bảy để có thời gian về quê hoặc xả stress, bảo hiểm, nghỉ lễ, nghỉ tết, ốm đau,....
                Du lịch hàng năm cùng các hoạt động Team Building khác..',
                'expire_at' => Carbon::now()->addMonth()->setDay(rand(1, 28))->format('Y/m/d'),
                'interview_round_num' => 3,
                'latitude' => 21.00822, 
                'longitude' => 105.807611,
                'is_active' => 1,
                'created_at' => Carbon::now()->subDays(2),
                'updated_at' => Carbon::now()->subDays(2),
            ],
            [
                'id' => 7,
                'employer_id' => 13,
                'jtype_id' => 3,
                'jlevel_id' => 1,
                'jname' => 'Thực Tập Sinh PHP -D2',
                'address' => 'Hà Nội: Tầng 3 Hoàng Ngọc Tower, Lô C2C, ngõ 72 Trần Thái Tông, Phường Dịch Vọng Hậu, Quận Cầu Giấy, Thành phố Hà Nội, Việt Nam, Cầu Giấy',
                'amount' => 2,
                'min_salary' => 3,
                'max_salary' => 6,
                'yoe' => null,
                'gender' => null,
                'description' => '- Hoàn thành khóa training về lập trình backend bằng PHP (Laravel) và frontend bằng JS/TS (Vuejs hoặc Reactjs) của công ty với kết quả tốt
                - Tham gia vào dự án OJT của công ty
                - Sử dụng PHP để làm BE cho các dự án, có thể sử dụng thêm JS/TS để làm FE
                - Làm việc, phối hợp công việc theo nhóm dưới sự phân công công việc của quản lý dự án.',
                'requirements' => '- Sinh viên năm 3, năm 4 chuyên ngành IT các trường đại học
                - Yêu thích lập trình, thích tìm hiểu công nghệ mới, sẵn sàng học ngôn ngữ mới, không chỉ ngôn ngữ được training
                - Hiểu cơ bản về ngôn ngữ PHP, đã và đang sử dụng ngôn ngữ PHP để làm các project trên trường và cá nhân
                - Có tư duy lập trình tốt, nắm được các kiến thức nền về lập trình, thuật toán, cơ sở dữ liệu
                - Sử dụng cơ bản được linux (ubuntu, redhat...)
                - Nhanh nhẹn, chăm chỉ, ham học hỏi, cầu tiến
                
                Điểm cộng:
                - Đã từng làm các framework PHP (Laravel, Yii, CakePHP...) là một lợi thế
                - Ưu tiên khả năng tiếng Anh, tiếng Nhật tốt.',
                'benefits' => '+ Giai đoạn 1: Đào tạo: Trợ cấp 2,000,000vnd/tháng. Yêu cầu bắt buộc ít nhất 100h làm việc/tháng.
                + Giai đoạn 2: OJT. Sau khi được đánh giá hoàn thành giai đoạn Đào tạo, nhân viên thực tập sẽ được tham gia dự án thật dưới sự hướng dẫn của các Lập trình viên cấp cao. Mức lương trong giai đoạn dao động từ 3,000,000vnd - 6,000,000vnd/tháng. Offer theo năng lực và và thời gian làm việc của từng cánhân.
                + Giai đoạn 3: Sau khi hoàn thành thử thách ở giai đoạn OJT, thực tập sinh sẽ được ký Hợp đồng chính thức nếu đã tốt nghiệp/ đi làm được toàn thời gian hoặc Hợp đồng Cộng tác viên nếu đi làm bán thời gian. Mức lương theo năng lực và được hưởng các chế độ nhân sự khác dành cho nhân
                viên chính thức.
                + Được hưởng các chính sách phúc lợi theo quy định của công ty.                
                ',
                'expire_at' => Carbon::now()->addMonth()->setDay(rand(1, 28))->format('Y/m/d'),
                'interview_round_num' => 3,
                'latitude' => 21.029937, 
                'longitude' => 105.785086,
                'is_active' => 1,
                'created_at' => Carbon::now()->subDays(4),
                'updated_at' => Carbon::now()->subDays(4),
            ],
            [
                'id' => 8,
                'employer_id' => 13,
                'jtype_id' => 1,
                'jlevel_id' => 2,
                'jname' => 'Lập Trình Viên PHP',
                'address' => 'Hà Nội: Tầng 3 Hoàng Ngọc Tower, Lô C2C, ngõ 72 Trần Thái Tông, Phường Dịch Vọng Hậu, Quận Cầu Giấy, Thành phố Hà Nội, Việt Nam, Cầu Giấy',
                'amount' => 1,
                'min_salary' => 15,
                'max_salary' => 30,
                'yoe' => 3,
                'gender' => null,
                'description' => 'Tham gia vào nâng cấp hệ thống đang chạy của khách hàng lên phiên bản mới
                Sửa lỗi , test các tính năng theo yêu cầu của khách hàng',
                'requirements' => 'Có kinh nghiệm trong lập trình web ngôn ngữ PHP ít nhất từ 3 năm trở lên
                Có kinh nghiệm sử dụng PHP Laravel ít nhất 2.5 năm trở lên
                Có kinh nghiệm làm việc với môi trường Linux (Ubuntu,Centos...)
                Có kinh nghiệm sử dụng / tích hợp với service bên thứ 3 như AWS , Payment gateway.',
                'benefits' => '1. Công ty cung cấp thiết bị làm việc cho toàn bộ nhân viên chính thức (bao gồm thử việc)
                2. Tổng thu nhập một năm: 14++ tháng lương
                3. Join vào dự án ODC. Khi join dự án bắt đầu từ tháng thứ 4 trở lên
                4. Trợ cấp tiếng Nhật, và các chứng chỉ IT liên quan (hình thức: trợ cấp hàng tháng, hỗ trợ chi phí thi, tăng lương...)
                5. Thưởng thâm niên cho các nhân sự làm việc tại công ty lên tới 10.000.000vnd. Thưởng Tết Dương Lịch, Sinh Nhật Công ty
                6. Xét tăng lương theo năng lực và kết quả công việc: 2 lần/năm (T6 và T12)
                7. Được tham gia các Câu lạc bộ dưới sự tài trợ chính thức của Công ty: CLB Bóng đá, các CLB Game, Hobby, tham gia các bữa tiệc sinh nhật, team building hàng quý, hoạt động ngoại khóa của công ty ...
                8. Có cơ hội được onsite tại thị trường Nhật Bản.
                9. Thời gian làm việc: từ thứ 2 đến thứ 6 từ 8h30 - 17h30 (Nghỉ thứ 7, CN). Thời gian làm việc linh động
                10. Môi trường làm việc chuyên nghiệp, cởi mở, thân thiện.
                11. Cơ hội thăng tiến cao trong môi trường tăng trưởng liên tục
                12. Du lịch 2 lần/năm.',
                'expire_at' => Carbon::now()->addMonth()->setDay(rand(1, 28))->format('Y/m/d'),
                'interview_round_num' => 3,
                'latitude' => 21.029937, 
                'longitude' => 105.785086,
                'is_active' => 1,
                'created_at' => Carbon::now()->subDays(6),
                'updated_at' => Carbon::now()->subDays(6),
            ],
            [
                'id' => 9,
                'employer_id' => 13,
                'jtype_id' => 1,
                'jlevel_id' => 2,
                'jname' => 'Nhân Viên Hành Chính- Lễ Tân',
                'address' => 'Hà Nội: Tầng 3 Hoàng Ngọc Tower, Lô C2C, ngõ 72 Trần Thái Tông, Phường Dịch Vọng Hậu, Quận Cầu Giấy, Thành phố Hà Nội, Việt Nam, Cầu Giấy',
                'amount' => 2,
                'min_salary' => 6,
                'max_salary' => 8,
                'yoe' => 0,
                'gender' => 1,
                'description' => 'Thực hiện các công việc Hành chính văn phòng
                Tiếp đón khách ra vào công ty.
                Quản lý trang thiết bị trong công ty, thực hiện mua sắm trang thiết bị theo yêu cầu của các phòng ban
                Làm việc với Nhà cung cấp
                Phối hợp tổ chức các hoạt động văn hóa nội bộ trong công ty như sinh nhật, teambuilding, du lịch,sumup...
                Hỗ trợ các công việc Nhân sự nếu có đam mê
                Một số công việc khác theo sự sắp xếp của quản lý trực tiếp.',
                'requirements' => 'Có kinh nghiệm từ 06 tháng trong lĩnh vực Hành chính-Văn Phòng, Nhân sự
                Năng động, nhiệt tình, không ngại khó. Hành xử chuyên nghiệp.
                Ngoại hình tốt là một điểm cộng
                Sinh năm 2000-2002',
                'benefits' => '1. Công ty cung cấp thiết bị làm việc cho toàn bộ nhân viên chính thức (bao gồm thử việc)
                2. Tổng thu nhập một năm: 14++ tháng lương
                3. Trợ cấp dự án ODC cho Lập trình viên. Khi join dự án bắt đầu từ tháng thứ 4 trở lên
                4. Trợ cấp tiếng Nhật, và các chứng chỉ IT liên quan (hình thức: trợ cấp hàng tháng, hỗ trợ chi phí thi, tăng lương...)
                5. Thưởng thâm niên cho các nhân sự gắn bó lâu dài trong công ty lên tới 10M/lần. Thưởng Lễ/Tết 2 lần/năm (Tết Dương lịch/Sinh nhật Công ty)
                6. Khám sức khỏe toàn công ty vào tháng 6 hàng năm
                7. Xét tăng lương theo năng lực và kết quả công việc: 2 lần/năm (T6 và T12)
                8. Được tham gia các Câu lạc bộ dưới sự tài trợ chính thức của Công ty: CLB Bóng đá, các CLB Game, Hobby, tham gia các bữa tiệc sinh nhật, team building hàng quý, hoạt động ngoại khóa của công ty ...
                9. Thời gian làm việc từ thứ 2 đến thứ 6 từ 8h30 - 17h30 (Nghỉ thứ 7, CN). Thời gian làm việc linh động
                10. Môi trường làm việc chuyên nghiệp, cởi mở, thân thiện.
                11. Cơ hội thăng tiến cao trong môi trường tăng trưởng liên tục
                12. Du lịch 2 lần/năm..',
                'expire_at' => Carbon::now()->addMonth()->setDay(rand(1, 28))->format('Y/m/d'),
                'interview_round_num' => 1,
                'latitude' => 21.029937, 
                'longitude' => 105.785086,
                'is_active' => 1,
                'created_at' => Carbon::now()->subDays(2),
                'updated_at' => Carbon::now()->subDays(2),
            ],
            [
                'id' => 10,
                'employer_id' => 14,
                'jtype_id' => 2,
                'jlevel_id' => 1,
                'jname' => 'Thực Tập Sinh PHP',
                'address' => 'Hà Nội: Tầng 14, 16, 18, 19, 20 Tòa Viwaseen, 48 Tố Hữu, Nam Từ Liêm',
                'amount' => 2,
                'min_salary' => null,
                'max_salary' => 3,
                'yoe' => null,
                'gender' => null,
                'description' => 'Tham gia chương trình đào tạo về lập trình website thương mại điện tử trên nền tảng Magento 2 trong thời gian 2 tháng bằng ngôn ngữ PHP
                Được đào tạo chuyên sâu về lập trình Magento và thương mại điện tử, làm quen với các công cụ và quy trình quản lý dự án chuyên nghiệp (hệ thống quản lý dự án nội bộ, GIT, công cụ validate code...)
                Tham gia các dự án thực tế và tìm hiểu về các công nghệ trending trong ngành E-commerce: Varnish, Redis, Solr, Elasticsearch, Headless, integration với các hệ thống bên thứ 3',
                'requirements' => 'Sinh viên năm 3 trở lên và chưa tốt nghiệp, chuyên ngành Công nghệ thông tin hoặc các ngành có liên quan. Ưu tiên các bạn sinh viên Bách Khoa, ĐH Công nghệ, Bưu Chính.
                Ưu tiên ứng viên có kiến thức về PHP, JavaScript, HTML5, CSS3, jQuery, ReactJS, NodeJS,...
                Có thể tham gia chương trình part time ít nhất 20h/tuần (bắt buộc). Các bạn được sắp xếp lịch làm việc linh hoạt theo lịch học
                Có tư duy lập trình tốt và có khả năng đọc hiểu tiếng Anh cơ bản
                Có kiến thức về ngôn ngữ lập trình PHP hoặc có kiến thức về ngôn ngữ khác nhưng sẵn sàng tìm hiểu, học hỏi và làm việc bằng ngôn ngữ PHP. Ưu tiên ứng viên có kiến thức về PHP, JavaScript, HTML5, CSS3, jQuery...
                Năng động, nhiệt huyết, ham học hỏi và chịu được áp lực công việc cao. Là người có bản lĩnh, tư duy nhạy bén và linh hoạt với kiến thức, công nghệ mới
                Yêu thích môi trường nhiệt huyết máu lửa, dám nghĩ dám làm, chịu được áp lực cao, khát khao cống hiến và gắn bó',
                'benefits' => 'Nhận lương hỗ trợ thực tập: 3 triệu/ tháng và được cung cấp máy tính để bàn, hỗ trợ phí gửi xe.
                Có lộ trình phát triển rõ ràng và cơ hội trở thành nhân viên chính thức sau 02 tháng với mức lương khởi điểm lên tới 9.000.000 VNĐ/tháng.
                Miễn phí chương trình training 2 tháng để làm quen quy trình làm việc chuyên nghiệp. Được hỗ trợ, hướng dẫn bởi những Magento Certified Developers với nhiều năm kinh nghiệm trong mỗi trường chuyên nghiệp.
                Làm việc tại một trong những công ty Magento hàng đầu tại Việt Nam, trẻ trung, năng động, theo tiêu chuẩn quốc tế (100% khách hàng nước ngoài đến từ Bắc Mỹ, châu Âu, Úc...).
                Được nâng cao năng lực làm việc với các buổi đào tạo của công ty về các kiến thức chuyên môn, kỹ năng tiếng Anh và các kỹ năng khác...
                Được trải nghiệm văn hóa doanh nghiệp trẻ trung, sôi nổi với các hoạt động nội bộ được tổ chức thường xuyên: Sinh nhật thành viên, teambuilding, dã ngoại, du lịch...
                Văn phòng tầng 14, 18, 16, 19, 20 view đẹp và có nhiều tiện nghi: trà, cafe free, máy chơi game PS5 máy massage, thư viện, boardgame,...',
                'expire_at' => Carbon::now()->addMonth()->setDay(rand(1, 28))->format('Y/m/d'),
                'interview_round_num' => 2,
                'latitude' => 20.9978385,
                'longitude' => 105.7974438,
                'is_active' => 1,
                'created_at' => Carbon::now()->subDays(5),
                'updated_at' => Carbon::now()->subDays(5),
            ],
            [
                'id' => 11,
                'employer_id' => 14,
                'jtype_id' => 1,
                'jlevel_id' => 2,
                'jname' => 'FullStack Developer',
                'address' => 'Hà Nội: Tầng 14, 16, 18, 19, 20 Tòa Viwaseen, 48 Tố Hữu, Nam Từ Liêm',
                'amount' => 1,
                'min_salary' => 12,
                'max_salary' => 20,
                'yoe' => 1,
                'gender' => null,
                'description' => '- Phát triển các sản phẩm thương mại điện tử sử dụng PHP (ví dụ: Magento, Shopware)
                - Tham gia lập trình cả back-end, front-end cho các dự án.
                - Tham gia nghiên cứu, phát triển các giải pháp tích hợp website thương mại điện tử với CRM, ERP.
                - Tham gia nghiên cứu các công nghệ mới liên quan tới WEB, phát triển tính năng và tối ưu sản phẩm phục vụ số lượng người dùng lớn.
                - Làm việc với các thành viên khác của dự án. Tham gia vào quá trình phân tích và thiết kế hệ thống
                - Luôn đảm bảo công việc với chất lượng cao và đáp ứng các yêu cầu của khách hàng
                - Có khả năng làm việc độc lập cũng như làm việc nhóm tốt
                - Có thể đưa ra các giải pháp, kỹ thuật giải quyết vấn đề khó khi cần thiết',
                'requirements' => '- Tốt nghiệp đại học lĩnh vực khoa học máy tính, công nghệ phần mềm hoặc liên quan
                - Ít nhất 1.5 năm kinh nghiệm thực tế trong việc phát triển WEB sử dụng PHP
                - Thành thạo PHP OOP.
                - Thành thạo Javascript căn bản, có kinh nghiệm với JQuery.
                - Thành thạo GIT, BITBUCKET.
                - Có kinh nghiệm làm việc với quy trình Agile (Scrum, Kanban)
                - Giao tiếp tốt và chịu được áp lực công việc cao.
                - Thái độ tích cực và trung thực trong công việc.',
                'benefits' => '- Lương: upto 20M. Xét tăng lương 2 lần/năm.
                - Thưởng dự án, quà tặng các dịp Lễ Tết, sinh nhật ....
                - Thời gian làm việc 5 ngày 1 tuần, từ 8h30 đến 17h45.
                - Có 13.5 ngày nghỉ phép/năm (12 ngày nghỉ phép theo quy định và 1.5 ngày nghỉ phép du lịch hàng năm) và các phúc lợi khác theo quy định của pháp luật.
                - Làm việc tại một trong những công ty Magento hàng đầu tại Việt Nam với 2 Magento Maintainer cung cấp giải pháp thương mại toàn diện cho khách hàng quốc tế, đơn vị đầu tiên trên thế giới vừa là Select Extension Builder vừa là Business Solution Partner của Magento.
                - Làm việc với 100% khách hàng nước ngoài.
                - Được đào tạo về PHP, Magento và các nền tảng thương mại điện tử bởi Magento Solution Specialist, Magento Certified Developer có nhiều năm kinh nghiệm.
                - Quy trình development, quản lý dự án chuyên nghiệp (Agile, Scrum, GIT, hệ thống validate code tự động...).
                - Được tham gia thường xuyên các buổi training, test năng lực về các kiến thức chuyên môn, kỹ năng tiếng Anh và các kỹ năng làm việc khác...
                - Môi trường làm việc trẻ trung (95% là 9x và GenZ), làm hết sức, chơi hết mình. Cơ hội tham gia vào các câu lạc bộ: bóng đá, chạy bộ ...
                - Tham gia các chương trình team building, dã ngoại, sinh nhật thành viên, du lịch, từ thiện... được tổ chức thường xuyên.
                - Văn phòng với nhiều tiện nghi: ghế massage, máy chơi game PS5, tủ sách ... Luôn có sẵn trà và cafe free tại công ty. Và 1 tủ đủ loại đồ uống để anh em có thể lấy lại hứng khởi làm việc bất cứ khi nào.
                - Được cung cấp máy tính làm việc, đóng BHXH sau 2 tháng thử việc và các phúc lợi khác theo quy định của Luật lao động.',
                'expire_at' => Carbon::now()->addMonth()->setDay(rand(1, 28))->format('Y/m/d'),
                'interview_round_num' => 2,
                'latitude' => 20.9978385,
                'longitude' => 105.7974438,
                'is_active' => 1,
                'created_at' => Carbon::now()->subDays(6),
                'updated_at' => Carbon::now()->subDays(6),
            ],
            [
                'id' => 12,
                'employer_id' => 14,
                'jtype_id' => 1,
                'jlevel_id' => 2,
                'jname' => 'Chuyên Viên Tuyển Dụng',
                'address' => 'Hà Nội: Tầng 14, 16, 18, 19, 20 Tòa Viwaseen, 48 Tố Hữu, Nam Từ Liêm',
                'amount' => 1,
                'min_salary' => 12,
                'max_salary' => 20,
                'yoe' => 2,
                'gender' => null,
                'description' => 'Hoàn thành mục tiêu tuyển dụng được phân công
                Nghiên cứu, đề xuất các kênh mới để mở muồn CV
                Tiến hành tìm kiếm, thu hút, tạo nguồn ứng viên đa kênh
                Tìm hiểu, phân tích yêu cầu tuyển dụng và lập kế hoạch tuyển dụng phù hợp
                Lập và phân tích báo cáo kết quả tuyển dụng cho cấp trên và các vị trí liên quan
                Chia sẻ insight, đề xuất giải pháp cải tiến quy trình tuyển dụng hiện tại
                Phối hợp, hỗ trợ các thành viên khối HR xây dựng thương hiệu tuyển dụng, văn hóa doanh nghiệp, hợp tác; quảng bá thương hiệu tuyển dụng trên các kênh online, offline.
                Thực hiện các nhiệm vụ khác theo sự phân công của cấp Quản lý.',
                'requirements' => '22-28 tuổi, có từ 2 năm kinh nghiệm trong lĩnh vực tuyển dụng.
                Có kinh nghiệm tuyển dụng các vị trí trong ngành IT là một lợi thế.
                
                Năng động, ham học hỏi, trách nhiệm, chỉnh chu, quyết liệt trong công việc
                Cởi mở, thích giao thiệp, mở rộng mối quan hệ, kết nối mọi người. Có kỹ năng giao tiếp và xử lý tình huống tốt
                Có kỹ năng quản lý thời gian, sắp xếp công việc
                Có khả sử dụng tiếng Anh đọc hiểu trong công việc (tương đương TOEIC 650, IELTS 6.0)',
                'benefits' => 'Lương 12-17M GROSS + thưởng KPI tuyển dụng hàng quý, đánh giá tăng lương 2 lần/năm
                Được cung cấp các nguồn lực cho tuyển dụng: hệ thống kênh social công ty, chi phí đăng tuyển, chi phí tổ chức sự kiện, chi phí làm partnership. chính sách thưởng giới thiệu nội bộ,... Hiring Manager hỗ trợ linh hoạt.
                Được tham gia các hoạt động theo công việc thực tế/nhu cầu cá nhân:
                Hoạt động hợp tác, tạo nguồn với các trường đại học hàng đầu như FTU, HUST, PTIT, UET, FPT, HaUI,..
                Build up ATS (phần mềm tuyển dụng nội bộ)
                Vận hành chiến dịch tuyển dụng đặc biệt do BSS thiết kế riêng
                Phối hợp với IC và C&B xây dựng Employer Branding & tăng Employee Engagement
                Văn hóa team trẻ trung support, nói “KHÔNG” với cạnh tranh nội bộ team và drama/ toxic
                Khuyến khích việc phát triển kĩ năng chuyên môn, sharing kiến thức nội bộ. Hỗ trợ chi phí học các khóa học hoặc chứng chỉ nghiệp vụ
                Văn phòng tầng 14, 16, 18, 19, 20, cơ sở vật chất tiện nghi: máy massage, PS5, máy phà cafe, thư viện,...
                Thời gian làm việc: từ 8h30 - 18h, thứ 2 đến thứ 6 hàng tuần.
                Nghỉ phép 13,5 ngày/năm, lương tháng 13, thưởng thâm niên, BHXH, khám sức khỏe hàng năm và phúc lợi khác đầy đủ theo quy định của luật Lao động',
                'expire_at' => Carbon::now()->addMonth()->setDay(rand(1, 28))->format('Y/m/d'),
                'interview_round_num' => 2,
                'latitude' => 20.9978385,
                'longitude' => 105.7974438,
                'is_active' => 1,
                'created_at' => Carbon::now()->subDays(5),
                'updated_at' => Carbon::now()->subDays(5),
            ],
            [
                'id' => 13,
                'employer_id' => 15,
                'jtype_id' => 3,
                'jlevel_id' => 1,
                'jname' => 'Intern PHP Dev',
                'address' => 'Hà Nội: Tòa nhà Sông Đà, số 18 ngõ 165 đường Cầu Giấy, Cầu Giấy',
                'amount' => 3,
                'min_salary' => null,
                'max_salary' => 15,
                'yoe' => null,
                'gender' => null,
                'description' => '- Hỗ trợ phát triển các ứng dụng back-end website;
                - Đảm bảo tối ưu hóa đa nền tảng cho điện thoại di động;
                - Cùng team đảm bảo khả năng đáp ứng của các ứng dụng;
                - Làm việc cùng với các nhà thiết kế đồ họa cho các tính năng thiết kế web;
                - Hỗ trợ thiết kế và phát triển API;
                - Theo kịp sự phát triển của các ứng dụng web và ngôn ngữ lập trình.
                - Làm các công việc liên quan khác',
                'requirements' => '- Đang học hoặc đã tốt nghiệp cao đẳng/ đại học chuyên ngành Công nghệ thông tin hoặc
                hoàn thành các khóa học lập trình tương tự
                - Có kinh nghiệm với PHP và một framework PHP (ưu tiên Laravel) là một lợi thế
                - Kỹ năng giao tiếp tiếng Anh tốt
                - Có kinh nghiệm hoặc kiến thức về 1 trong: VueJs, React Js, Angular Js là một lợi thế',
                'benefits' => '- Trợ cấp 500.000 VNĐ/tháng
                - Không chấm công, thời gian làm việc linh động, 20% thời gian làm việc từ xa (nghỉ t7, chủ nhật)
                - 2 -3 tháng thử việc, cơ cơ hội lên nhân viên chính thức
                - Review lương hàng năm
                - Teambuilding hàng quý                
                - Văn hóa trẻ, sôi động',
                'expire_at' => Carbon::now()->addMonth()->setDay(rand(1, 28))->format('Y/m/d'),
                'interview_round_num' => 2,                
                'latitude' => 21.031497, 
                'longitude' => 105.796483,
                'is_active' => 1,
                'created_at' => Carbon::now()->subDays(2),
                'updated_at' => Carbon::now()->subDays(2),
            ],
            [
                'id' => 14,
                'employer_id' => 15,
                'jtype_id' => 3,
                'jlevel_id' => 1,
                'jname' => 'Middle Fullstack Developer',
                'address' => 'Hà Nội: Tòa nhà Sông Đà, số 18 ngõ 165 đường Cầu Giấy, Cầu Giấy',
                'amount' => 3,
                'min_salary' => null,
                'max_salary' => 20,
                'yoe' => 2,
                'gender' => null,
                'description' => '- Phát triển các ứng dụng website;
                - Tạo máy chủ và cơ sở dữ liệu cho chức năng;
                - Đảm bảo tối ưu hóa đa nền tảng cho điện thoại di động;
                - Đảm bảo khả năng đáp ứng của các ứng dụng;
                - Làm việc cùng với các nhà thiết kế đồ họa cho các tính năng thiết kế web; - Nhìn thấu một dự án từ lúc hình thành đến khi hoàn thành sản phẩm;
                - Thiết kế và phát triển API;
                - Đáp ứng cả nhu cầu kỹ thuật và người tiêu dùng;
                - Theo kịp sự phát triển của các ứng dụng web và ngôn ngữ lập trình.',
                'requirements' => '-Có kinh nghiệm 2-3 năm tại vị trí tương đương
                - Tốt nghiệp cao đẳng/ đại học chuyên ngành Công nghệ thông tin hoặc hoàn thành các khóa học lập trình tương tự
                - Có kinh nghiệm với Laravel, React/Next JS
                - Có kinh nghiệm với Symfony, CakePHP, Vue/Angular JS là điểm cộng                
                - Có kinh nghiệm hoặc kiến thức về Docker, CICD, Microservice là điểm cộng                
                - Kỹ năng giao tiếp tiếng Anh tốt',
                'benefits' => '- Thu nhập tương ứng với khả năng, lên tới 20 triệu/tháng
                - 14 tháng lương/năm
                - Thời gian làm việc linh động, 20% thời gian làm việc từ xa (nghỉ t7, chủ nhật) - 2 tháng thử việc
                - Review lương hàng năm
                - Bảo hiểm bắt buộc và nghỉ phép theo Luật lao động hiện hành
                - Khám sức khỏe định kỳ hàng năm
                - Teambuilding hàng quý',
                'expire_at' => Carbon::now()->addMonth()->setDay(rand(1, 28))->format('Y/m/d'),
                'interview_round_num' => 3,
                'latitude' => 21.031497, 
                'longitude' => 105.796483,
                'is_active' => 1,
                'created_at' => Carbon::now()->subDays(2),
                'updated_at' => Carbon::now()->subDays(2),
            ],
            [
                'id' => 15,
                'employer_id' => 15,
                'jtype_id' => 1,
                'jlevel_id' => 2,
                'jname' => 'Junior Recruiter',
                'address' => 'Hà Nội: Tòa nhà Sông Đà, số 18 ngõ 165 đường Cầu Giấy, Cầu Giấy',
                'amount' => 2,
                'min_salary' => null,
                'max_salary' => 10,
                'yoe' => 0,
                'gender' => null,
                'description' => 'Hỗ trợ lập kế hoạch tuyển dụng căn cứ vào các đề xuất thực tế từ các phòng ban, đề xuất phương pháp tuyển dụng, chi phí tuyển dụng,...
                Tiến hành tìm kiếm, đề xuất, đăng bài trên các kênh tuyển dụng
                - Thực hiện việc sàng lọc hồ sơ ứng tuyển, liên hệ với các ứng viên và sắp xếp lịch phỏng vấn            
                Hỗ trợ tổ chức phỏng vấn, kiểm tra, đánh giá năng lực của các ứng viên một cách chi tiết, kết hợp với các phòng ban chuyên môn để ra quyết định phù hợp
                Theo dõi, tương tác với ứng viên xuyên suốt trong qua trình tuyển dụng, thông báo kết quả phỏng vấn cho các ứng viên trúng tuyển và gửi thư cảm ơn đối với những ứng viên không đạt.
                Hỗ trợ tiếp nhận, hướng dẫn và phân công công việc cho nhân viên trong ngày đầu làm việc',
                'requirements' => 'Có ít nhất 6 tháng kinh nghiệm tại vị trí tương đương, có nền tảng tuyển dụng các vị trí IT là một lợi thế.
                Kỹ năng giao tiếp tốt, Tiếng Anh tốt là một lợi thế
                Kỹ năng giải quyết vấn đề, sắp xếp công việc, nhanh nhẹn, sẵn sàng học hỏi kiến thức mới
                Có kỹ năng tương tác, đàm phán tốt là một lợi thế
                Có tinh thần trách nhiệm, sẵn sàng tiếp nhận các công việc có độ khó cao
                Sử dụng tốt các phần mềm tin học cơ bản như Word, Excel,...',
                'benefits' => 'Lương cứng : lên đến 10 triệu VNĐ/tháng
                Tháng lương 13 + Thưởng kinh doanh cuối năm
                Không chấm công
                Làm việc Thứ Hai đến Thứ Sáu, nghỉ Thứ Bảy, Chủ nhật
                Thời gian làm việc linh hoạt, được làm việc từ xa 20% thời gian
                Thời gian thử việc 2 tháng
                Xét tăng lương 1 năm/lần
                BHXH, ngày nghỉ lễ tết theo quy định nhà nước, khám sức khỏe định kỳ hàng năm
                Teambuilding dã ngoại 1 quý/lần',
                'expire_at' => Carbon::now()->addMonth()->setDay(rand(1, 28))->format('Y/m/d'),
                'interview_round_num' => 3,
                'latitude' => 21.031497, 
                'longitude' => 105.796483,
                'is_active' => 1,
                'created_at' => Carbon::now()->subDays(6),
                'updated_at' => Carbon::now()->subDays(6),
            ],
            [
                'id' => 16,
                'employer_id' => 16,
                'jtype_id' => 1,
                'jlevel_id' => 1,
                'jname' => 'Thực Tập Sinh PHP',
                'address' => 'Hà Nội: 56 Tố Hữu, Nam Từ Liêm',
                'amount' => 1,
                'min_salary' => null,
                'max_salary' => null,
                'yoe' => null,
                'gender' => null,
                'description' => 'Được đào tạo định hướng về Front-end và Back-end
                Tham gia các dự án nước ngoài theo hình thức training on-job dưới sự hướng dẫn trực tiếp của Leader
                Đọc hiểu tài liệu kỹ thuật, tìm hiểu và phân tích yêu cầu sản phẩm, thiết kế tính năng, nghiên cứu các công nghệ được phân công
                Phối hợp với các thành viên trong team để thiết kế, triển khai các tính năng mới theo yêu cầu dự án
                Thực hiên các công việc khác theo sự phân công của quản lý
                Chi tiết sẽ trao đổi cụ thể khi phỏng vấn',
                'requirements' => 'Nắm vững các kiến thức về PHP
                Có kiến thức tốt về MySQL, viết và tối ưa hóa truy vấn SQL
                Kiến thức tốt về lập trình hướng đối tượng.
                Có kiến thức về lập trình web: HTML, CSS, Javascript, JQuery, ...
                Có kinh nghiệm làm việc với một trong các Framework: Laravel, CakePHP là lợi thế
                Kỹ năng làm việc nhóm và trao đổi thông tin tốt
                Chăm chỉ, có tinh thần học hỏi, chủ động trong công việc
                Đam mê lập trình, tư duy logic, sẵn sàng tìm hiểu và học hỏi cái mới
                Nhiệt tình và có trách nhiệm trong công việc
                Yêu cầu làm được fulltime từ giờ đến khi tốt nghiệp Đại học
                Có tiếng anh giao tiếp trong công việc là lợi thế',
                'benefits' => 'Có hỗ trợ lương hàng tháng từ 3,000,000 – 5,000,000 tùy theo năng lực. Lộ trình thực tập từ 2-3 tháng lên fresher 9,000,000 - 11,000,000 tùy theo năng lực
                Có cơ hội trở thành nhân viên chính thức tại Adamo với mức lương hấp dẫn
                Lương T13, T14 và review lương 2 lần 1 năm khi lên chính thức
                Thưởng các dịp lễ Tết, thưởng quý, thưởng thâm niên, thưởng lợi nhuận.
                Quà tặng dịp sinh nhật cá nhân
                Cơ hội được học hỏi, làm việc với công nghệ mới
                Được làm việc trong một môi trường chuyên nghiệp với các đối tác nước ngoài
                Du lịch, teambuilding 2-3 lần/năm
                Hỗ trợ tham gia các khóa đào tạo nâng cao kiến thức và kỹ năng',
                'expire_at' => Carbon::now()->addMonth()->setDay(rand(1, 28))->format('Y/m/d'),
                'interview_round_num' => 3,
                'latitude' => 20.997785, 
                'longitude' => 105.793742,
                'is_active' => 1,
                'created_at' => Carbon::now()->subDays(6),
                'updated_at' => Carbon::now()->subDays(6),
            ],
            [
                'id' => 17,
                'employer_id' => 16,
                'jtype_id' => 1,
                'jlevel_id' => 2,
                'jname' => 'ReactJS Developer',
                'address' => 'Hà Nội: 56 Tố Hữu, Nam Từ Liêm',
                'amount' => 1,
                'min_salary' => 12,
                'max_salary' => 25,
                'yoe' => null,
                'gender' => null,
                'description' => 'Xây dựng và phát triển các dự án ReactJS theo yêu cầu khách hàng
                Tham gia các công đoạn tìm hiểu yêu cầu, phân tích, thiết kế, nghiên cứu công nghệ khi được phân công
                Tham gia quản lý nhóm nếu có khả năng phù hợp
                Chi tiết sẽ trao đổi cụ thể khi phỏng vấn',
                'requirements' => 'Có từ 6 tháng kinh nghiệm lập trình ReactJS
                Hiểu về lập trình OOP
                Thành thạo về: HTML, CSS, JS
                Biết về UML(Activity diagram, Class diagram, Sequence diagram,...)
                Có kinh nghiệm làm việc với RESTful API hoặc GraphQL
                Có kinh nghiệm làm việc với Git, SVN
                Có khả năng giao tiếp tiếng Anh khá',
                'benefits' => 'Mức lương hấp dẫn: 12,000,000 – 25,000,000 đ/tháng.
                Thử việc 90% lương.
                Thời gian làm việc: Thứ 2 – thứ 6.
                Tháng lương thứ 13, 14
                Review lương 2 lần 1 năm
                Thưởng các dịp lễ Tết, thưởng quý, thưởng thâm niên, thưởng lợi nhuận.
                Quà tặng dịp sinh nhật cá nhân
                Cơ hội được học hỏi, làm việc với công nghệ mới
                Được làm việc trong một môi trường chuyên nghiệp với các đối tác nước ngoài
                Du lịch, teambuilding 2-3 lần/năm
                Khám sức khỏe định kỳ cho nhân viên
                Hỗ trợ tham gia các khóa đào tạo nâng cao kiến thức và kỹ năng',
                'expire_at' => Carbon::now()->addMonth()->setDay(rand(1, 28))->format('Y/m/d'),
                'interview_round_num' => 3,
                'latitude' => 20.997785, 
                'longitude' => 105.793742,
                'is_active' => 1,
                'created_at' => Carbon::now()->subDays(2),
                'updated_at' => Carbon::now()->subDays(2),
            ],
            [
                'id' => 18,
                'employer_id' => 16,
                'jtype_id' => 1,
                'jlevel_id' => 2,
                'jname' => 'Sales IT',
                'address' => 'Hà Nội: 56 Tố Hữu, Nam Từ Liêm',
                'amount' => 4,
                'min_salary' => 10,
                'max_salary' => 20,
                'yoe' => null,
                'gender' => null,
                'description' => 'Conduct market research to identify target customer segments.
                Generate new leads by identifying and connecting with prospective customers.
                Conduct online or onsite product demos for prospective customers.
                Exceed monthly and quarterly sales targets.
                Work with support teams to assist with customer onboarding.
                Identify and manage channel partners and referrals to accelerate sales.
                Engage with existing customers for contract renewals.
                Regular update of CRM system',
                'requirements' => 'At least 6 months experience in Sale
                Education: Bachelor’s degree
                Excellent fluency in English communication
                Self-independence in terms of prioritizing, time management and organizational skills
                Are willing to learn quickly and flexible in adapting to feedback
                Impeccable attention to detail and high internal standard of work',
                'benefits' => '13th month salary bonus
                Review work performance and raise salaries 2 times a year
                Training opportunities, overseas and domestic business trip
                Company trip, teambuilding activities (2 times a year)
                Social and Health insurance under Vietnamese Labor Law, annual health check
                Young & dynamic working environment',
                'expire_at' => Carbon::now()->addMonth()->setDay(rand(1, 28))->format('Y/m/d'),
                'interview_round_num' => 1,
                'latitude' => 20.997785, 
                'longitude' => 105.793742,
                'is_active' => 1,
                'created_at' => Carbon::now()->subDays(2),
                'updated_at' => Carbon::now()->subDays(2),
            ],
            [
                'id' => 19,
                'employer_id' => 17,
                'jtype_id' => 1,
                'jlevel_id' => 1,
                'jname' => 'Thực Tập Sinh Back-End PHP',
                'address' => 'Hà Nội: Chung cư Học Viện Quốc Phòng, P Xuân La, Q Tây Hồ, Tây Hồ',
                'amount' => 2,
                'min_salary' => 3,
                'max_salary' => 7,
                'yoe' => 0,
                'gender' => null,
                'description' => 'Tham gia các dự án website trường học, y tế, hành chính công, nhà nước... bằng ngôn ngữ PHP
                Được hướng dẫn cơ bản và chuyên sâu về Back-end trong thời gian đầu, cần thể hiện khả năng làm việc độc lập
                Làm quen với quy trình triển khai dự án, các công cụ quản lý dự án chuyên nghiệp
                Cơ hội tham gia các dự án Viettel và nhà nước theo hình thức on-job training.
                Nhận sự hỗ trợ từ các Senior Developer dày dặn kinh nghiệm trong suốt quá trình training dưới dạng hình thức bài tập thực tế.
                Tư vấn, định hướng công việc phù hợp với chuyên môn và sở thích.',
                'requirements' => 'Tốt nghiệp chuyên ngành Công nghệ thông tin của các trường cao đẳng, đại học có khả năng làm fulltime
                Có trách nhiệm với công việc được giao.                
                Biết làm việc cá nhân và đội nhóm.                
                Có kiến thức về PHP, JavaScript, HTML5, CSS3, Jquery                
                Yêu cầu ứng viên trình bày rõ các sản phẩm / bài tập lớn đã từng làm',
                'benefits' => 'Có cơ hội học hỏi, trở thành nhân viên chính thức của công ty sau 1 – 2 tháng đào tạo với nhiều chế độ đãi ngộ hấp dẫn
                Học hỏi kinh nghiệm thực tế, cơ hội cọ sát cao, cầm tay chỉ việc
                Free toàn bộ dịch vụ văn phòng, đồ ăn vặt
                Hỗ trợ toàn bộ thủ tục giấy tờ, con dấu xác nhận thực tập của sinh viên
                Được tham gia, trải nghiệm các hoạt đông vui chơi tại công ty: Café , trà , bi lắc...',
                'expire_at' => Carbon::now()->addMonth()->setDay(rand(1, 28))->format('Y/m/d'),
                'interview_round_num' => 3,
                'latitude' => 21.0500198, 
                'longitude' => 105.7973772,
                'is_active' => 1,
                'created_at' => Carbon::now()->subDays(4),
                'updated_at' => Carbon::now()->subDays(4),
            ],
            [
                'id' => 20,
                'employer_id' => 17,
                'jtype_id' => 1,
                'jlevel_id' => 1,
                'jname' => 'Thực Tập Sinh Ba',
                'address' => 'Hà Nội: Xuân La, Tây Hồ',
                'amount' => 5,
                'min_salary' => 4,
                'max_salary' => 7,
                'yoe' => null,
                'gender' => null,
                'description' => '- Phân tích thiết kế sản phẩm mới
                - Cải tiến sản phẩm đã có
                - Hỗ trợ thủ tục bàn giao, nghiệm thu, thanh toán',
                'requirements' => 'Có kiến thức về UML, biết vẽ sơ đồ usecase, sơ đồ hoạt động
                Biết cách vẽ mockup (vẽ ra giấy hoặc bằng công cụ gì cũng được)
                Có kiến thức cơ bản về thiết kế CSDL
                Biết cách sử dụng 1 số phần mềm quản lý bất kỳ
                Hiểu về các quy tắc UI - UX cơ bản (sẽ được training thêm)
                Có khái niệm về thiết kế sản phẩm cho App, Web
                Có khả năng giao tiếp tốt với đối tác
                Có kinh nghiệm làm việc nhóm',
                'benefits' => 'Thu nhập theo thỏa thuận (4- 7 triệu); 3 tháng xét tăng lương 1 lần.
                Sau 2 tháng thử việc sẽ có đánh giá kết quả của leader và được xem xét nâng lương, ký hợp đồng lao động chính thức, đóng bảo hiểm.
                Một năm được nghỉ 12 ngày phép
                Môi trường làm việc năng động, sáng tạo với đội ngũ CBNV đầy nhiệt huyết. Chế độ du lịch hàng năm và tham gia các hoạt động teambuilding, sự kiện công ty, tiệc mặn ngọt,....
                Thời gian làm việc: T2-T7 (T7 nghỉ cách tuần). Buổi sáng: 8h-12h, buổi chiều: 13h30-17h30',
                'expire_at' => Carbon::now()->addMonth()->setDay(rand(1, 28))->format('Y/m/d'),
                'interview_round_num' => 3,
                'latitude' => 21.0500198, 
                'longitude' => 105.7973772,
                'is_active' => 1,
                'created_at' => Carbon::now()->subDays(6),
                'updated_at' => Carbon::now()->subDays(6),
            ],
            [
                'id' => 21,
                'employer_id' => 17,
                'jtype_id' => 1,
                'jlevel_id' => 2,
                'jname' => 'Lập Trình Viên Back-End PHP',
                'address' => 'Hà Nội: Xuân La, Tây Hồ',
                'amount' => 2,
                'min_salary' => 7,
                'max_salary' => 15,
                'yoe' => 1,
                'gender' => null,
                'description' => 'Lập trình web (backend) bằng PHP, trên framework do công ty tự phát triển hơn 13 năm, gồm các nhóm ứng dụng chính: Website doanh nghiệp, trường học, Portal bộ ban ngành, LMS, HRM, TMĐT.
                Quản lý source code bằng SVN.
                Quản lý công việc bằng công cụ quản trị dự án nội bộ.
                Làm việc với bộ phận kiểm thử và phát triển sản phẩm để tối ưu, sửa lỗi, phát triển chức năng mới.
                Code theo các tiêu chuẩn ATTT, hiệu năng của tập đoàn Viettel.',
                'requirements' => 'Tốt nghiệp chuyên ngành Công nghệ thông tin, Khoa học máy tính, Toán tin… hoặc chuyên ngành khác có liên quan
                Có kiến thức cơ bản về lập trình WEB (PHP / HTML / CSS / JAVASCRIPT).
                Hiểu biết về MVC Framework
                Có kiến thức về các hệ quản trị cơ sở dữ liệu, nhất là NoSQL (MongoDB), Solr, nếu chưa biết sẽ được đào tạo.
                Khả năng tư duy logic tốt
                Tinh thần học hỏi và nâng cao trình độ bản thân, tinh thần trách nhiệm trong công việc
                Đảm bảo nghiêm túc giờ giấc theo giờ hành chính.',
                'benefits' => '- Thu nhập: 7-15M tùy năng lực + thưởng theo hiệu quả công việc
                - Thời gian làm việc: thứ 2 đến thứ 7 (Thứ 7 tuần làm tuần nghỉ)
                Buổi sáng: 8h-12h, buổi chiều: 13h30-17h30. Nghỉ trưa 1h30 phút
                - Nghỉ phép 12 ngày/ năm. Lương tháng 13. Từ 2-6 tháng review lương/lần
                - Được tham gia BHYT, BHXH và các chế độ khác theo quy định của Công ty.
                - Du lịch hàng năm với Công ty, tham gia các hoạt động văn hóa chung của Công ty (Ngày lễ, sinh nhật hàng tháng, tiệc mặn ngọt,...)
                - Làm việc trong môi trường chuyên nghiệp, năng động, sáng tạo, có nhiều cơ hội phát triển bản thân, thăng tiến trong công việc',
                'expire_at' => Carbon::now()->addMonth()->setDay(rand(1, 28))->format('Y/m/d'),
                'interview_round_num' => 3,
                'latitude' => 21.0500198, 
                'longitude' => 105.7973772,
                'is_active' => 1,
                'created_at' => Carbon::now()->subDays(2),
                'updated_at' => Carbon::now()->subDays(2),
            ],
            [
                'id' => 22,
                'employer_id' => 18,
                'jtype_id' => 1,
                'jlevel_id' => 2,
                'jname' => 'Lập Trình Viên PHP',
                'address' => 'Hồ Chí Minh: Building 59 Chế Lan Viên, P . Tây Thạnh, Quận Tân Phú, Tp.HCM, Tân Phú',
                'amount' => 3,
                'min_salary' => null,
                'max_salary' => null,
                'yoe' => 1,
                'gender' => null,
                'description' => 'Xây dựng, bảo trì, nâng cấp các website trong hệ thống của công ty bằng ngôn ngữ PHP & cở sở dữ liệu Mysql, MongoDB.
                Lập trình và phát triển ứng dụng web, web service, restful api trên nền tảng PHP.
                Tham gia phân tích và phát triển hệ thống trên nền ứng dụng web; phần mềm
                Phát triển hoặc làm mới các ứng dụng web với ngôn ngữ chính là PHP, MySQL, MongoDB',
                'requirements' => 'Thành thạo PHP;
                Thành thạo MySQL;
                Thành thạo Laravel 9 trở lên;
                Có kinh nghiệm phát triển các sản phẩm có sử dụng Laravel 01 năm trở lên;
                Thành thạo các kiến thức/kỹ thuật trong Laravel: command, cache, localization, migrations, seeding;
                Hiểu biết các kiến thức/kỹ thuật trong Laravel: broadcasting, events, notifications, queues, task scheduling;
                Hiểu biết về API RESTful, GraphQL;
                Có kinh nghiệm phát triển các sản phẩm có sử dụng API RESTfull ít nhất 1 năm;
                Biết sử dụng Git và Git flow;
                Có kinh nghiệm sử dụng Redis;
                Có kinh nghiệm sử dụng các công cụ quản lý dự án, tài liệu: Jira, Confluence.
                Linh hoạt trong công việc và xử lý tình huống;
                Ưu tiên ứng viên có định hướng phát triển theo hướng Fullstack.',
                'benefits' => '- Mức lương phù hợp năng lực
                - Tham gia BHXH, BHYT và chế độ phúc lợi khác theo quy định của luật lao động và quy chế Công ty.                
                - Môi trường TRẺ chuyên nghiệp, năng động, sáng tạo, phát triển, có nhiều cơ hội thăng tiến                
                - Được đào tạo nâng cao năng lực, thoải mái đề xuất ý tưởng để nâng cao hiệu suất làm việc.                
                - Được hưởng đầy đủ các chính sách về lao động theo luật lao động về Lương, thưởng, nghỉ Lễ, Tết                
                - Du Lịch                
                - Đồng phục                
                - Tăng lương',
                'expire_at' => Carbon::now()->addMonth()->setDay(rand(1, 28))->format('Y/m/d'),
                'interview_round_num' => 3,
                'latitude' => 10.811372, 
                'longitude' => 106.628735,
                'is_active' => 1,
                'created_at' => Carbon::now()->subDays(2),
                'updated_at' => Carbon::now()->subDays(2),
            ],
            [
                'id' => 23,
                'employer_id' => 18,
                'jtype_id' => 1,
                'jlevel_id' => 2,
                'jname' => 'Nhân Viên Kinh Doanh Phần Mềm',
                'address' => 'Hồ Chí Minh: Building 59 Chế Lan Viên, P . Tây Thạnh, Tân Phú',
                'amount' => 5,
                'min_salary' => 15,
                'max_salary' => 20,
                'yoe' => 0,
                'gender' => null,
                'description' => '- Tìm kiếm khách hàng
                - Chăm sóc và duy trì khách hàng cũ, giải đáp những thắc mắc của khách hàng qua email, điện thoại,...                
                - Tư vấn, giải đáp cho khách hàng về các lĩnh vực, dịch vụ do công ty đang cung cấp: App, thiết kế website, phần mềm, quảng cáo google, dịch vụ seo, hosting, tên miền,...                
                - Thương thảo, đàm phán trực tiếp và ký hợp đồng với khách hàng, chăm sóc khách hàng sau bán hàng.                
                - Sẽ được tham gia các buổi tập huấn khi nhận việc                
                - Sẽ trao đổi cụ thể hơn trong quá trình phỏng vấn.',
                'requirements' => '- Giao tiếp tốt
                - Giọng chuẩn dể nghe, không sử dụng tiếng địa phương.                
                - Trình độ: Cao đẳng, chuyên ngành: ưu tiên Kinh tế, Marketing, CNTT                
                - Thành thạo Word, Excel, Internet                
                - Lập kế hoạch hàng tuần, tháng, quý.                
                - Có tính sáng tạo trong công việc, có những ý tưởng mới về loại hình kinh doanh, quản lý.                
                - Hiểu rõ các chỉ thị liên quan đến công việc và các kế hoạch làm việc của nhóm hoặc bộ phận                
                - Có thể nắm bắt, cập nhật thông tin liên quan đến công việc nhanh và hiệu quả                
                - Khả năng giải quyết công việc nhanh chóng chính xác hoặc trong thời hạn được quy định.',
                'benefits' => '- Thu nhập hấp dẫn dựa trên năng lực: Bao gồm (Lương cứng + phụ cấp + % hoa hồng + thưởng). => Tổng thu nhập từ 15 -20 triệu/ tháng
                - Môi trường làm việc toàn 9x năng động, trẻ trung, khuyến khích sáng tạo, đổi mới và tạo không gian phát triển cho mỗi cá nhân.                
                - 6 tháng/lần xét tăng lương, hoăc ̣tạo cơ hội phát triển lên vị trí quản lý.                
                - Các chế độ BHXH, BHYT, nghỉ lễ, nghỉ phép, thưởng lễ tết, ...theo quy định của Công ty                
                - Hoạt động teambuilding, du lịch hàng năm và các chương trình văn hóa của Công ty như: Year End Party, Du lịch, ..., Lương tháng 13, ...',
                'expire_at' => Carbon::now()->addMonth()->setDay(rand(1, 28))->format('Y/m/d'),
                'interview_round_num' => 1,
                'latitude' => 10.811372, 
                'longitude' => 106.628735,
                'is_active' => 1,
                'created_at' => Carbon::now()->subDays(6),
                'updated_at' => Carbon::now()->subDays(6),
            ],
            [
                'id' => 24,
                'employer_id' => 19,
                'jtype_id' => 1,
                'jlevel_id' => 2,
                'jname' => 'PHP Developer',
                'address' => 'Hồ Chí Minh: 245B Trần Quang Khải, Phường Tân Định, Quận 1',
                'amount' => 1,
                'min_salary' => 12,
                'max_salary' => 15,
                'yoe' => 4,
                'gender' => null,
                'description' => 'Quản trị vận hành các website thương mại của công ty:
                Bảo trì: Kiểm tra các lỗi kỹ thuật, cập nhật các phần mềm và bảo mật để đảm bảo trang web luôn hoạt động ổn định, an toàn và nhanh chóng.
                Phân tích dữ liệu: Sử dụng các công cụ phân tích để giám sát và phân tích các hoạt động trên trang web. Phân tích các số liệu như lưu lượng truy cập, thời gian ở lại trên trang web, số lần nhấp chuột và các chỉ số khác để đo lường hiệu quả của trang web và đưa ra các cải tiến.
                Tối ưu hóa công cụ tìm kiếm: Thực hiện các chiến dịch tối ưu hóa công cụ tìm kiếm (SEO) để tăng cường khả năng tìm thấy trang web trên các công cụ tìm kiếm.
                Phát triển: Phát triển các tính năng mới và cải thiện các chức năng của trang web.
                Quản lý lưu trữ/sao lưu: Theo dõi tình trạng của máy chủ, bộ nhớ đệm, tài khoản lưu trữ và các vấn đề liên quan đến việc lưu trữ/backup trang web.
                Quản lý đối tác/khách hàng: Hợp tác với các nhà cung cấp dịch vụ, đối tác quảng cáo và các bên liên quan khác để đảm bảo trang web luôn hoạt động tốt và đáp ứng được nhu cầu của người dùng.
                Phối hợp với các phòng bạn/bộ phận khác trong công ty để thực hiện các mục tiêu kinh doanh liên quan đến các trang web của công ty.',
                'requirements' => 'Nắm vững kiến thức: Ngôn ngữ lập trình web: NextJS, ReactJS, Laravel, PHP, Redis. Các hệ quản trị cơ sở dữ liệu (Database): MySQL, Xampp, Apache. Kiến thức về hệ thống máy chủ (Server): cài đặt, cấu hình và bảo mật, Deploy website thương mại Kiến thức về SEO (Search Engine Optimization) và quảng cáo trên mạng (Online Advertising) Kiến thức về các công cụ phân tích web (Web Analytics): Google Analytics, Piwik, ... Kiến thức về các tiêu chuẩn web: W3C, Accessibility, ... Kiến thức về an ninh và bảo mật web: cách bảo vệ khỏi các tấn công web, mã độc, ... Kiến thức về các nền tảng và công nghệ liên quan đến web: Web Services, APIs, ... Có kiến thức về các cổng thanh toán online, merchant... Kiến thức về quản lý dự án và quản lý tài nguyên, kỹ năng giao tiếp và tương tác với đội ngũ phát triển web khác. Ứng viên có kinh nghiệm từ 4-5 năm trở lên.',
                'benefits' => 'Chương trình hội nhập, đào tạo và phát triển
                Cơm trưa, đồng phục, điện thoại...
                Phòng tập GYM miễn phí
                Du lịch hàng năm
                BHXH, BHYT, BHTN, BH 24/24, Bảo hiểm cao cấp
                Lương thưởng tháng 13
                Thưởng thâm niên 3 năm, 5 năm, 10 năm.
                Thưởng đóng góp sáng kiến, ý tưởng mới trong công việc
                Chính sách phúc lợi cưới hỏi, ốm đau, thai sản
                Quà trong các dịp Tết, Trung thu, sinh nhật',
                'expire_at' => Carbon::now()->addMonth()->setDay(rand(1, 28))->format('Y/m/d'),
                'interview_round_num' => 3,
                'latitude' => 10.791298, 
                'longitude' => 106.688542,
                'is_active' => 1,
                'created_at' => Carbon::now()->subDays(4),
                'updated_at' => Carbon::now()->subDays(4),
            ],
            [
                'id' => 25,
                'employer_id' => 19,
                'jtype_id' => 1,
                'jlevel_id' => 3,
                'jname' => 'Lead PHP Developer',
                'address' => 'Hồ Chí Minh: 245B Trần Quang Khải, Phường Tân Định, Quận 1',
                'amount' => 1,
                'min_salary' => 15,
                'max_salary' => 20,
                'yoe' => 4,
                'gender' => 0,
                'description' => 'Quản trị vận hành các website thương mại của công ty:
                Bảo trì: Kiểm tra các lỗi kỹ thuật, cập nhật các phần mềm và bảo mật để đảm bảo trang web luôn hoạt động ổn định, an toàn và nhanh chóng.
                Phân tích dữ liệu: Sử dụng các công cụ phân tích để giám sát và phân tích các hoạt động trên trang web. Phân tích các số liệu như lưu lượng truy cập, thời gian ở lại trên trang web, số lần nhấp chuột và các chỉ số khác để đo lường hiệu quả của trang web và đưa ra các cải tiến.
                Tối ưu hóa công cụ tìm kiếm: Thực hiện các chiến dịch tối ưu hóa công cụ tìm kiếm (SEO) để tăng cường khả năng tìm thấy trang web trên các công cụ tìm kiếm.
                Phát triển: Phát triển các tính năng mới và cải thiện các chức năng của trang web.
                Quản lý lưu trữ/sao lưu: Theo dõi tình trạng của máy chủ, bộ nhớ đệm, tài khoản lưu trữ và các vấn đề liên quan đến việc lưu trữ/backup trang web.
                Quản lý đối tác/khách hàng: Hợp tác với các nhà cung cấp dịch vụ, đối tác quảng cáo và các bên liên quan khác để đảm bảo trang web luôn hoạt động tốt và đáp ứng được nhu cầu của người dùng.
                Phối hợp với các phòng bạn/bộ phận khác trong công ty để thực hiện các mục tiêu kinh doanh liên quan đến các trang web của công ty.
                Quản lý nhân viên                
                Hỗ trợ giải quyết thắc mắc của Nhân viên
                QC web nhân viên đã làm
                Giải quyết xung đột đội nhóm
                Chịu trách nhiệm deadline, báo cáo ...',
                'requirements' => 'Kinh nghiệm trên 3 năm làm PHP, Laravel và trên 1 năm quản lý nhóm
                Kỹ năng lập trình tốt với : NextJS, ReactJS, Laravel, PHP, Redis...
                Thành thạo với MySQL, Xampp, Apache, Server, SEO, Online Advertising, Google Analytics, Piwik, W3C, Accessibility, Web Services, APIs, bảo mật và thanh toán online.
                Kỹ năng giao tiếp tốt, quản lý tốt',
                'benefits' => 'Chương trình hội nhập, đào tạo và phát triển
                Cơm trưa, đồng phục, điện thoại...
                Phòng tập GYM miễn phí
                Du lịch hàng năm
                BHXH, BHYT, BHTN, BH 24/24, Bảo hiểm cao cấp
                Lương thưởng tháng 13
                Thưởng thâm niên 3 năm, 5 năm, 10 năm.
                Thưởng đóng góp sáng kiến, ý tưởng mới trong công việc
                Chính sách phúc lợi cưới hỏi, ốm đau, thai sản
                Quà trong các dịp Tết, Trung thu, sinh nhật',
                'expire_at' => Carbon::now()->addMonth()->setDay(rand(1, 28))->format('Y/m/d'),
                'interview_round_num' => 3,
                'latitude' => 10.791298, 
                'longitude' => 106.688542,
                'is_active' => 1,
                'created_at' => Carbon::now()->subDays(2),
                'updated_at' => Carbon::now()->subDays(2),
            ],
            [
                'id' => 26,
                'employer_id' => 19,
                'jtype_id' => 1,
                'jlevel_id' => 2,
                'jname' => 'Nhân Viên Kinh Doanh Dự Án Công Nghệ Thông Tin',
                'address' => 'Hồ Chí Minh: 245B Trần Quang Khải, Phường Tân Định, Quận 1',
                'amount' => 2,
                'min_salary' => 7,
                'max_salary' => 8,
                'yoe' => 1,
                'gender' => null,
                'description' => 'Phát triển nhóm khách hàng Doanh nghiệp/Dự án để triển khai các dự án CNTT (Server, workstation, PC, laptop, máy in, linh kiện...)
                Duy trì, quản lý khách hàng theo từng mảng thị trường được phân công
                Tìm kiếm, phát triển khách hàng mới theo định hướng của Công ty
                Tư vấn các giải pháp công nghệ và sản phẩm CNTT đáp ứng nhu cầu khách hàng và các dự án CNTT
                Tạo lập mối quan hệ với các đối tác và chăm sóc khách hàng
                Báo cáo kết quả Kinh doanh',
                'requirements' => 'Nam/Nữ tuổi từ 22 - 35 .
                Tối thiểu 02 năm kinh nghiệm kinh doanh, có kiến thức về CNTT
                Ưu tiên có kinh nghiệm kinh doanh thiết bị hoặc dịch vụ CNTT, quản lý khối khách hàng Dự án hoặc SMB
                Có kỹ năng bán hàng, chăm sóc khách hàng, đàm phán
                Khả năng giao tiếp, thuyết trình, làm việc nhóm tốt, có đam mê kinh doanh',
                'benefits' => 'Đồng phục, điện thoại, công cụ dụng cụ làm việc...
                Được đào tạo kỹ năng mềm, kiến thức chuyên môn
                Lương tháng 13, 12 ngày phép...
                Thưởng đóng góp sáng kiến, ý tưởng mới trong công việc
                Thưởng thâm niên 3 năm, 5 năm, 10 năm.
                Chính sách phúc lợi cưới hỏi, ốm đau, thai sản
                Quà trong các dịp Tết, Trung thu, sinh nhật
                Cơm canh trưa, mì gói, trứng, chà bông...
                BHXH, BHYT, BHTN, BH 24/24, Bảo hiểm cao cấp
                Tiêm ngừa Cúm.....
                Khám sức khỏe định kỳ
                Phòng tập GYM miễn phí
                Du lịch hàng năm trong/ngoài nước',
                'expire_at' => Carbon::now()->addMonth()->setDay(rand(1, 28))->format('Y/m/d'),
                'interview_round_num' => 3,
                'latitude' => 10.791298, 
                'longitude' => 106.688542,
                'is_active' => 1,
                'created_at' => Carbon::now()->subDays(2),
                'updated_at' => Carbon::now()->subDays(2),
            ],
            [
                'id' => 27,
                'employer_id' => 20,
                'jtype_id' => 1,
                'jlevel_id' => 2,
                'jname' => 'PHP Developer',
                'address' => 'Hồ Chí Minh: 176/1 Nguyễn Văn Thương, phường 25, Bình Thạnh',
                'amount' => 1,
                'min_salary' => null,
                'max_salary' => null,
                'yoe' => 2,
                'gender' => null,
                'description' => 'Participate in the development and construction of the company\'s product based on PHP, NodeJS, AWS services, Linux servers.
                Job details will be discussed further during the interview
                Other related jobs',
                'requirements' => 'At least 2 years of experience.
                Good programming skills with: PHP, OOP, PostgreSQL, REST API
                Experience with NodeJS is advanced
                Have a sense of responsibility, ability to work in a team
                Have a spirit of learning and self-improvement.',
                'benefits' => 'Working in a dynamic and professional environment with many opportunities for advancement.
                Provide complete equipment to serve the job.
                Company pays all social insurance, health insurance, unemployment insurance.
                Enjoy the welfare policies according to the company\'s regulations (Annual salary review, 13th month salary, KPI bonus, 12 days of leave, birthday celebration, lunch allowance, car parking,...)
                Regular training and professional improvement.
                Participate in cultural activities with typical colors of the company: Team building, and a series of interesting and attractive collective activities taking place monthly and quarterly at the company.
                Competitive salary.',
                'expire_at' => Carbon::now()->addMonth()->setDay(rand(1, 28))->format('Y/m/d'),
                'interview_round_num' => 3,
                'latitude' => 10.803909, 
                'longitude' => 106.720066,
                'is_active' => 1,
                'created_at' => Carbon::now()->subDays(6),
                'updated_at' => Carbon::now()->subDays(6),
            ],
            [
                'id' => 28,
                'employer_id' => 20,
                'jtype_id' => 1,
                'jlevel_id' => 2,
                'jname' => 'Reactjs Developer',
                'address' => 'Hồ Chí Minh: 176/1 Nguyễn Văn Thương, phường 25, quận Bình Thạnh, Bình Thạnh',
                'amount' => 2,
                'min_salary' => null,
                'max_salary' => null,
                'yoe' => 2,
                'gender' => null,
                'description' => 'Participating in the development and construction of the Front-end for the company\'s products on the SaaS platform.
                Other related jobs
                Job details will be discussed further during the interview',
                'requirements' => '2+ years of experience with ReactJS.
                Experience with Redux, Redux Saga, Fetch/ Axios, Webpack is an advantage
                Be responsible with your work
                Ability to support and allocate work to other team members
                Have a spirit of learning and self-improvement
                Ability to work in a team or independently',
                'benefits' => 'Working in a dynamic and professional environment with many opportunities for advancement.
                Provide complete equipment to serve the job.
                Company pays all social insurance, health insurance, unemployment insurance.
                Enjoy the welfare policies according to the company\'s regulations (Annual salary review, 13th month salary, KPI bonus, 12 days of leave, birthday celebration, lunch allowance, car parking,...)
                Regular training and professional improvement.
                Participate in cultural activities with typical colors of the company: Team building, and a series of interesting and attractive collective activities taking place monthly and quarterly at the company.
                Competitive salary.',
                'expire_at' => Carbon::now()->addMonth()->setDay(rand(1, 28))->format('Y/m/d'),
                'interview_round_num' => 3,
                'latitude' => 10.803909, 
                'longitude' => 106.720066,
                'is_active' => 1,
                'created_at' => Carbon::now()->subDays(6),
                'updated_at' => Carbon::now()->subDays(6),
            ],
            [
                'id' => 29,
                'employer_id' => 20,
                'jtype_id' => 1,
                'jlevel_id' => 2,
                'jname' => 'Html/Css Developer',
                'address' => 'Hồ Chí Minh: 176/1 Nguyễn Văn Thương, phường 25, Bình Thạnh',
                'amount' => 2,
                'min_salary' => null,
                'max_salary' => null,
                'yoe' => 2,
                'gender' => null,
                'description' => 'Slice HTML/CSS from PSD, Figma with CSS framework
                Responsive and optimize display on browsers, platforms, devices
                Support ReactJS team',
                'requirements' => 'At least 2 years of experience with HTML,CSS
                Experience with SaaS, Flex,.. is advance.
                Ability to support and allocate work to other team members
                Have a spirit of learning and self-improvement
                Ability to work in a team or independently
                Be responsible with your work',
                'benefits' => 'Working in a dynamic and professional environment with many opportunities for advancement.
                Provide complete equipment to serve the job.
                The company pays all social insurance, health insurance, and unemployment insurance.
                Enjoy the welfare policies according to the company\'s regulations (Annual salary review, 13th-month salary, KPI bonus, 12 days of leave, birthday celebration, lunch allowance, car parking,...)
                Regular training and professional improvement.
                Participate in cultural activities with typical colors of the company: Team building, and a series of interesting and attractive collective activities taking place monthly and quarterly at the company.
                Competitive salary.',
                'expire_at' => Carbon::now()->addMonth()->setDay(rand(1, 28))->format('Y/m/d'),
                'interview_round_num' => 3,
                'latitude' => 10.803909, 
                'longitude' => 106.720066,
                'is_active' => 1,
                'created_at' => Carbon::now()->subDays(2),
                'updated_at' => Carbon::now()->subDays(2),
            ],
            [
                'id' => 30,
                'employer_id' => 21,
                'jtype_id' => 1,
                'jlevel_id' => 2,
                'jname' => 'Developer ( PHP )',
                'address' => 'Hồ Chí Minh: An Phú Plaza, 117-119 Lý Chính Thắng, Phường Võ Thị Sáu, Quận 3, Quận 3',
                'amount' => 1,
                'min_salary' => null,
                'max_salary' => null,
                'yoe' => 1,
                'gender' => null,
                'description' => 'Lập trình và phát triển ứng dụng web, web service theo yêu cầu.
                Xây dựng, phát triển, bảo trì và nâng cấp các dự án phần mềm của công ty và khách hàng.
                Tìm hiểu, phát triển và ứng dụng công nghệ mới vào sản phẩm.
                Thực hiện các công việc liên quan khác theo yêu cầu của công ty.',
                'requirements' => '- Tốt nghiệp các ngành Khoa học máy tính, phần mềm tại các trường Cao Đẳng, Đại Học.
                - Kinh nghiệm làm việc:
                . Fresher: đã nắm vững và biết vận dụng kiến thức phát triển ứng dụng web sử dụng PHP, Laravel, MySQL.
                . Junior: ít nhất 6 tháng kinh nghiệm với vị trí tương đương.
                . Middle: ít nhất 2 năm kinh nghiệm với vị trí tương đương.
                . Senior: có ít nhất 4 năm kinh nghiệm với vị trí tương đương, ưu tiên ứng viên có kinh nghiệm training hoặc quản lý team dự án.
                - Đối với các level: yêu cầu có kinh nghiệm phát triển ứng dụng web, lập trình web bằng ngôn ngữ PHP mảng back end hoặc yêu thích phát triển web với PHP:
                . PHP, MySQL
                . PHP Framework: Chúng tôi làm nhiều Framework khác nhau (tùy vào yêu cầu của khách hàng: CodeIgniter, CakePHP, Zend, ...)
                . JavaScript và JS Frameworks (JQuery, Angular JS, Vue.js...)
                . DB (MySQL và thiết kế Database)',
                'benefits' => '- Thưởng: 2 lần/năm.
                - Du lịch công ty & Khám sức khỏe: 1 năm/ 1 lần.
                - Review lương: tối thiếu 1 lần/năm.                
                - Bữa ăn chào mừng nhân viên mới.                
                - Ngoài các gói bảo hiểm cơ bản theo quy định của Luật Lao Động, bạn còn được tham gia gói bảo hiểm tai nạn lao động tại Lampart.                
                - Trợ cấp thăm bệnh.                
                - Trà, sữa, coffee, ... miễn phí.                
                - Tăng ca đêm: ngoài tiền tăng ca ban đêm, còn được nghỉ bù có lương vào ngày hôm trước và ngày hôm sau.                
                - Ngày nghỉ đặc biệt dành cho nhân viên nữ: 0.5 ngày/ tháng.                
                - Trợ cấp đối với nhân viên chờ chỉ thị làm việc tại nhà trong các dịp Lễ, Tết.                
                - Được hưởng những phúc lợi đặc biệt như chương trình quà tết, bánh trung thu, tiền mừng đám cưới (5,000,000 VND), tiền mừng khi sanh con (2,000,000 VND), ...',
                'expire_at' => Carbon::now()->addMonth()->setDay(rand(1, 28))->format('Y/m/d'),
                'interview_round_num' => 3,
                'latitude' => 10.78734, 
                'longitude' => 106.68515,
                'is_active' => 1,
                'created_at' => Carbon::now()->subDays(2),
                'updated_at' => Carbon::now()->subDays(2),
            ],
            [
                'id' => 31,
                'employer_id' => 21,
                'jtype_id' => 1,
                'jlevel_id' => 1,
                'jname' => 'Thực Tập Sinh PHP',
                'address' => 'Hồ Chí Minh: An Phú Plaza, 117-119 Lý Chính Thắng, Phường Võ Thị Sáu, Quận 3, Quận 3',
                'amount' => 1,
                'min_salary' => null,
                'max_salary' => null,
                'yoe' => null,
                'gender' => null,
                'description' => '- Được đào tạo phát triển hệ thống web thực tế, phát triển phần mềm bằng ngôn ngữ PHP với các kỹ thuật mới nhất.
                - Nắm bắt nghiệp vụ đã phân tích để phát triển hệ thống trên nền web cùng với các kỹ sư tại Việt Nam và tại Nhật Bản.                
                - Thực hiện các công việc khác có liên quan theo yêu cầu của công ty.',
                'requirements' => '- Sinh viên năm cuối ở các ngành Khoa học máy tính, phần mềm tại các trường Cao Đẳng, Đại Học.
                - Có thể tham gia thực tập tại công ty từ 6 – 10 buổi / tuần ( tương đương 3 – 5 ngày/ tuần).                
                - Có hiểu biết hoặc đã tìm hiểu về lập trình website và ngôn ngữ PHP mảng back end hoặc yêu thích phát triển web với PHP:                
                + PHP, MySQL.                
                + PHP Framework: Chúng tôi làm nhiều Framework khác nhau. (tùy vào yêu cầu của khách hàng: CodeIgniter, CakePHP, Zend, ...)                
                + JavaScript và JS Frameworks. (jQuery, Angular JS, Vue.js...)                
                + DB. (MySQL và thiết kế Database)                
                - Giao tiếp tốt, chủ động trong công việc.                
                - Có đam mê phát triển phần mềm.                
                - Có kỹ năng làm việc theo nhóm, hòa đồng.                
                - Có tư duy logic, sáng tạo.',
                'benefits' => '- Thưởng: 2 lần/năm.
                - Du lịch công ty & Khám sức khỏe: 1 năm/ 1 lần.
                - Review lương: tối thiếu 1 lần/năm.                
                - Bữa ăn chào mừng nhân viên mới.                
                - Ngoài các gói bảo hiểm cơ bản theo quy định của Luật Lao Động, bạn còn được tham gia gói bảo hiểm tai nạn lao động tại Lampart.                
                - Trợ cấp thăm bệnh.                
                - Trà, sữa, coffee, ... miễn phí.                
                - Tăng ca đêm: ngoài tiền tăng ca ban đêm, còn được nghỉ bù có lương vào ngày hôm trước và ngày hôm sau.                
                - Ngày nghỉ đặc biệt dành cho nhân viên nữ: 0.5 ngày/ tháng.                
                - Trợ cấp đối với nhân viên chờ chỉ thị làm việc tại nhà trong các dịp Lễ, Tết.                
                - Được hưởng những phúc lợi đặc biệt như chương trình quà tết, bánh trung thu, tiền mừng đám cưới (5,000,000 VND), tiền mừng khi sanh con (2,000,000 VND), ...',
                'expire_at' => Carbon::now()->addMonth()->setDay(rand(1, 28))->format('Y/m/d'),
                'interview_round_num' => 3,
                'latitude' => 10.78734, 
                'longitude' => 106.68515,
                'is_active' => 1,
                'created_at' => Carbon::now()->subDays(4),
                'updated_at' => Carbon::now()->subDays(4),
            ],
            [
                'id' => 32,
                'employer_id' => 21,
                'jtype_id' => 1,
                'jlevel_id' => 2,
                'jname' => 'IT Comtor (Tiếng Nhật N1, N2)',
                'address' => 'Hồ Chí Minh: An Phú Plaza, 117-119 Lý Chính Thắng, Phường Võ Thị Sáu, Quận 3',
                'amount' => 1,
                'min_salary' => null,
                'max_salary' => null,
                'yoe' => 2,
                'gender' => null,
                'description' => '- Phiên dịch trong cuộc họp, meeting, video conference mà chủ yếu liên quan đến dự án về phát triển phần mềm.
                - Dịch các cuộc trao đổi qua chat giữa người Nhật và các kỹ sư người Việt.                
                - Biên phiên dịch tài liệu dự án, tài liệu QA, báo cáo, tài liệu kỹ thuật (Việt -Nhật, Nhật - Việt).                
                - Các công việc khác liên quan.',
                'requirements' => '- Tiếng Nhật N1, N2
                - Có kiến thức về IT (phát triển phần mềm, có thêm kiến thức về Hệ thống nghiệp vụ)                
                - Có trên 2 năm kinh nghiệm với vị trí tương đương                
                - Có năng lực giao tiếp                
                - Có kỹ năng giải quyết vấn đề                
                - Có kỹ năng làm việc nhóm tốt',
                'benefits' => '- Thưởng: 2 lần/năm.
                - Du lịch công ty & Khám sức khỏe: 1 năm/ 1 lần.
                - Review lương: tối thiếu 1 lần/năm.                
                - Bữa ăn chào mừng nhân viên mới.                
                - Ngoài các gói bảo hiểm cơ bản theo quy định của Luật Lao Động, bạn còn được tham gia gói bảo hiểm tai nạn lao động tại Lampart.                
                - Trợ cấp thăm bệnh.                
                - Trà, sữa, coffee, ... miễn phí.                
                - Tăng ca đêm: ngoài tiền tăng ca ban đêm, còn được nghỉ bù có lương vào ngày hôm trước và ngày hôm sau.                
                - Ngày nghỉ đặc biệt dành cho nhân viên nữ: 0.5 ngày/ tháng.                
                - Trợ cấp đối với nhân viên chờ chỉ thị làm việc tại nhà trong các dịp Lễ, Tết.                
                - Được hưởng những phúc lợi đặc biệt như chương trình quà tết, bánh trung thu, tiền mừng đám cưới (5,000,000 VND), tiền mừng khi sanh con (2,000,000 VND), ...',
                'expire_at' => Carbon::now()->addMonth()->setDay(rand(1, 28))->format('Y/m/d'),
                'interview_round_num' => 3,
                'latitude' => 10.78734, 
                'longitude' => 106.68515,
                'is_active' => 1,
                'created_at' => Carbon::now()->subDays(6),
                'updated_at' => Carbon::now()->subDays(6),
            ],
            [
                'id' => 33,
                'employer_id' => 22,
                'jtype_id' => 1,
                'jlevel_id' => 2,
                'jname' => 'PHP Developer',
                'address' => 'Hồ Chí Minh: 265 Hồng Lạc, Phường 10, Tân Bình',
                'amount' => 2,
                'min_salary' => 10,
                'max_salary' => 15,
                'yoe' => 1,
                'gender' => null,
                'description' => 'Phát triển và tích hợp các loại mô-đun bổ sung khác nhau và tùy chỉnh các mẫu trong WHMCS. 
                Tích hợp API (REST) vào các modules, xây dựng và phát triển các giao diện từ các bản thiết kế Figma.
                Xây dựng phát triển chức năng tùy chỉnh theo yêu cầu.
                Xây dựng và phát triển các modules, templates trong WHMCS.
                Làm việc với các nhóm phát triển và quản lý sản phẩm để lên ý tưởng các giải pháp phần mềm.
                Viết tài liệu kỹ thuật và báo cáo.
                Theo kịp sự phát triển của các ứng dụng web và ngôn ngữ lập trình.',
                'requirements' => 'Kinh nghiệm tối thiểu 1 năm với PHP.
                Từng làm việc hoặc tiếp xúc với các phần mềm WHMCS và Wordpress CMS, Odoo,...
                Thành thạo về các CSS framework như Tailwind, Bootstrap.
                Hiểu biết về Smarty template engine của PHP.
                Bằng Cao đẳng hoặc Cử nhân về Khoa học Máy tính, Công nghệ Thông tin hoặc lĩnh vực liên quan.
                Thành thạo PHP, AJAX, JavaScript, HTML, CSS, MySQL,...
                Kinh nghiệm trong việc sử dụng Git, thiết kế hệ thống là một điểm cộng.
                Kỹ năng giao tiếp tiếng Anh cơ bản.
                Kỹ năng giao tiếp và làm việc nhóm xuất sắc.
                Kỹ năng tổ chức.
                Kỹ năng phân tích mạnh mẽ.
                Khả năng tự học.',
                'benefits' => 'Lương cơ bản: 10 triệu đến 15 triệu.
                Được hưởng các quyền lợi theo chính sách của công ty và quy định của nhà nước.
                Review lương 2 lần/năm (tùy vào năng lực), lương tháng 13, cùng nhiều chế độ thưởng khác nhau.
                Team building 2 lần/năm.
                Có cơ hội tham gia các khóa đào tạo, phát triển, nâng cao năng lực làm việc.
                Làm việc trong môi trường chuyên nghiệp, năng động, nhiều cơ hội phát triển năng lực bản thân, đãi ngộ dựa trên năng lực và sự nhiệt tình sáng tạo của từng thành viên.
                Nghỉ 12 ngày phép năm và các ngày lễ tết, dịp đặc biệt của công ty.
                Hỗ trợ ăn trưa, gửi xe.',
                'expire_at' => Carbon::now()->addMonth()->setDay(rand(1, 28))->format('Y/m/d'),
                'interview_round_num' => 3,
                'latitude' => 10.787655, 
                'longitude' => 106.645442,
                'is_active' => 1,
                'created_at' => Carbon::now()->subDays(2),
                'updated_at' => Carbon::now()->subDays(2),
            ],
            [
                'id' => 34,
                'employer_id' => 22,
                'jtype_id' => 1,
                'jlevel_id' => 4,
                'jname' => 'Sale Manager',
                'address' => 'Hồ Chí Minh: 265 Hồng Lạc, Phường 10, Tân Bình',
                'amount' => 1,
                'min_salary' => 18,
                'max_salary' => 22,
                'yoe' => 2,
                'gender' => null,
                'description' => 'Phụ trách kinh doanh các sản phẩm của Công ty. 
                Tìm kiếm, đàm phán, thuyết phục KHDN sử dụng dịch vụ và sản phẩm của công ty.
                Phân tích thị trường, kết nối đối tác nhằm mở rộng tệp khách hàng doanh nghiệp, phát triển các mối quan hệ với khách hàng.
                Chịu trách nhiệm về kết quả của các kế hoạch kinh doanh theo đúng nội dung đã được ban lãnh đạo phê duyệt.
                Tổ chức thu thập, phân tích, đánh giá thông tin thị trường và đưa ra đề xuất các phương án kinh doanh có hiệu quả, (về đối thủ, diễn biến thị trường, xu hướng tiêu dùng...) kèm theo đó là các giải pháp phù hợp để giải quyết các diễn biến đó.
                Quản lý và thúc đẩy đội ngũ nhân viên kinh doanh đảm bảo thực hiện kế hoạch kinh doanh hiệu quả và đạt được chỉ tiêu.
                Chịu trách nhiệm đảm bảo chỉ tiêu về doanh thu hằng quý và hằng năm.
                Tổ chức,  thực hiện và theo dõi kế hoạch kinh doanh.
                Chịu trách nhiệm cho sự phát triển của các dịch vụ hiện tại và tương lai cũng như phát triển kinh doanh cho sản phẩm phụ trách. 
                Phát triển mạng lưới các đối tác, cộng tác viên; thiết lập và xây dựng các mối quan hệ với các đối tác DN trong và ngoài nước để phục vụ mục đích kinh doanh.',
                'requirements' => 'Tốt nghiệp Đại học, Cao Đẳng chuyên ngành QTKD, Kinh tế, Marketing, CNTT.
                Có kinh nghiệm tối thiểu 2 năm tại vị trí tương đương.
                Ưu tiên hiểu biết về sản phẩm, thị trường doanh nghiệp hoặc có kinh nghiệm kinh doanh trong lĩnh vực CNTT.
                Khả năng lãnh đạo, tổ chức và tạo động lực làm việc cho nhân viên. 
                Có kỹ năng phân tích, tổng hợp, lập kế hoạch tốt.
                Có khả năng xây dựng và gìn giữ mối quan hệ làm việc mang tính hợp tác với khách hàng và đối tác.
                Kỹ năng thuyết trình, đàm phán thương lượng tốt.
                Truyền thông và giao tiếp tốt. 
                Tiếng Anh: Khá',
                'benefits' => 'Lương cơ bản từ 18-22 triệu.
                Nhận thêm hoa hồng + thưởng KPI dựa trên doanh số.
                Thưởng lương tháng 13 và các khoản thưởng khác dựa trên hiệu suất kinh doanh.
                Nghỉ 12 ngày phép năm và các ngày lễ tết, dịp đặc biệt của công ty.
                Hỗ trợ ăn trưa và gửi xe.
                Tham gia đầy đủ các chế độ BHYT, BHXH và BHTN.
                Tham gia các hoạt động Team building 2 lần/năm.
                Tham gia các khóa đào tạo, phát triển, nâng cao năng lực làm việc.
                Làm việc trong môi trường chuyên nghiệp, năng động, nhiều cơ hội phát triển năng lực bản thân, đãi ngộ dựa trên năng lực và hiệu quả công việc của từng thành viên.',
                'expire_at' => Carbon::now()->addMonth()->setDay(rand(1, 28))->format('Y/m/d'),
                'interview_round_num' => 3,
                'latitude' => 10.787655, 
                'longitude' => 106.645442,
                'is_active' => 1,
                'created_at' => Carbon::now()->subDays(2),
                'updated_at' => Carbon::now()->subDays(2),
            ],
            [
                'id' => 35,
                'employer_id' => 23,
                'jtype_id' => 1,
                'jlevel_id' => 2,
                'jname' => 'Front End Developer ( Javascript, ReactJS, VueJS )',
                'address' => 'Hà Nội: Tầng 15, Keangnam Landmark 72, Nam Từ Liêm',
                'amount' => 10,
                'min_salary' => null,
                'max_salary' => null,
                'yoe' => null,
                'gender' => null,
                'description' => 'Đảm bảo hiệu suất, chất lượng và khả năng đáp ứng tốt nhất có thể của các ứng dụng ở phía Front-end
                Tham gia lập trình các ứng dụng web
                Phối hợp cùng team dự án Việt Nam và Hàn Quốc để đảm bảo tiến độ
                Trao đổi chi tiết khi phỏng vấn',
                'requirements' => 'Có ít nhất 1 năm kinh nghiệm (Ưu tiên kinh nghiệm cao)
                Có kinh nghiệm phát triển ứng dụng web/mobile
                Có thể phát triển HTML, CSS, Javascript, jQuery
                Có thể phát triển dựa trên SPA (Vue.js, Vuex)
                Có kinh nghiệm với các công cụ cộng tác như Git, Jira và Confluence
                Hiểu và sử dụng CI/CD
                Tốt nghiệp đại học trở lên
                Giao tiếp Tiếng anh ở mức trung bình (TOEIC trên 550 và các chứng chỉ tương tự hoặc tự tin giao tiếp tiếng anh)
                Ưu tiên: Hiểu về Back-End
                Sử dụng được Typescript
                Có kinh nghiệm UI/UX
                Có kinh nghiệm với biểu đồ javascript ( Echarts, Chart.js...).',
                'benefits' => 'Lương, thưởng sẽ được thảo luận sau khi thông qua CV & Phỏng vấn
                Review đánh giá năng lực hàng năm và điều chỉnh tăng lương theo hiệu quả công việc
                Phụ cấp chứng chỉ ngoại ngữ tiếng hàn (TOPIK)
                Chăm sóc sức khỏe: Khám sức khỏe định kỳ hàng năm, Bảo hiểm sức khỏe cao cấp
                Điều kiện làm việc thoải mái và thời gian làm việc linh hoạt
                Cơ hội phát triển nghề nghiệp tốt với các dự án thú vị và đầy thử thách;
                Các khóa đào tạo tiếng Anh, tiếng Hàn, kỹ thuật, kỹ năng mềm;
                Cơ hội học các khóa học đặc biệt của LG CNS, công nghệ mới và bảo mật
                Quà tặng, thưởng vào các dịp lễ, tết (30/4-1/5, 2/9, tết v.v)
                Các hoạt động ngoài trời với sự hỗ trợ của công ty: câu lạc bộ thể thao, team building, tiệc happy hour, sinh nhật, du lịch, sự kiện nhân viên và gia đình, v.v.
                Thời gian làm việc: 8 tiếng từ T2 - T6 (8:00- 12:/ 13:00 - 17:00)',
                'expire_at' => Carbon::now()->addMonth()->setDay(rand(1, 28))->format('Y/m/d'),
                'interview_round_num' => 3,
                'latitude' => 21.0113019, 
                'longitude' => 105.7766342,
                'is_active' => 1,
                'created_at' => Carbon::now()->subDays(6),
                'updated_at' => Carbon::now()->subDays(6),
            ],
            [
                'id' => 36,
                'employer_id' => 23,
                'jtype_id' => 1,
                'jlevel_id' => 2,
                'jname' => 'Back End Developer (Java, MySQL, Spring)',
                'address' => 'Hà Nội: Tầng 15, Keangnam Landmark 72, Nam Từ Liêm',
                'amount' => 10,
                'min_salary' => null,
                'max_salary' => null,
                'yoe' => 2,
                'gender' => null,
                'description' => 'Đảm bảo hiệu suất, chất lượng và khả năng đáp ứng tốt nhất có thể của các ứng dụng ở phía Back-end
                Tư vấn, phân tích, thiết kế
                Phát triển, kiểm thử, sửa lỗi
                Vận hành và bảo trì hệ thống.',
                'requirements' => 'Có ít nhất 2 năm kinh nghiệm về JAVA (Ưu tiên kinh nghiệm cao)
                Có kinh nghiệm phát triển ứng dụng web
                Phát triển dựa trên Spring, Spring Boot F/W
                Phát triển API (REST API)
                Sử dụng thành thạo 1 trong các ngôn ngữ DB như MySQL, MongoDB , Oracle , SQL
                Git, Jira, Confluence
                Hiểu và áp dụng CI/CD
                Tốt nghiệp Đại Học trở lên
                Giao tiếp Tiếng anh ở mức trung bình (TOEIC trên 550 và các chứng chỉ tương tự hoặc tự tin giao tiếp tiếng anh)',
                'benefits' => 'Lương, thưởng sẽ được thảo luận sau khi thông qua CV & Phỏng vấn
                Review đánh giá năng lực hàng năm và điều chỉnh tăng lương theo hiệu quả công việc
                Phụ cấp chứng chỉ ngoại ngữ tiếng hàn (TOPIK)
                Chăm sóc sức khỏe: Khám sức khỏe định kỳ hàng năm, Bảo hiểm sức khỏe cao cấp
                Điều kiện làm việc thoải, linh hoạt
                Cơ hội phát triển nghề nghiệp tốt với các dự án thú vị và đầy thử thách;
                Các khóa đào tạo tiếng Anh, tiếng Hàn, kỹ thuật, kỹ năng mềm;
                Cơ hội học các khóa học đặc biệt của LG CNS, công nghệ mới và bảo mật
                Quà tặng vào các dịp lễ, tết (30/4-1/5, 2/9, tết v.v)
                Các hoạt động ngoài trời với sự hỗ trợ của công ty: câu lạc bộ thể thao, team building, tiệc happy hour, sinh nhật, du lịch, sự kiện nhân viên và gia đình, v.v.
                Thời gian làm việc: 8 tiếng từ T2 - T6 (8:00- 12:00/ 13:00- 17:00), Happy hour chiều thứ 6 hàng tuần',
                'expire_at' => Carbon::now()->addMonth()->setDay(rand(1, 28))->format('Y/m/d'),
                'interview_round_num' => 3,
                'latitude' => 21.0113019, 
                'longitude' => 105.7766342,
                'is_active' => 1,
                'created_at' => Carbon::now()->subDays(4),
                'updated_at' => Carbon::now()->subDays(4),
            ],
            [
                'id' => 37,
                'employer_id' => 24,
                'jtype_id' => 1,
                'jlevel_id' => 2,
                'jname' => 'Senior JavaScript Developer',
                'address' => 'Hà Nội: No 5, Dien Bien Phu Street, Ba Dinh Ward, Hanoi, Ba Đình',
                'amount' => 1,
                'min_salary' => null,
                'max_salary' => 50,
                'yoe' => 4,
                'gender' => null,
                'description' => 'You are a Senior Developer familiar with large scale enterprise applications architecture and development using React.js for front-end, Node.js for backend and middleware like Cassandra or Elastic search.
                You will become part of the TDrive Team, which is a secure end-to-end encrypted cloud storage solution. The software easily integrates with other Linagora products, such as Tmail (James Apache and Twake chat on Matrix, as well as OnlyOffice, and is also aimed at simple integration with any SSO.                
                TDrive is available for on-premise installation.                
                Development stage: used by clients in on-premise format, availability for the B2C segment as SaaS is planned for February 2024.',
                'requirements' => '5+ years of experience building applications with any reactive framework
                5+ years of experience coding in JavaScript, HTML, CSS
                Experience developing in React.js or Vue.js
                Experience developing single-page applications
                Experience with automated unit, integration, and end-to-end testing
                Experience integrating systems using Rest APIs
                Experience building robust and secure Rest APIs in Node.js, JSON
                Experience working with Cassandra (or at least SQL) designing schemas and writing optimized queries
                Solid work experience using component-based development on the client side
                Good communication in English',
                'benefits' => 'Flexible hybrid working mode
                Work in an international team with highly skilled people
                Additional health insurance with attractive coverage and benefits
                Correct work/life balance
                Annual company trip, other exciting activities for team building
                Working 5 days/week, from Monday to Friday
                Lunch allowance, 13th-month salary, competitive salary
                Annual health checkups and other benefits based on labor law
                Participate to Open Source communities and conferences in Vietnam
                Modern working space, free coffee',
                'expire_at' => Carbon::now()->addMonth()->setDay(rand(1, 28))->format('Y/m/d'),
                'interview_round_num' => 3,
                'latitude' => 21.009231, 
                'longitude' => 105.823711,
                'is_active' => 1,
                'created_at' => Carbon::now()->subDays(2),
                'updated_at' => Carbon::now()->subDays(2),
            ],
            [
                'id' => 38,
                'employer_id' => 24,
                'jtype_id' => 1,
                'jlevel_id' => 2,
                'jname' => 'Senior Frontend Developer',
                'address' => 'Hà Nội: No 5, Dien Bien Phu Street, Ba Dinh Ward, Hanoi, Ba Đình',
                'amount' => 1,
                'min_salary' => null,
                'max_salary' => 50,
                'yoe' => 5,
                'gender' => null,
                'description' => '- Developing product landing pages and sites
                - Develop reusable user interface components and front-end libraries in React.JS
                - Proactively analyze website performance and implement solutions for improvement
                - Collaborate with architects, developers, business analysts, and marketing team',
                'requirements' => '5+ years of experience building applications with any reactive framework
                5+ years of experience coding in JavaScript, HTML, CSS
                Experience developing in React.JS or Vue.JS
                Experience working with one of the visualization libraries: PixiJS, Three.JS, Konva, Paper.JS, p5.JS
                Solid work experience using component-based development on the client side',
                'benefits' => 'Flexible hybrid working mode
                Work in an international team with highly skilled people
                Additional health insurance with attractive coverage and benefits
                Correct work/life balance
                Annual company trip, other exciting activities for team building
                Working 5 days/week, from Monday to Friday
                Lunch allowance, 13th-month salary, competitive salary
                Annual health checkups and other benefits based on labor law
                Participate to Open Source communities and conferences in Vietnam
                Modern working space, free coffee',
                'expire_at' => Carbon::now()->addMonth()->setDay(rand(1, 28))->format('Y/m/d'),
                'interview_round_num' => 3,
                'latitude' => 21.009231, 
                'longitude' => 105.823711,
                'is_active' => 1,
                'created_at' => Carbon::now()->subDays(2),
                'updated_at' => Carbon::now()->subDays(2),
            ],
            [
                'id' => 39,
                'employer_id' => 25,
                'jtype_id' => 1,
                'jlevel_id' => 2,
                'jname' => 'Lập Trình Viên Javascript',
                'address' => '- Hà Nội: 2 Vương Thừa Vũ, Quận Thanh Xuân, Hà Nội, Thanh Xuân
                - Hà Nội: Tòa nhà Tân Hồng Hà, 317 đường Trường Chinh, Hà Nội, Đống Đa',
                'amount' => 1,
                'min_salary' => 25,
                'max_salary' => 30,
                'yoe' => 3,
                'gender' => null,
                'description' => 'Tham gia vào dự án với yêu cầu từ khách hàng Nhật Bản;
                Xây dựng thiết kế phát triển những phần mềm mới dựa trên nền tảng các sản phẩm của Microsoft (SharePoint, Translation API, Azure..)
                Bảo trì, nâng cấp các sản phẩm có sẵn (Hệ thống liên quan đến quản lý dữ liệu của các trường Đại học ở Nhật Bản)',
                'requirements' => 'Khả năng tiếng Nhật tương đương N5 trở lên
                Yêu thích công việc lập trình ở một trong các ngôn ngữ Java/ Javascript phiên bản 8...
                Có kinh nghiệm làm các dự án offshore là một lợi thế
                Sẵn sàng học hỏi tiếp thu lĩnh vực mới. Chịu khó và chăm chỉ, kỷ luật trong công việc
                Ưu tiên ứng viên đã từng làm các dự án Nhật
                Sẵn sàng on-site tại Nhật Bản',
                'benefits' => 'Lương thỏa thuận theo năng lực thực tế của ứng viên.
                Trong thời gian onsite tại Nhật Bản, ngoài lương nhận tại Việt Nam, trợ cấp sinh hoạt và toàn bộ vé máy bay, chi phí visa, đi lại, nhà trọ do công ty chi trả
                Thưởng lễ tết, thưởng tháng lương thứ 13, thưởng nhân viên xuất sắc quý, năm, nhân viên tiêu biểu đi du lịch Nhật Bản.
                Nghỉ theo lịch công ty, nghỉ theo lịch khách hàng Nhật...
                
                Văn phòng làm việc tiện ích:
                Miễn phí trà, coffee tại khu vực ăn uống của công ty.
                Teabreak vào các ngày T2-T4-T6
                Các hoạt động sôi nổi: Như hoạt động team building kết nối đội nhóm theo quy định',
                'expire_at' => Carbon::now()->addMonth()->setDay(rand(1, 28))->format('Y/m/d'),
                'interview_round_num' => 3,
                'latitude' => 20.999533, 
                'longitude' => 105.831645,
                'is_active' => 1,
                'created_at' => Carbon::now()->subDays(6),
                'updated_at' => Carbon::now()->subDays(6),
            ],
            [
                'id' => 40,
                'employer_id' => 25,
                'jtype_id' => 1,
                'jlevel_id' => 2,
                'jname' => 'Java Developer',
                'address' => 'Hà Nội: Tòa nhà Tân Hồng Hà, 317 Trường Chinh, Thanh Xuân',
                'amount' => 1,
                'min_salary' => 20,
                'max_salary' => 28,
                'yoe' => 3,
                'gender' => null,
                'description' => '– Xây dựng thiết kế phát triển những phần mềm mới dựa trên nền tảng các sản phẩm của Microsoft (SharePoint, Translation API, Azure..)

                – Bảo trì, nâng cấp các sản phẩm có sẵn (Hệ thống liên quan đến quản lý dữ liệu của các trường Đại học ở Nhật Bản)
                
                – Có khả năng chuyển công tác tới văn phòng tại Osaka khi đạt khả năng tiếng Nhật N3',
                'requirements' => '– Tốt nghiệp Đại học/ Cao đẳng ngành Công nghệ thông tin, Khoa học máy tính

                – Có kinh nghiệm làm việc với ngôn ngữ lập trình Java ít nhất 2 năm, kinh nghiệm với XSLT là một lợi thế
                
                – Có kinh nghiệm phát triển hệ thống Web ở back-end và front-end (HTML/CSS/ Node.js) là một lợi thế
                
                – Có kinh nghiệm sử dụng, phát triển dựa trên Web API
                
                – Có khả năng đọc hiểu tài liệu bằng tiếng Anh (Nhật) là một lợi thế
                
                – Tiếng Nhật cơ bản từ N5
                
                – Có nguyện vọng học tiếng Nhật và nâng cao năng lực bản thân',
                'benefits' => '- Tham gia mọi chế độ BHXH, BHYT, BHTN (theo quy định của Luật lao động Việt Nam)

                - Có cơ hội được làm việc tại trụ sở ở Nhật
                
                - Tham gia các hoạt động của công ty.',
                'expire_at' => Carbon::now()->addMonth()->setDay(rand(1, 28))->format('Y/m/d'),
                'interview_round_num' => 3,
                'latitude' => 20.999533, 
                'longitude' => 105.831645,
                'is_active' => 1,
                'created_at' => Carbon::now()->subDays(6),
                'updated_at' => Carbon::now()->subDays(6),
            ],
            [
                'id' => 41,
                'employer_id' => 25,
                'jtype_id' => 1,
                'jlevel_id' => 2,
                'jname' => 'Sales IT Executive B2B',
                'address' => '- Hà Nội: 317 Đường Trường Chinh, Quận Thanh Xuân (gần khu vực Quận Đống Đa), Đống Đa
                - Hà Nội: Tòa nhà Tân Hồng Hà, 2 Vương Thừa Vũ, Quận Thanh Xuân, Hà Nội, Thanh Xuân',
                'amount' => 1,
                'min_salary' => 10,
                'max_salary' => 15,
                'yoe' => 1,
                'gender' => null,
                'description' => 'Văn phòng trụ sở làm việc tại Hà Nội/Hồ Chí Minh
                Tìm kiếm, khai thác khách hàng mới, phát triển các cơ hội kinh doanh mới cùng với khách hàng khối Âu Mỹ (Phần mềm, giải pháp công nghệ thông tin.)
                Tạo lập và phát triển mối quan hệ với khách hàng tiềm năng, chăm sóc khách hàng của công ty
                Chuẩn bị và gửi báo giá, telesales, lắng nghe nhu cầu khách hàng, chuẩn bị và theo dõi hợp đồng
                Phối hợp với Team TA/HR để triển khai dự án dịch vụ (IT Outsourcing) của Techbank
                Chủ động & tích cực tham gia các buổi trainning, coaching về nghiệp vụ: tìm kiếm khách hàng, kỹ năng phỏng vấn, giao tiếp với khách hàng, kỹ năng chốt hợp đồng, xử lý đơn hàng...
                Chi tiết trao đổi trong quá trình phỏng vấn',
                'requirements' => 'Tiếng Anh giao tiếp tốt, đọc và viết thành thạo, hoặc tương đương TOEIC 800, IELTS 6.5
                Rất ưu tiên có kinh nghiệm Sales IT (outsourcing phần mềm) thị trường tiếng Anh khoảng 1 năm hoặc ở các vị trí BD, hunt tại các công ty IT hoặc các công ty hunt
                Tư duy sales và đam mê kinh doanh, bán hàng
                Tư duy logical-thinking
                Tính cách hòa đồng, vui vẻ, năng nổ, chủ động và trao đổi trong công việc
                Sáng tạo, nhiều ý tưởng, tư duy nhanh nhẹn và chủ động trong công việc.
                Có khả năng giao tiếp mạch lạc, tự tin, có kỹ năng trình bày, kỹ năng đàm phán và kỹ năng tự học hỏi.',
                'benefits' => 'Tổng thu nhập: Lương cơ bản và hoa hồng hấp dẫn (theo cấp số nhân, bình quân lương năm từ 240tr trở lên)
                Thưởng tháng/quý/năm
                Thưởng các dịp ngày Lễ Tết
                Team trẻ trung năng động, làm việc theo phong cách Châu Âu
                Các hoạt động Team Building, Teabreak các ngày thứ 2-4-6',
                'expire_at' => Carbon::now()->addMonth()->setDay(rand(1, 28))->format('Y/m/d'),
                'interview_round_num' => 3,
                'latitude' => 20.999533, 
                'longitude' => 105.831645,
                'is_active' => 1,
                'created_at' => Carbon::now()->subDays(2),
                'updated_at' => Carbon::now()->subDays(2),
            ],
            [
                'id' => 42,
                'employer_id' => 26,
                'jtype_id' => 1,
                'jlevel_id' => 2,
                'jname' => 'Front-End Developer (Html/Css/ JavaScript )',
                'address' => 'Hồ Chí Minh: 1073/23 Cách mạng tháng 8, phường 7, quận Tân Bình, TP HCM, Tân Bình',
                'amount' => 5,
                'min_salary' => 8,
                'max_salary' => 25,
                'yoe' => 0,
                'gender' => null,
                'description' => 'Trực tiếp tham gia các dự án cho khách hàng, lập trình các sản phẩm HTML với hiệu ứng hiện đại, chuẩn responsive trên các thiết bị từ PC, Desktop, Mobile,...
                Cắt HTML, sử dụng HTML5/CSS3, Jquery để làm giao diện , thực hiện các ý tưởng thiết kế, ý tưởng xây dựng của khách hàng
                Kiểm thử và nhập liệu mẫu theo đúng dữ liệu mà mình đã cắt html, kiểm tra điều chỉnh lại code nếu có lỗi phát sinh
                Thực hiện các công việc liên quan theo sự phân công của cấp trên',
                'requirements' => 'Có ít nhất 2 năm kinh nghiệm với HTML, CSS, JS
                Có kinh nghiệm cắt giao diện từ tool design (Figma, Photoshop...)
                Có kinh nghiệm làm việc với SCSS, LESS, SASS.
                Có kinh nghiệm Javascript, Jquery
                Có kinh nghiệm tùy biến giao diện trên nhiều nền tảng trình duyệt web khác nhau (responsive)
                Có kinh nghiệm tùy biến file theme của WordPress là lợi thế
                Có kinh nghiệm làm việc với template engine (GULP, GRUNT) là điểm cộng.
                Biết kỹ năng sử dụng Git',
                'benefits' => 'Luôn được hướng dẫn tư duy Logic nghiệp vụ
                Xét lương tối thiểu 1 năm 1 lần và không dưới 10%
                Ngày nghỉ: 12 Ngày phép trong năm + Các ngày Lễ/ Tết, Thưởng tháng 13, Tham gia BHXH, Team building
                Các buổi training chuyên sâu kỹ thuật/ kỹ năng mềm định kỳ• Các giải thể thao điện tử định kỳ
                Hoạt động bóng đá mỗi thứ 5 hàng tuần
                Team Building tối thiểu 1 lần/năm
                Làm việc tại một môi trường thoải mái về đồng phục nhưng chuẩn mực về thái độ
                Cạnh tranh tại đấu trường Mona E-Sport với các môn thể thao HOT như Counter Strike, PES, Fifa... cùng nhiều giải thưởng hấp dẫn
                Hoạt động thể thao, nâng cao sức khỏe thông qua những trận banh siêu kinh điển mỗi tuần
                Leader luôn tạo điều kiện học hỏi và phát triển thông qua các buổi Seminar, giúp nâng cao tay nghề, tư duy làm việc chuyên nghiệp',
                'expire_at' => Carbon::now()->addMonth()->setDay(rand(1, 28))->format('Y/m/d'),
                'interview_round_num' => 3,
                'latitude' => 10.790966, 
                'longitude' => 106.656124,
                'is_active' => 1,
                'created_at' => Carbon::now()->subDays(2),
                'updated_at' => Carbon::now()->subDays(2),
            ],
            [
                'id' => 43,
                'employer_id' => 26,
                'jtype_id' => 1,
                'jlevel_id' => 2,
                'jname' => 'Nhân Viên Lập Trình PHP - Wordpress',
                'address' => 'Hồ Chí Minh: 1073/23 Đ. Cách Mạng Tháng 8, Phường 7, Tân Bình, Thành phố Hồ Chí Minh, Tân Bình',
                'amount' => 5,
                'min_salary' => 8,
                'max_salary' => 15,
                'yoe' => 1,
                'gender' => null,
                'description' => 'Thực hiện chuyển Website từ HTML tĩnh sang Website động bằng CMS Wordpress
                Triển khai các dự án, giải pháp thực tế cho khách hàng
                Trực tiếp tham gia các dự án với khách hàng, được trải nghiệm thực tế
                Phát triển các tính năng mới và bảo trì hệ thống
                Hỗ trợ xây dựng tài liệu quản trị Website
                Tham gia Import Data Website
                Thực hiện các công việc liên quan theo sự phân công của cấp trên',
                'requirements' => 'PHP căn bản, luôn được đào tạo Update kỹ năng liên tục
                HTML/CSS, Javascript, Jquery căn bản
                Biết sử dụng CMS Wordpress theme và hiểu về Wordpress plugin
                Biết Wordpress core theme căn bản
                Tư duy lập trình tốt, có khả năng nắm bắt và học hỏi nhanh
                Không ngại thử thách với những ngôn ngữ, framework lập trình mới',
                'benefits' => 'Luôn được hướng dẫn tư duy Logic nghiệp vụ
                Xét lương tối thiểu 1 năm 1 lần và không dưới 10%
                Ngày nghỉ: 12 Ngày phép trong năm + Các ngày Lễ/ Tết, Thưởng tháng 13, Tham gia BHXH, Team building
                Các buổi training chuyên sâu kỹ thuật/ kỹ năng mềm định kỳ
                Các giải thể thao điện tử định kỳ
                Hoạt động bóng đá mỗi thứ 5 hàng tuần
                Team Building tối thiểu 1 lần/năm
                Làm việc tại một môi trường thoải mái về đồng phục nhưng chuẩn mực về thái độCạnh tranh tại đấu trường Mona E-Sport với các môn thể thao HOT như Counter Strike, PES, Fifa... cùng nhiều giải thưởng hấp dẫn
                Hoạt động thể thao, nâng cao sức khỏe thông qua những trận banh siêu kinh điển mỗi tuần
                Leader luôn tạo điều kiện học hỏi và phát triển thông qua các buổi Seminar, giúp nâng cao tay nghề, tư duy làm việc chuyên nghiệp',
                'expire_at' => Carbon::now()->addMonth()->setDay(rand(1, 28))->format('Y/m/d'),
                'interview_round_num' => 3,
                'latitude' => 10.790966, 
                'longitude' => 106.656124,
                'is_active' => 1,
                'created_at' => Carbon::now()->subDays(4),
                'updated_at' => Carbon::now()->subDays(4),
            ],
            [
                'id' => 44,
                'employer_id' => 26,
                'jtype_id' => 1,
                'jlevel_id' => 2,
                'jname' => 'Junior/ Middle Frontend Developer (Reactjs)',
                'address' => 'Hồ Chí Minh: 1073/23 Đ. Cách Mạng Tháng 8, Phường 7, Tân Bình, Thành phố Hồ Chí Minh, Tân Bình',
                'amount' => 5,
                'min_salary' => 8,
                'max_salary' => 18,
                'yoe' => 1,
                'gender' => null,
                'description' => 'Tham gia nghiên cứu và phát triển sản phẩm
                Làm việc theo sự phân công của Leader
                Phối hợp giữa các nhóm để phát triển dự án
                Tham gia các công đoạn tìm hiểu yêu cầu, phân tích, thiết kế, nghiên cứu các dự án Web - Application',
                'requirements' => 'Thành thạo HTML/CSS/JAVASCRIPT.
                Xử lý thành thạo React Hook, Redux, Redux toolkit.
                Sử dụng các thư viện component (e.g. Material UI).
                Hiểu về CSS Frameworks (e.g. Tailwind CSS) và Preprocessors (e.g. Sass, SCSS).
                Làm việc hiệu quả với các công cụ quản lý version (e.g. gitlab).
                Kinh nghiệm tối thiểu 1 năm với Reactjs, hiểu biết về React Native là một lợi thế.
                Có kinh nghiệm làm việc về REST, API, JSON,....
                Tư duy logic tốt.',
                'benefits' => 'Luôn được hướng dẫn tư duy Logic nghiệp vụ
                Xét lương tối thiểu 1 năm 1 lần và không dưới 10%
                Ngày nghỉ: 12 Ngày phép trong năm + Các ngày Lễ/ Tết, Thưởng tháng 13, Tham gia BHXH, Team building
                Các buổi training chuyên sâu kỹ thuật/ kỹ năng mềm định kỳ• Các giải thể thao điện tử định kỳ
                Hoạt động bóng đá mỗi thứ 5 hàng tuần
                Team Building tối thiểu 1 lần/năm
                Làm việc tại một môi trường thoải mái về đồng phục nhưng chuẩn mực về thái độ
                Cạnh tranh tại đấu trường Mona E-Sport với các môn thể thao HOT như Counter Strike, PES, Fifa... cùng nhiều giải thưởng hấp dẫn
                Hoạt động thể thao, nâng cao sức khỏe thông qua những trận banh siêu kinh điển mỗi tuần
                Leader luôn tạo điều kiện học hỏi và phát triển thông qua các buổi Seminar, giúp nâng cao tay nghề, tư duy làm việc chuyên nghiệp',
                'expire_at' => Carbon::now()->addMonth()->setDay(rand(1, 28))->format('Y/m/d'),
                'interview_round_num' => 3,
                'latitude' => 10.790966, 
                'longitude' => 106.656124,
                'is_active' => 1,
                'created_at' => Carbon::now()->subDays(6),
                'updated_at' => Carbon::now()->subDays(6),
            ],
            [
                'id' => 45,
                'employer_id' => 27,
                'jtype_id' => 1,
                'jlevel_id' => 2,
                'jname' => 'FrontEnd Developer (JS, ReactJS)',
                'address' => 'Hồ Chí Minh: Số 308 Trần Phú, Quận 5',
                'amount' => 1,
                'min_salary' => null,
                'max_salary' => null,
                'yoe' => 3,
                'gender' => null,
                'description' => 'Collaborate with cross-functional teams, including designers, back-end developers, product managers, and system administrators, to translate design concepts and business requirements into well-structured and visually appealing user interfaces.
                Develop efficient, scalable, and reusable code using React.js, Nest JS, and Next JS.
                Implement responsive designs and ensure compatibility across different devices and browsers.
                Optimize application performance to ensure fast rendering and smooth user interactions.
                Write clean, maintainable, and testable code following best practices and coding standards.
                Conduct code reviews and provide constructive feedback to team members to ensure high code quality and consistency.
                Collaborate with NodeJS Back End developers to define and consume APIs for seamless integration.
                Work closely with the UX/UI design team to provide technical insights and ensure UI designs are implementable and user-friendly.
                Participate in project planning, estimation, and task prioritization to meet project timelines and deliverables.
                Troubleshoot and debug issues, identify and implement solutions, and perform thorough testing to ensure high-quality software delivery.
                Contribute to improving development processes, tools, and methodologies to enhance team efficiency and productivity.
                Collaborate with system administrators to deploy and maintain the software in an AWS environment.',
                'requirements' => 'Bachelor\'s degree in Computer Science, Software Engineering, or a related field.
                Proven experience (3+ years) as a React Front-end Developer, working on complex web applications.
                Strong proficiency in JavaScript, ES6+, HTML5, and CSS3.
                Extensive experience with React.js and its ecosystem (React Router, Redux/MobX, etc.).
                Experience with server-side rendering using Next JS and building APIs using Nest JS.
                Familiarity with UI/UX principles and ability to work closely with designers to implement pixel-perfect designs.
                Experience with responsive and mobile-first development techniques.
                Solid understanding of front-end build tools (Webpack, Babel, etc.) and package managers (npm, Yarn).
                Knowledge of modern front-end development workflows (GIT, CI/CD, code linting, testing, etc.).
                Understanding of RESTful APIs and integration with back-end services.
                Strong problem-solving and debugging skills, with the ability to identify and resolve front-end issues effectively.
                Excellent communication and collaboration skills, with the ability to work in a cross-functional team environment.Proven experience or willingness to cover the Business Analyst (BA) and Tester functions.
                Familiarity with AWS services and deployment processes.
                Self-motivated, proactive, and able to work independently as well as in a team setting.',
                'benefits' => 'Lunch allowance, Commuting allowance, Accommodation allowance
                Challenging and rewarding projects that contribute to the improvement of the education sector.
                Collaborative and supportive work environment with a focus on teamwork and knowledge sharing.
                9AM - 5PM, Monday - Friday, paid OT, promoting work-life balance.
                Health insurance and other benefits as per company policy.
                Continuous learning and development opportunities through training, workshops, and conferences.
                Performance evaluations and feedback as requested.
                Opportunity to make a meaningful impact in the lives of students and educational institutions through innovative software solutions',
                'expire_at' => Carbon::now()->addMonth()->setDay(rand(1, 28))->format('Y/m/d'),
                'interview_round_num' => 3,
                'latitude' => 21.010369, 
                'longitude' => 105.815518,
                'is_active' => 1,
                'created_at' => Carbon::now()->subDays(2),
                'updated_at' => Carbon::now()->subDays(2),
            ],
            [
                'id' => 46,
                'employer_id' => 27,
                'jtype_id' => 1,
                'jlevel_id' => 3,
                'jname' => 'Trưởng Nhóm Kinh Doanh / Sale Team Leader',
                'address' => '- Hà Nội: Số 65 Yên Lãng, Đống Đa
                - Hà Nội: Số 16 Nguyễn Văn Huyên, Phường Quan Hoa, Cầu Giấy
                - Hà Nội: V6B-05, Phố Văn Khê, KDT Văn Phú, Phường Phú La, Hà Đông',
                'amount' => 1,
                'min_salary' => 20,
                'max_salary' => 35,
                'yoe' => 1,
                'gender' => null,
                'description' => 'a. Cá nhân
                Trực tiếp tư vấn và giải đáp chi tiết các thắc mắc về chương trình học cho học viên tại trung tâm và các đối tác
                Trực tiếp hỗ trợ học viên xuyên suốt quá trình học tập, đảm bảo học viên luôn được giải đáp thông tin chính xác và nhanh chóng.
                Tham gia các hoạt động phát triển kinh doanh, các sự kiện với đối tác
                b. Quản lý nhóm                
                Quản lý team kinh doanh với 3 - 5 thành viên
                Lên kế hoạch làm việc cho cá nhân và team, đảm bảo đạt/vượt chỉ tiêu về doanh thu
                Làm việc trực tiếp với Quản lý kinh doanh khu vực (SM) để nắm các thay đổi về quy định, chính sách, kế hoạch.
                Báo cáo mỗi giai đoạn và tính commission cho nhân sự trong team',
                'requirements' => 'Có kinh nghiệm sale về lĩnh vực Giáo dục ít nhất 1 năm
                Có khả năng đàm phán – thuyết phục tốt, chịu được áp lực công việc
                Kỹ năng quản lý, dẫn dắt và điều phối nhân sự
                Xây dựng mục tiêu công việc cụ thể, rõ ràng
                Có laptop cá nhân',
                'benefits' => 'Thu nhập thực tế từ 20M – 35M, cụ thể: 
                Lương cứng: 16M - 35M (deal trực tiếp trong buổi phỏng vấn) 
                Hoa hồng: theo chế độ của Phòng Kinh doanh (thưởng cá nhân, thưởng team, thưởng tháng, thưởng Quý, thưởng tích lũy năm) 
                Thưởng nóng + các khoản lương dự án khác 
                Lương tăng ca x 150%
                Hỗ trợ tiền ăn trưa từ 780.000 - 1.300.000Đ (tính riêng với lương)
                Lộ trình thăng tiến lên Quản lý Trung Tâm hoặc Quản lý kinh doanh khu vực hoặc Giám đốc dự án (sau 9 - 15 tháng)
                Môi trường làm việc năng động, chuyên nghiệp, khuyến khích tư duy mở và sáng tạo
                Quà sinh nhật, thưởng Lễ, Tết đầy đủ
                Được đóng BHXH, BHYT, lương thưởng theo Luật lao động quy định sau khi kết thúc thử việc',
                'expire_at' => Carbon::now()->addMonth()->setDay(rand(1, 28))->format('Y/m/d'),
                'interview_round_num' => 3,
                'latitude' => 21.010369, 
                'longitude' => 105.815518,
                'is_active' => 1,
                'created_at' => Carbon::now()->subDays(2),
                'updated_at' => Carbon::now()->subDays(2),
            ],
            [
                'id' => 47,
                'employer_id' => 28,
                'jtype_id' => 1,
                'jlevel_id' => 3,
                'jname' => 'Technical Lead Frontend ( ReactJS )',
                'address' => 'Hồ Chí Minh: 374 Võ Văn Tần, phường 5, Quận 3',
                'amount' => 1,
                'min_salary' => null,
                'max_salary' => null,
                'yoe' => 5,
                'gender' => null,
                'description' => 'Quản lý Dự Án:
                Lên kế hoạch và phân chia công việc cho các thành viên trong nhóm.
                Theo dõi tiến độ dự án, đảm bảo các mốc thời gian được tuân thủ.
                Đánh giá và phân tích yêu cầu dự án, tham gia vào quá trình lập kế hoạch và thiết kế hệ thống.
                Phát Triển Frontend:
                Thiết kế và tạo tài liệu giải pháp kỹ thuật và tài liệu thiết kế hệ thống. Đảm bảo tuân thủ các mẫu thiết kế phù hợp (design pattern).
                Đảm bảo chất lượng mã nguồn và tuân thủ các tiêu chuẩn lập trình của công ty của các thành viên.
                Quản lý mã nguồn theo quy trình và thiết lập các luồng tích hợp (CI:CD).
                Tham gia viết mã nguồn cùng nhóm lập trình với ReactJS.
                Phối hợp thực hiện kiểm thử hiệu suất hệ thống và điều chỉnh tối ưu hệ thống.
                Khắc phục lỗi an toàn bảo mật thông tin.
                Hỗ trợ vận hành và khắc phục lỗi môi trường sản xuất.',
                'requirements' => 'Trình Độ Học Vấn:
                Tốt nghiệp đại học chuyên ngành Công nghệ Thông tin hoặc các ngành liên quan.
                Kinh Nghiệm:
                Có ít nhất 5 năm kinh nghiệm trong lĩnh vực phát triển phần mềm Frontend.
                Ít nhất 2 năm kinh nghiệm ở vị trí quản lý nhóm kỹ thuật lập trình.
                Kỹ Năng:
                Thành thạo ReactJS và các thư viện liên quan.
                Kinh nghiệm trong thiết kế và phát triển giao diện theo kiến trúc Microservice.
                Kỹ năng lập trình vững chắc với các công nghệ Frontend khác (HTML, CSS, JavaScript).
                Hiểu biết sâu về các công cụ và phương pháp quản lý dự án phần mềm (ví dụ: Agile, Scrum).
                Kỹ năng giao tiếp và lãnh đạo tốt.
                Khả năng giải quyết vấn đề và đưa ra quyết định nhanh chóng và hiệu quả.
                Phẩm Chất Cá Nhân:
                Chịu được áp lực công việc cao.
                Tư duy logic, sáng tạo và có trách nhiệm.
                Kỹ năng làm việc nhóm tốt và tinh thần hợp tác.',
                'benefits' => 'Mức lương cạnh tranh và thưởng hiệu suất.
                12 ngày phép năm + 3 ngày nghỉ ốm + 1 ngày sinh nhật mỗi năm
                Chế độ bảo hiểm theo quy định của nhà nước và công ty.
                Cơ hội tham gia các khóa đào tạo nâng cao chuyên môn.
                Môi trường làm việc năng động, sáng tạo và có cơ hội thăng tiến.
                Hoạt động du lịch hằng năm, teambuilding và các hoạt động cộng đồng.',
                'expire_at' => Carbon::now()->addMonth()->setDay(rand(1, 28))->format('Y/m/d'),
                'interview_round_num' => 3,
                'latitude' => 10.770592, 
                'longitude' => 106.684486,
                'is_active' => 1,
                'created_at' => Carbon::now()->subDays(4),
                'updated_at' => Carbon::now()->subDays(4),
            ],
            [
                'id' => 48,
                'employer_id' => 28,
                'jtype_id' => 1,
                'jlevel_id' => 2,
                'jname' => 'Business Analyst (Senior)',
                'address' => 'Hồ Chí Minh: 374 Võ Văn Tần, phường 5, Quận 3',
                'amount' => 3,
                'min_salary' => null,
                'max_salary' => null,
                'yoe' => 3,
                'gender' => null,
                'description' => '• Understanding and documenting business processes and workflows and their relationships to current and future software solutions.
                • Partnering with business users to fully surface their requirements (finance, insurance, banking, enterprise domain), conducting interviews with key project stakeholders and document and presenting the results.
                • Completing research and providing analysis as needed to support Management in decision making
                • Help manage expectations of users and management, consulting users in translate their expectation into software requirements. Analyzing the impact of change requests.
                • Gathering critical information from meetings with various stakeholders and producing useful reports.
                • Serving as a liaison between stakeholders and users.
                • Monitoring deliverables and ensuring timely completion of projects.
                • Assist Technology Solutions teams in documenting scope, defining gaps and updating implementation estimates.
                • Work with PM, Technical leads and other technical roles to design optimal solution.
                • Design application mock-up / wireframe using prototyping tools and model the requirements by using charting tools.',
                'requirements' => '• 4+ years - work experience in systems or quantitative analysis and business solutions development.
                • Knowledge of the life insurance, finance - banking industry.
                • Analytical, organized with excellent written and verbal communication skills.
                • Proven application of analytical skills and solution focused mindset.
                • Knowledge of Business Process Modeling using decision tables/trees and data flows, etc.
                • Basic understanding of technology system interfaces and data integration.
                • Work experience or an education in programming and also knowledge in database.
                • Proven analytical abilities.
                • Practical experience generating process documentation and reports.
                • Excellent communicator with the ability to translate data into actionable insights.
                • Microsoft software experience (i.e., Excel, Word, Access and Project).
                • Familiarity with project management methods (Agile, Waterfall, etc.).',
                'benefits' => 'Competitive salary and benefits;
                Working time: 8:30AM - 05:30PM, Monday – Friday;
                12 days of annual leave + 3 days of sick leave + 1 day of birthday per year
                Participated in social insurance, unemployment insurance, health insurance and full policies according to the labor law;
                13th month salary & bonus policies, allowances at the Company;
                UNIT-Care health care insurance by level;
                Salary increases according to company regulations or unexpected salary raise in case of outstanding ability;
                Professional and dynamic working environment, unlimited promotion opportunities;
                Opportunity to participate in many large projects in Vietnam & abroad;
                Work on the latest technology platform;
                Join in company trip, teambuilding & community activities.',
                'expire_at' => Carbon::now()->addMonth()->setDay(rand(1, 28))->format('Y/m/d'),
                'interview_round_num' => 3,
                'latitude' => 10.770592, 
                'longitude' => 106.684486,
                'is_active' => 1,
                'created_at' => Carbon::now()->subDays(4),
                'updated_at' => Carbon::now()->subDays(4),
            ],
            [
                'id' => 49,
                'employer_id' => 29,
                'jtype_id' => 3,
                'jlevel_id' => 1,
                'jname' => 'Thực Tập Sinh PHP - Fulltime',
                'address' => '- Hà Nội: tòa Mitec, Dương Đình Nghệ, Yên Hòa, Cầu Giấy',
                'amount' => 2,
                'min_salary' => null,
                'max_salary' => null,
                'yoe' => null,
                'gender' => null,
                'description' => 'Review lại kiến thức về Html/css/js, Mysql theo chương trình nội bộ
                Review lại kiến thức về PHP cơ bản theo chương trình nội bộ
                Làm quen với CMS hoặc Framework Laravel dựa theo mong muốn
                Tham gia xây dựng và phát triển hệ thống.
                Lập trình các module phần mềm theo yêu cầu và chỉ dẫn của Leader
                Tìm hiểu nghiệp vụ, đề xuất giải pháp và lập trình các module, phần mềm theo dự án được giao;
                Thực hiện sửa các lỗi phát hiện trong quá trình phát triển hệ thống.',
                'requirements' => 'Sinh viên năm cuối hoặc đã tốt nghiệp trong lĩnh vực CNTT, Khoa học máy tính hoặc các ngành liên quan (có thể đi làm Full-time)
                Nắm chắc kiến thức cơ bản về lập trình PHP, tư duy lập trình tốt và yêu thích lập trình PHP
                Yêu thích tìm tòi các cms, framework laravel ...
                Biết căn bản html/ css và javascript
                Chịu khó tìm tòi học hỏi, tác phong làm việc chuyên nghiệp, năng động, cầu tiến, có trách nhiệm với công việc
                Có kĩ năng đọc hiểu English ở mức tương đương TOEIC 600 trở lên, ứng viên có khả năng giao tiếp English là lợi thế
                CV vui lòng ghi rõ các dự án/đồ án/bài tập lớn đã làm.',
                'benefits' => 'Ký hợp đồng đào tạo trong vòng 3 tháng, công ty có mức hỗ trợ khi TTS join vào dự án
                Có cơ hội trở thành nhân viên chính thức với nhiều đãi ngộ hấp dẫn.
                Được đào tạo fulltime, định hướng bởi mentor giỏi và có nhiều kinh nghiệm.
                Tiếp cận với những công nghệ tiên tiến, định hướng lộ trình phát triển nghề nghiệp.
                Môi trường làm việc năng động, trẻ trung, thân thiện khuyến khích trao đổi phản hồi
                Tham gia các sự kiện của công ty như team building, du lịch hè, các CLB của Công ty: Bóng đá, Gym, Media ...
                Được nhận quà Tết, quà sinh nhật công ty, quà chào mừng nhân viên mới ...
                Làm việc trong môi trường sáng tạo năng động, được trao quyền làm chủ, nhiều thử thách và cơ hội phát triển năng lực cá nhân, đồng nghiệp thân thiện cởi mở.
                Cơ hội thăng tiến rõ ràng, định kỳ đánh giá công việc hàng tháng quý năm
                Sôi nổi các hoạt động phong trào học tập phát triển',
                'expire_at' => Carbon::now()->addMonth()->setDay(rand(1, 28))->format('Y/m/d'),
                'interview_round_num' => 2,
                'latitude' => 21.0200084, 
                'longitude' => 105.7813238,
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 50,
                'employer_id' => 29,
                'jtype_id' => 1,
                'jlevel_id' => 2,
                'jname' => 'Middle/Senior ReactJS Developer',
                'address' => '- Hà Nội: tòa Mitec, Dương Đình Nghệ, Yên Hòa, Cầu Giấy',
                'amount' => 1,
                'min_salary' => null,
                'max_salary' => null,
                'yoe' => 4,
                'gender' => null,
                'description' => 'Build web application UIs using modern technologies (HTML5, CSS3, JavaScript, etc.) and ReactJS framework.
                Participate in all stages of development: requirement analysis, estimation, implementation, code review, unit testing, and overall testing.
                Collaborate with cross-functional teams to deliver high-quality web interfaces and applications.
                Optimize existing products for improved efficiency.
                Continuously learn new technologies and stay updated on industry trends.
                Contribute to technical and user documentation.
                Mentor and train intern/junior developers.',
                'requirements' => 'Proficient in HTML5, CSS3, and JavaScript
                Have deep knowledge of Javascript and Typescript
                4+ years experience working with Frontend framework
                Familiarity with RESTful APIs and GraphQL
                Experience with responsive and adaptive design across browsers and platforms
                Debugging skills and strong sense of UI/UX design principles
                Familiarity with Git/Git-flow and code review processes
                Ability to write clean, maintainable, and well-documented code
                Strong problem-solving skills',
                'benefits' => 'Competitive Salary
                Bonuses: 13th-month salary, performance-based bonuses tied to the company\'s business performance, individual capacity, etc.
                Full Salary During Probation: Employees receive 100% of their salary during the probationary period.
                Social and Health Insurance: Social insurance, health insurance, and unemployment insurance as regulated by the government. Social insurance payment is processed during the labor contract signing process.
                Top-up Health Insurance for Employees after 1 year of employment contract signing
                Additional Benefits: Longevity benefits, annual health check-up, bi-annual performance reviews, yearly travel and quarterly team-building activities
                Company Clubs: Participation in company clubs such as Football Club, Game Club, Gym Club, Badminton Club, Media Club, etc.
                Gifts and Recognition: Gifts for Tet (Lunar New Year), company birthday, welcoming new employees, and other special occasions.
                Training and Development:
                Access to complimentary in-house training with experienced instructors.
                Support for external training programs.
                Policies that promote learning activities, knowledge exchange, and sharing.
                Working Hours: 5 days/week, Monday to Friday
                Flexible working hours: 8 hours/day, can start between 8:30 am and 9:00 am and end between 5:30 pm and 6:00 pm.',
                'expire_at' => Carbon::now()->addMonth()->setDay(rand(1, 28))->format('Y/m/d'),
                'interview_round_num' => 2,
                'latitude' => 21.0200084, 
                'longitude' => 105.7813238,
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 51,
                'employer_id' => 29,
                'jtype_id' => 1,
                'jlevel_id' => 2,
                'jname' => 'Middle QA Tester',
                'address' => '- Hà Nội: tòa Mitec, Dương Đình Nghệ, Yên Hòa, Cầu Giấy',
                'amount' => 1,
                'min_salary' => null,
                'max_salary' => null,
                'yoe' => 4,
                'gender' => null,
                'description' => 'Tham gia phân tích yêu cầu cho các dự án phát triển phần mềm.
                Tạo test scenario, test checklist, test case...
                Tạo test data, thiết lập môi trường kiểm thử.
                Lên plan và control plan, chất lượng dự án.
                Báo lỗi, giám sát việc sửa lỗi của nhà phát triển và đảm bảo chất lượng của phần mềm.
                Đánh giá test result và viết test report.
                Đề xuất, điều chỉnh quy trình phát triển sản phẩm phù hợp với yêu cầu cụ thể của từng dự án, kiểm soát đảm bảo thực hiện đúng quy trình đã thống nhất.
                Kiểm soát tiến độ và chất lượng dự án. (Ứng viên chưa có kinh nghiệm sẽ được đào tạo)
                Đánh giá/Phát hiện rủi ro, đưa ra giải pháp phòng tránh rủi ro và giải quyết vấn đề.
                Mentor và train intern/junior QC (nếu chưa có kinh nghiệm sẽ được đào tạo)',
                'requirements' => 'Có ít nhất 4 năm kinh nghiệm test web/ test app trên thiết bị di động (không tính thời gian thực tập), đã có kinh nghiệm làm dự án thị trường Nhật
                Có kiến thức chung liên quan đến kiểm thử: định nghĩa cơ bản, thuật ngữ và quy trình phát triển phần mềm
                Có khả năng phân tích và chuyển các yêu cầu sang tài liệu.
                Có khả năng Q&A và đàm phán với khách hàng.
                Đọc hiểu tốt và tạo tài liệu kiểm tra bằng tiếng Anh: test plan, test design, test viewpoint, checklist, test cases
                Quản lý, phân tích, theo dõi kết quả test từ đó báo cáo và đánh giá chất lượng sản phẩm
                Có thể review ouput của các member trong team
                Kỹ năng tổ chức và quản lý; tự nghiên cứu, định nghĩa và quản lý tài liệu test
                Kỹ năng đọc viết tài liệu bằng tiếng anh
                Đã từng làm việc với môi trường có áp lực cao
                Ứng viên có kinh nghiệm trong mảng blockchain là lợi thế',
                'benefits' => 'Lương thỏa thuận theo năng lực
                Thưởng lương tháng 13, thưởng hiệu quả theo tình kinh doanh của công ty, thưởng đột xuất theo năng lực cá nhân, ...
                Thử việc 2 tháng: nhận 100% mức lương
                Được hưởng BHXH, BHYT, BHTN theo chế độ nhà nước ban hành.
                Bảo hiểm Sức khỏe cao cấp dành cho toàn bộ CBNV (sau khi ký HĐLĐ 1 năm)
                Chế độ thâm niên
                Khám sức khỏe 1 lần/năm
                Review performance: 2 đợt/năm
                Được tham gia các Câu lạc bộ của Công ty: CLB Bóng đá, các CLB Game, CLB Gym, CLB Cầu Lông, Media...
                Quà Tết, Quà sinh nhật công ty, Quà chào mừng nhân viên mới, Quà các dịp lễ ...',
                'expire_at' => Carbon::now()->addMonth()->setDay(rand(1, 28))->format('Y/m/d'),
                'interview_round_num' => 2,
                'latitude' => 21.0200084, 
                'longitude' => 105.7813238,
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 52,
                'employer_id' => 30,
                'jtype_id' => 1,
                'jlevel_id' => 1,
                'jname' => 'ReactJS Fresher',
                'address' => '- Hà Nội: Tòa nhà Song Da, HH4, Mễ Trì, Nam Từ Liêm, Hà Nội, Nam Từ Liêm',
                'amount' => 1,
                'min_salary' => 4,
                'max_salary' => 6,
                'yoe' => null,
                'gender' => null,
                'description' => 'Tham gia training với vai trò ReactJS Fresher
                Nắm được các kiến thức, kỹ năng về công việc, hoạt động trong dự án, bộ phận Trung tâm sản xuất phần mềm
                Có cơ hội chính thức tại các dự án với vai trò ReactJS Developer sau khi kết thúc training',
                'requirements' => 'Sinh viên Công nghệ thông tin năm cuối (fulltime), hoặc mới tốt nghiệp các trường Đại học/ Cao đẳng
                Kiến thức: Biết, hiểu và sử dụng ngôn ngữ lập trình hướng đối tượng
                Kinh nghệm: Tham gia bài tập lớn (1 sản phẩm cụ thể) tại trường hoặc tham gia dự án tại các công ty, tổ chức
                Ưu tiên: Tốt nghiệp loại Khá trở lên. Đã tham gia các khóa học, được đào tạo về lập trình (học online, tại trung tâm đào tạo)
                Tinh thần/Thái độ: Chủ động và Khả năng tự học tốt
                Ngoại ngữ (Tiếng Anh): Có khả năng đọc, hiểu được các tài liệu kỹ thuật bằng tiếng anh. Nói, viết ở mức cơ bản',
                'benefits' => '- Có trợ cấp trong đào tạo theo đánh giá năng lực và chuyên cần.
                - Có cơ hội được ký HĐLĐ chính thức với Công ty sau khi thời gian đào tạo fresher và nhận mức lương hấp dẫn.
                - Giảng viên, mentor là các anh/chị có nhiều kinh nghiệm, chuyên môn sâu và được đánh giá rất cao.
                - Hỗ trợ vé xe hàng tháng, các thiết bị văn phòng phẩm phục vụ việc học tập.
                - Chương trình đào tạo bài bản lên chính thức và hoàn toàn không mất phí.
                - Chương trình được mở ra hoàn toàn mới mục đích tìm kiếm và đào tạo nguồn nhân lực chất lượng cho Công ty trong tương lai, nên chương trình học rất được đầu tư và không ngừng cải tiến nhằm đảm bảo chất lượng đào tạo là tốt nhất.',
                'expire_at' => Carbon::now()->addMonth()->setDay(rand(1, 28))->format('Y/m/d'),
                'interview_round_num' => 3,
                'latitude' => 21.017707, 
                'longitude' => 105.781228,
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 53,
                'employer_id' => 30,
                'jtype_id' => 1,
                'jlevel_id' => 2,
                'jname' => 'IT Comtor (Japanese)',
                'address' => '- Hà Nội: Tòa nhà Song Da, HH4, Mễ Trì, Nam Từ Liêm, Hà Nội, Nam Từ Liêm',
                'amount' => 1,
                'min_salary' => null,
                'max_salary' => null,
                'yoe' => 2,
                'gender' => null,
                'description' => 'Dịch các tài liệu Nhật - Việt, Việt - Nhật;

                Phiên dịch trong các buổi meeting dự án, đảm bảo thông tin dự án được truyền đạt chính xác và kịp thời tới 2 phía khách hàng và team phát triển;
                
                Support team member về mặt nghiệp vụ và kết hợp với Project Manager trong việc quản lý tiến độ dự án',
                'requirements' => 'Chứng chỉ tiếng Nhật N1, N2 cứng;

                Có ít nhất 1 năm kinh nghiệm làm IT Comtor;
                
                Khả năng diễn đạt và giao tiếp hiệu quả;
                
                Đam mê và có khả năng học hỏi cái mới nhanh;
                
                Nhanh nhẹn, tích cực trong công việc và có tinh thần cầu tiến;
                
                Năng động, tích cực trong các hoạt động gắn kết chung.
                
                Nice to have:
                
                Ưu tiên có kiến thức/kinh nghiệm BA;
                
                Có khả năng biên dịch và soạn thảo tài liệu bằng tiếng Nhật
                
                Có tinh thần ham học hỏi, chịu được áp lực công việc cao, có khả năng làm việc theo nhóm.',
                'benefits' => 'Review hiệu quả công việc: 2 lần 1 năm vào tháng 6 và tháng 12, không giới hạn mức điều chỉnh lương;

                Thưởng cuối năm, tháng lương thứ 13: Theo thời gian làm việc thực tế trong năm;
                
                Bảo hiểm sức khỏe nâng cao cho bản thân khi có thâm niên 1 năm làm việc, từ 1.5 năm sẽ được hỗ trợ khi mua bảo hiểm cho gia đình;
                
                Đào tạo: Chương trình đào tạo nội bộ định kỳ hàng tuần, tháng, quý; chính sách tài trợ thi lấy chứng chỉ;
                
                Khám sức khỏe định kỳ: 1 năm 1 lần;
                
                Nghỉ mát hàng năm, thể thao, teambuilding, sinh nhật tháng, ngày lễ, các event nội bộ như Du xuân, Giải bóng đá, Men’s Day, Women’s Day,...
                
                Môi trường làm việc: Năng động, vui vẻ được đầu tư tổ chức bài bản; CLB Cầu Lông, Yoga, bóng đá, CLB văn hóa Nhật Bản,...
                
                Thời gian: linh hoạt trong giờ hành chính, thứ 2 - thứ 6; nghỉ cuối tuần.',
                'expire_at' => Carbon::now()->addMonth()->setDay(rand(1, 28))->format('Y/m/d'),
                'interview_round_num' => 1,
                'latitude' => 21.017707, 
                'longitude' => 105.781228,
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 54,
                'employer_id' => 30,
                'jtype_id' => 1,
                'jlevel_id' => 1,
                'jname' => 'Comtor Intern',
                'address' => '',
                'amount' => 3,
                'min_salary' => 4,
                'max_salary' => 6,
                'yoe' => null,
                'gender' => null,
                'description' => '- Dịch chat, dịch họp trao đổi team với KH

                - Dịch tài liệu dự án
                
                - Follow Opp
                
                - Hỗ trợ PM quản lý tiến độ dự án
                
                - Hỗ trợ PM transfer spec cho team
                
                - Training các member lv thấp hơn',
                'requirements' => '- JLPT N2 trở lên

                - Sinh viên năm 4 hoặc đã tốt nghiệp Đại học chuyên ngành tiếng Nhật hoặc liên quan
                
                ※Ưu tiên đối tượng đã có thời gian du học/làm việc Nhật
                
                - Chủ động, năng nổ, thích tham gia các hoạt động chung
                
                - Có kỹ năng văn phòng tốt
                
                - Không yêu cầu kinh nghiệm Comtor',
                'benefits' => '- Có trợ cấp trong đào tạo upto 6M theo đánh giá năng lực và chuyên cần.

                - Có cơ hội được ký HĐLĐ chính thức với Công ty sau khi thời gian đào tạo fresher/intern và nhận mức lương hấp dẫn.
                
                - Giảng viên, mentor là các anh/chị có nhiều kinh nghiệm, chuyên môn sâu và được đánh giá rất cao.
                
                - Hỗ trợ vé xe hàng tháng, các thiết bị văn phòng phẩm phục vụ việc học tập.
                
                - Chương trình đào tạo bài bản lên chính thức và hoàn toàn không mất phí.
                
                - Chương trình được mở ra hoàn toàn mới mục đích tìm kiếm và đào tạo nguồn nhân lực chất lượng cho Công ty trong tương lai, nên chương trình học rất được đầu tư và không ngừng cải tiến nhằm đảm bảo chất lượng đào tạo là tốt nhất.',
                'expire_at' => Carbon::now()->addMonth()->setDay(rand(1, 28))->format('Y/m/d'),
                'interview_round_num' => 1,
                'latitude' => 21.017707, 
                'longitude' => 105.781228,
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 55,
                'employer_id' => 31,
                'jtype_id' => 3,
                'jlevel_id' => 1,
                'jname' => 'Thực Tập Sinh Reactjs',
                'address' => 'Tầng 4, Tòa CT1, Tòa nhà Bắc Hà C14, phố Tố hữu, Phường Trung Văn, Quận Nam Từ Liêm, Thành phố Hà Nội, Việt Nam',
                'amount' => 1,
                'min_salary' => null,
                'max_salary' => null,
                'yoe' => null,
                'gender' => null,
                'description' => 'Tham gia phát triển các dự án phần mềm.
                Thực hiện coding theo các công việc được giao.
                Công nghệ sử dụng: ReacJS',
                'requirements' => 'Sinh viên năm 3, 4 chuyên ngành CNTT, toán tin, khoa học máy tính,... hoặc tương đương.
                Có thể đi làm fulltime
                Có tư duy logic tốt
                Có kiến thức về một trong các ngôn ngữ lập trình hoặc frameworks liên quan
                Chịu khó học hỏi, đam mê kỹ thuật
                Có khả năng đọc hiểu tiếng Anh là lợi thế
                Có tiếng Nhật là lợi thế',
                'benefits' => 'Mức lương tính theo giờ: từ 20.000đ - 60.000đ/giờ
                Được đào tạo các kiến thức cơ bản trước khi vào dự án.
                Được Training on Job trong các dự án của Khách hàng Nhật
                Cơ hội lên nhân viên chính thức với nhiều quyền lợi hấp dẫn
                Tham gia các khóa học nâng cao trình độ chuyên môn qua Portal đào tạo nội bộ hoặc các khóa học trực tiếp với các giảng viên uy tín.
                Cơ hội làm việc và đào tạo tại Nhật Bản với các ứng viên có tiếng Nhật
                Làm việc trong môi trường chuyên nghiệp, được hỗ trợ phát huy
                Được tham gia các câu lạc bộ của công ty: CLB Bóng đá, CLB Game, CLB Beauty, CLUB Dance...
                Được tham gia các hoạt động tập thể sôi động của công ty: nghỉ mát hàng năm, teambuilding hàng quý, gala cuối năm....',
                'expire_at' => Carbon::now()->addMonth()->setDay(rand(1, 28))->format('Y/m/d'),
                'interview_round_num' => 3,
                'latitude' => 20.972259, 
                'longitude' => 105.757399,
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 56,
                'employer_id' => 31,
                'jtype_id' => 1,
                'jlevel_id' => 2,
                'jname' => 'IT Comtor (Tiếng Nhật N2)',
                'address' => 'Tầng 4, Tòa CT1, Tòa nhà Bắc Hà C14, phố Tố hữu, Phường Trung Văn, Quận Nam Từ Liêm, Thành phố Hà Nội, Việt Nam',
                'amount' => 1,
                'min_salary' => null,
                'max_salary' => null,
                'yoe' => null,
                'gender' => null,
                'description' => 'Phiên dịch trong các buổi làm việc hàng ngày của dự án với khách hàng Nhật Bản;
                Dịch văn bản, tài liệu và phiên dịch trong các cuộc họp;
                Là đầu mối liên hệ giữa Công ty và khách hàng Nhật;
                Chi tiết trao đổi thêm trong buổi phỏng vấn.',
                'requirements' => 'YÊU CẦU CHUNG

                Tiếng Nhật: Trình độ N2 cứng trở lên
                Có kinh nghiệm tại vị trí communicator từ 1 năm trở lên; ưu tiên khả năng giao tiếp tốt;
                Có hứng thú, yêu thích làm việc trong ngành IT
                
                ƯU TIÊN
                Ưu tiên ứng viên từng học tập, làm việc tại Nhật Bản
                
                YÊU CẦU KHÁC
                Có tinh thần trách nhiệm cao trong công việc;
                Có khả năng làm việc độc lập và làm việc theo nhóm;
                Có khả năng đọc hiểu tiếng Anh là lợi thế.',
                'benefits' => 'Mức lương khởi điểm hấp dẫn, cạnh tranh, tương xứng với năng lực và kinh nghiệm làm việc;
                Thu nhập: 13 tháng lương/năm + thưởng dự án, thưởng Tết và các dịp lễ...;
                Xét tăng lương 2 lần/năm theo năng lực và hiệu quả công việc;
                Lương làm thêm giờ theo luật lao động, hỗ trợ đồ ăn OT theo quy định công ty;
                Làm việc từ thứ 2 - thứ 6 (8h30 - 17h30);
                Được tham gia BHXH, BHYT, BHTN theo quy định của pháp luật hiện hành;
                Bảo hiểm chăm sóc sức khỏe 24/24 (Bảo Việt);
                Khám sức khỏe định kỳ 1 năm/1 lần tại bệnh viện Đại học Y Hà Nội;
                Nghỉ ốm hưởng nguyên lương tối đa 30 ngày/ năm (có giấy chứng nhận của bệnh viện);
                Nghỉ sau sinh cho nhân viên nữ có con dưới 1 tuổi: 1h/ngày;
                Nghỉ sinh lý phụ nữ theo luật lao động hiện hành.
                Miễn phí đồ uống tại khu ăn uống của công ty;
                Trợ cấp tiếng Nhật và các chứng chỉ IT liên quan (từ 1000.000 VNĐ - 2.500.000 VNĐ/tháng);',
                'expire_at' => Carbon::now()->addMonth()->setDay(rand(1, 28))->format('Y/m/d'),
                'interview_round_num' => 1,
                'latitude' => 20.972259, 
                'longitude' => 105.757399,
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'id' => 57,
                'employer_id' => 31,
                'jtype_id' => 1,
                'jlevel_id' => 2,
                'jname' => 'Nhân Viên Tư Vấn Tuyển Sinh',
                'address' => 'Tầng 4, Tòa CT1, Tòa nhà Bắc Hà C14, phố Tố hữu, Phường Trung Văn, Quận Nam Từ Liêm, Thành phố Hà Nội, Việt Nam',
                'amount' => 2,
                'min_salary' => null,
                'max_salary' => null,
                'yoe' => 0,
                'gender' => null,
                'description' => 'Tư vấn cho khách hàng theo data của học viện.
                Tìm kiếm nguồn khách hàng, học viên qua các kênh truyền thông.
                Tư vấn và giới thiệu cho khách hàng về các khóa học của Codestar.
                Giải đáp thắc mắc cho khách hàng về các chương trình đào tạo.
                Xây dựng danh sách khách hàng tiềm năng, thiết lập và xây dựng mối quan hệ tốt với khách hàng
                Chăm sóc và hỗ trợ khách hàng trong suốt quá trình khách hàng biết đến CodeStar và tham gia học tại CodeStar.
                Làm Admin các lớp học được phân công.
                Thực hiện các công việc khác theo sự phân công của Giám đốc.',
                'requirements' => 'Có từ 06 tháng kinh nghiệm làm việc tại vị trí tương đương
                Ưu tiên những bạn đã làm Tư vấn tuyển sinh tại các trung tâm đào tạo CNTT.
                Chăm chỉ, sẵn sàng làm việc.
                Trách nhiệm với Công việc cao.
                Tiếng Việt lưu loát, không nói ngọng.
                Có khả năng tư vấn, thuyết phục cao.
                Năng động, tự tin, trung thực, cẩn thận, nhiệt tình.',
                'benefits' => 'Xét tăng lương 2 lần/năm theo năng lực và hiệu quả công việc;
                Làm việc từ thứ 2 - thứ 6 (8h30 - 17h30), 2 ngày thứ 7 trong tháng (8h30 - 17h30);
                Được tham gia BHXH, BHYT, BHTN theo quy định của pháp luật hiện hành;
                Khám sức khỏe định kỳ 1 năm/1 lần tại bệnh viện Đại học Y Hà Nội;
                Nghỉ ốm hưởng nguyên lương tối đa 30 ngày/năm (có giấy chứng nhận của bệnh viện);
                Nghỉ sau sinh cho nhân viên nữ có con dưới 1 tuổi: 1h/ngày;
                Miễn phí đồ uống tại khu ăn uống của công ty;
                Phụ cấp thâm niên; phụ cấp chức vụ;
                Được tham gia các câu lạc bộ của công ty: CLB Bóng đá, CLB Game, CLB Beauty, CLB Dance...
                Được tham gia các hoạt động tập thể sôi động của công ty: nghỉ mát hàng năm, teambuilding hàng quý, gala cuối năm....',
                'expire_at' => Carbon::now()->addMonth()->setDay(rand(1, 28))->format('Y/m/d'),
                'interview_round_num' => 1,
                'latitude' => 20.972259, 
                'longitude' => 105.757399,
                'is_active' => 1,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            // [
            //     'id' => ,
            //     'employer_id' => ,
            //     'jtype_id' => ,
            //     'jlevel_id' => ,
            //     'jname' => '',
            //     'address' => '',
            //     'amount' => ,
            //     'min_salary' => null,
            //     'max_salary' => null,
            //     'yoe' => ,
            //     'gender' => null,
            //     'description' => '',
            //     'requirements' => '',
            //     'benefits' => '',
            //     'expire_at' => Carbon::now()->addMonth()->setDay(rand(1, 28))->format('Y/m/d'),
            //     'interview_round_num' => 3,
            //     'latitude' => , 
            //     'longitude' => ,
            //     'is_active' => 1,
            //     'created_at' => Carbon::now(),
            //     'updated_at' => Carbon::now()
            // ],
            // [
            //     'id' => ,
            //     'employer_id' => ,
            //     'jtype_id' => ,
            //     'jlevel_id' => ,
            //     'jname' => '',
            //     'address' => '',
            //     'amount' => ,
            //     'min_salary' => null,
            //     'max_salary' => null,
            //     'yoe' => ,
            //     'gender' => null,
            //     'description' => '',
            //     'requirements' => '',
            //     'benefits' => '',
            //     'expire_at' => Carbon::now()->addMonth()->setDay(rand(1, 28))->format('Y/m/d'),
            //     'interview_round_num' => 3,
            //     'latitude' => , 
            //     'longitude' => ,
            //     'is_active' => 1,
            //     'created_at' => Carbon::now(),
            //     'updated_at' => Carbon::now()
            // ],
            // [
            //     'id' => ,
            //     'employer_id' => ,
            //     'jtype_id' => ,
            //     'jlevel_id' => ,
            //     'jname' => '',
            //     'address' => '',
            //     'amount' => ,
            //     'min_salary' => null,
            //     'max_salary' => null,
            //     'yoe' => ,
            //     'gender' => null,
            //     'description' => '',
            //     'requirements' => '',
            //     'benefits' => '',
            //     'expire_at' => Carbon::now()->addMonth()->setDay(rand(1, 28))->format('Y/m/d'),
            //     'interview_round_num' => 3,
            //     'latitude' => , 
            //     'longitude' => ,
            //     'is_active' => 1,
            //     'created_at' => Carbon::now(),
            //     'updated_at' => Carbon::now()
            // ],
            // [
            //     'id' => ,
            //     'employer_id' => ,
            //     'jtype_id' => ,
            //     'jlevel_id' => ,
            //     'jname' => '',
            //     'address' => '',
            //     'amount' => ,
            //     'min_salary' => null,
            //     'max_salary' => null,
            //     'yoe' => ,
            //     'gender' => null,
            //     'description' => '',
            //     'requirements' => '',
            //     'benefits' => '',
            //     'expire_at' => Carbon::now()->addMonth()->setDay(rand(1, 28))->format('Y/m/d'),
            //     'interview_round_num' => 3,
            //     'latitude' => , 
            //     'longitude' => ,
            //     'is_active' => 1,
            //     'created_at' => Carbon::now(),
            //     'updated_at' => Carbon::now()
            // ],
            // [
            //     'id' => ,
            //     'employer_id' => ,
            //     'jtype_id' => ,
            //     'jlevel_id' => ,
            //     'jname' => '',
            //     'address' => '',
            //     'amount' => ,
            //     'min_salary' => null,
            //     'max_salary' => null,
            //     'yoe' => ,
            //     'gender' => null,
            //     'description' => '',
            //     'requirements' => '',
            //     'benefits' => '',
            //     'expire_at' => Carbon::now()->addMonth()->setDay(rand(1, 28))->format('Y/m/d'),
            //     'interview_round_num' => 3,
            //     'latitude' => , 
            //     'longitude' => ,
            //     'is_active' => 1,
            //     'created_at' => Carbon::now(),
            //     'updated_at' => Carbon::now()
            // ],
            // [
            //     'id' => ,
            //     'employer_id' => ,
            //     'jtype_id' => ,
            //     'jlevel_id' => ,
            //     'jname' => '',
            //     'address' => '',
            //     'amount' => ,
            //     'min_salary' => null,
            //     'max_salary' => null,
            //     'yoe' => ,
            //     'gender' => null,
            //     'description' => '',
            //     'requirements' => '',
            //     'benefits' => '',
            //     'expire_at' => Carbon::now()->addMonth()->setDay(rand(1, 28))->format('Y/m/d'),
            //     'interview_round_num' => 3,
            //     'latitude' => , 
            //     'longitude' => ,
            //     'is_active' => 1,
            //     'created_at' => Carbon::now(),
            //     'updated_at' => Carbon::now()
            // ],
            // [
            //     'id' => ,
            //     'employer_id' => ,
            //     'jtype_id' => ,
            //     'jlevel_id' => ,
            //     'jname' => '',
            //     'address' => '',
            //     'amount' => ,
            //     'min_salary' => null,
            //     'max_salary' => null,
            //     'yoe' => ,
            //     'gender' => null,
            //     'description' => '',
            //     'requirements' => '',
            //     'benefits' => '',
            //     'expire_at' => Carbon::now()->addMonth()->setDay(rand(1, 28))->format('Y/m/d'),
            //     'interview_round_num' => 3,
            //     'latitude' => , 
            //     'longitude' => ,
            //     'is_active' => 1,
            //     'created_at' => Carbon::now(),
            //     'updated_at' => Carbon::now()
            // ],
            // [
            //     'id' => ,
            //     'employer_id' => ,
            //     'jtype_id' => ,
            //     'jlevel_id' => ,
            //     'jname' => '',
            //     'address' => '',
            //     'amount' => ,
            //     'min_salary' => null,
            //     'max_salary' => null,
            //     'yoe' => ,
            //     'gender' => null,
            //     'description' => '',
            //     'requirements' => '',
            //     'benefits' => '',
            //     'expire_at' => Carbon::now()->addMonth()->setDay(rand(1, 28))->format('Y/m/d'),
            //     'interview_round_num' => 3,
            //     'latitude' => , 
            //     'longitude' => ,
            //     'is_active' => 1,
            //     'created_at' => Carbon::now(),
            //     'updated_at' => Carbon::now()
            // ],
            // [
            //     'id' => ,
            //     'employer_id' => ,
            //     'jtype_id' => ,
            //     'jlevel_id' => ,
            //     'jname' => '',
            //     'address' => '',
            //     'amount' => ,
            //     'min_salary' => null,
            //     'max_salary' => null,
            //     'yoe' => ,
            //     'gender' => null,
            //     'description' => '',
            //     'requirements' => '',
            //     'benefits' => '',
            //     'expire_at' => Carbon::now()->addMonth()->setDay(rand(1, 28))->format('Y/m/d'),
            //     'interview_round_num' => 3,
            //     'latitude' => , 
            //     'longitude' => ,
            //     'is_active' => 1,
            //     'created_at' => Carbon::now(),
            //     'updated_at' => Carbon::now()
            // ],
            // [
            //     'id' => ,
            //     'employer_id' => ,
            //     'jtype_id' => ,
            //     'jlevel_id' => ,
            //     'jname' => '',
            //     'address' => '',
            //     'amount' => ,
            //     'min_salary' => null,
            //     'max_salary' => null,
            //     'yoe' => ,
            //     'gender' => null,
            //     'description' => '',
            //     'requirements' => '',
            //     'benefits' => '',
            //     'expire_at' => Carbon::now()->addMonth()->setDay(rand(1, 28))->format('Y/m/d'),
            //     'interview_round_num' => 3,
            //     'latitude' => , 
            //     'longitude' => ,
            //     'is_active' => 1,
            //     'created_at' => Carbon::now(),
            //     'updated_at' => Carbon::now()
            // ],
        ]);
    }
}
