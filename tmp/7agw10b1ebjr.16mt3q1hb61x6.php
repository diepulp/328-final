 <?php echo $this->render('views/header.html',NULL,get_defined_vars(),0); ?>

<body>
 <?php echo $this->render('views/nav.html',NULL,get_defined_vars(),0); ?>

<div class="container-fluid border">

    <div class="row no-gutters">
        <img src="images/barn.png" class="img-fluid mx-auto d-block" alt="Barn">
    </div>

    <div id="bio" class="row border-top mt-1 mx-auto no-gutters justify-content-center">
        <div class="col-3">
            <img class="img-fluid" src="images/terri.png" id="terri"  alt="Terri Percival">
        </div>

        <section class="col-3">
            <h2 class="text-center">About Me</h2>
            <p class="m-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque gravida eu lorem vitae auctor.
                Donec metus metus, egestas nec lacus ut, imperdiet vulputate lectus. </p>

        </section>
    </div>
</div>




 <?php echo $this->render('views/footer.html',NULL,get_defined_vars(),0); ?>

