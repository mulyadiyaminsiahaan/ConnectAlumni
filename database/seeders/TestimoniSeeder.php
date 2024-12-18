<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimoniSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'id' => 3,
                'pekerjaan' => 'System Analyst - Bank Mandiri',
                'program_studi' => 'Sistem Informasi',
                'angkatan' => '2022',
                'judul_utama' => 'Menata Karir Dengan Baik Melalui IT Del',
                'link_video' => 'https://youtu.be/Y4xC9VCXQiI?si=6jdGS1Zl2DujLVU7',
                'user_id' => 4,
            ],
            [
                'id' => 4,
                'pekerjaan' => 'System Analyst - Bank BTPN',
                'program_studi' => 'Sistem Informasi',
                'angkatan' => '2005',
                'judul_utama' => 'Bersama IT Del membangun Negeri',
                'link_video' => 'https://youtu.be/5cOLw-xZDtw?si=Uyu4qnshz6CUObdv',
                'user_id' => 5,
            ],
            [
                'id' => 6,
                'pekerjaan' => 'Dosen',
                'program_studi' => 'Teknik Elektro',
                'angkatan' => '2004',
                'judul_utama' => 'SEBAGAI ALUMNI YANG BERPRESTASI',
                'link_video' => 'https://youtu.be/BWoTU8cuueY?si=IiXNdyfB0SZO8ntk',
                'user_id' => 6,
            ],
            // Tambahkan data lainnya sesuai struktur
        ];

        foreach ($data as $item) {
            DB::table('testimoni')->insert($item);
        }
    }
}
