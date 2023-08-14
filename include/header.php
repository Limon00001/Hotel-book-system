<nav class="navbar navbar-expand-lg bg-body-tertiary bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand me-5 fw-bold fs-3" href="index.php">Hotel</a>
            <button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                <a class="nav-link me-2 active" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item me-2">
                <a class="nav-link" href="rooms.php">Rooms</a>
                </li>
                <li class="nav-item me-2">
                <a class="nav-link" href="contact.php">Contact Us</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="about.php">About</a>
                </li>
            </ul>
            <div class="d-flex" role="search">
                <button type="button" class="btn btn-outline-dark shadow-none me-lg-3 me-3" data-bs-toggle="modal" data-bs-target="#loginModal">
                Login
                </button>
                <button type="button" class="btn btn-outline-dark shadow-none" data-bs-toggle="modal" data-bs-target="#registerModal">
                Register
                </button>
            </div>
            </div>
        </div>
    </nav>
<!-- navbar end -->


<!-- PopUp start -->

    <!-- Login popup start -->
    <div class="modal fade" id="loginModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
              <form>
               <div class="modal-header">
                <h5 class="modal-title d-flex align-items-center">
                    <i class="fa-solid fa-circle-user fs-3 me-3"></i>User Login
                </h5>
                <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label class="form-label">Email address</label>
                    <input type="email" class="form-control shadow-none">
                </div>
                <div class="mb-4">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control shadow-none">
                </div>
                <div class="mb-3 d-flex align-items-center justify-content-between mb-2">
                    <button type="submit" class="btn btn-dark shadow-none text-uppercase">Login</button>
                    <a href="javascript: void(0)" class="text-secondary text-decoration-none">Forgot Password?</a>
                </div>
            </div>
            </form>
            </div>
        </div>
    </div>
    <!-- Login popup end -->
    
    
    <!-- Register popup start -->
    <div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <form>
               <div class="modal-header">
                <h5 class="modal-title d-flex align-items-center">
                    <i class="fa-solid fa-address-card fs-3 me-3"></i>Registration Form
                </h5>
                <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
               </div>
            <div class="modal-body">
                <span class="badge rounded-pill text-dark text-bg-warning mb-4 text-wrap lh-base">Note: Details must match with your ID (National_ID, Passport, Driving License etc.)
                </span>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6 ps-0 mb-3">
                            <level class="form-level">Full Name</level>
                            <input type="text" class="form-control shadow-none">
                        </div>
                        <div class="col-md-6 p-0 mb-3">
                            <level class="form-level">Email address</level>
                            <input type="email" class="form-control shadow-none">
                        </div>
                        <div class="col-md-6 ps-0 mb-3">
                            <level class="form-level">Contact No.</level>
                            <input type="number" class="form-control shadow-none">
                        </div>
                        <div class="col-md-6 p-0 mb-3">
                            <level class="form-level">Upload Picture</level>
                            <input type="file" class="form-control shadow-none">
                        </div>
                        <div class="col-md-12 p-0 mb-3">
                            <level class="form-level">Adress</level>
                            <textarea class="form-control shadow-none" row="2" style="resize: none"></textarea>
                        </div>
                        <div class="col-md-12 p-0 mb-3">
                            <level class="form-level">Date of Birth</level>
                            <input type="date" class="form-control shadow-none">
                        </div>
                        <div class="col-md-6 ps-0 mb-3">
                            <level class="form-level">Password</level>
                            <input type="text" class="form-control shadow-none">
                        </div>
                        <div class="col-md-6 p-0">
                            <level class="form-level">Confirm Password</level>
                            <input type="email" class="form-control shadow-none">
                        </div>
                    </div>
                </div>
                <div class="text-center my-1">
                    <button type="submit" class="btn btn-dark shadow-none text-uppercase">Register</button>
                </div>
            </div>
            </form>
            </div>
        </div>
    </div>
    <!-- Register popup end -->

<!-- PopUp end -->