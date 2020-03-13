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
          <li class="nav-item bg-info"> <a class="nav-link active" href="cadastrarUsuario.php">Cadastrar Usuário</a> </li>
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
      </div>
    </div>
  </div>
  <div class="py-1">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <h3 class=""><b>Cadastrar Usuário</b></h3>
        </div>
      </div>
    </div>
  </div>
  <div class="py-1" style="">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <form class="" method="post" action="controleFerragem.php">
            <div class="form-group"> <label for="nome"><b>Nome:</b></label> <input type="text" class="form-control" id="nome" name="nome" placeholder="o seu nome"> </div>
            <div class="form-group"> <label for="senha"><b>Senha:</b></label> <input type="password" class="form-control" id="senha" 
              name="senha" placeholder="a sua futura senha de usuário"></div>
            <div class="form-group"> <label for="tipoUsuario"><b>Tipo de Usuário:</b></label>
              <select name="tipoUsuario">
                    <option value="cliente">Cliente</option>
                    <option value="funcionario">Funcionário</option>
              </select></div>
            <input type="submit" class="btn btn-dark active" name="opcao" id="opcao" value="Cadastrar Usuário">
          </form>
        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      </div>
    </div>
  </div>
  <div class="py-1">
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
  <div class="py-5">
    <div class="container">
      <div class="row">
      </div>
    </div>
  </div>
</body>

</php>