<?php
// Start the session
session_start();
?>
<!doctype html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport"
         content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
   <style>
       .container {
           width: 400px;
       }
   </style>
</head>
<body style="padding-top: 3rem;">

<div class="container">
   <form action="res1.php" method="post">
   		First_name: <input type="text" name="first_name"></br>
		Last_name: <input type="text" name="last_name"></br>
       Login: <input type="text" name="login"><br>
       Password: <input type="password" name="password"><br>
	   Id_role: <input type="text" name="id_role"><br>
       <input type="submit" class="btn">
   </form>
</div>

</body>
</html>