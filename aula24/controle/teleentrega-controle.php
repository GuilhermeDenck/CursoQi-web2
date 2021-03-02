<?php

session_start(); //inicia uma variavel de sessao

include '../modelo/teleentrega.class.php';

// incluindo a classe validacao.class.php
include '../util/validacao.class.php';

//verificando se os campos est�o preenchidos
if(isset($_POST['txtnome']) && 
	isset($_POST['txtemail']) && 
	isset($_POST['txttelefone']) && 
	isset($_POST['sellanche']) && 
	isset($_POST['txtquantidadelanche']) && 
	isset($_POST['selbebida']) && 
	isset($_POST['txtquantidadebebida']) && 
	isset($_POST['rdformapagamento']) && 
	isset($_POST['rdteleentrega']) ){
	
	//variavel erros recebe a fun��o array
	$erros = array();	
	
	//  Validacao c/ a fun��o validarNome
	if(!Validacao::validarNome($_POST['txtnome'])){
		$erros[] = 'Nome invalido.';
	}
	//  Validacao c/ a fun��o validarBebida
	if(!Validacao::validarBebida($_POST['selbebida'])){
		$erros[] = 'Bebida invalida.';
	}
	
	
	// verificando se n�o h� erros nos campos preenchidos
	if(count($erros) == 0){
		
		$tele = new TeleEntrega();
	
		$tele->nome = $_POST['txtnome'];
		$tele->email = $_POST['txtemail'];
		$tele->telefone = $_POST['txttelefone'];
		$tele->lanche = $_POST['sellanche'];
		$tele->bebida = $_POST['selbebida'];
		$tele->quantidadelanche = $_POST['txtquantidadelanche'];
		$tele->quantidadebebida = $_POST['txtquantidadebebida'];
		$tele->formapagamento = $_POST['rdformapagamento'];
		$tele->teleentrega = $_POST['rdteleentrega'];
		
	// lan�a uma mensagem atrav�s da vari�vel de sess�o
		$_SESSION['msg'] = 'Pedido Cadastrado com sucesso !';		
		
	// vari�vel de sess�o teleentrega recebendo um objeto serializado
		// serializar - criptografar o objeto 
		$_SESSION['teleentrega'] = serialize($tele);
	
		
		header("location:../visao/guiresposta.php");
	
	}else{
		
		//serializa o objeto para poder passar para outra tela de erros
		$_SESSION['erros'] = serialize($erros);
		
		header("location:../visao/guierro.php");		
	}
		
	//header("location:../visao/guiresposta.php?nome=$nome&email=$email&telefone=$telefone&lanche=$lanche&bebida=$bebida&quantidadelanche=$quantidadelanche&quantidadedebebida=$quantidadedebebida&formadepagamento=$formadepagamento&teleentrega=$teleentrega&totaldelanches=$totaldelanches&totaldebebidas=$totaldebebidas&totalfinal=$totalfinal");

}else{
	echo 'Algo n�o esta preenchido';
}

?>