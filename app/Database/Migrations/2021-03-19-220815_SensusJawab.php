<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class SensusJawab extends Migration
{
	public function up()
	{
		$this->forge->addField([
							  'jawab_id' => ['type' => 'INT',
											 'constraint' => 20,
											 'unsigned' => true,
											 'auto_increment' => true],

								'tanya_id' => ['type' => 'INT',
												'constraint' =>20
												],
								'jawab_tipe' => ['type' => 'VARCHAR',
												'constraint' => 100],

								'jawab_identity' => ['type' => 'VARCHAR',
													'constraint' => 500
													],

								'jawab_detail' => ['type' => 'TEXT'
												 ],

								'created_date datetime default current_timestamp',
                    			'updated_date datetime default current_timestamp on update current_timestamp'
								]);

		$this->forge->addKey('jawab_id',true);
		$this->forge->createTable('sensus_jawab');
	}

	public function down()
	{
		$this->forge->dropTable('sensus_jawab');
	}
}
