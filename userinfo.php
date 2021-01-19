<?php 

$con = mysqli_connect('localhost','root');

if($con){
	echo "Connection successful";
}else{
	echo "No connection";
}

mysqli_select_db($con,'clint_data');

$user = $_POST['user'];
$email= $_POST['email'];
$mobile= $_POST['mobile'];
$comments= $_POST['comments'];

$query = " insert into userinfodata (user, email, mobile, comment)
values ('$user', '$email', '$mobile', '$comments')";

mysqli_query($con,$query);

echo "$query";

mysqli_query($con, $query);

header('location:index.php');



 ?>