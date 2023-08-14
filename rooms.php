<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rooms</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@400;700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <!-- Fontawesome -->
    <link rel="stylesheet" href="./fontawesome/css/all.css">
    <link rel="stylesheet" href="./fontawesome/css/all.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css
    ">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="./css/style.css">
</head>
<style>
</style>
<body>
    

<!-- Navbar -->
<?php require('include/header.php') ?>

<!-- Contact -->
<div class="my-5 px-4">
    <h2 class="fw-bold text-center text-uppercase">Our Rooms</h2>
    <div class="bg-dark"></div>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-lg-3 col-md-12 mb-lg-0 mb-4">
            <nav class="navbar navbar-expand-lg navbar-light bg-white rounded shadow">
                <div class="container-fluid flex-lg-column align-items-stretch">
                    <h4 class="mt-2">Filters</h4>
                    <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#filterDropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse flex-column align-items-stretch mt-2" id="filterDropdown">
                        <div class="border bg-light p-3 rounded mb-3">
                            <h5 class="mb-3 text-uppercase" style="font-size: 18px">Check Availability</h5>
                            <label class="form-label">Check-in</label>
                            <input type="date" class="form-control shadow-none mb-3">
                            <label class="form-label">Check-out</label>
                            <input type="date" class="form-control shadow-none">
                        </div>
                        <div class="border bg-light p-3 rounded mb-3">
                            <h5 class="mb-3 text-uppercase" style="font-size: 18px">Facilities</h5>
                            <div class="mb-2">
                                <input type="checkbox" id="f1" class="form-check-input shadow-none mb-3">
                                <label class="form-check-label" for="f1">Facility-one</label>
                            </div>
                            <div class="mb-2">
                                <input type="checkbox" id="f2" class="form-check-input shadow-none mb-3">
                                <label class="form-check-label" for="f2">Facility-two</label>
                            </div>
                            <div class="mb-2">
                                <input type="checkbox" id="f3" class="form-check-input shadow-none mb-3">
                                <label class="form-check-label" for="f3">Facility-three</label>
                            </div>
                        </div>
                        <div class="border bg-light p-3 rounded mb-3">
                            <h5 class="mb-3 text-uppercase" style="font-size: 18px">Guests</h5>
                            <div class="d-flex">
                                <div class="me-3">
                                    <label class="form-label">Adults</label>
                                    <input type="number" class="form-control shadow-none">
                                </div>
                                <div>
                                    <label class="form-label">Children</label>
                                    <input type="number" class="form-control shadow-none">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>

<!-- End contact -->

<!-- footer -->
<?php require('include/footer.php') ?>

<!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
</body>
</html>