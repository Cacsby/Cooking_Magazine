<?php require_once("../risorse/config.php"); ?>

<?php  include(FRONT_END . DS . 'header.php'); ?>

    
    <!-- Page Content -->
    <div class="container my-5">

  
    
      <!-- Jumbotron Header -->
      <header class="jumbotron my-4">
      
      <h1 class="display-3">CuciniAMO</h1>
        <p class="lead">Trova l'ispirazione per la tua cucina in base alle tue esigenze.</p>
      <!-- <h1 class="display-3 text-center">Categoria</h1>  -->

        <!-- <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer eget orci non massa condimentum porta. Ut magna elit, luctus in luctus at, dapibus id urna. Praesent nec viverra erat. </p>  -->
    
      </header>

      <!-- Page Features -->
      <div class="row">
      <?php include(FRONT_END.DS.'sidebar.php');
?> 
    

    <?php  paginaCategoria(); ?>
        <!-- <div class="col-lg-3 col-md-6 mb-4">
          <div class="card altezza">
            <img class="card-img-top" src="http://placehold.it/500x325" alt="">
            <div class="card-body">
              <h4 class="card-title">Nome Prodotto</h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
            </div>
            <div class="card-footer">
              <a href="#" class="btn btn-success btn-small">Acquista</a> <a href="#" class="btn btn-info btn-small">Dettagli</a>
            </div>
          </div>
        </div> -->


      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

    <!-- Footer -->
    <?php  include(FRONT_END . DS . 'footer.php'); ?>
