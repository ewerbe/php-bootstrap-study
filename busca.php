<?php  
	include 'crudFerragem.php';    
	
	$pesquisa = $_POST["palavra"];    
	if($pesquisa == "tudo"){   
		$resultado=mostrarProduto();  
	} else {   
		$resultado = mostrarProdutoPesquisar($pesquisa);  
	}  
	 if(mysqli_num_rows($resultado) <=0){   
	 	echo 'Nenhuma descrição/lote encontrado';  
	 }  else {              
	 	while($linha=mysqli_fetch_assoc($resultado)){             
		$codProduto=$linha["codproduto"]; 
		$descricao=$linha['descricao'];             
	 	$lote=$linha['lote'];             
		$preco=$linha['preco']; 
		 echo "                 
	 	<tr>                 
	 		<td>$descricao</td>                 
	 		<td>$lote</td>                 
			<td>$preco</td>
			<td>
                <a class='btn btn-primary' href='editarProduto.php?codproduto=$codProduto'>Editar</a>                         
            </td>   
		</tr>              
	 ";                      
	}    
	} 
?> 