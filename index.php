<?php
require_once "services.php";
$driversTwo = array_slice($driversTri, 0, 2);
$carsTwo = array_slice($carsTri, 0, 2);

?>


<?php require_once "partials/header.php" ?>


<div class="container">
    <div class="jumbotron my-5 text-center">
        <h1 class="display-3 text-danger">
            Drive-X
        </h1>
        <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention
            to
            featured content or information.</p>
        <hr class="my-4">
        <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
        <p class="lead">
            <a class="btn btn-primary btn-lg" routerLink="cars" role="button">eXotic Cars</a>
        </p>
    </div>

    <h2 class="my-5 text-center">Nos Pilotes d'Exception</h2>

    <div class="card-deck flex-lg-row flex-md-row flex-xl-row flex-column">

        <?php foreach ($driversTwo as $driver) : ?>
            <?php require "partials/driver.card.php" ?>
        <?php endforeach; ?>

    </div>

    <h2 class="my-5 text-center">Nos Meilleures Voitures</h2>

    <div class="card-deck flex-lg-row flex-md-row flex-xl-row flex-column">

        <?php foreach ($carsTwo as $car) : ?>
            <?php require "partials/car.card.php" ?>
        <?php endforeach; ?>

    </div>



</div>

<?php require "partials/footer.php" ?>

</body>

</html>