<!-- Modal -->
<div class="modal fade" id="modal-excluir" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    <form action="/clientes/deletar" method="post">
      <div class="modal-header">
        <h5 class="modal-title">Excluir Cliente</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">x</button>
        
      </div>
      <div class="modal-body">
        Deseja mesmo excluir esse cliente?
        <input type="hidden" class="form-control" id="id_cliente" name="id_cliente" value="">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Não</button>
        <button type="submit" class="btn btn-danger">Sim</button>
      </div>
    </form>
    </div>
  </div>
</div>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Clientes </h1>
            
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Starter Page</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header  -->
    
    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
          <?php 
          $session = session();
          $alert = $session->get('alert');
          ?>

        <?php  if(isset($alert)): ?>
            <?php if($alert == "sucesso_create"): ?>
                <div class="alert alert-success alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                     Cliente adicionado com sucesso!
                </div>
            <?php elseif($alert == "sucesso_delete"): ?>
                <div class="alert alert-danger alert-dismissible">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                    Cliente deletado ;(
                </div>

            <?php endif; ?>

            
        <?php  endif; ?>
        

      
        <div class="row">
                
            <div class="card-body">

            <div class="row">
                <div class="col-12">
                <div class="card">
                <div class="card-header">
                <h3 class="card-title">Lista de clientes <a href="clientes/novo" class="btn btn-info">Novo</a></h3>
                <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                <div class="input-group-append">
                <button type="submit" class="btn btn-default">
                <i class="fas fa-search"></i>
                </button>
                </div>
                </div>
                </div>
                </div>

                <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                <thead>
                <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>E-mail</th>
                <th>Telefone</th>
                <th>CPF</th>
                <th>Data de nascimento</th>
                <th>Ações</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($clientes as $c): ?>
                <tr>
                <td><?= $c['id_cliente']; ?></td>
                <td><?= $c['nome']; ?></td>
                <td><?= $c['email']; ?></td>
                <td><span class="tag tag-success"><?= $c['telefone']; ?></span></td>
                <td><?= $c['cpf']; ?></td>
                <td><?= $c['data_nascimento']; ?></td>
                <td>
                    <a href="clientes/ver/<?= $c['id_cliente']; ?>" class="btn btn-primary">ver</a> 
                    <a href="clientes/editar/<?= $c['id_cliente']; ?>" class="btn btn-warning">editar</a>  
                    <button type="button" onclick="document.getElementById('id_cliente').value ='<?= $c['id_cliente']; ?>'" class="btn btn-danger" data-toggle="modal" data-target="#modal-excluir">
                    excluir
                    </button>
                   
                    <!-- Button trigger modal -->
                    
                </td>
                </tr>
                <?php endforeach; ?>

                
                </tbody>
                </table>
                </div>

                </div>

                </div>
                </div>
            </div>

        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->