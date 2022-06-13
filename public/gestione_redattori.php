

<?php require_once("../risorse/config.php"); ?>
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

<?php 

if(isset($_POST['registra_redattore'])){

  $nome=$_POST['nome'];
  $cognome=$_POST['cognome'];
  $numero_matricola=$_POST['numero_matricola'];
  $password=$_POST['password'];
  if(!empty($nome) && !empty($cognome) && !empty($numero_matricola) && !empty($password)){
 
  $redattore="INSERT INTO redattore (nome, cognome, matricola, password)
   VALUES('{$nome}','{$cognome}','{$numero_matricola}',' {$password}')";
 
 echo $redattore;
 
$creaRedattore= query($redattore);

 if($creaRedattore){

  echo ("Registrazione avvenuta correttamente");

 }else{
   echo ("Compilare tutti i campi");
 
 }}}


?>
<?php 

if(isset($_POST['cancella_redattore'])){
  $redattore=$_POST['redattore'];

  $cancellaRedattore=query("DELETE FROM redattore WHERE id_redattore=$redattore");

  echo $cancellaRedattore;
}

  ?>
  <body>
    <div class="container my-5">
      <div class="row">
      

    
    <div class="col-sm-6">

<h2> Registra un nuovo Redattore </h2>
<br>
    <form action="gestione_redattori.php" method="post">

    <div class="form-group">
    <label for="nome">Nome</label>
    <input type="text" name="nome" class="form-control">
    </div>

    <div class="form-group">
    <label for="cognome">Cognome</label>
    <input type="text" name="cognome" class="form-control">
    </div>

    <div class="form-group">
    <label for="data_nascita">Numero Matricola</label>
    <input type="number" name="numero_matricola" class="form-control">
    </div>


    <div class="form-group">
    <label for="password">Password</label>
    <input type="password" name="password" class="form-control">
    </div>


    <input type="submit" name="registra_redattore" value="Registra Redattore" class="btn btn-success">

</form>

<hr>

<form action="gestione_redattori.php" method="post">

<h2> Cancella Redattore </h2>


    <div class="form-group">
    <label for="cancella_redattore"> Seleziona Redattore</label>
     <select id="select" name="redattore" class="form-control">
    <option value="" > Seleziona Redattore</option>
    <?php
     
 $ricercaTipologia = query('SELECT * FROM redattore '); 

conferma($ricercaTipologia);

while($row = fetch_array($ricercaTipologia)){
  echo "<option value='{$row['id_redattore']}' >{$row['nome']} {$row['cognome']} N. Matricola {$row['matricola']}</option>";
}
?>
    </select> 
    </div> 

    <input type="submit" name="cancella_redattore" value="Cancella Redattore" class="btn btn-success">
    </form>
    </div> 

    </div>
    </div>
  </div>

  <?php include(FRONT_END.DS.'footer.php');
?>