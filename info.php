<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Sign up</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
      <?php 
	  $connect=mysqli_connect("localhost","root","");if(!connect){die('Connection Failed:'.mysqli_error());
	  {mysqli_select_db("UserBoi",$connect);}}
	  $user_info = INSERT INTO(Nname,Cname,MyPass,ConfirmMyPass)VALUES 
	  ('$_POST[Nname]', '$_POST[Cname]','$_POST[MyPass]','$_POST[ConfirmMyPass]'); 
	  if (!mysql_query($user_info, $connect))
		{ die('Error: ' . mysql_error()); }
	echo "Your info is added to the database";
	mysqli_close($connect);
	  ?>
    </body>
</html>
