<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Ci4news extends Migration
{
    public function up()
    {
        // membuat kolom / field untuk table news
        $this->forge->addField(
            [
                'id' => [
                    'type' => 'INT',
                    'constraint' => 5,
                    'unsigned' => true,
                    'auto_increment' => true
                ],
                'title' => [
                    'type' => 'VARCHAR',
                    'constraint' => '225'
                ],
                'author' => [
                    'type' => 'VARCHAR',
                    'constraint' => 100,
                    'default' => 'john doe'
                ],
                'content' => [
                    'type' => 'TEXT',
                    'null' => true
                ],
                'status' => [
                    'type' => 'ENUM',
                    'constraint' => ['published', 'draft'],
                    'default' => 'draft'
                ],
                'created_at DATETIME DEFAULT CURRENT_TIMESTAMP'
            ]
        );

        // membuat primary key
        $this->forge->addField('id', TRUE);

        // membuat TABLE NEWS
        $this->forge->createTable('news', TRUE);
    }

    public function down()
    {
        // menghapus table news
        $this->forge->dropTable('news');
    }
}
