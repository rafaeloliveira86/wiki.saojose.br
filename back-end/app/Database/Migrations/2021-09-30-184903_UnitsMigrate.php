<?php
namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UnitsMigrate extends Migration {
    public function up() {
        $this->db->disableForeignKeyChecks();

        $this->forge->addField([
			'id' => [
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => true,
				'auto_increment' => true,
				'null' => false
			],
			'unit_nickname' => [
				'type' => 'CHAR',
				'constraint' => '6',
				'null' => true
			],
			'unit_name' => [
				'type' => 'VARCHAR',
				'constraint' => '150',
				'null' => true
			],
			'class' => [
				'type' => 'VARCHAR',
				'constraint' => '50',
				'null' => true
			],
			'logo_navbar' => [
				'type' => 'VARCHAR',
				'constraint' => '50',
				'null' => true
			],
			'logo_footer' => [
				'type' => 'VARCHAR',
				'constraint' => '50',
				'null' => true
			],
			'icon_footer' => [
				'type' => 'VARCHAR',
				'constraint' => '50',
				'null' => true
			],
			'site' => [
				'type' => 'VARCHAR',
				'constraint' => '150',
				'null' => true
			],
            'id_status' => [
				'type' => 'INT',
				'constraint' => 11,
				'unsigned' => true,
				'null' => false,
				'default' => 0
			],
			'id_user_created' => [
				'type' => 'INT',
				'constraint' => 11,
				'null' => false,
				'default' => 0
			],
			'id_user_updated' => [
				'type' => 'INT',
				'constraint' => 11,
				'null' => false,
				'default' => 0
			],
			'id_user_deleted' => [
				'type' => 'INT',
				'constraint' => 11,
				'null' => false,
				'default' => 0
			],
			'created_at' => [
				'type' => 'DATETIME',
				'null' => false,
				'default' => date('0000-00-00 00:00:00')
			],
			'updated_at' => [
				'type' => 'TIMESTAMP',
				'null' => false,
				'default' => date('0000-00-00 00:00:00')
			],
			'deleted_at' => [
				'type' => 'DATETIME',
				'null' => false,
				'default' => date('0000-00-00 00:00:00')
			]
		]);

		$this->forge->addKey('id', true);
        $this->forge->addForeignKey('id_status', 'tbl_status', 'id', 'CASCADE', 'NO_ACTION');
		$this->forge->createTable('tbl_units');

        $this->db->enableForeignKeyChecks();
    }

    public function down() {
        $this->forge->dropTable('tbl_units');
    }
}