<?php
include "connection.php";
session_start();
    $title=$_POST['title'];
    $para=$_POST['para'];
    $date=$_POST['date'];
    $n=$_POST['n'];
    $filename=$_FILES["pic"] ["name"];
    $tempname=$_FILES["pic"] ["tmp_name"];
    $folder="../img/project/.$filename";
    $realimg="img/project/.$filename";

     move_uploaded_file($tempname,$folder );
    
     if($title==''||$para==''|| $date==''|| $filename=='')
     {
        echo "<script> alert('all feild are required')</script>";
        echo"<script> window.open('admin.php','_self')</script>";
     }
     else{
        $query="UPDATE`project`SET`img`='$folder',`title`='$title',`para`='$para',`date`='$date',`realimg`='$realimg' WHERE id='$n'";
        $run=mysqli_query($conn,$query);
        if($run==1){
            
                  echo "<script> alert('update sucessfully')</script>";
                echo"<script> window.open('admin.php','_self')</script>";
              }
                else{
            
                echo "<script> alert('disconnect with database')</script>";
                echo"<script> window.open('admin.php','_self')</script>";
            
        }
     }
      

           

     
     
 



?>
