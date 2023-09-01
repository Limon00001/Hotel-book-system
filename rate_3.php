<?php

require ('db_config.php');
// require ('./admin/include/essentials.php');

if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $rate = $_POST['countRate'];
    // $rate1 = $_POST['rate_1'];
    // $rate2 = $_POST['rate_2'];
    // $rate3 = $_POST['rate_3'];
    // $rate4 = $_POST['rate_4'];
    // $rate5 = $_POST['rate_5'];

    if($name == '' && $rate == '')
    {
        echo "<script>alert('Please fill both input')</script>";
    }
    else {
        // $rate = $rate1 = $rate2 = $rate3 =$rate4 =$rate5;
        $query = "INSERT INTO `review_table` (`user_name`, `user_rating`) VALUES ('$name', '$rate')";
        $query_run = mysqli_query($con, $query);

        if($query_run){
            // alert('success', 'Congratulations - Registration Successful!');
            // $_SESSION['status'] = "Congratulations - Registration Successful!";
            // $_SESSION['status_code'] = "success";
            echo '
                <script>
                    alert("Thank you for your rating");
                </script>
                ';
            header('location: rate.php');
        }
        else {
            // alert('error', 'Registration failed - Invalid Credentials!');
            // $_SESSION['status'] = "Registration failed - Invalid Credentials!";
            // $_SESSION['status_code'] = "error";
            echo '
            <script>
                alert("Sorry Unsucessful");
            </script>
            ';
        }
    }
}

?>




<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8" />
    <title>Review & Rating</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />

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

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="./css/style.css">


    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<style>
    *{
    box-sizing: border-box;
}
:root {
    --orange: hsl(25, 97%, 53%);
    --dark: hsl(0, 0%, 0%);
    --white: hsl(0, 0%, 100%);
    --lightGrey: hsl(217, 12%, 63%);
    --mediumGrey: hsl(216, 12%, 54%);
    --mediumGreyOp: hsla(216, 12%, 54%,0.2);
    --darkBlue: hsl(213, 19%, 18%);
    --veryDarkBlue: hsl(216, 12%, 8%);
    --bodyCopy: 15px;
    --mobile: 375px;
    --desktop: 1440px;
    --light: 400;
    --bold: 700;
  }

html,body{
    /* background-color: var(--veryDarkBlue); */
    color: var(--white);
}

.des{
    /* font-size: var(--bodyCopy); */
    /* font-weight: var(--light); */
    color: var(--lightGrey);
    /* letter-spacing: .5px; */
    /* line-height: 1.5; */
}

.h2,.custom-btn,.des, .message, .opt{
    text-align: center;
}
.input[type=radio]{
    opacity: 0;
    position: fixed;
    width: 0;
}

.flexbox{
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
}
.opt{
    display: block;
    position: relative;
    width: 3rem;
    height: 0;
    padding-bottom:3rem;
    background-color: #000000;
    line-height: 3;
    color: var(--white);
    border-radius: 50%;
    cursor: pointer;
}
.opt:hover{
    background-color: var(--mediumGrey);
}
#star{
    padding: 1rem;
    border-radius: 50%;
    background-color: var(--mediumGreyOp);
}
.custom-card{
    width: 100%;
    max-width: 40ch;
    /* background-color: var(--darkBlue); */
    padding: 2rem;
    border-radius: 2rem;
    margin: 0 auto;
    margin-top: 3em;
}
#thankYou{
    display: none;
}
.imgBlock{
    width: 100%;
    height: 15ch;
    background: url(https://raw.githubusercontent.com/hejkeikei/interactive-rating-component/16de82dee8e9299ac78d332cc3b5480da9bf435c/images/illustration-thank-you.svg)  no-repeat center;
}
.message{
    width: 100%;
    max-width: 25ch;
    margin: 0 auto;
    padding: .2rem;
    background-color: var(--mediumGreyOp);
    color: var(--dark);
    border-radius: 2rem;  
}
.custom-btn{
    width: 100%;
    padding: 1rem;
    margin-top: 2rem;
    border-radius: 2rem;
    text-transform: uppercase;
    font-weight: var(--bold);
    letter-spacing: 2px;
    border: none;
    background-color: #000;
    color: var(--white);
    cursor: pointer;
}
.custom-btn:hover{
    background-color: var(--lightGrey);
    color: var(--veryDarkBlue);
}
</style>

<body class="bg-light">

    <?php
        require('include/header.php');
    ?>

    <div class="container">
    	<h1 class="mt-4 mb-5 text-center text-dark">Room Name</h1>
    	<div class="card">
            <img src="https://images.unsplash.com/photo-1567767292278-a4f21aa2d36e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1170&q=80" class="mt-5 mb-5 mx-auto rounded" width="1000rem"></img>
    		<div class="card-body">
    			<div class="row">
                    
    			</div>
                <div class="container">
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        <div class="card custom-card col-md-3 px-lg-3 px-md-3 px-0 mt-5">
                            <div class="mb-3">
                                    <h2 class="card-title text-dark text-center pt-4">Features</h2>
                                    <h6 class="card-subtitle des mb-2 ct-subhead">& Facilities</h6>
                                    <h6 class="mb-1">Features</h6>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">2 Rooms</span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">1 Bathroom</span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">1 Balcony</span>
                                    <span class="badge rounded-pill bg-light text-dark text-wrap">1 Sofa</span>
                                <
                            </div>
                            <div class="mb-3">
                                <h6 class="mb-1">Facilities</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">Wifi</span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">Television</span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">AC</span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">Heater</span>
                            </div>
                            <div>
                                <h6 class="mb-1">Guests</h6>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">5 Adults</span>
                                <span class="badge rounded-pill bg-light text-dark text-wrap">4 Children</span>
                            </div>
                        </div>
                        <div class="card custom-card mt-5" style="width: 21rem;">
                            <div class="card-body">
                                <h2 class="card-title text-dark text-center">Description</h2>
                                <h6 class="card-subtitle des mb-2 ct-subhead">Bedrooom</h6>
                                <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Autem nobis rem perferendis ipsum doloremque ab reiciendis voluptate, officia ex voluptates!</p>
                            </div>
                        </div>

                        <!-- form -->
                        <form id="rating" method="post" class="card custom-card">
                                <!-- <img src="https://raw.githubusercontent.com/hejkeikei/interactive-rating-component/16de82dee8e9299ac78d332cc3b5480da9bf435c/images/icon-star.svg" alt="rating icon" id="star" /> -->
                                <h2 class="text-center">Please rate us!!</h2>
                                <p class="des">
                                    Please let us know how we did with your support request.
                                </p>
                                <div class="mb-3">
                                    <input name="name" type="text" class="form-control shadow-none" placeholder="Name">
                                </div>
                                <div class="flexbox" id="options">
                                    <label for="rate1" class="opt">1</label>
                                    <input class="input" type="radio" name="rate_1" id="rate1" value="1" />
                                    <label for="rate2" class="opt">2</label>
                                    <input class="input" type="radio" name="rate_2" id="rate2" value="2" />
                                    <label for="rate3" class="opt">3</label>
                                    <input class="input" type="radio" name="rate_3" id="rate3" value="3" />
                                    <label for="rate4" class="opt">4</label>
                                    <input class="input" type="radio" name="rate_4" id="rate4" value="4" />
                                    <label for="rate5" class="opt">5</label>
                                    <input class="input" type="radio" name="rate_5" id="rate5" value="5" />
                                </div>

                                <input type="submit" name="submit" class="btn custom-btn" value="Submit" id="submitBtn" />
                        </form>
                        <div id="thankYou" class="card custom-card">
                            <div class="imgBlock"></div>
                            <p class="message des badge rounded-pill text-bg-light text-center d-flex justify-content-center">
                                You selected <span class="userValue mx-1" name="countRate">0</span> out of 5
                            </p>

                            <h2 class="h2">Thank you!</h2>
                            <p class="des">
                                We appreciate you taking the time to give a rating. If you ever need
                                more support, don’t hesitate to get in touch!
                            </p>
                        </div>
                    </div>
                </div>
    		</div>
    	</div>
    	<div class="mt-5" id="review_content"></div>
        </div>
</body>
</html>

<div id="review_modal" class="modal" tabindex="-1" role="dialog">
  	<div class="modal-dialog" role="document">
    	<div class="modal-content">
	      	<div class="modal-header">
	        	<h5 class="modal-title">Submit Review</h5>
	        	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          		<span aria-hidden="true">&times;</span>
	        	</button>
	      	</div>
	      	<div class="modal-body">
	      		<h4 class="text-center mt-2 mb-4">
	        		<i class="fas fa-star star-light submit_star mr-1" id="submit_star_1" data-rating="1"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_2" data-rating="2"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_3" data-rating="3"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_4" data-rating="4"></i>
                    <i class="fas fa-star star-light submit_star mr-1" id="submit_star_5" data-rating="5"></i>
	        	</h4>
	        	<div class="form-group">
	        		<input type="text" name="user_name" id="user_name" class="form-control" placeholder="Enter Your Name" />
	        	</div>
	        	<div class="form-group">
	        		<textarea name="user_review" id="user_review" class="form-control" placeholder="Type Review Here"></textarea>
	        	</div>
	        	<div class="form-group text-center mt-4">
	        		<button type="button" class="btn btn-primary" id="save_review">Submit</button>
	        	</div>
	      	</div>
    	</div>
  	</div>
</div>



    <?php
        require('include/footer.php');
    ?>


<script>

    var getSiblings = function (elem) {
        var siblings = [];
        var sibling = elem.parentNode.firstChild;
        while (sibling) {
          if (sibling.nodeType === 1 && sibling !== elem) {
            siblings.push(sibling);
          }
          sibling = sibling.nextSibling;
        }
        return siblings;
      };
      var userInput;
      var opt = document.querySelectorAll(".input");
      for (let i of opt) {
        i.addEventListener("click", function () {
          userInput = i.value;
          let rateNum = "label[for=rate" + i.value + "]";
          console.log(rateNum);
          let optBtn = document.querySelector(rateNum);
          console.log(optBtn);
          optBtn.style.backgroundColor = "var(--dark)";
          let sib = getSiblings(optBtn);
          // console.log(sib);
          for (let i in sib) {
            console.log(sib[i]);
            sib[i].style.backgroundColor = "var(--mediumGreyOp)";
          }
        });
      }
      var userValue = document.querySelector(".userValue");
      var submitBtn = document.getElementById("submitBtn");

      submitBtn.addEventListener("click", function () {
        event.preventDefault();
        userValue.innerHTML = userInput;
        console.log("Usersays: " + userInput);
        let pop = document.getElementById("thankYou");
        pop.style.display = "block";
        rating.style.display = "none";
      });
 

</script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>