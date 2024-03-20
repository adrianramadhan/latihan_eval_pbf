<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Faq extends Migration
{
    public function up()
    {
        $this->forge->addField([
            'ID_FAQ' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'auto_increment' => true,
            ],
            'ID_UG' => [
                'type'           => 'INT',
                'constraint'     => 5,
                'unsigned'       => true
            ],
            'name' => [
                'type'       => 'VARCHAR',
                'constraint' => '100',
            ],
            'question' => [
                'type'       => 'TEXT',
                'null'       => true,
            ],
        ]);
        $this->forge->addKey('ID_FAQ', true);
        $this->forge->addForeignKey('ID_UG', 'user_guide', 'ID');
        $this->forge->createTable('faq');
    }

    public function down()
    {
        $this->forge->dropTable('faq');
    }
}
