<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Tarefas extends Migration
{
    public function up()
    {
        
        $this->forge->addField([
            'id_tarefa'            => [
                'type'              => 'INT',
                'constraint'        => 9,
                'usigned'           => true,
                'auto_increment'    => true
            ],
            'nome'            => [
                'type'              => 'VARCHAR',
                'constraint'        => 128
                
            ],
          
            'descricao'            => [
                'type'              => 'VARCHAR',
                'constraint'        => 128
                               
            ]

          
          
        ]);
        $this->forge->addKey('id_tarefa', true);
        $this->forge->createTable('tarefas');
    }

    public function down()
    {
        $this->forge->dropTable('tarefas');
    }
}
