<?php

namespace Database\Seeders;

use App\Models\CategoryAchievement;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoryAchievementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'name' => 'Pengetahuan Jabatan',
                'quality' => 20,
                'desc' => '(Menilai tingkat penguasaan pengetahuan jabatan dan ketrampilan yang diperlukan sesuai standar kebutuhan tugas)'
            ],
            [
                'name' => 'Kualitas Kerja',
                'quality' => 20,
                'desc' => '(Menilai derajat akurasi, ketuntasan, kelengkapan, kerapian, dan sistemetika dalam pelaksanaan tugas)'
            ],
            [
                'name' => 'Kuantitas Kerja',
                'quality' => 20,
                'desc' => '(Menilai kuantitas tugas yang diselesaikan berdasarkan standar output / target yang ditetapkan untuk tugas)'
            ],
            [
                'name' => 'Kemandirian Karyawan',
                'quality' => 5,
                'desc' => '(Menilai tingginya unsur supervisi yang masih diperlukan untuk karyawan bersangkutan dalam pelaksanaan tugasnya)'
            ],
            [
                'name' => 'Kerjasama & Komunikasi',
                'quality' => 5,
                'desc' => '(Menilai tingkat kemampuan kerjasama dan komunikasi dengan rekan dan atasan dalam pelaksanaan tugas sehari-hari termasuk kualitas layanan terhadap mereka)'
            ],
            [
                'name' => 'Kamampuan Pribadi',
                'quality' => 5,
                'desc' => '(Menilai kemampuan mengambil inisiatif, usaha perbaikan cara kerja, problem solving, kreatif, proaktif , pengembangan diri)'
            ],
            [
                'name' => 'Aspek Khusus',
                'quality' => 5,
                'desc' => '(Menilai tingkat integritas, tanggung jawab, dan etika kerja)'
            ],
            [
                'name' => 'Penampilan & Grooming',
                'quality' => 5,
                'desc' => '(Menilai cara berpenampilan yang rapih dan bersih)'
            ],
            [
                'name' => 'Kedisiplinan Karyawan',
                'quality' => 10,
                'desc' => ''
            ],
            [
                'name' => 'Perilaku dan Sikap Kerja',
                'quality' => 5,
                'desc' => '(Menilai perilaku karyawan dalam menerima kerja yang diberikan perusahaan kepadanya)'
            ],
        ];

        foreach ($data as $key => $value) {
            CategoryAchievement::create($value);
        }
    }
}
