<div class="card text-center shadow my-3 
    <?= ($driver["likeIts"] > 0) ? "border border-success" : ( ($driver["likeIts"] < 0) ? "border border-danger" : "") ?>">
<!-- ternaire imbriqué SI SINON (SI SINON)  Si positif vert si négatif rouge et sinon neutre (0) donc rien -->
    <div class="card-header bg-dark text-white">
        <h2 class="card-title">
            <?= ucwords($driver["fullName"] )?>
        </h2>
    </div>

    <div class="card-body">

        <img src="<?= $driver["coverImage"] ?>" width="300px" height="150px" class="img-fluid" alt="photo <?= $driver["fullName"] ?>">
        <hr>

        <p>Origine:
            <?php if ($driver["pays"]) : ?>
                <span><?= mb_strtoupper($driver["pays"]) ?></span>
            <?php else : ?>
                <span>NC</span>
            <?php endif; ?>
        </p>

        <p>Discipline:

                                        <!-- SWICTCH  -->
<?php switch ($driver["category"]): ?>
<?php case $driver["category"] == "formule 1": ?>
    <span class="badge badge-success"> <?= $driver["category"] ?> </span>
<?php break; ?>

<?php case $driver["category"] == "gymkhana": ?>
    <span class="badge badge-primary"> <?= $driver["category"] ?> </span>
<?php break; ?>

<?php case $driver["category"] == "drag": ?>
    <span class="badge badge-info"> <?= $driver["category"] ?> </span>
<?php break; ?>

<?php case $driver["category"] == "rallye": ?>
    <span class="badge badge-danger"> <?= $driver["category"] ?> </span>
<?php break; ?>

<?php case $driver["category"] == "nascar": ?>
    <span class="badge badge-warning"> <?= $driver["category"] ?> </span>
<?php break; ?>

<?php endswitch; ?>
                            <!-- END SWICTCH  -->
         
        </p>



        <button class="btn btn-success mx-2 border">
            <i class="fas fa-thumbs-up"></i>
        </button>

        <button class="btn btn-danger border">
            <i class="fas fa-thumbs-down"></i>
        </button>

    </div>
</div>
<hr>