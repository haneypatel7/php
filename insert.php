<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
<?php

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    
$name=$_POST['name'];
$password=$_POST['password'];


// $servername='localhost';
// $username='root';
// $password='';
// $db='student';
// $con=mysqli_connect($servername,$username,$password,$db);
include 'connection.php';
if(!$con)
{ 
    die("failed".mysqli_connect_error());
}
else
{

// $sql="INSERT INTO `student` (`name`, `password`) VALUES ('$name', '$password');";
$sql="SELECT * FROM `student`";
$result=mysqli_query($con,$sql);
$num=mysqli_num_rows($result);
echo $num;
}
if($result)
{
    echo "added";
}
else
{
    echo "exit error";
}
}

?>
<form action="/php/insert.php" method="post">
  <div class="mb-3">
    <label for="name" class="form-label">Email address</label>
    <input type="text" class="form-control" name="name" aria-describedby="emailHelp">
    
  </div>
  <div class="mb-3">
    <label for="password" class="form-label">Password</label>
    <input type="text" class="form-control" name="password">
  </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

    
</body>
</html>