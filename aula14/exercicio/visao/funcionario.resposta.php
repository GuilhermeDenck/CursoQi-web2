<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio Aula 14</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>

    <h1>Sistema de Departamento Pessoal</h1>

        <h2>Dados do Funcionário: </h2>
        <div class="jumbotron">
        <?php
        
            echo "Funcionário: ".$_GET['txtnome'];
            echo "<br>";
            echo "Cargo: ".$_GET['txtcargo'];
            echo "<br>";
            echo "Matrícula: ".$_GET['txtmatricula'];
            echo "<br>";
            echo "Valor Hora R$: ".$_GET['txtvalorhora'];
            echo "<br>";
            echo "Total de Horas: ".$_GET['txttotalhora'];
            echo "<br>";
            echo "Salário Final: ".$_GET['salario'];

        ?>
        </div>
        


    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>