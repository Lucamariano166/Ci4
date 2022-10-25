<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\TarefaModel;

class Tarefas extends ResourceController
{
    private $tarefaModel;
    public function __construct(){
        $this->tarefaModel = new TarefaModel();

    }

    public function list(){
        $lista = $this->tarefaModel->findAll();

        return $this->response->setJSON($lista);
    }


}