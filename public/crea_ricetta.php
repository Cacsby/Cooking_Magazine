<?php require_once("../risorse/config.php");
?>

<?php include(FRONT_END.DS.'header.php');
?>




 <body>
    <div class="container my-5">
      <div class="row">
      

    
    <div class="col-sm-6">

    <h2> Crea la tua ricetta </h2>
<br>
<form action="inserisci_ingredienti.php" method="post">
    <div class="form-group">
    <label for="nome">Nome della ricetta:</label>
    <input type="text" name="nome" class="form-control">
    </div>

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

    <div class="form-group">
    <label for="difficolta">Livello difficoltà da 1 a 5</label>
    <input type="range" name="difficolta" min='1' max='5' class="form-control" >
    </div>

   
    <div class="form-group">
    <label for="porzioni">Numero di porzioni</label>
    <input type="number" name="porzioni" min='1' max='10' class="form-control" >
    </div>

    <div class="form-group">
    <label for="cottura">Tempo di preparazione (min)</label>
    <input type="number" name="cottura" min='1' max='500' class="form-control" >
    </div>

    <div class="form-group">
    <label for="preparazione">Tipo di preparazione</label>
    <input type="text" name="preparazione"  class="form-control" >
    </div>

    <div class="form-group">
    <label for="note">Note aggiuntive</label>
    <input type="text" name="note"  class="form-control" >
    </div>


    <div class="form-group">
    <label for="visitatore">Eseguito da</label>
     <select id="select" name="visitatore" class="form-control">
    <option value="" > Seleziona Autore</option>
    <?php
      
 $ricercaVisitatore = query('SELECT * FROM visitatore '); 


conferma($ricercaVisitatore);


while($row = fetch_array($ricercaVisitatore)){
//  echo "<option value='{$row['id_impiegato']}' >{$row['nome']}</option>

echo "<option value='".$row['id_visitatore']."'>".$row['cognome']." ".$row['nome']."</option>";
}
?>
    </select> 
    </div> 

    <input type="submit" name="submit" value="Crea ricetta" class="btn btn-success">
     
    </form>

    </form>


    </div>
    </div>
  </div>
  </div>
  </div>
  <?php include(FRONT_END.DS.'footer.php');
?>

