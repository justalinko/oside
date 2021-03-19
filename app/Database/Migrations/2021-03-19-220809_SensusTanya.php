<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class SensusTanya extends Migration
{
	public function up()
	{
		 $this->forge->addField(['tanya_id' => [
		 										'type' => 'INT',
		 										'constraint' => 20,
		 										'unsigned'=> true,
                                				'auto_increment' => true
                                				],

                                'tanya_identity' => [
                                				'type' => 'VARCHAR',
                                				'constraint' => 200
                                				],

                                'tanya_detail' => [
                                				'type' => 'VARCHAR',
                                				'constraint' => 300
                                				],
                                'created_date datetime default current_timestamp',
                    			'updated_date datetime default current_timestamp on update current_timestamp']);
		$this->forge->addKey('tanya_id',true);
		$this->forge->createTable('sensus_tanya');

	}

	public function down()
	{
		$this->forge->dropTable('sensus_tanya');
	}
}
