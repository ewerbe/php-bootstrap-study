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
          <li class="nav-item bg-info"> <a class="nav-link active" href="funcionarioVisualizarProdutos.php"> Visualizar Produtos</a> </li>
          <li class="nav-item bg-dark"> <a class="nav-link active" href="cadastrarProduto.php"> Cadastrar Produto</a> </li>
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
          <h3 class=""><b>Área Restrita aos Funcionários</b></h3>
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
  <div class="py-1">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <form class="form-inline" method="post" action="controleFerragem.php">
            <div class="input-group"> <input type="search" class="form-control" name="pesquisa" id="pesquisa" placeholder="pesquisar">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="py-1">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <table class="table" style="">
            <thead>
              <tr>
                <th>Descrição</th>
                <th>Lote</th>
                <th>Preço</th>
                <th>Opção</th>
              </tr>
            </thead>
            <tbody class="table-results">
              <?php
                  include 'crudFerragem.php';
                  $resultado = mostrarProduto();
                  if($resultado){
                    while($linha=mysqli_fetch_assoc($resultado)){
                      $codProduto=$linha["codproduto"];
                      $descricao=$linha["descricao"];
                      $lote=$linha["lote"];
                      $preco=$linha["preco"];
                        echo "
                            <tr>
                                <td>$descricao</td>
                                <td>$lote</td>
                                <td>$preco</td>
                                <td>
                                  <a class='btn btn-primary' href='editarProduto.php?codproduto=$codProduto'>Editar</a>                         
                                </td>                       
                            </tr>";
                    }
                  }
              ?>
            </tbody>
          </table>
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

</body>
     <script type="text/javascript" src="jquery-3.3.1.min.js"></script>  
      <script type="text/javascript" src="pesquisar.js"></script>
</php>