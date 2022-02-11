<?php

include 'connect.php';

// code for register page
if(isset($_POST['signup'])){
    $fname = $_POST['fname'];
    $mname = $_POST['mname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $confirm_email = $_POST['confirm_email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
  
    if (strlen($fname)>0){
        if (!empty($lname)) {
                header('location: login.php');
        } else {
            header('location: login.php');
        }
    } else {
        header('location: login.php');
    }
    echo "login Page";

    $sql = "INSERT INTO `user1`(`id`, `first_name`, `middle_name`, `last_name`, `email_id`, `confirm_email_id`, `mobile_no`, `password`, `confirm_password`) VALUES (' $fname','$mname',' $lname','$email',' $confirm_email',' $mobile',' $password',' $confirm_password')";

    if (mysqli_query($conn, $sql)){
        echo "new record";
    }
    else{
        echo "error:";
    }
}

//code for login page
if(isset($_POST['signup'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

            if(!empty($email)){
                if(!empty($password)){
                    header('location: personal.php');
                }
                else{
                    header('location: login.php');
                }
            }
            else{
                header('location:login.php');
            }
}
if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    echo $email;
    $sql ="SELECT * FROM user1 WHERE email_id = '$email' ";
    $result  = mysqli_query($conn,$sql);
     echo mysqli_num_rows($result); 
    
    

            // if(!empty($email)){
            //     if(!empty($password)){
            //         header('location: personal.php');
            //     }
            //     else{
            //         header('location: login.php');
            //     }
            // }
            // else{
            //     header('location:login.php');
            // }





}
mysqli_close($conn);


?>

