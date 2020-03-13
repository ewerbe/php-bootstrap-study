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
          <li class="nav-item bg-info"> <a class="nav-link active" href="clienteVisualizarProdutos.php">Visualizar Produtos</a> </li>
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
      </div>
    </div>
  </div>
  <div class="py-1">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h2 class=""><b>Visualizar Produtos</b></h2>
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
          <table class="table" style="">
            <thead>
              <tr>
                <th>Descrição</th>
                <th>Lote</th>
                <th>Preço</th>
                <th>Opção</th>
              </tr>
            </thead>
            <tbody>
             <div>
                <?php
                  session_start();
                  if (isset($_SESSION['nomeUsuario'])) {
                    echo 'Seja Bem-Vindo ', $_SESSION['nomeUsuario'];
                  }

                ?>
                <br/><a href="controleFerragem.php?opcao=Sair">Sair</a>

              </div>
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
                                 <a class='btn btn-dark' name='opcao' href='clienteProdutosSelecionados.php?codProduto=$codProduto'>Selecionar</a>                 
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

</php>