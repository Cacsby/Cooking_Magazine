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
    <?php include(FRONT_END.DS.'navigazione.php');
?> 
    </nav>

    <!-- Page Content -->
    <div class="container my-5">
    
<!-- sidebar -->
      <div class="row">

      <?php include(FRONT_END.DS.'sidebar.php');
?> 
    

        <div class="col-lg-9">
        
        
 
    
      <header class="jumbotron my-4">
      

    
        <h1 class="display-3">CuciniAMO</h1>
        <p class="lead">Trova l'ispirazione per la tua cucina in base alle tue esigenze.</p>
      
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

    