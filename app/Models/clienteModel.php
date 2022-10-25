<?php

namespace App\Models;

use CodeIgniter\Model;

class ClienteModel extends Model
{

    protected $table = 'clientes';
    protected $primaryKey = 'id_cliente';
    protected $allowedFields = [
        'id_cliente',
        'nome',
        'data_nascimento',
        'endereco',
        'email',
        'cpf',
        'telefone'
    ];
    protected $useTimestamps = true;
    protected $updatedField = 'updated_at';
    protected $createdField = 'created_at';
    protected $deletedField = 'deleted_at';

}


?>