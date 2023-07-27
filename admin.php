<?php
// include 'connection.php';

if($_SERVER["REQUEST_METHOD"]== "POST"){
    include 'connection.php';
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = " SELECT * FROM admin where email= '$email' AND password = '$password'";
    $result = mysqli_query($conn, $sql);
    $num= mysqli_num_rows($result);
    $fetch = mysqli_fetch_assoc($result);
    // $email = $_GET['email'];
    echo ('done');
    // header("location:admin.html");
    if($num>0){
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['msg'] = 'Login success';;
        header("location:admin.html");
    }else{
        echo ('Failed to connect');
        session_start();
        $_SESSION['msg'] = 'Failed to connect';
        header("location:registraion.php");
    }
}
?>