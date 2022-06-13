<?php require_once("../risorse/config.php");
?>

<?php include(FRONT_END.DS.'header.php');
?>
  <body>

  

    <!-- Page Content -->
    <div class="container my-5">

      <div class="row">
      


     

        <div class="col-lg-9">
        <?php
if(isset($_POST['ricerca2'])){
  $tipologia=$_POST['tipologia'];
$pdtTipologia =query("SELECT*FROM ricetta WHERE tipologia_portata_id_tipologia_portata=$tipologia");
    conferma($pdtTipologia);
    while($row=fetch_array($pdtTipologia)){

$ptdSingoloCat =<<< STRINGA_PDT



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
echo $ptdSingoloCat;
    }}?>

<!------------------------------------------------------>
<?php
if(isset($_POST['controlla2'])){
  $difficolta=$_POST['difficolta'];
$pdtDifficolta =query("SELECT*FROM ricetta WHERE difficoltà=$difficolta");
    conferma($pdtDifficolta);
    while($row=fetch_array($pdtDifficolta)){

$ptdSingoloDif =<<< STRINGA_PDT



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
echo $ptdSingoloDif;
    }}?>

    <!------------------------------------------------------>
<?php
if(isset($_POST['controlla3'])){
  $cottura=$_POST['cottura'];
$pdtCottura =query("SELECT*FROM ricetta WHERE tempo_preparazione=$cottura");
    conferma($pdtCottura);
    while($row=fetch_array($pdtCottura)){

$ptdSingoloCot =<<< STRINGA_PDT



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
echo $ptdSingoloCot;
    }}?>

     <!------------------------------------------------------>
<?php
if(isset($_POST['controlla4'])){
  $ingrediente=$_POST['ingrediente'];
$pdtIngrediente =query("SELECT*FROM lista_ingredienti
 INNER JOIN ricetta ON ricetta.id_ricetta=lista_ingredienti.ricetta_id_ricetta
  INNER JOIN ingredienti ON lista_ingredienti.ingredienti_id_ingredienti=ingredienti.id_ingredienti
   WHERE ingredienti_id_ingredienti=$ingrediente");
    conferma($pdtIngrediente);
    while($row=fetch_array($pdtIngrediente)){

$ptdSingoloIng =<<< STRINGA_PDT



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
echo $ptdSingoloIng;
    }}?>

<!----------------------------------------------------->
<?php
if(isset($_POST['ricerca_crescente'])){

$result = query("SELECT id_ricetta, titolo, tempo_preparazione, difficoltà, note, SUM(quantita*kcal_100g)/100 AS calorieT
 FROM lista_ingredienti 
 INNER JOIN ricetta ON ricetta.id_ricetta=lista_ingredienti.ricetta_id_ricetta 
 INNER JOIN ingredienti ON lista_ingredienti.ingredienti_id_ingredienti=ingredienti.id_ingredienti 
 GROUP BY id_ricetta 
ORDER BY `calorieT` ASC");

while($row = mysqli_fetch_array($result))
{
	$pdtCalorie =<<< STRINGA_PDT

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
  <h6>Kcal totali: {$row['calorieT']}</h6>
  </div>
</div>
</div>
   
STRINGA_PDT;
echo $pdtCalorie;
}
}
  
?>

<?php
if(isset($_POST['ricerca_decrescente'])){

$result = query("SELECT id_ricetta, titolo, tempo_preparazione, difficoltà, note, SUM(quantita*kcal_100g)/100 AS calorieT
 FROM lista_ingredienti 
 INNER JOIN ricetta ON ricetta.id_ricetta=lista_ingredienti.ricetta_id_ricetta
  INNER JOIN ingredienti ON lista_ingredienti.ingredienti_id_ingredienti=ingredienti.id_ingredienti GROUP BY id_ricetta 
ORDER BY `calorieT` DESC");
;

while($row = mysqli_fetch_array($result))
{
	$pdtCalorie =<<< STRINGA_PDT

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
  <h6>Kcal totali: {$row['calorieT']}</h6>
  </div>
</div>
</div>
   
STRINGA_PDT;
echo $pdtCalorie;
}
}
  
?>






    <?php
     
     $ricercaTipologia = query('SELECT * FROM lista_ingredienti 
     INNER JOIN ingredienti ON lista_ingredienti.ingredienti_id_ingredienti=ingredienti.id_ingredienti '); 
    
    conferma($ricercaTipologia);
    
    while($row = fetch_array($ricercaTipologia)){
       "<option value='{$row['ingredienti_id_ingredienti']}' >{$row['nome']}</option>";
    }
    ?>













    
   
</div>
</div>
</div>
</div>
</div>



     
     <?php include(FRONT_END.DS.'footer.php');?>
