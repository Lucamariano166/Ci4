<?php

namespace App\Controllers;

use CodeIgniter\Controller;
use App\models\ClienteModel;

class Clientes extends Controller
{
    private $cliente_model;
    function __construct(){
        $this->cliente_model = new ClienteModel();

    }
    public function novo(){
        echo view('templates/header');
        echo view('clientes/novo');
        echo view('templates/footer');
        
    }
    public function index (){
        $cliente = $this->cliente_model->findAll();

        $data['clientes'] = $cliente;
        echo view('templates/header');
        echo view('clientes/index', $data);
        echo view('templates/footer');

        
    }
    public function salvar(){
        $dados = $this->request->getVar();
        if(isset($dados['id_cliente'])){
            $this->cliente_model->where('id_cliente', $dados['id_cliente'])->set($dados)->update();

            return redirect()->to("/clientes/editar/{$dados['id_cliente']}");
        
        } else {
        
        $this->cliente_model->insert($dados);

        $session = session();
        $session->setFlashdata('alert', 'sucesso_create');
        
        return redirect()->to('/clientes');
        }
        
    }
    public function deletar(){
        $id_cliente = $this->request->getVar('id_cliente');
              
        
        $this->cliente_model->where('id_cliente', $id_cliente)->delete();
        $session = session();
        $session->setFlashdata('alert', 'sucesso_delete');
        
        return redirect()->to('/clientes');
    }
    public function editar($id_cliente){

        $cliente = $this->cliente_model->where('id_cliente', $id_cliente)->first();
        
        $data['c'] = $cliente;
        echo view('templates/header');
        echo view('clientes/editar', $data);
        echo view('templates/footer');



    }
    public function ver($id_cliente){

        $cliente = $this->cliente_model->where('id_cliente', $id_cliente)->first();

        $data['c'] = $cliente;
        echo view('templates/header');
        echo view('clientes/ver', $data);
        echo view('templates/footer');
    }




}





?>