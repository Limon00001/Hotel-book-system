<?php

    // require ('../admin/include/db_config.php');
    // require ('../admin/include/essentials.php');
    // session_start();


    // if(isset[$_POST['submit']])
    // {
    //     $data = filteration($_POST);

    //     // password and confirm password match or not
    //     if($data['pass'] != $data['cpass']){
    //         echo 'password_missmatch';
    //         exit;
    //     }

    //     // check user exists or not
    //     $u_exist = select("SELECT * FROM `user_cred` WHERE `email` = ? AND `phonenum` = ? LIMIT 1", [$data['email'], $data['phonenum']], "ss");

    //     if(mysqli_num_rows($u_exist) != 0){
    //         $u_exist_fetch = mysqli_fetch_assoc($u_exist);
    //         echo ($u_exist_fetch['email'] == $data['email']) ? 'email_missmatch' : 'phone_already';
    //         exit;
    //     }

    //     $enc_pass = password_hash($data['pass'], PASSWORD_BCRYPT);

    //     $query = "INSERT INTO `user_cred` (`name`, `email`, `address`, `phonenum`, `dob`, `password`) VALUES (?, ?, ?, ?, ?, ?)";

    //     $values = [$data['name'], $data['email'], $data['address'], $data['phonenum'], $data['dob'], $enc_pass];

    //     if(insert($query, $values, 'sssssss')){
    //         echo 1;
    //     }
    //     else {
    //         echo 'ins_failed';
    //     }
    // }



    // if(isset($_POST['login']))
    // {
    //     $data = filteration($_POST);
    //     $em = $data['email_mob'];
        
    
    //     $query = "SELECT * FROM `user_cred` WHERE `email` = '$em' OR `phonenum` = $em LIMIT 1";
    //     $result = mysqli_query($con, $query);

    //     if(mysqli_num_rows($result) == 0){
    //         echo 'inv_email_mob';
    //     }
    //     else {
    //         $u_fetch = mysqli_fetch_assoc($result);
    //         if($u_fetch['is_verified'] == 0){
    //             echo 'not_verified';
    //         }
    //         else if($u_fetch['status'] == 0){
    //             echo 'inactive';
    //         }
    //         else {
    //             if(!password_verify($data['pass'], $u_fetch['password'])){
    //                 echo 'invalid_pass';
    //             }
    //             else {
    //                 session_start();
    //                 $_SESSION['login'] = true;
    //                 $_SESSION['uId'] = $u_fetch['id'];
    //                 $_SESSION['uName'] = $u_fetch['name'];
    //                 $_SESSION['uPhone'] = $u_fetch['phonenum'];
    //                 echo 1;
    //             }
    //         }
    //     }
    // }

?>