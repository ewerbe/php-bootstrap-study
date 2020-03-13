<?php
	include 'conexaoBD.php';

	function cadastrarUsuario($nome, $senha, $tipoUsuario){
		conectar();
		query("INSERT INTO usuario(nomeUsuario, senha, tipoUsuario) VALUES ('$nome','$senha', '$tipoUsuario')");
		fechar();
	}

function buscarUsuario($nome){
		conectar();
		$resultado = query("SELECT * FROM usuario WHERE nomeUsuario='$nome'");
		fechar();
		return $resultado;
	}

	function cadastrarProduto($descricao, $lote, $preco){
		conectar();
		query("INSERT INTO produto(descricao, lote, preco) VALUES ('$descricao','$lote', $preco)");
		fechar();
	}

		function mostrarProduto(){
		conectar();
		$resultado = query("SELECT * FROM produto");
		fechar();
		return $resultado;
	}
	
		function mostrarProdutoAlterar($codProduto){
		conectar();
		$resultado = query("SELECT * FROM produto WHERE codproduto=$codProduto");
		fechar();
		return $resultado;
	}

		function alterarProduto($codProduto, $descricao, $lote, $preco){
		conectar();
		query("UPDATE produto SET descricao='$descricao', lote='$lote', preco=$preco WHERE codproduto=$codProduto");
		fechar();
	}

		function excluirProduto($codProduto){
		conectar();
		query("DELETE FROM produto WHERE codproduto=$codProduto");
		fechar();
	}

	function mostrarProdutoPesquisar($pesquisa){   
		conectar();   
		$resultado = query("SELECT * FROM produto WHERE descricao LIKE '%$pesquisa%'                    
			OR lote LIKE '%$pesquisa%'");   
		fechar();   
		return $resultado;  
	} 

	function mostrarProdutoSelecionado($codProduto){
		conectar();
		$resultado = query("SELECT * FROM produto WHERE codproduto=$codProduto");
		fechar();
		return $resultado;
	}
?>