<?php

namespace Database\Seeders;

use App\Models\ColumnList as ModelsColumnList;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ColumnList extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'category_achievement_id' => 1,
                'order' => 'A',
                'column_a' => 'Sangat menguasai pengetahuan jabatan dan dapat pula menerapkan dengan sempurna. Dalam tugas sempurna dan dapat diandalkan',
                'column_b' => 'Menguasai pengetahuan jabatan dengan baik sekali, kadang perlu diarahkan dalam aspek tugas yang kompleks atau tidak rutin',
                'column_c' => 'Menguasai pengetahuan jabatan dengan baik tetapi masih perlu dibantu dalam beberapa aspek pelaksanaan tugasnya',
                'column_d' => 'Memenuhi prasyarat minimum pengetahuan jabatan, masih perlu dibantu dan diarahkan dalam pelaksanaan tugasnya.',
                'column_e' => 'Tidak memenuhi prasyarat minimum jabatan, tidak menguasai sebagian besar aspek tugas.'
            ],
            [
                'category_achievement_id' => 2,
                'order' => 'B',
                'column_a' => 'Kualitas kerja sangat terpuji. Secara konsisten hasil kerja akurat, tuntas, lengkap, rapi, sistematis, terandalkan',
                'column_b' => 'Kualitas kerja baik sekali. Konsisten memenuhi standar yang ditentukan, jarang sekali dibutuhkan perbaikan/ penyesuaian',
                'column_c' => 'Secara konsisten kualitas kerja baik, tetapi kadangkala masih diperlukan koreksi / revisi / penyesuaian kecil ',
                'column_d' => 'Kualitas kerja rata-rata dapat diterima. Sering dibutuhkan perbaikan dan penyesuaian sebelum hasil akhir',
                'column_e' => 'Kualitas kerja tidak dapat diterima. Hasil kerja selalu tidak akurat, tidak lengkap tidak rapi'
            ],
            [
                'category_achievement_id' => 3,
                'order' => 'C',
                'column_a' => 'Secara konsisten hasil kerja luar biasa tinggi, selalu melebihi standar yang ditetapkan. Tingkat kecepatan kerja luar biasa.',
                'column_b' => 'Output kerja konsisten tinggi selalu diatas rata-rata yang dihasilkan rekan karyawan lainnya.',
                'column_c' => 'Output kerja rata-rata dapat diterima',
                'column_d' => 'Output kerja sering dibutuhkan perbaikan dan penyesuaian sebelum hasil akhir.',
                'column_e' => 'Output kerja sangat rendah dan tidak dapat diterima'
            ],
            [
                'category_achievement_id' => 4,
                'order' => 'D',
                'column_a' => 'Tidak membutuhkan supervisi sama sekali. Sepenuhnya mandiri dan terandalkan',
                'column_b' => 'Kadangkala masih perlu sedikit supervisi, khususnya selama pelaksanaan tugas yang kompleks dan rutin.',
                'column_c' => 'Masih diperlukan supervisi dari waktu ke waktu. Kadangkala masih diperlukan juga arahan dari atasan ',
                'column_d' => 'Sering dilakukan supervisi dan arahan dalam pelaksanaan tugasnya',
                'column_e' => 'Selalu membutuhkan penjelasan dan perintah secara mendetail tentang pelaksanaan tugasnya'
            ],
            [
                'category_achievement_id' => 5,
                'order' => 'E',
                'column_a' => 'Efektif luar biasa dalam kerjasama dan komunikasi dengan karyawan lain dalam konteks pelaksanaan tugas.',
                'column_b' => 'Sangat efektif dalam hal kerjasama dan komunikasi dengan karyawan lain dalam konteks pelaksanaan tugas',
                'column_c' => 'Efektif dalam hal kerjasama dan komunikasi dengan karyawan lain dalam konteks pelaksanaan tugas.',
                'column_d' => 'Kadangkala belum efektif dalam hal kerjasama dan komunikasi dengan karyawan lain dalam konteks pelaksanaan tugasnya.',
                'column_e' => 'Tidak efektif dalam hubungan kerjasama dan komunikasi dengan karyawan lain dalam pelaksanaan tugasnya. '
            ],
            [
                'category_achievement_id' => 6,
                'order' => 'F',
                'column_a' => 'Kemampuan pribadi sangat terpuji, berinisiatif, kreatif, proaktif luar biasa, konsisten dalam pengembangan diri',
                'column_b' => 'Kemampuan pribadi baik sekali. Inisiatif, kreatif, proaktif tinggi, konsisten dalam mengembangkan diri.',
                'column_c' => 'Kemampuan pribadi rata-rata dapat diterima. Inisiatif, kreatif, proaktif terlihat, tetapi kadangkala masih perlu bimbingan.',
                'column_d' => 'Kemampuan pribadi sering dibawah rata-rata. Inisiatif, kreatif, proaktif masih perlu terus dibimbing dan dikembangkan.',
                'column_e' => 'Tidak berinisiatif, tidak menunjukkan usaha perbaikan cara kerja, tidak dapat memecahkan masalah, pasif, tidak kreatif.'
            ],
            [
                'category_achievement_id' => 7,
                'order' => 'G',
                'column_a' => 'Menjalankan tugas dengan penuh integritas dan tanggung jawab yang sangat baik dan  perilaku / etika kerja yang sangat positif',
                'column_b' => 'dengan penuh integritas dan tanggung jawab yang  baik dan perilaku / etika kerja yang  positif',
                'column_c' => 'Menjalankan tugas dengan  integritas dan tanggung jawab yang cukup baik dan perilaku / etika kerja yang cukup positif',
                'column_d' => 'Menjalankan tugas dengan tanpa integritas dan tanggung jawab yang kurang baik dan perilaku / etika kerja yang kurang positif',
                'column_e' => 'Menjalankan tugas dengan tanpa integritas dan tanggung jawab yang tidak baik dan perilaku / etika kerja yang tidak positif '
            ],
            [
                'category_achievement_id' => 8,
                'order' => 'H',
                'column_a' => 'Penampilan dan cara berpakaian sangat terjaga dan selalu rapih, dapat dijadikan contoh ke karyawan lainnya ',
                'column_b' => 'Hampir setiap saat menunjukan penampilan dan cara berpakaian yang rapih secara konsisten',
                'column_c' => 'Secara umum berpenampilan baik akan tetapi masih perlu ditegur untuk berpenampilan rapih',
                'column_d' => 'Kadangkala masih kurang peduli akan penampilan, cara berpakaian yang baik dan tidak konsisten',
                'column_e' => 'Tidak dapat berpakain bersih serta wajah tidak rapih ( untuk pria  berkumis/ berjenggot)'
            ],
            [
                'category_achievement_id' => 9,
                'order' => 'I',
                'column_a' => '',
                'column_b' => '',
                'column_c' => '',
                'column_d' => '',
                'column_e' => ''
            ],
            [
                'category_achievement_id' => 10,
                'order' => 'J',
                'column_a' => 'Selalu menerima tugas yang diberikan dan melaksanakan tugas yang diberikan tersebut dengan sangat baik',
                'column_b' => 'Menerima tugas yang diberikan dan melaksanakan tugas yang diberikan tersebut dengan baik',
                'column_c' => 'Sesekali melakukan penolakan terhadap tugas yang diberikan',
                'column_d' => 'Sering menolak tugas yang diberikan dan bila dilaksanakan dikerjakan  dengan keterpaksaan',
                'column_e' => 'Selalu menolak tugas yang diberikan'
            ],
        ];

        foreach ($data as $key => $value) {
            ModelsColumnList::create($value);
        }
    }
}
