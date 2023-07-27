<?php
include 'connection.php';

// header ('location: admin.html');

$fullname =$_POST['name'];
$email =$_POST['email'];
$password =$_POST['password'];
$cpassword =$_POST['cpassword'];

if($fullname == ''){
    echo "<script>alert('full name')</script>";
    header("location:C:registration.php");
    exit();
}
if($email == ''){
    echo "<script>alert('full email')</script>";  
    header("location:C:registration.php");
    exit();
}
if($password == ''){
    echo "<script>alert('password name')</script>";  
    header("location:C:registration.php");
    exit();
}
if($cpassword == ''){
    echo "<script>alert('full cpassword')</script>";  
    exit();
}
$checkEmail = " SELECT * FROM users where email= '$email'";
$runQuery = mysqli_query($conn, $checkEmail);

if(mysqli_num_rows($runQuery) > 0){

    echo "<script>alert('user already exit')</script>";
    header("location:C:registration.php");
    exit();

}

    if($password == $cpassword){
        $sql = "INSERT INTO `users` (`fullname`, `email`, `password`) VALUES ('$fullname', '$email', '$password');";
        $result= mysqli_query($conn, $sql);
        echo ('result'.$result);
        if($result>0){
            // $sql = " SELECT * FROM users where email= '$email'";
            // $result = mysqli_query($conn, $sql);
            // $fetch = myaqli_fetch_assoc($result);
            // echo "succ";
            session_start();
            $_SESSION['loggedin'] = true;
            // $_SESSION['email'] = $email;
            // $em =  $_SESSION['email'];
            // $_SESSION['userid'] = $fetch['user_id'];
            header("location:index.php");
            }else{
                echo "err";
            }

        echo ("done");

    }else{
    echo "Pssword do not match";
    }


// INSERT INTO `users` (`user_id`, `fullname`, `email`, `password`, `time`) VALUES (NULL, 'shoeb', 'ss', 'ss', current_timestamp());

// "DELETE FROM users WHERE `users`.`user_id` = 1"?

// UPDATE `users` SET `fullname` = 'shoeb araz' WHERE `users`.`user_id` = 1;

// SELECT * FROM `users` WHERE 1



?>