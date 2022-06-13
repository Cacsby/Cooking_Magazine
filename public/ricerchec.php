


<?php require_once("../risorse/config.php");
?>

<?php include(FRONT_END.DS.'header.php');
?>


  <body>
  
  <form action="ricerca.php" method="post">
    <div class="container my-5">
    <h2> Ricerca per tipologia di portata </h2>
      <div class="row">
        
    <div class="col-sm-6">
    <div class="form-group">
    <label for="tipologia"> Tipologia portata</label>
     <select id="select" name="tipologia" class="form-control">
    <option value="" > Seleziona tipologia</option>
    <?php
     
 $ricercaTipologia = query('SELECT * FROM tipologia_portata '); 

conferma($ricercaTipologia);

while($row = fetch_array($ricercaTipologia)){
  echo "<option value='{$row['id_tipologia_portata']}' >{$row['nome']}</option>";
}
?>
    </select> 
    </div> 

    
<br>
    <input type="submit" name="ricerca2" value="Controlla" class="btn btn-success">

    </form>

    <hr>
    <h2> Ricerca per livello di difficoltà </h2>
<br>
    <form action="ricerca.php" method="post">

    <div class="form-group">
    <div class="form-group">
    <label for="difficolta">Livello difficoltà da 1 a 5</label>
    <input type="range" name="difficolta" min='1' max='5' class="form-control" >
    </div>
<br>
    <input type="submit" name="controlla2" value="Controlla" class="btn btn-success">
    </form>
 
 <!------------------------------------------------------>
    
    <hr>
    <h2> Ricerca per tempo di preparazione </h2>
<br>
    <form action="ricerca.php" method="post">
 
    <div class="form-group">
    <label for="cottura">Tempo di preparazione (min)</label>
    <input type="number" name="cottura" min='1' max='500' placeholder="120" class="form-control" >
    </div>
<br>
    <input type="submit" name="controlla3" value="Controlla" class="btn btn-success">
    </form>
 

 <!------------------------------------------------------>
 
 <hr>
    <h2> Ricerca per ingrediente </h2>
<br>
    <form action="ricerca.php" method="post">
 
    <div class="form-group">
    <label for="ingrediente"> Scegliere ingrediente</label>
     <select id="select" name="ingrediente" class="form-control">
    <option value="" > Seleziona ingrediente</option>
    <?php
     
     $ricercaTipologia = query('SELECT * FROM lista_ingredienti 
     INNER JOIN ingredienti ON lista_ingredienti.ingredienti_id_ingredienti=ingredienti.id_ingredienti '); 
    
    conferma($ricercaTipologia);
    
    while($row = fetch_array($ricercaTipologia)){
      echo "<option value='{$row['ingredienti_id_ingredienti']}' >{$row['nome']}</option>";
    }
    ?>
        </select> 
        </div> 
    <br>
        <input type="submit" name="controlla4" value="Controlla" class="btn btn-success">
        </form>
     </div>
</div>
</div>
</div>
</div>











 



  <?php include(FRONT_END.DS.'footer.php');
?>


