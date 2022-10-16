<?php
$conn=mysqli_connect("localhost","root","","mydb");
if ($conn==True){
    echo "connected";
}

$name= $_REQUEST['name'];
$sub= $_REQUEST['sub'];
$marks= $_REQUEST['marks'];
$contact= $_REQUEST['contact'];

$q="INSERT INTO student VALUES ('$name','$sub','$marks','$contact')";
mysqli_query($conn,$q);
?>