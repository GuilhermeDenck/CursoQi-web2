<?php
	session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8"/>
		<title>Tele Entrega Hershey's</title>
	</head>
	<body>
	<br/>
	
	<h1>*-*-*-*-*Lanches Hershey's*-*-*-*-*</h1>
	<fieldset>
		<legend>Pedido</legend>
		<?php
		//verificando se nas vari�veis h� algum registro 
			if( isset($_SESSION['msg']) &&
				isset($_SESSION['teleentrega']) ){
				
				include '../modelo/teleentrega.class.php';
				$tele = new TeleEntrega();
			
			//descriptografa a vari�vel teleentrega e armazena na tele
				$tele = unserialize( $_SESSION['teleentrega'] );
				
			//mostrando o resultado da vari�vel tele e da vari�vel de sess�o tele 	
				echo '<br />'.$_SESSION['msg'].
					'<br />Dados:'.$tele;
			}
		?>		
	</fieldset>
	</body>
</html>




