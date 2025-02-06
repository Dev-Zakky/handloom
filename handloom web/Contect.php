<?php
    $n=$_POST ['Name'];
    $c=$_POST ['Email'];
    $b=$_POST ['Message'];

    $con=mysqli_connect("localhost","root","contact_table","contect");
    $sql="INSERT INTO contact_table(Name,Email,Message) values ('$n','$c','$b')";
    $r=mysqli_query($con,$sql);
    if($r){
        echo "User Details Added Successfully!";
    }
    else { 
        echo "Not Added Details!";
    }


?> 