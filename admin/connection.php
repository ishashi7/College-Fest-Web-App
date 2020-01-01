<?php
 
    $con=mysqli_connect('localhost','root','mysql','fest2k19');
 
    if(!$con)
    {
        die(' Please Check Your Connection'.mysqli_error($con));
    }
?>