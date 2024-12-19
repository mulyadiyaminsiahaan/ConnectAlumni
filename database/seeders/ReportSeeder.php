<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReportSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'judul' => 'Testimoni Tidak Sesuai',
                'nama' => 'John Doe',
                'alasan' => 'Konten tidak relevan dengan tema yang ditentukan.',
            ],
            [
                'judul' => 'Pelanggaran Kebijakan Testimoni',
                'nama' => 'Jane Smith',
                'alasan' => 'Mengandung informasi yang tidak akurat.',
            ],
            [
                'judul' => 'Testimoni Duplikasi',
                'nama' => 'Michael White',
                'alasan' => 'Testimoni terindikasi hasil duplikasi dari sumber lain.',
            ],
            [
                'judul' => 'Isi Testimoni Tidak Valid',
                'nama' => 'Emily Davis',
                'alasan' => 'Menggunakan data yang tidak dapat diverifikasi.',
            ],
        ];

        foreach ($data as $item) {
            DB::table('reports')->insert($item);
        }
    }
}
