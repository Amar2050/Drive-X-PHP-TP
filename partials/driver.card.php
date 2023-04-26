<div class="card text-center shadow my-3">
    <div class="card-header bg-dark text-white ">
        <h2 class="card-title"><?= $driver["fullName"] ?></h2>
    </div>

    <div class="card-body">

        <img src="<?= $driver["coverImage"] ?>" width="300px" height="150px" class="img-fluid" alt="photo <?= $driver["fullName"] ?>">
        <hr>

        <p>Origine: <?= $driver["pays"] ?></p>

        <p>Discipline:
            <span class="badge badge-success"><?= $driver["category"] ?></span>
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