<?php

    // require ('./admin/include/db_config.php');
    // require ('./admin/include/essentials.php');
    // session_start();

?>


<div class="container-fluid bg-white mt-5 px-5 py-2">
    <div class="row">
        <div class="col-lg-6 p-4">
            <h3 class="h-font fw-bold fs-3 mb-2 text-dark">Independent Paradise</h3>
            <p style="color: hsl(217, 12%, 63%);">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis quis ipsam asperiores laudantium
                fugiat, beatae, earum repellat atque temporibus dolorem laboriosam, maxime obcaecati esse neque
                ratione quos eos necessitatibus eaque rem.</p>
        </div>
        <div class="col-lg-3 p-4">
            <h5 class="mb3">Links</h3>
                <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Home</a><br>
                <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Rooms</a><br>
                <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Contact Us</a><br>
                <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">About</a><br>
        </div>
        <div class="col-lg-3 p-4">
            <h5 class="mb-3">Follow Us</h3>
                <a class="d-inline-block mb-2 text-dark text-decoration-none me-1" href="#">
                    <i class="bi bi-twitter me-1"></i>Twitter
                </a>
                <br>
                <a class="d-inline-block mb-2 text-dark text-decoration-none me-1" href="#">
                    <i class="bi bi-facebook me-1"></i>Facebook
                </a>
                <br>
                <a class="d-inline-block  text-dark text-decoration-none me-1" href="#">
                    <i class="bi bi-instagram me-1"></i>Instagram
                </a>
        </div>
    </div>
</div>


<h6 class="text-center bg-dark text-white p-3 m-0"> Design by &copy;Independent Paradise</h6>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>
    let login_form = document.getElementById('login-form');
    login_form.addEventListener('submit', (e) => {
        e.preventDefault();

        let data = new FormData();

        data.append('email_mob', login_form.elements['email_mob'].value);
        data.append('pass', login_form.elements['pass'].value);
        data.append('login', '');


        var myModal = document.getElementById('loginModal');
        var modal = bootstrap.Modal.getInstance(myModal);
        modal.hide();

        let xhr = new XMLHttpRequest();
        xhr.open("POST", "./ajax/login_register.php", true);

        xhr.onload = function(){
            if(this.responseText == 'inv_email_mob'){
                alert("error! Invalid Email!");
            }
            else if(this.responseText == 'not_verified'){
                alert("error! Email not verified!");
            }
            else if(this.responseText == 'inactive'){
                alert("error! Account Suspended!");
            }
            else if(this.responseText == 'invalid_pass'){
                alert("error! Incorrect Password!");
            }
            else {
                window.location = window.location.pathname;
            }
        }
        xhr.send(data);
    });




    

    // function alert(type, msg, position='body')
    // {
    //     let bs_class = (type == 'success') ? 'alert-success' : 'alert-danger';
    //     let element = document.createEelement('div');
    //     element.innerHTML = `
    //     <div class="alert ${bs_class} alert-dismissible fade show" role="alert">
    //         <strong class="me-3">${msg}</strong>
    //         <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    //     </div>
    //     `;

    //     if(position == 'body'){
    //         document.body.append(element);
    //         element.classList.add('custom-alert');
    //     }
    //     else {
    //         document.getElementById(position).appendChild(element);
    //     }
    //     setTimeout(remAlert, 2000);
    // }

    // function remAlert(){
    //     document.getElementByClassName('alert')[0].remove();
    // }

    // let register_form = document.getElementById('register-form');
    // register_form.addEventListener('submit', (e) => {
    //     e.preventDefault();

    //     let data = new FormData();
    //     data.append('name', register_form.elements['name'].value);
    //     data.append('email', register_form.elements['email'].value);
    //     data.append('phonenum', register_form.elements['phonenum'].value);
    //     data.append('dob', register_form.elements['dob'].value);
    //     data.append('address', register_form.elements['address'].value);
    //     data.append('pass', register_form.elements['pass'].value);
    //     data.append('cpass', register_form.elements['cpass'].value);
    //     data.append('register', '');


    //     var myModal = document.getElementById('regModal');
    //     var modal = bootstrap.Modal.getInstance(myModal);
    //     modal.hide();

    //     let xhr = new XMLHttpRequest();
    //     xhr.open("POST", "ajax/login_register.php", true);

    //     xhr.onload = function(){
    //         if(this.responseText == 'password_missmatch'){
    //             alert('error', "Password doesn't match");
    //         }
    //         else if(this.responseText == 'email_missmatch'){
    //             alert('error', "Email is already registered");
    //         }
    //         else if(this.responseText == 'phone_already'){
    //             alert('error', "Phone umber is already registered");
    //         }
    //         else {
    //             alert('success', "Registration Successful. Congratulations !");
    //             register_form_reset();
    //         }
    //     }
    // })
</script>