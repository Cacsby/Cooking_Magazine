


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



$creaApp= query($approva);

if($creaApp){

echo ("Approvazione avvenuta correttamente");

}else{
 echo ("Errore");
}
}
 ?>

  <body>
  
  <form action="validificazione_ricette.php" method="post">
    <div class="container my-5">
    <h2> Ricerca ricetta da validificare </h2>
      <div class="row">
        
    <div class="col-sm-6">
    <div class="form-group">
    <label for="tipologia"> Ricetta da valutare</label>
     <select id="select" name="ricetta_valutare" class="form-control">
    <option value="" > Seleziona ricetta</option>
    <?php
     
 $ricercaTipologia = query('SELECT * FROM ricetta '); 

conferma($ricercaTipologia);

while($row = fetch_array($ricercaTipologia)){
  echo "<option value='{$row['id_ricetta']}' >{$row['titolo']}</option>";
}
?>
    </select> 
    </div> 


    <label for="tipologia"> Valutata da</label>
     <select id="select" name="matricola" class="form-control">
    <option value="" > Seleziona matricola</option>
    <?php
     
 $ricercaRedattore = query('SELECT * FROM redattore '); 

conferma($ricercaRedattore);

while($row = fetch_array($ricercaRedattore)){
  echo "<option value='".$row['id_redattore']."'>".$row['cognome']." ".$row['nome']."</option>";
}
?>
    </select> 
    </div> 
    </div>

    
<br>
    <input type="submit" name="approva" value="Approva" class="btn btn-success">

    </form>
<br>
 
    <br>
        
     </div>
</div>
</div>
</div>
</div>











 



  <?php include(FRONT_END.DS.'footer.php');
?>


