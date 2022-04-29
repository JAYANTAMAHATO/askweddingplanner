<?php
include "connection.php";
    $table=$_POST['table'];
    $title=$_POST['title'];
    $para=$_POST['para'];
    $date=$_POST['date'];
    
    $filename=$_FILES["pic"] ["name"];
    $tempname=$_FILES["pic"] ["tmp_name"];
    $folder= "../img/$table/.$filename";
     move_uploaded_file($tempname,$folder );


             $query="INSERT INTO $table (`img`, `title`, `para`, `date`) VALUES ('$folder',' $title','$para','$date')";
            $run=mysqli_query($conn,$query);
                
        

    
       
        
        if($run==1){
            echo "<script> alert('update sucessfully')</script>";
            echo"<script> window.open('admin.php','_self')</script>";
            
        }

        else{
            echo "<script> alert('update not sucessfully!!!(')</script>";
            echo"<script> window.open('admin.php','_self')</script>";
        }
    
    
?>