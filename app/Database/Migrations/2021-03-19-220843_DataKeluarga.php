<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DataKeluarga extends Migration
{
	public function up()
	{
		$this->forge->addField([
							'keluarga_id' => ['type' => 'INT',
											  'constraint' => 20,
											  'unsigned' => true,
											  'auto_increment' => true
											],

							'nama'			=> ['type' => 'VARCHAR',
												'constraint' => 200
												],

							'nomer_kk'		=> ['type' => 'INT',
												'constraint' => 100
												],

							'nomer_nik'      => ['type' => 'INT',
												'constraint' => 100
												],
							'status_kawin' => ['type' => 'ENUM',
											   'constraint' => ['kawin','belum kawin']
											],
							'pekerjaan'    => ['type' => 'VARCHAR',
												'constraint' => 100 ]
							]);
	}

	public function down()
	{
		//
	}
}
