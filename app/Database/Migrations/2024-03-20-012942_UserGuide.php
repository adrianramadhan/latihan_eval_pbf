<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class UserGuide extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'ID' => [
                'type' => 'INT',
                'constraint' => 5,
                'unsigned' => true,
                'auto_increment' => true,
            ],
            'chapter' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'contains' => [
                'type' => 'TEXT',
                'null' => true,
            ]
        ]);
        $this->forge->addKey('ID', true);
        $this->forge->createTable('user_guide');
    }

    public function down()
    {
        $this->forge->dropTable('user_guide');
    }
}
