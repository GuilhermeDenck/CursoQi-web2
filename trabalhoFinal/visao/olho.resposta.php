<?php
    session_start();
?>
<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Innovation in the space industry">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Daltonismo</title>
    <link rel="stylesheet" href="../nicepage.css" media="screen">
    <link rel="stylesheet" href="../Página-Inicial.css" media="screen">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="shortcut icon" href="../images/favicon.ico" type="png">

     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <script class="u-script" type="text/javascript" src="../jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="../nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.6.2, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <meta property="og:title" content="Página Inicial">
    <meta property="og:type" content="website">
    <meta name="theme-color" content="#478ac9">
    <link rel="canonical" href="../index.html">
    <meta property="og:url" content="index.html">
    
  </head>
  <body data-home-page="Página-Inicial.html" data-home-page-title="Página Inicial" class="u-body"><header class="u-clearfix u-header u-header" id="sec-1337"><div class="u-clearfix u-sheet u-valign-middle u-sheet-1" class="testFundo">
        <a href="../index.html" class="u-image u-logo u-image-1"></a>
          <img src="../images/default-logo.png" class="u-logo-image u-logo-image-1">
        </a>
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px;">
            <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
            </a>
          </div>
          <div class="u-nav-container">
            <ul class="u-nav u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="../index.html" style="padding: 10px 20px;">Página Inicial</a>
          </li><li class="u-nav-item"><a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#" style="padding: 10px 20px;">Teste</a>
          </li>
          <li class="u-nav-item">
              <a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="../controle/olho.controle.php?op=consultar" style="padding: 10px 20px;">Exames Cadastrados</a>
           </li>
           <li class="u-nav-item">
            <a class="u-button-style u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="olho.deletar.php" style="padding: 10px 20px;">Remover Exame</a>
         </li>
          </li></ul>
          </div>
        </nav>
      </div>
    </header>

      <div class="borda">
      <h2 class="resposta">RESPOSTAS </h2>
      <ol id="lista" >
						<li class="listaItem">Figura 1- 16</li>
						<li class="listaItem">Figura 2- &nbsp&nbsp8</li>
						<li class="listaItem">Figura 3- 42</li>
						<li class="listaItem">Figura 4- 74</li>
	  </ol>
      <p>Caso você não tenha conseguido identificar os números conforme as respostas corretas, faça uma avaliação com o médico oftalmologista.</p>
      <p>Lembre-se: Este artigo visa informar o público e não substitui avaliação por médico oftalmologista, que é o único profissional capacitado para realizar o diagnóstico preciso e indicar o tratamento mais adequado para cada caso. Portanto, não pratique a auto-medicação e procure sempre o seu médico.
      </p>
      </div>
 
                    <!--Aqui vamos imprimir as informações dos contatos cadastrados   -->
                    <?php
                        //verificando se nas variáveis há algum registro
                        if(isset($_SESSION['daltonismo']) ){

                            include '../modelo/olho.class.php';
                            $olho = new Olho();

                        //descriptografa a variável contato e armazena no $cont
                            $olho = unserialize( $_SESSION['daltonismo'] );

                        //mostrando o resultado da variável cont e da variável de sessão contato
                           // echo '<br /><br/><br/>'.$olho;// toString();
                        }
                     ?>
    
    <footer class="u-align-center u-clearfix u-footer u-grey-80 u-footer" id="sec-37bf"><div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-small-text u-text u-text-variant u-text-1"></p>
      </div></footer>
    <section class="u-backlink u-clearfix u-grey-80">
     <p>Trabalho Feito por Guilherme Denck e Rafael Santini </p>
     <br>
     <p>guidenck0303@gmail.com / rafaelfarias.santini14@gmail.com</p>
    </section>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
  </body>
</html>