<?php
    include 'includes/header.php';
    include 'includes/sidebar.php';
    
?>

    <div class="page-content-wrapper parcheMargen">
      
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>                
          </ol>

         <div class="carousel-inner" role="listbox">
             <div class="item active">
                 <img src="img/NaBU.jpg"  class="img-responsive" alt="inicio" height="auto" width="100%">    
             </div>
             
             <div class="item">
                 <img src="img/NaBU2.jpg"  class="img-responsive" alt="inicio" heigth="auto" width="100%">
             </div>
             
             <div class="item">
                 <img src="img/NaBU3.jpg"  class="img-responsive" alt="inicio" heigth="auto" width="100%">
             </div>
             
             <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Anterior</span>
              </a>
              <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Siguiente</span>
              </a>
             
         </div>

                
        </div>

                
                          
        <!--div class="row">
           <img src="img/NaBU.jpg"  class="img-responsive" alt="inicio" height="auto" width="100%">    
           <img src="img/NaBU2.jpg"  class="img-responsive" alt="inicio" heigth="auto" width="100%">
           <img src="img/NaBU3.jpg"  class="img-responsive" alt="inicio" heigth="auto" width="100%">

        </div-->
        
    </div>

<?php
    include 'includes/footer.php';
?>