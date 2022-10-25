<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class Inicio extends Controller
{
    public function index(){
        echo view('templates/header.php');
        echo view('inicio/index.php');
        echo view('templates/footer.php');
        
    }




}





?>