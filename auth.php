<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<?php
session_start();
// Start the session;
$servername = "localhost";
$username = "root";
$password = "";
$database = "testdb"; 


$conn = new mysqli($servername, $username, $password, $database);

$res = mysqli_query ($conn, "select * from users where login='".$_POST['login']."' and password='".$_POST['password']."'");
$result = mysqli_fetch_array($res);



if (is_array($result)) {

   			 $_SESSION['login'] = $row['login'];
			$_SESSION['password'] = $row['password'];

	header('Location: restricted.php');
}
else
{
	echo'
	<form action="login.php" method="post">
       <input type="submit" value="Go to registration" class="btn">
   </form>';
}

?>