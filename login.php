<?php
// include 'connect.php';
if($_SERVER["REQUEST_METHOD"]== "POST"){
    include 'connection.php';
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = " SELECT * FROM users where email= '$email' AND password = '$password'";
    $result = mysqli_query($conn, $sql);
    $num= mysqli_num_rows($result);
    $fetch = mysqli_fetch_assoc($result);

    if($num>0){
        session_start();
        $_SESSION['loggedin'] = true;
        // $_SESSION['email'] = $email;
        // $_SESSION['userid'] = $fetch['user_id'];
        header("location:index.php");
    }else{
        echo ('Failed to connect');
        header("location:C:registration.php");
    }

}
?>