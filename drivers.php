<?php 
    require_once "./partials/header.php";
    require_once "data.repo.php"; 
?>

<div class="container">

    <h1 class="my-5">
        Nos Pilotes
    </h1>

    <div class="row flex-lg-row flex-xl-row flex-column">
        <?php foreach ($drivers as $driver) : ?>

            <?php require "./partials/driver.card.php"  ?>

        <?php endforeach; ?>
    </div>
</div>

<?php require_once "./partials/header.php" ?>

</body>

</html>