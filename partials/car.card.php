<div class="card text-center shadow my-3">

    <div class="card-header bg-dark text-white ">
        <h2 class="card-title"><?= ucwords($car["name"]) ?></h2>
    </div>

    <div class="card-body">
        <img src="<?= $car["coverImage"] ?>" class="img-fluid" alt="photo de <?= $car["name"] ?>">
        <hr>
        <p>Origine:
            <?php if ($car["pays"]) : ?>
                <span><?= mb_strtoupper($car["pays"]) ?></span>
            <?php else : ?>
                <span>NC</span>
            <?php endif; ?>
        </p>

        <p>Puissance:
                                <!-- SWICTCH  -->
<?php switch ($car["power"]): ?>
<?php case $car["power"] < 1000: ?>
    <span class="badge badge-danger"> <?= $car["power"] ?> CH</span>
<?php break; ?>

<?php case $car["power"] >= 1000 && $car["power"] <= 1200 : ?>
    <span class="badge badge-warning"> <?= $car["power"] ?> CH</span>
<?php break; ?>

<?php case $car["power"] > 1200: ?>
    <span class="badge badge-success"> <?= $car["power"] ?> CH</span>
<?php break; ?>

<?php endswitch; ?>
                            <!-- END SWICTCH  -->
        </p>



        <p>0 à 100 km/h: <span><?= $car["perf"] ?> sec</span></p>

        <p>Réserver maintenant !</p>
        <button class="btn btn-primary ">Réserver</button>
    </div>
</div>
<hr>