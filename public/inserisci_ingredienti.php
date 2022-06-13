<?php require_once("../risorse/config.php");
?>

<?php include(FRONT_END.DS.'header.php');
?>

<?php 


if(isset($_POST['submit'])){

  
  $nome=$_POST['nome'];
  $tipologia=$_POST['tipologia'];
  $difficolta=$_POST['difficolta'];
  $porzioni=$_POST['porzioni'];
  $cottura=$_POST['cottura'];
  $preparazione= $_POST['preparazione'];
  $note= $_POST['note'];
  $visitatore= $_POST['visitatore'];
 
 
  $ricetta="INSERT INTO ricetta ( preparazione, note, difficoltà, tempo_preparazione, N_porzioni, 
  tipologia_portata_id_tipologia_portata, visitatore_id_visitatore, titolo)
   VALUES('$preparazione','$note','$difficolta','$cottura','$porzioni','$tipologia','$visitatore','$nome')";
  

 $creaRicetta=mysqli_query($connessione,$ricetta);
}

?>

<?php 
if(isset($_POST['aggiungi'])){
  $ingrediente1=$_POST['ingrediente1'];
  $quantita1=$_POST['quantita1'];
  $ricetta=$_POST['ricetta'];  
  $ingrediente="INSERT INTO lista_ingredienti ( quantita, ingredienti_id_ingredienti, ricetta_id_ricetta)
   VALUES('$quantita1','$ingrediente1','$ricetta')";
   
 $ricercaIngrediente=mysqli_query($connessione,$ingrediente);
}

?>
<?php 
if(isset($_POST['aggiungi'])){
  $ingrediente1=$_POST['ingrediente2'];
  $quantita1=$_POST['quantita2'];
  $ricetta=$_POST['ricetta'];  
  $ingrediente="INSERT INTO lista_ingredienti ( quantita, ingredienti_id_ingredienti, ricetta_id_ricetta)
   VALUES('$quantita1','$ingrediente1','$ricetta')";
   
 $ricercaIngrediente=mysqli_query($connessione,$ingrediente);
}

?>
<?php 
if(isset($_POST['aggiungi'])){
  $ingrediente1=$_POST['ingrediente3'];
  $quantita1=$_POST['quantita3'];
  $ricetta=$_POST['ricetta'];  
  $ingrediente="INSERT INTO lista_ingredienti ( quantita, ingredienti_id_ingredienti, ricetta_id_ricetta)
   VALUES('$quantita1','$ingrediente1','$ricetta')";
   
 $ricercaIngrediente=mysqli_query($connessione,$ingrediente);
}

?>
<?php 
if(isset($_POST['aggiungi'])){
  $ingrediente1=$_POST['ingrediente4'];
  $quantita1=$_POST['quantita4'];
  $ricetta=$_POST['ricetta'];  
  $ingrediente="INSERT INTO lista_ingredienti ( quantita, ingredienti_id_ingredienti, ricetta_id_ricetta)
   VALUES('$quantita1','$ingrediente1','$ricetta')";
   
 $ricercaIngrediente=mysqli_query($connessione,$ingrediente);
}

?>
<?php 
if(isset($_POST['aggiungi'])){
  $ingrediente1=$_POST['ingrediente5'];
  $quantita1=$_POST['quantita5'];
  $ricetta=$_POST['ricetta'];  
  $ingrediente="INSERT INTO lista_ingredienti ( quantita, ingredienti_id_ingredienti, ricetta_id_ricetta)
   VALUES('$quantita1','$ingrediente1','$ricetta')";
   
 $ricercaIngrediente=mysqli_query($connessione,$ingrediente);
}

?>


  <body>
    <div class="container my-5">
      <div class="row">
      

    
    <div class="col-sm-6">

    <h2> Inserisci gli ingredienti necessari per la ricetta </h2>
<br>

   <form action="inserisci_ingredienti.php" method="post">
   <div class="form-group">
    
    <label for="ricetta">Seleziona la tua ricetta</label>
    <select id="select" name="ricetta"  class="form-control" >
    <option value="" > Seleziona la tua ricetta</option>
<?php 
$ricercaRicetta = query('SELECT * FROM ricetta'); 
conferma($ricercaRicetta);

while($row = fetch_array($ricercaRicetta)){


 
  echo "<option value='".$row['id_ricetta']."'> ".$row['id_ricetta']." ".$row['titolo']."</option>";
}
?>    
  <div class="form-group">
    </select> 
    </div>
<hr> 
 <!---------------------------------------------------->
    <div  class="form-group">
     <label for="ingrediente1">Inserisci ingrediente</label>
    <select id="select" name="ingrediente1"  class="form-control" >
    <option value="" > Inserisci ingrediente</option>   
<?php 
$ricercaIngrediente = query('SELECT * FROM ingredienti'); 
conferma($ricercaIngrediente);

while($row = fetch_array($ricercaIngrediente)){

  echo "<option value='".$row['id_ingredienti']."'>".$row['nome']."</option>";}
?>  
    </select> 
    </div>

    <div  class="form-group">
    <label for="quantita1">Quantità in grammi (g)</label>
    <input type="number" name="quantita1" min='1'class="form-control" >
    </div>
     <!---------------------------------------------------->
    <div  class="form-group">
     <label for="ingrediente2">Inserisci ingrediente</label>
    <select id="select" name="ingrediente2"  class="form-control" >
    <option value="" > Inserisci ingrediente</option>   
<?php 
$ricercaIngrediente = query('SELECT * FROM ingredienti'); 
conferma($ricercaIngrediente);

while($row = fetch_array($ricercaIngrediente)){

  echo "<option value='".$row['id_ingredienti']."'>".$row['nome']."</option>";}
?>  
    </select> 
    </div>

    <div  class="form-group">
    <label for="quantita2">Quantità in grammi (g)</label>
    <input type="number" name="quantita2" min='1'class="form-control" >
    </div>

    <!---------------------------------------------------->
    <div  class="form-group">
     <label for="ingrediente3">Inserisci ingrediente</label>
    <select id="select" name="ingrediente3"  class="form-control" >
    <option value="" > Inserisci ingrediente</option>   
<?php 
$ricercaIngrediente = query('SELECT * FROM ingredienti'); 
conferma($ricercaIngrediente);

while($row = fetch_array($ricercaIngrediente)){

  echo "<option value='".$row['id_ingredienti']."'>".$row['nome']."</option>";}
?>  
    </select> 
    </div>

    <div  class="form-group">
    <label for="quantita3">Quantità in grammi (g)</label>
    <input type="number" name="quantita3" min='1'class="form-control" >
    </div> 

    <!---------------------------------------------------->
    
    <div  class="form-group">
     <label for="ingrediente4">Inserisci ingrediente</label>
    <select id="select" name="ingrediente4"  class="form-control" >
    <option value="" > Inserisci ingrediente</option>   
<?php 
$ricercaIngrediente = query('SELECT * FROM ingredienti'); 
conferma($ricercaIngrediente);

while($row = fetch_array($ricercaIngrediente)){

  echo "<option value='".$row['id_ingredienti']."'>".$row['nome']."</option>";}
?>  
    </select> 
    </div>

    <div  class="form-group">
    <label for="quantita4">Quantità in grammi (g)</label>
    <input type="number" name="quantita4" min='1'class="form-control" >
    </div> 

    <!---------------------------------------------------->
    <div  class="form-group">
     <label for="ingrediente5">Inserisci ingrediente</label>
    <select id="select" name="ingrediente5"  class="form-control" >
    <option value="" > Inserisci ingrediente</option>   
<?php 
$ricercaIngrediente = query('SELECT * FROM ingredienti'); 
conferma($ricercaIngrediente);

while($row = fetch_array($ricercaIngrediente)){

  echo "<option value='".$row['id_ingredienti']."'>".$row['nome']."</option>";}
?>  
    </select> 
    </div>

    <div  class="form-group">
    <label for="quantita5">Quantità in grammi (g)</label>
    <input type="number" name="quantita5" min='1'class="form-control" >
    </div> 

    <!---------------------------------------------------->
    

    <input type="submit"  name="aggiungi" value="Aggiungi ingredienti" class="btn btn-success">
    <br><br>
    </form>
    <form action="home.php" method="post">
    <input type="submit" name="submit" value="Torna alla Home" class="btn btn-success">
    



    </form>

    </div>
    </div>
  </div>

  <?php include(FRONT_END.DS.'footer.php');
?>

