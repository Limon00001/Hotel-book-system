<?php

    require ('./admin/include/db_config.php');
    require ('./admin/include/essentials.php');
    session_start();


 
    // Registration
    if(isset($_POST['submit']))
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phonenum = $_POST['phonenum'];
        $dob = $_POST['dob'];
        $address = $_POST['address'];
        $pass = $_POST['password'];
        $cpass = $_POST['cpass'];

        if($pass == $cpass)
        {
            $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
            $query = "INSERT INTO `user_cred` (`name`, `email`, `address`, `phonenum`, `dob`, `password`) VALUES ('$name', '$email', '$phonenum', '$dob', '$address', '$password')";
            $query_run = mysqli_query($con, $query);

            if($query_run){
                // alert('success', 'Congratulations - Registration Successful!');
                // $_SESSION['status'] = "Congratulations - Registration Successful!";
                // $_SESSION['status_code'] = "success";
                echo '
                    <script>
                        alert("Congratulations - Registration Successful!");
                    </script>
                    ';
                header('location: ./index.php');
            }
            else {
                // alert('error', 'Registration failed - Invalid Credentials!');
                // $_SESSION['status'] = "Registration failed - Invalid Credentials!";
                // $_SESSION['status_code'] = "error";
                echo '
                <script>
                    alert("Registration failed - Invalid Credentials!");
                </script>
                ';
            }
        }
    }
    // End Registration



    // if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true)
    // {
    //     header("location: ./index.php");
    // }

    ?>

    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 px-sm-2 py-sm-2 shadow">
        <div class="container-fluid">
            <a class="navbar-brand me-5 fw-bold fs-3 h-font" href="index.php">Independent Paradise</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item me-3">
                        <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    </li>
                    <li class="nav-item  me-3">
                        <a class="nav-link" href="rooms.php">Rooms</a>
                    </li>
                    <li class="nav-item me-3">
                        <a class="nav-link" href="contact.php">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="about.php">About</a>
                    </li>
                </ul>
                <form class="d-flex" role="search">
                    <?php
                        // session_start();
                        if(isset($_SESSION['id']) && isset($_SESSION['email'] ) )
                        {
                        ?>
                            <button type="button" class="btn btn-outline-dark me-lg-3 me-2 shadow-none">
                                <?php echo $_SESSION['email']; ?>
                            </button>
                    <?php
                        }
                        else {
                            header('location: header.php');
                        }
                    ?>
                </form>
            </div>
        </div>
    </nav>


    <!-- LogIn -->
    <div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="" id='login-form'>
                    <div class="modal-header">
                        <h1 class="modal-title fs-5 d-flex align-items-center"><i
                                class="bi bi-person-square me-2 fs-4"></i>User Login</h1>
                        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="form-label">Email address</label>
                            <input name="email_mob" type="email" class="form-control shadow-none" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Password</label>
                            <input name="pass" type="password" class="form-control shadow-none" required>
                        </div>
                        <div class="d-flex align-items-center justify-content-between">
                            <button type="submit" class="btn btn-dark shadow-none" name="login">Login</button>
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>


    <!-- Registration -->
    <div class="modal fade" id="regModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5 d-flex align-items-center"><i
                            class="bi bi-person-plus-fill fs-4 me-2"></i>User Registration</h1>
                    <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="register-form" method="POST">
                    <div class="modal-body">
                        <div class=container-fluid>
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input name="name" id="name" type="text" class="form-control shadow-none" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input name="email" id="email" type="email" class="form-control shadow-none" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="phonenum" class="form-label">Phone</label>
                                    <input name="phonenum" id="phonenum" type="tel" class="form-control shadow-none" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="dob" class="form-label">Date of Birth</label>
                                    <input name="dob" id="dob" type="date" class="form-control shadow-none" required>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <label for="address" class="form-label">Address</label>
                                    <textarea name="address" id="address" class="form-control" style="resize: none" required></textarea>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input name="password" id="password" type="password" class="form-control shadow-none" required>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <label for="cpass" class="form-label">Confirm Password</label>
                                    <input name="cpass" id="cpass" type="password" class="form-control shadow-none" required>
                                </div>

                                <div class="text-center my-2">
                                    <button name="submit" type="submit" class="btn btn-dark shadow-none">Register</button>
                                </div>

                            </div>
                        </div>

                    </div>
                </form>

            </div>
        </div>
    </div>


    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js" integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous"></script>