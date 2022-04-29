<?php
include "connection.php";
    $email=$_POST['email'];
    $name=$_POST['name'];
    $msg=$_POST['msg'];
    $city=$_POST['city'];
    $dist=$_POST['dist'];
    $con=$_POST['con'];
    $ip=$_SERVER['REMOTE_ADDR'];
    

    if($name!=''|| $city!=''|| $con!=''|| $dist='')
    {
        $querry="INSERT INTO `form`(`email`, `name`, `msg`, `city`, `dist`, `con`, `ip`) VALUES ('$email','$name','$msg','$city','$dist','$con',' $ip')";
         $run=mysqli_query($conn,$querry);
             if($run==1){
                echo "<script> alert('Thank You For Massage We'll Reply you soon!')</script>";
                echo"<script> window.open('../index.php','_self')</script>";
                }
             else{
            echo "<script> alert('we are in traffic be with us')</script>";
            echo"<script> window.open('../index.php','_self')</script>";
                 }
    }
    else{
        echo "<script> alert('Name, Contact No, Address is empty!!')</script>";
        echo"<script> window.open('../index.php','_self')</script>";
         }
    
    
?>