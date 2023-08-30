<?php 
$servername="localhost";
$serverUser="id17602821_vidit";
$serverPswd="ViditDubey@2619";
$serverDB="id17602821_momscafe";
$conn = mysqli_connect($servername,$serverUser,$serverPswd,$serverDB);

mysqli_select_db($conn,'id17602821_momscafe');
	$user = $_POST['user'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
	$comment = $_POST['comment'];

	$query ="insert into userdata(user, email, mobile, comment) values('$user','$email', '$mobile', '$comment')";
	mysqli_query($conn, $query);
	echo "$query";
	header('location:index.php');
?>