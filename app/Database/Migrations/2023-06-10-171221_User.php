<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class User extends Migration
{
    public function up()
    {
        $field = 
        [
            "id" => [
                'type' => 'INT',
                'constraint' => 5,
                'auto_increment' => TRUE,
            ],
            'username' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => 255,
            ],
            'password' => [
                'type' => 'TEXT'
            ]
            ];
            $this->forge->addField($field);
            $this->forge->addKey('id',true);
            $this->forge->createTable('data_user');
    }

    public function down()
    {
        $this->forge->dropTable('data_user');
    }
}
