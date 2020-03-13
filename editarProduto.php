<!DOCTYPE php>
<php>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="theme.css" type="text/css">
</head>

<body>
  <nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container"> <a class="navbar-brand" href="vintawearInicial.php">Ferragem</a> <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent"> <span class="navbar-toggler-icon"></span> </button>
      <div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item bg-dark"> <a class="nav-link active" href="funcionarioVisualizarProdutos.php"> Visualizar Produtos</a> </li>
          <li class="nav-item bg-info"> <a class="nav-link active" href="cadastrarProduto.php"> Cadastrar Produto</a> </li>
        </ul> <a class="btn navbar-btn ml-2 text-white btn-dark" href="loginUsuario.php"><i class="fa d-inline fa-lg fa-user-circle-o"></i>Login</a>
      </div>
    </div>
  </nav>
  <div class="py-1">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h1 class=""><b>Ferragem</b></h1>
        </div>
      </div>
    </div>
  </div>
  <div class="py-1">
    <div class="container">
      <div class="row">
            <?php
                  session_start();
                    if (isset($_SESSION['nomeUsuario'])) {
                      echo 'Seja Bem-Vindo  ', $_SESSION['nomeUsuario'];
                    }
                ?>
             <br/><a href="controleFerragem.php?opcao=Sair">Sair</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="py-1">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class=""><b>Área Restrita aos Colaboradores</b></h2>
        </div>
      </div>
    </div>
  </div>
  <div class="py-1">
    <div class="container">
      <div class="row">
      </div>
    </div>
  </div>
  <div class="p-1">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h3 class=""><b>Editar Produto</b><br></h3>
        </div>
        <div>
            <?php
              include 'crudFerragem.php';
              $codProduto=$_GET["codproduto"];
              $resultado=mostrarProdutoAlterar($codProduto);
                if($resultado){
                  while($linha = mysqli_fetch_assoc($resultado)){
                    $descricao=$linha["descricao"];
                    $lote=$linha["lote"];
                    $preco=$linha["preco"];
                  }
                }
              ?>

        <form class="" method="post" action="controleFerragem.php">
                <div class="form-group" draggable="true"><label for="descricao">Descrição</label> 
                  <input type="text" class="form-control" placeholder="digite a descrição do produto" id="descricao" name="descricao" value="<?php echo $descricao;?>">

                 <label for="lote">Lote: </label>
                  <input type="text" class="form-control" placeholder="digite o lote do produto" id="lote" name="lote" value="<?php echo $lote;?>"> 
                  <label for="preco">Preço: </label>
                  <input type="number" class="form-control" placeholder="digite o preço" id="preco" name="preco" value="<?php echo $preco;?>">
                  
                  <input type="hidden" name="codProduto" value="<?php echo $codProduto;?>">
                  <button type="submit" name="opcao" value="Alterar" class="btn btn-primary">Alterar</button>
                  <button type="submit" name="opcao" value="Excluir" class="btn btn-danger">Excluir</button>
                  <a class="btn btn-secondary" href="funcionarioVisualizarProdutos.php">Cancelar</a>
                </div>
        </form>
        </div>
        
      </div>
              <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
      <script type="text/javascript">                     
          $("#lote").mask("99-99");   
  </script>    
    </div>
  </div>
</body>

</php>