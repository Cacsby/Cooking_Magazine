<?php require_once("../risorse/config.php"); ?>
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
 
    <?php if(isset($_POST['login_capo'])){

$username=$_POST['matricola'];
$password=$_POST['password'];   
$username=mysqli_real_escape_string($connessione, $username);
$password=mysqli_real_escape_string($connessione, $password);

$query=" SELECT * FROM redattore WHERE matricola='$username'";
echo $query;

$RicercaLogin=mysqli_query($connessione,$query);
if(!$RicercaLogin){
    die( 'LOGIN FALLITO'.mysqli_error($connessione));
} 
while($row=mysqli_fetch_array($RicercaLogin)) {

   echo $id_username=$row['matricola'];
    echo $ps_password=$row['password'];
}

  if($username===$id_username && $password===$ps_password){

    header('Location:gestione_redattori.php');
  } else{
    header('Location:index_capo.php');  
  }
}
  ?>
<!------------------------------------------------>
<div class="container my-5">
<h4 class="bg-warning text-center"></h4>
<form class="form-horizontal" role="form" method="post" action="index_capo.php">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <h2>Accesso Capo per gestione dei Redattori</h2>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">    
                    <div class="form-group">
                    <label for="matricola">Matricola</label>
                        <label class="sr-only" for="matricola">Nome utente </label>
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            
                            <input type="text" name="matricola" class="form-control">
                        </div>
                    </div>
                </div>
              
            </div>
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    <div class="form-group">
                    <label for="film">Password</label>
                        <label class="sr-only" for="password">Password</label>
                        <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                            <div class="input-group-addon" style="width: 2.6rem"><i class="material-icons">verified_user</i></div>
                            <input type="password" name="password" class="form-control">
                            <hr>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-control-feedback">
                        <span class="text-danger align-middle">
                        
                        </span>
                    </div>
                </div>
            </div>
           
            <div class="row" style="padding-top: 1rem">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                <button type="submit" name="login_capo" class="btn btn-success btn-block">Login Capo</button>
               
                </div>
            </div>
        </form>
        
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-control-feedback">
                        <span class="text-danger align-middle">
                        
                        </span>
                    </div>
                </div>
            </div>
           
            <div class="row" style="padding-top: 1rem">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                <h6>Numero Matricola Capo: 1010</h6>
        <h6>Password: 0000 </h6>
                </div>
            </div>
        </form>
        
        <hr>

        
                            <hr>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-control-feedback">
                        <span class="text-danger align-middle">
                        
                        </span>
                    </div>
                </div>
            </div>
           
           
        </form>
      
    </div>
</body>
</html>