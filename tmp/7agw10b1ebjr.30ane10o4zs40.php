 <?php echo $this->render('views/header.html',NULL,get_defined_vars(),0); ?>
 <?php echo $this->render('views/nav.html',NULL,get_defined_vars(),0); ?>
 <body>


<!-- GALLERY -->
<div class="container">
  <div class="row mt-4" id="gallery" data-toggle="modal" data-target="#modal">
    <div class="col-12 col-sm-6 col-lg-3 shadow-lg">
      <img class="w-100 imgGal" src="images/drop.jpg" alt="First slide" data-target="#carousel" data-slide-to="0">
    </div>
    <div class="col-12 col-sm-6 col-lg-3">
      <img class="w-100 imgGal" src="images/drop.jpg" alt="Second slide" data-target="#carousel" data-slide-to="1">
    </div>
    <div class="col-12 col-sm-6 col-lg-3">
      <img class="w-100 imgGal" src="images/drop.jpg" alt="Third slide" data-target="#carousel" data-slide-to="2">
    </div>
    <div class="col-12 col-sm-6 col-lg-3">
      <img class="w-100 imgGal" src="images/drop.jpg" alt="Fourth slide" data-target="#carousel" data-slide-to="3">
    </div>
    <div class="col-12 col-sm-6 col-lg-3">
      <img class="w-100 imgGal" src="images/drop.jpg" alt="Fourth slide" data-target="#carousel" data-slide-to="3">
    </div>
    <div class="col-12 col-sm-6 col-lg-3">
      <img class="w-100 imgGal" src="images/drop.jpg" alt="Fourth slide" data-target="#carousel" data-slide-to="3">
    </div>
    <div class="col-12 col-sm-6 col-lg-3">
      <img class="w-100 imgGal" src="images/drop.jpg" alt="Fourth slide" data-target="#carousel" data-slide-to="3">
    </div>
    <div class="col-12 col-sm-6 col-lg-3">
      <img class="w-100 imgGal" src="images/drop.jpg" alt="Fourth slide" data-target="#carousel" data-slide-to="3">
    </div>
    <div class="col-12 col-sm-6 col-lg-3">
      <img class="w-100 imgGal" src="images/drop.jpg" alt="Fourth slide" data-target="#carousel" data-slide-to="3">
    </div>
    <div class="col-12 col-sm-6 col-lg-3">
      <img class="w-100 imgGal" src="images/drop.jpg" alt="Fourth slide" data-target="#carousel" data-slide-to="3">
    </div>
    <div class="col-12 col-sm-6 col-lg-3">
      <img class="w-100 imgGal" src="images/drop.jpg" alt="Fourth slide" data-target="#carousel" data-slide-to="3">
    </div>


  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div id="carousel" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" class="active"></li>
            <li data-target="#carousel" data-slide-to="1"></li>
            <li data-target="#carousel" data-slide-to="2"></li>
            <li data-target="#carousel" data-slide-to="3"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100 imgGal" src="images/drop.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="images/drop.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="images/drop.jpg" alt="Third slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="images/drop.jpg" alt="Fourth slide">
            </div>
          </div>
          <a class="carousel-control-prev text-primary" href="#carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>

<?php echo $this->render('views/footer.html',NULL,get_defined_vars(),0); ?>