<?php

$hostname="sql313.unaux.com";
$userid="unaux_25372449";
$password="hlsmzs7";
$database="unaux_25372449_wmc";

// $hostname="localhost";
// $userid="root";
// $password="";
// $database="wmc";

$con=mysqli_connect($hostname,$userid,$password,$database);
if(!$con)
{
die("Can not connect to server");
}

$name = $_POST['name'];
$position = $_POST['position'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$collegename = $_POST['college'];
$city = $_POST['city'];
$state = $_POST['state'];
$regno = $_POST['regno'];
$year = $_POST['year'];
$course = $_POST['course'];
$branch = $_POST['branch'];
$resume = $_POST['resume'];
$linkedin = $_POST['linkedin'];

$query_insert = "insert into careersdata(name,position,mobno,email,collegename,city,state,regno,year,course,branch,linkedin,resume)
values('$name' ,'$position' ,'$mobile' ,'$email' ,'$collegename' ,'$city' ,'$state' ,'$regno','$year' ,'$course' ,'$branch' ,'$linkedin','$resume')";


if ($con->query($query_insert) === TRUE) {
    echo "OK";
} else {
    echo "Error: " . $query_insert. "<br>" . $con->error;
}

$con->close();
?>