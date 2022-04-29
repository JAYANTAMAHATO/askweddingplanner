<?php
include "connection.php";
session_start();
   
    $n=$_POST['n'];
    $filename=$_FILES["pic"] ["name"];
    $tempname=$_FILES["pic"] ["tmp_name"];
    $folder="../img/slide/.$filename";
    

     move_uploaded_file($tempname,$folder );
    

     
        
     
     
        $query="UPDATE`slide`SET`img`='$folder' WHERE id='$n'";
        $run=mysqli_query($conn,$query);
        if($run==1){
            
                  echo "<script> alert('update sucessfully')</script>";
                echo"<script> window.open('admin.php','_self')</script>";
              }
                else{
            
                echo "<script> alert('disconnect with database')</script>";
                echo"<script> window.open('admin.php','_self')</script>";
            
        }
     
      

           

     
     
 



?>
