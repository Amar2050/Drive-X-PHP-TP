<?php   
    require_once "./partials/header.php";
    require_once "data.repo.php"; 
    require_once "services.php"; 
?>
    <div class="container">

        <h1 class="my-5">
            Nos Vehicules
        </h1>
    
        <div class="row flex-lg-row flex-xl-row flex-column">
        <?php foreach ($cars as $car) : ?>

           <?php require "./partials/car.card.php"  ?>
           
        <?php endforeach; ?>
        </div>
    </div>

    <?php require_once "./partials/header.php" ?>

</body>

</html>