<?php require_once("../risorse/config.php");
?>

<?php include(FRONT_END.DS.'header.php');
?>



  <body>
    <div class="container my-5">
      <div class="row">
      

    
    <div class="col-sm-6">

    <h2> Ricerca ricette per ordine crescente di Calorie </h2>
<br>

   <form action="ricerca.php" method="post">
   <div class="form-group">
    
    <br>

    <input type="submit" name="ricerca_crescente" value="Ricerca calorie ordine crescente" class="btn btn-success">
    
    <br>
    <br>
    <hr>

    
    <h2> Ricerca ricette per ordine crescente di Calorie </h2>
<br>

   <form action="ricerca.php" method="post">
   <div class="form-group">
    
    <br>

    <input type="submit" name="ricerca_decrescente" value="Ricerca calorie ordine decrescente" class="btn btn-success">
    
    
    


    


    </div>
    </div>
  </div>
  </div>
  </div>

  <?php include(FRONT_END.DS.'footer.php');
?>

