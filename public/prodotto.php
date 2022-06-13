<?php require_once("../risorse/config.php");
?>

<?php include(FRONT_END.DS.'header.php');
?>
  <body>

  

    <!-- Page Content -->
    <div class="container my-5">

      <div class="row">
      <?php include(FRONT_END.DS.'sidebar.php');?>

     <?php
         $pdtSingolo= query("SELECT*FROM ricetta 
         WHERE id_ricetta ={$_GET['id']} ");

         conferma($pdtSingolo);
     
         while($row = fetch_array($pdtSingolo)):
    
    ?>

        <div class="col-lg-9">

         <div class="card mt-4">
            <img class="card-img-top img-fluid" src="https://blog.giallozafferano.it/valeriaciccotti/wp-content/uploads/2020/03/Progetto-senza-titolo-6.jpg" alt="">
            <div class="card-body">
              <h3 class="card-title"><?php echo $row['titolo']?></h3>
              <h4></h4>
              <h5 class="card-title">Tempo di preparazione: <?php echo $row['tempo_preparazione']?> minuti</h5>
           <p class="card-text"><?php echo $row['note']?> </p>
              <h5 class="card-title">Livello difficoltà: <?php echo $row['difficoltà']?></h5>
             
            </div>
            <h5 class="card-title">Informazioni ingredienti:</h5>
         
          <!-- /.card -->

          <!--<div class="card card-outline-secondary my-4"> -->
            
          <!-- /.card -->

      
        <!-- /.col-lg-9 -->
        <?php endwhile ?>

        <?php
         $pdtSingolo= query("SELECT*FROM ricetta INNER JOIN lista_ingredienti
         ON lista_ingredienti.ricetta_id_ricetta=ricetta.id_ricetta 
         INNER JOIN ingredienti ON lista_ingredienti.ingredienti_id_ingredienti=ingredienti.id_ingredienti
         WHERE id_ricetta ={$_GET['id']} ");

         conferma($pdtSingolo);
     
         while($row = fetch_array($pdtSingolo)):
    
    
    ?>

<div class="col-lg-9">


<div class="card mt-4">
  
<h5 class="card-title"> <?php echo $row['nome']?> Quantità: <?php echo $row['quantita'] ?> g.</h5>



      </div>

    </div>
    <!-- /.container -->
    <?php endwhile ?>
    </div>

    </div>
    </div>

    </div></div>

</div></div>

</div>
     <!-- Footer -->
     <?php include(FRONT_END.DS.'footer.php');?>
