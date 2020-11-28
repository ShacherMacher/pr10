<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
<?php
session_start();
// Start the session;
$servername = "localhost";
$username = "root";
$password = "";
$database = "testdb"; //повинна бути створена в субд


$conn = new mysqli($servername, $username, $password, $database);

$sql = "INSERT INTO users (first_name, last_name, login, password, id_role) VALUES ('".$_POST['first_name']."', '".$_POST['last_name']."', '".$_POST['login']."', '".$_POST['password']."', '".$_POST['id_role']."')";

if(mysqli_query($conn, $sql))
{
	header('Location: login.php');
}
else
{
	echo'
	<form action="res.php" method="post">
       <input type="submit" value="Error(" class="btn">
   </form>';
}
?>