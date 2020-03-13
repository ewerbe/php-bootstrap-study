<?php
	include 'crudFerragem.php';

	$opcao = $_POST["opcao"];

	if($opcao == "Cadastrar Usuário"){
		$nome=$_POST["nome"];
		$senha=sha1($_POST["senha"]);
		$tipoUsuario=$_POST["tipoUsuario"];
		cadastrarUsuario($nome, $senha, $tipoUsuario);
		header("Location: cadastrarUsuario.php");
	}

else if($opcao == "Login"){
			$nome = $_POST["nome"];
			$senha = sha1($_POST["senha"]);
			$tipoUsuario = $_POST["tipoUsuario"];
			$nomeBanco = "null";
			$senhaBanco = "null";
			$tipoBanco = "null";
			$resultado = buscarUsuario($nome);
					while($linha=mysqli_fetch_assoc($resultado)){
						$nomeBanco = $linha['nomeUsuario'];
						$senhaBanco = $linha['senha'];
						$tipoBanco = $linha['tipoUsuario'];
					}
			
			if($nome == $nomeBanco){
					if($senha == $senhaBanco){
							if($tipoBanco == 'funcionario'){
								session_start();
								$_SESSION['nomeUsuario'] = $nomeBanco;
								header("Location: cadastrarProduto.php");
							}else if($tipoBanco == 'cliente'){
								session_start();
								$_SESSION['nomeUsuario'] = $nomeBanco;
								header("Location: clienteVisualizarProdutos.php");
							}
					
					}else{
						echo "<script>alert('Senha ou Nome Incorreto!');</script>";
						echo "<script>window.location = 'loginUsuario.php';</script>";
					}
			}else{
					echo "<script>alert('Senha ou Nome Incorreto!');</script>";
					echo "<script>window.location = 'loginUsuario.php';</script>";
				}
		}
		


		elseif (isset($_GET["opcao"])) {
			$opcao=$_GET["opcao"];
			if ($opcao=='Sair') {
				session_start();
				session_destroy();
				//echo"DESTRUIU TUDO";
				header("Location:ferragemInicial.php");
			}
		}

	elseif($opcao == "Cadastrar Produto"){
		$descricao=$_POST["descricao"];
		$lote=$_POST["lote"];
		$preco=$_POST["preco"];
		cadastrarProduto($descricao, $lote, $preco);
		header("Location: cadastrarProduto.php");
	}

		elseif($opcao == "Alterar"){
		$codProduto=$_POST["codProduto"];
		$descricao=$_POST["descricao"];
		$lote=$_POST["lote"];
		$preco=$_POST["preco"];
		alterarProduto($codProduto, $descricao, $lote, $preco);
		header("Location: funcionarioVisualizarProdutos.php");
	}

		elseif($opcao == "Excluir"){
		$codProduto=$_POST["codProduto"];
		excluirProduto($codProduto);
		header("Location: funcionarioVisualizarProdutos.php");
	}

		elseif($opcao == "Selecionar"){
			$codProduto=$_POST["codProduto"];
			mostrarProdutoSelecionado($codProduto);
			header("Location: clienteVisualizarProdutos.php");
		}
?>