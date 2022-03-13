<?php echo $this->render('views/header.html',NULL,get_defined_vars(),0); ?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="styles/homeStyles.css">
</head>
<body>
<?php echo $this->render('views/nav.html',NULL,get_defined_vars(),0); ?>

<div class="container-fluid border">

    <div class="row no-gutters">
        <img src="images/barn.png" class="img-fluid mx-auto d-block" alt="Barn">
    </div>
    <div id="bio" class="row border-top mt-1 mx-auto no-gutters justify-content-center">
        <div class="col-3">
            <img class="img-fluid" id="terri" src="images/terri.png" alt="Terri Percival">
        </div>
        <section class="col-3">
        <h2 class="text-center">About Me</h2>
        <p class="m-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque gravida eu lorem vitae auctor.
            Donec metus metus, egestas nec lacus ut, imperdiet vulputate lectus. Vivamus non sodales felis. Praesent in
            posuere mi, sed consectetur nibh. Sed vitae vulputate augue, in placerat massa. Nulla luctus elit tempor,
            ullamcorper augue sit amet, viverra metus. Aenean convallis libero ac imperdiet ullamcorper. Donec et
            condimentum risus. Phasellus viverra cursus laoreet. Aliquam bibendum metus tristique, feugiat velit non,
            rutrum ex. Donec lacinia magna eu lobortis placerat. Integer tempor tempor massa.</p>

        </section>
    </div>
</div>

<?php echo $this->render('views/footer.html',NULL,get_defined_vars(),0); ?>
