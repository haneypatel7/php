<?php

$servername='localhost';
$username='root';
$password='';
$db='student';
$con=mysqli_connect($servername,$username,$password,$db);

if($con)
{
    echo "successfully coneected to database";
}
else
{
    echo "error";
}





?>