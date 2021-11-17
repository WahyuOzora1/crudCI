<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class SeedMahasiswa extends Seeder
{
    public function run()
    {
        // membuat data
        $dataMahasiswa = [
            [
                'nama_mahasiswa' => 'Jono',
                'jenis'  => 'cowo',
                'nim' => '112029204028'
            ],

            [
                'nama_mahasiswa' => 'Januu',
                'jenis'  => 'cewe',
                'nim' => '242029204028'
            ], [
                'nama_mahasiswa' => 'saa',
                'jenis'  => 'cewe',
                'nim' => '202964028'
            ],

        ];

        foreach ($dataMahasiswa as $data) {
            // insert semua data ke tabel
            $this->db->table('tb_mahasiswa')->insert($data);
        }
    }
}
