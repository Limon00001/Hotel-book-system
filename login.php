<?php

session_start(); 
include "admin/include/db_config.php";

if (isset($_POST['email_mob']) && isset($_POST['pass'])) {
    
    function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }

    $email = validate($_POST['email_mob']);
    $pass = validate($_POST['pass']);

    if (empty($email)) {
        header("Location: index.php?error=User Name is required");
        exit();
    }else if(empty($pass)){
        header("Location: index.php?error=Password is required");
        exit();
    }else{
        $sql = "SELECT * FROM user_cred WHERE email='$email' AND password='$pass'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['email'] === $email && $row['password'] === $pass) {
                echo "
                    <div class='alert alert-success alert-dismissible fade show' role='alert'>
                        <strong>Congratulations!</strong> You are successfully loged in
                        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                </div>
                ";
                $_SESSION['email'] = $row['email'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['id'] = $row['id'];
                header("Location: u-header.php");
                exit();
            }else{
                header("Location: index.php?error=Incorect User name or password");
                exit();
            }
        }else{
            header("Location: index.php?error=Incorect User name or password");
            exit();
        }
    }
}else{
    header("Location: index.php");
    exit();
}

?>