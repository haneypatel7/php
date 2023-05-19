<?php
$servername='localhost';
$username='root';
$password='';
$db='student';

$con=mysqli_connect($servername,$username,$password,$db);

if(!$con)
{
    echo "error";
}
else
{
    echo "success";
}

$sql="SELECT * FROM 'student'";
$rows=mysqli_query($con,$sql);

$num = mysqli_num_rows($rows);
echo $num;




?>