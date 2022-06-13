<?php require_once("../risorse/config.php");
?>

<?php include(FRONT_END.DS.'header.php');
?>




  <body>
    <div class="container my-5">
      <div class="row">
      

    
    <div class="col-sm-6">

    <h2> Crea il tuo menu </h2>
<br>

   <form action="crea_menu.php" method="post">
   <div class="form-group">
    
    <label for="ricetta">Scegli l'antipasto</label>
    <select id="select" name="antipasto"  class="form-control" >
    <option value="" > Seleziona la tua ricetta</option>
<?php 
$menuAntipasto= query('SELECT * FROM tipologia_portata 
INNER JOIN ricetta ON tipologia_portata.id_tipologia_portata=ricetta.tipologia_portata_id_tipologia_portata 
WHERE id_tipologia_portata=1'); 
conferma($menuAntipasto); 

while($row = fetch_array($menuAntipasto)){


 
  echo "<option value='".$row['id_tipologia_portata']."'>  ".$row['titolo']."</option>";
}
?>    
  
    </select> 
    </div>
<hr> 
 
 

   <div class="form-group">
    
    <label for="ricetta">Scegli il primo</label>
    <select id="select" name="primo"  class="form-control" >
    <option value="" > Seleziona il tuo primo</option>
<?php 
$menuPrimo= query('SELECT * FROM tipologia_portata 
INNER JOIN ricetta ON tipologia_portata.id_tipologia_portata=ricetta.tipologia_portata_id_tipologia_portata 
WHERE id_tipologia_portata=2'); 
conferma($menuPrimo); 

while($row = fetch_array($menuPrimo)){


 
  echo "<option value='".$row['id_ricetta']."'>  ".$row['titolo']."</option>";
}
?>    
  
    </select> 
    </div>
    <hr> 
 
 

   <div class="form-group">
    
    <label for="ricetta">Scegli il secondo</label>
    <select id="select" name="secondo"  class="form-control" >
    <option value="" > Seleziona il secondo</option>
<?php 
$menuSecondo= query('SELECT * FROM tipologia_portata 
INNER JOIN ricetta ON tipologia_portata.id_tipologia_portata=ricetta.tipologia_portata_id_tipologia_portata 
WHERE id_tipologia_portata=3'); 
conferma($menuSecondo); 

while($row = fetch_array($menuSecondo)){


 
  echo "<option value='".$row['id_ricetta']."'>  ".$row['titolo']."</option>";
}
?>    
  
    </select> 
    </div>
    <hr> 
 
 

   <div class="form-group">
    
    <label for="ricetta">Scegli il contorno</label>
    <select id="select" name="contorno"  class="form-control" >
    <option value="" > Seleziona il contorno</option>
<?php 
$menuContorno= query('SELECT * FROM tipologia_portata 
INNER JOIN ricetta ON tipologia_portata.id_tipologia_portata=ricetta.tipologia_portata_id_tipologia_portata 
WHERE id_tipologia_portata=4'); 
conferma($menuContorno); 

while($row = fetch_array($menuContorno)){


 
  echo "<option value='".$row['id_ricetta']."'>  ".$row['titolo']."</option>";
}
?>    
  
    </select> 
    </div> 
    <hr> 
 
 

   <div class="form-group">
    
    <label for="ricetta">Scegli il dolce</label>
    <select id="select" name="dolce"  class="form-control" >
    <option value="" > Seleziona il dolce</option>
<?php 
$menuDolce= query('SELECT * FROM tipologia_portata 
INNER JOIN ricetta ON tipologia_portata.id_tipologia_portata=ricetta.tipologia_portata_id_tipologia_portata 
WHERE id_tipologia_portata=5'); 
conferma($menuDolce); 

while($row = fetch_array($menuDolce)){


 
  echo "<option value='".$row['id_ricetta']."'>  ".$row['titolo']."</option>";
}
?>    
  
    </select> 
    </div>
    

    <input type="submit"  name="crea_menu" value="Calorie totali del menu" class="btn btn-success">
    <br><br>
    
    <form action="home.php" method="post">
    <input type="submit" name="submit" value="Torna alla Home" class="btn btn-success">
    <br><br>
    
    </form>


    <?php
if(isset($_POST['crea_menu'])){

  $antipasto=$_POST['antipasto'];
  $primo=$_POST['primo'];
  $secondo=$_POST['secondo'];
  $contorno=$_POST['contorno'];
  $dolce=$_POST['dolce'];

$result = query("SELECT id_ricetta, titolo, tempo_preparazione, difficoltà, note, SUM(quantita*kcal_100g)/100 
AS calorieT FROM lista_ingredienti 
INNER JOIN ricetta ON ricetta.id_ricetta=lista_ingredienti.ricetta_id_ricetta
 INNER JOIN ingredienti ON lista_ingredienti.ingredienti_id_ingredienti=ingredienti.id_ingredienti 
WHERE id_ricetta=$antipasto OR id_ricetta=$primo OR id_ricetta=$secondo
 OR id_ricetta=$contorno OR id_ricetta=$dolce ORDER BY `calorieT`");
 

 while($row = mysqli_fetch_array($result))

{
	$pdtCalorie =<<< STRINGA_PDT

  <div ="col-lg-4 col-md-6 mb-4">

<div class="card h-100">
  <div class="card-body">
    <h4 class="card-title">
    Il menu selezionato contiene un totale di {$row['calorieT']} calorie.
    </h4>
    
  </div>
  
</div>
</div>
   
STRINGA_PDT;
echo $pdtCalorie;
}
}
  
?>



    </div>
    </div>
  </div>

  <?php include(FRONT_END.DS.'footer.php');
?>

