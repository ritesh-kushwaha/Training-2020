<?php
    $con = mysqli_connect("localhost:3308","root","","ecommerces") or die(mysqli_error($con));
    if(!isset($_SESSION['email'])){
        session_start();
    }
?>