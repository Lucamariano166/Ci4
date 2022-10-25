<?php

namespace App\Models;

use CodeIgniter\Model;

class TarefaModel extends Model
{

    protected $table = 'tarefas';
    protected $primaryKey = 'id_tarefa';
    protected $allowedFields = [
        'id_tarefa',
        'nome',
        'descricao'
     
    ];
    protected $useTimestamps = false;
    protected $updatedField = 'updated_at';
    protected $createdField = 'created_at';
    protected $deletedField = 'deleted_at';

}


?>