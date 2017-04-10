<!DOCTYPE html>
<html>
   <head>
      <link href='https://fonts.googleapis.com/css?family=Roboto&subset=latin,latin-ext,greek' rel='stylesheet' type='text/css'>
      <link rel="stylesheet" type="text/css" href="style.css">
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="icon" href="img/perkele.png" type="image/gif" sizes="16x16">
      <title>ThermoApp</title>   
   </head>

<?php
   include("dbconnecttest.php");
   session_start();
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT id FROM admin WHERE username = '$myusername' and passcode = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      $active = $row['active'];
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
      
      if($count == 1) {
         //session_register("myusername");
         $_SESSION['login_user'] = $myusername;
         
         header("location: tokasivu2.php");
         echo("efkekfekf");
      }else {
         $error = "Your Login Name or Password is invalid";
          /*
          echo '<script>alert("Wrong username or password")
          document.location = 'http://users.metropolia.fi/~santtumk/thermoapptestailuu/index.php';
          </sctipt>';
          */
         echo ("<SCRIPT LANGUAGE='JavaScript'>
            window.alert('Wrong username of password')
            window.location.href='http://users.metropolia.fi/~santtumk/thermoapptestailuu/index.php';
            </SCRIPT>");
         }
      }
      ?>
</html>