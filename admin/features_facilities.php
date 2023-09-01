<?php

require('./include/essentials.php');
require('./include/db_config.php');
adminLogin();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Features & Facilities</title>

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

    <!-- Custom CSS -->
    <link rel="stylesheet" href="./css/adminstyle.css">
</head>

<body class="">


    <?php require('include/header.php') ?>

    <div class="container-fluid" id="main-content">
        <div class="row">
            <div class="col-lg-10 ms-auto p-5 overflow-hidden">
                <h3 class="mb-4"> Features & Facilities</h3>
                <div class="card border-0 shadow-sm mb-4">

                    <div class="card-body">

                        <div class="d-flex align-items-center justify-content-between mb-3">
                            <h5 class="card-title m-0">Features</h5>
                            <button type="button" class="btn btn-dark shadow-none" data-bs-toggle="modal" data-bs-target="#feature-s"><i class="bi bi-plus-circle"></i> Add</button>


                            <div class="modal fade" id="feature-s" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <form id="feature_s_form">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Add Facilities</h1>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="mb-3">
                                                    <label class="form-label fw-bold">Name</label>
                                                    <input type="text" name="feature_name" class="form-control shadow-none" required>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                                                <button type="submit" class="btn btn-primary text-light shadow-none">Submit</button>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                        <div class="table-responsive-md" style="height: 450px; overflow-y: scroll;">
                            <table class="table table-hover border">
                                <thead class="sticky-top">
                                    <tr class="bg-dark text-light">
                                        <th scope="col">#</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col" width="20%">Subject</th>
                                        <th scope="col" width="30%">Messages</th>
                                        <th scope="col">Date</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    // $q = "SELECT * FROM `user_message` ORDER BY `sr_no` DESC";
                                    // $data = mysqli_query($con, $q);
                                    // $i = 1;
                                    // while ($row = mysqli_fetch_assoc($data)) {
                                    //     $seen = '';
                                    //     if ($row['seen'] != 1) {
                                    //         $seen = "<a href='?seen=$row[sr_no]' class='btn btn-sm rounded-pill btn-primary'>Mark as read</a>";
                                    //     }
                                    //     $seen .= "<a href='?del=$row[sr_no]' class='btn btn-sm rounded-pill btn-danger mt-2'>Delete</a>";
                                    //     echo <<<query
                                    //         <tr>
                                    //             <td>$i</td>
                                    //             <td>$row[name]</td>
                                    //             <td>$row[email]</td>
                                    //             <td>$row[subject]</td>
                                    //             <td>$row[message]</td>
                                    //             <td>$row[date]</td>
                                    //             <td>$seen</td>
                                    //         </tr>
                                    //     query;
                                    //     $i++;
                                    // }
                                    ?>
                                </tbody>
                            </table>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>





    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let featureSForm = document.getElementById('feature_s_form');
            featureSForm.addEventListener('submit', function(e) {
                e.preventDefault();
                addFeature();
            });
        });

        function addFeature() {
            let featureSForm = document.getElementById('feature_s_form');
            let data = new FormData(featureSForm);
            data.append('add_feature', '');

            let xhr = new XMLHttpRequest();
            xhr.open('POST', 'ajax/features_facilities.php', true);

            xhr.onload = function() {
                var myModal = document.getElementById('feature-s');
                var modal = new bootstrap.Modal(myModal);

                if (this.responseText.trim() === 'success') {
                    alert('Feature added successfully!');
                    modal.hide();
                    featureSForm.reset(); // Reset the form after successful submission
                } else {
                    alert('Failed to add feature: ' + this.responseText);
                }
            };

            xhr.send(data);
        }
    </script>









    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>