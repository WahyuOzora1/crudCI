<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class AddColumn extends Migration
{
    public function up()
	{
		$this->forge->addColumn('tb_hantu', [
			'cara_bergerak VARCHAR(100) UNIQUE'
		]);
	}

	//--------------------------------------------------------

	public function down()
	{
		$this->forge->dropColumn('tb_hantu', 'cara_bergerak');
	}
}
