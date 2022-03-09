 <?php echo $this->render('views/header.html',NULL,get_defined_vars(),0); ?>
 <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Terri Lynn Images</title>

<!--  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">-->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link
          rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
  />

  <link rel="stylesheet" href="../styles/styles.css">
</head>
<body>
<?php echo $this->render('views/nav.html',NULL,get_defined_vars(),0); ?>



<!-- GALLERY -->
<div class="container">
  <div class="row mt-4" id="gallery" data-toggle="modal" data-target="#modal">
    <div class="col-12 col-sm-6 col-lg-3 shadow-lg">
      <img class="w-100 " src="images/drop.jpg" alt="First slide" data-target="#carousel" data-slide-to="0">
    </div>
    <div class="col-12 col-sm-6 col-lg-3">
      <img class="w-100" src="images/drop.jpg" alt="Second slide" data-target="#carousel" data-slide-to="1">
    </div>
    <div class="col-12 col-sm-6 col-lg-3">
      <img class="w-100" src="images/drop.jpg" alt="Third slide" data-target="#carousel" data-slide-to="2">
    </div>
    <div class="col-12 col-sm-6 col-lg-3">
      <img class="w-100" src="images/drop.jpg" alt="Fourth slide" data-target="#carousel" data-slide-to="3">
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
              <img class="d-block w-100" src="images/drop.jpg" alt="First slide">
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

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>