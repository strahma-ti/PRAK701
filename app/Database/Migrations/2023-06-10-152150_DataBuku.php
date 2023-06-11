<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class DataBuku extends Migration
{
    public function up()
    {
        $field = 
        [
            "id" => [
                'type' => 'INT',
                'constraint' => 5,
                'auto_increment' => TRUE,
                'unsigned' => true
            ],
            'judul_buku' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'penulis' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],
            'penerbit' => [
                'type' => 'VARCHAR',
                'constraint' => 255
            ],

            'tahun_terbit' => [
                'type' => 'YEAR'
            ]
        ];

        $this->forge->addField($field);
        $this->forge->addKey('id',true);
        $this->forge->createTable('data_buku', true);
    }

    public function down()
    {
        $this->forge->dropTable('data_buku', true);
    }
}
