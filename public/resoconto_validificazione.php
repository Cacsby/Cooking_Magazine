


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
<?php if(isset($_POST['approva'])){

$ricetta=$_POST['ricetta_valutare'];
$matricola=$_POST['matricola'];


$approva="INSERT INTO pubblicazione (ricetta_id_ricetta, redattore_id_redattore)
 VALUES('{$ricetta}','{$matricola}')";

echo $approva;

$creaApp= query($approva);

if($creaApp){

echo ("Approvazione avvenuta correttamente");

}else{
 echo ("Errore");
}
}
 ?>

  <body>
  
  <form action="resoconto_validificazione.php" method="post">
    <div class="container my-5">
    <h2> Ricerca ricette validificate da singolo Redattore </h2>
      <div class="row">
        
    <div class="col-sm-6">
    <div class="form-group">
    <label for="redattore"> Ricette validate da singolo Redattore</label>
     <select id="select" name="redattore" class="form-control">
    <option value="" > Seleziona Redattore</option>
    <?php
     
 $ricercaRedattore = query('SELECT * FROM redattore '); 

conferma($ricercaRedattore);

while($row = fetch_array($ricercaRedattore)){
  echo "<option value='".$row['id_redattore']."'>".$row['cognome']." ".$row['nome']."</option>";
}
?>
    </select> 
    </div> 


    </select> 
    </div> 
    </div>

    
<br>
    <input type="submit" name="ricerca_per_redattore" value="ricerca ricette per redattore" class="btn btn-success">

    </form>
<br>
 
    <br>
       
    <?php if(isset($_POST['ricerca_per_redattore'])){

$redattore=$_POST['redattore'];



$ricercaRicette = query("SELECT * FROM pubblicazione 
INNER JOIN ricetta ON pubblicazione.ricetta_id_ricetta=ricetta.id_ricetta
 INNER JOIN redattore ON redattore.id_redattore=pubblicazione.redattore_id_redattore
  WHERE redattore_id_redattore=$redattore"); 
conferma($ricercaRicette);

while($row=fetch_array($ricercaRicette)){

  $ptdSingoloPdt =<<< STRINGA_PDT

  <div ="col-lg-4 col-md-6 mb-4">
  <div class="card h-100">
    
    <div class="card-body">
      <h4 class="card-title">
        <a href='prodotto.php?id={$row['id_ricetta']}'>Nome: {$row['titolo']}</a>
      </h4>
      <h5>Tempo Prep:  {$row['tempo_preparazione']} min.</h5>
      <p class="card-text">{$row['note']}</p>
    </div>
    <div class="card-footer">
    <h6>Livello Difficoltà: {$row['difficoltà']}</h6>
    </div>
  </div>
  </div>
 
STRINGA_PDT;
  echo $ptdSingoloPdt;}




}

 ?>

<div class="card mt-4">
  
  

</div>
</div>
</div>
</div>











 



  <?php include(FRONT_END.DS.'footer.php');
?>


