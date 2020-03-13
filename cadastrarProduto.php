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
    <div class="container"> <a class="navbar-brand" href="ferragemInicial.php">Ferragem</a> <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbar2SupportedContent"> <span class="navbar-toggler-icon"></span> </button>
      <div class="collapse navbar-collapse text-center justify-content-end" id="navbar2SupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item bg-dark"> <a class="nav-link active" href="funcionarioVisualizarProdutos.php"> Visualizar Produtos</a> </li>
          <li class="nav-item bg-info"> <a class="nav-link active" href="cadastrarProduto.php"> Cadastrar Produto</a> </li>
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
        <div class="col-md-12">
          <div>
            <?php
                  session_start();
                    if (isset($_SESSION['nomeUsuario'])) {
                      echo 'Seja Bem-Vindo ', $_SESSION['nomeUsuario'];
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
          <h3 class=""><b>Cadastrar Produtos</b><br></h3>
        </div>
      </div>
    </div>
  </div>
  <div class="p-1">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <form class="" method="post" action="controleFerragem.php">
            <div class="form-group"> <label for="descricao">Descrição </label> <input type="text" name="descricao" id="descricao" class="form-control" placeholder="digite a descrição do produto"> </div>
            <div class="form-group"> <label for="lote">Lote:</label> 
                <input type="text" name="lote" id="lote" class="form-control" placeholder="99-99"pattern="\d{2}-\d{2}"                     
                title="digite o LOTE no formato 99-99" maxlength="5"> 
                </div>
            <div class="form-group"> <label for="preco">Preço:</label> <input type="number" name="preco" id="preco" class="form-control" placeholder="digite o preço"> </div>
            <input type="submit" name="opcao" class="btn btn-primary" value="Cadastrar Produto">
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="py-5">
    <div class="container">
      <div class="row">
      </div>
    </div>
  </div>
  <div class="py-5">
    <div class="container">
      <div class="row">
      </div>
    </div>
  </div>
  <script type="text/javascript" src="jquery-3.3.1.min.js"></script>  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script>
  <script type="text/javascript">                     
          $("#lote").mask("99-99");   
  </script>       
</body>

</php>