<?php require_once("../risorse/config.php");
?>

<!DOCTYPE html>
<html lang="it">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Rivista culinaria</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/custom.css" rel="stylesheet">
<!-- Material Icon-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
    rel="stylesheet">
<!--  Google Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Prompt|Ubuntu:400,700" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-md  bg-primary fixed-top" id ="navigazione">
    <div class="container">
        <a class="navbar-brand" href="#">CuciniAMO</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <i class="material-icons">menu</i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">


            

            <li class="nav-item active">
            
              <a class="nav-link" href="home_staff.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="validificazione_ricette.php">Validifica Ricetta</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="resoconto_validificazione.php">Resoconto Validificazioni</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="index_capo.php">Gestione Redattori</a>
            </li>
            <li class="nav-item"> 
              <a href="index.php" input type="button" class="btn btn-danger" value="Logout">Logout</button></a>
            </li>
            
          </ul>
        </div>
      </div>
    </nav>
    <!-- Page Content -->
    <div class="container my-5">
    
<!-- sidebar -->
      <div class="row">

      <?php include(FRONT_END.DS.'sidebar.php');
?> 
    

        <div class="col-lg-9">
        
        
 
    
      <header class="jumbotron my-4">
      

    
        <h1 class="display-3">Resoconto ricette online con dettagli</h1>

        <a href="validificazione_ricette.php"h4> Vai a validificazione ricette </h4>
       
      
      </header>


          <div class="row">
          
          
          
          <?php mostraProdotti();?>

          
            

          </div>
          <!-- /.row -->

        </div>
        <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->
    <!--Footer-->
    <?php include(FRONT_END.DS.'footer.php');
?>

    