<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Alterar dados do cliente</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">editar Cliente</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">

            
              <div class="card card-dark">
                <div class="card-header">
                <h3 class="card-title">Preencha os dados</h3>
                </div>


              <form action="/clientes/salvar" method="post">
              <div class="card-body">
              <div class="row">  
                    
                    <div class="col-lg-6">
                
                        <div class="form-group">
                        <label for="">Nome</label>
                        <input type="text" class="form-control" name="nome" value="<?= $c['nome']; ?>">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                        <label for="">Data de nascimento</label>
                        <input type="date" class="form-control" name="data_nascimento" value="<?= $c['data_nascimento']; ?>">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                        <label for="">Telefone</label>
                        <input type="text" class="form-control" name="telefone" value="<?= $c['telefone']; ?>">
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="form-group">
                        <label for="">Email</label>
                        <input type="email" class="form-control" name="email" value="<?= $c['email']; ?>">
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="form-group">
                        <label for="">Endere??o</label>
                        <input type="text" class="form-control" name="endereco" value="<?= $c['endereco']; ?>">
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="form-group">
                        <label for="">CPF</label>
                        <input type="text" class="form-control" name="cpf" value="<?= $c['cpf']; ?>">
                        </div>
                    </div>
                    <input type="hidden" class="form-control" name="id_cliente" value="<?= $c['id_cliente']; ?>">
                    
                    
                    
                    

                    <div class="card-footer">
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </div>
                    
                </div>
                </div>
              </form>
              
            </div>
          </div>
            
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->



