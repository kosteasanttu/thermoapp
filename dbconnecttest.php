<!DOCTYPE html>
<html>
   <head>
      <link href='https://fonts.googleapis.com/css?family=Roboto&subset=latin,latin-ext,greek' rel='stylesheet' type='text/css'>
      
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
     
      <title>PHP DATABASE</title>   
   </head>
   <body>
   	<?php 
   	$config = parse_ini_file('../../config.ini');

   	$db = mysqli_connect($config['SERVER'], $config['USERNAME'], $config['PASSWORD'], $config['DATABASE']);

   	if($db === false){
   		echo "something went wrong.... failed to connect database" + mysqli_connect_error();
   		exit();
   	}
   	echo "connected to database =)"
	?>

   </body>
   </html>