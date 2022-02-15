<?php echo $this->render('views/header.html',NULL,get_defined_vars(),0); ?>
<body>
<span>Navbar Goes up here in this area</span>
<br>


<div class="container-fluid border">

    <div class="row ">
        <img src="images/barn.png" class="img-fluid mx-auto d-block" alt="Barn">
    </div>
    <div class="row border-bottom border-top mt-1 w-75 mx-auto">
        <section class="col">

        <h2 class="text-center">About Me</h2>
        <p class="m-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque gravida eu lorem vitae auctor.
            Donec metus metus, egestas nec lacus ut, imperdiet vulputate lectus. Vivamus non sodales felis. Praesent in
            posuere mi, sed consectetur nibh. Sed vitae vulputate augue, in placerat massa. Nulla luctus elit tempor,
            ullamcorper augue sit amet, viverra metus. Aenean convallis libero ac imperdiet ullamcorper. Donec et
            condimentum risus. Phasellus viverra cursus laoreet. Aliquam bibendum metus tristique, feugiat velit non,
            rutrum ex. Donec lacinia magna eu lobortis placerat. Integer tempor tempor massa.</p>

        </section>

        <section class="col">

            <img src="images/terri.png" alt="Terri Percival">

        </section>
    </div>

    </div>
</div>


<br>

<?php echo $this->render('views/footer.html',NULL,get_defined_vars(),0); ?>

</body>
</html>