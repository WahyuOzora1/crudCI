<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Mahasiswa extends Migration
{
    public function up()
    {
        //Membuat kolom/field untuk tabel hantu
        $this->forge->addField(
            [
                'id' => [
                    'type' => 'INT',
                    'constraint' => 5,
                    'unsigned' => true,
                    'auto_increment' => true,
                ],

                'nama_mahasiswa' => [
                    'type'           => 'VARCHAR',
                    'constraint'     => '255',
                    'null'           => true,
                ],
                'jenis' => [
                    'type'           => 'VARCHAR',
                    'constraint'     => '255',
                    'null'           => true,
                ],

                'nim' => [
                    'type'           => 'VARCHAR',
                    'constraint'     => '255',
                    'null'           => true,
                ],
               

            ],

        );

        //membuat primary key
        $this->forge->addPrimaryKey('id', TRUE);

        //membuat tabel tb_hantu
        $this->forge->createTable('tb_mahasiswa', TRUE);
    }
    public function down()
    {
        //menghapus tabel tb_hantu
        $this->forge->dropTable('tb_mahasiswa');
    }
}
