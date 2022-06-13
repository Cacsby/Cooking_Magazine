

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
    <a class="navbar-brand" href="#">CuciniAMO</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <i class="material-icons">menu</i>
        </button>

        
            
              <a class="nav-link" href="#">Cacialli Matteo N. Matricola 0012040
                <span class="sr-only">(current)</span>
              </a>
            </li>

            
          
            
              <a class="nav-link" href="#">
                <span class="sr-only">(current)</span>
              </a>
          
            
              <a class="nav-link" href="#"> </a>
            
              <a class="nav-link" href="#"></a>
            
            
              <a class="nav-link" href="index.php">Login</a>
            
    </nav>


<?php 

$avviso="";

if(isset($_POST['submit'])){

  $nome=$_POST['nome'];
  $cognome=$_POST['cognome'];
  $indirizzo=$_POST['indirizzo'];
  $telefono=$_POST['telefono'];
  $CF=$_POST['CF'];
  $cellulare=$_POST['cellulare'];
  $data_nascita=$_POST['data_nascita'];
  $email=$_POST['email'];
  $username=$_POST['username'];
  $password=$_POST['password'];
  if(!empty($nome) && !empty($cognome) && !empty($indirizzo) && !empty($CF) 
  && !empty($telefono) && !empty($data_nascita) && !empty($cellulare) && !empty($email)
  && !empty($username) && !empty($password)){
 
  $visitatore="INSERT INTO visitatore (nome, cognome, data_nascita, CF, email, indirizzo, cellulare, telefono, username, password)
   VALUES('{$nome}','{$cognome}','{$data_nascita}','{$CF}','{$email}','{$indirizzo}','{$cellulare}','
    {$telefono}',' {$username}',' {$password}')";
 
 echo $visitatore;
 
$creaVisitatore= query($visitatore);

 if($creaVisitatore){

  echo ("Registrazione avvenuta correttamente");

 }else{
   echo ("Compilare tutti i campi");
 


 }}}


?>
  <body>
    <div class="container my-5">
      <div class="row">
      

    
    <div class="col-sm-6">

<h2> Sei nuovo? Registrati </h2>
<br>
    <form action="registrazione_cl.php" method="post">

    <div class="form-group">
    <label for="nome">Nome</label>
    <input type="text" name="nome" class="form-control">
    </div>

    <div class="form-group">
    <label for="cognome">Cognome</label>
    <input type="text" name="cognome" class="form-control">
    </div>

    <div class="form-group">
    <label for="data_nascita">Data di nascita</label>
    <input type="date" name="data_nascita" class="form-control">
    </div>

    <div class="form-group">
    <label for="CF">Codice Fiscale</label>
    <input type="text" name="CF" class="form-control" maxlength="16">
    </div>

    <div class="form-group">
    <label for="telefono">Numero telefono</label>
    <input type="number" name="telefono" class="form-control">
    </div>

    <div class="form-group">
    <label for="cellulare">Cellulare</label>
    <input type="number" name="cellulare" class="form-control">
    </div>

    <div class="form-group">
    <label for="email">Email</label>
    <input type="email" name="email" class="form-control">
    </div>

    <div class="form-group">
    <label for="indirizzo">Indirizzo</label>
    <input type="text" name="indirizzo" class="form-control">
    </div>

    <input type="checkbox" name="indirizzo" >
    <label for="indirizzo">Liberatoria per la legge sulla privacy</label>
   
<hr>
<div class="form-group">
    <label for="username">Username</label>
    <input type="text" name="username" class="form-control">
    </div>

    <div class="form-group">
    <label for="password">Password</label>
    <input type="password" name="password" class="form-control">
    </div>


    <input type="submit" name="submit" value="Registrati" class="btn btn-success">

    
</form>
    </div>
    </div>
  </div>

  <?php include(FRONT_END.DS.'footer.php');
?>