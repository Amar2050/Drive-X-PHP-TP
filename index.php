<?php require_once "./partials/header.php" ?>

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

        <div class="card-deck  justify-content-center">

            <div class="card text-center shadow">

                <div class="card-header bg-dark text-white">
                    <h2 class="card-title">Lewis Hamilton</h2>
                </div>

                <div class="card-body">

                    <img src="./assets/img/drivers/lewis.jpg" width="300px" height="150px" class="img-fluid"
                        alt="photo kenblock">
                    <hr>

                    <p>Origine: Angleterre</p>

                    <p>Discipline:
                        <span class=" badge badge-primary">formule 1</span>
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
            <div class="card text-center shadow">

                <div class="card-header bg-dark text-white ">
                    <h2 class="card-title">Shirley Muldowney</h2>
                </div>

                <div class="card-body">

                    <img src="./assets/img/drivers/shirleymuldowney.jpg" width="300px" height="150px" class="img-fluid"
                        alt="photo kenblock">
                    <hr>

                    <p>Origine: USA</p>

                    <p>Discipline:
                        <span class=" badge badge-danger">drag</span>
                    </p>

                    <button class="btn btn-success mx-2 border" >
                        <i class="fas fa-thumbs-up"></i>
                    </button>

                    <button class="btn btn-danger border">
                        <i class="fas fa-thumbs-down"></i>
                    </button>

                </div>
            </div>
            <hr>


        </div>


        <h2 class="my-5 text-center">Nos Meilleures Voitures</h2>

        <div class="card-deck  justify-content-center">

            <div class="card text-center shadow">
                <div class="card-header bg-dark text-white ">
                    <h2 class="card-title">Bugatti Chiron</h2>
                </div>

                <div class="card-body">
                    <img src="./assets/img/cars/bugatti.jpg"
                        class="img-fluid" alt="photo de bugatti">
                    <hr>
                    <p>Origine: France

                    </p>

                    <p>Puissance: <span class="badge badge-info">1500 CH</span></p>

                    <p>0 à 100 km/h: <span> 2.4 sec</span></p>

                    <p>Réserver maintenant !</p>

                    <button class="btn btn-primary ">Réserver</button>
                </div>
            </div>
            <hr>

            <div class="card text-center shadow">
                <div class="card-header bg-dark text-white ">
                    <h2 class="card-title">Mercedes Amg One</h2>
                </div>

                <div class="card-body">
                    <img src="./assets/img/cars/mercedes.jpg"
                        class="img-fluid" alt="photo de voiture name">
                    <hr>
                    <p>Origine: Allemagne

                    </p>

                    <p>Puissance: <span class="badge badge-info">1000 CH</span></p>

                    <p>0 à 100 km/h: <span> 2.2 sec</span></p>

                    <p>Réserver maintenant !</p>

                    <button class="btn btn-primary ">Réserver</button>
                </div>
            </div>
            <hr>

        </div>


    </div>

    <?php require_once "./partials/footer.php" ?>

</body>

</html>