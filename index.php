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
   include("config.php");
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
         }
      }
      ?>
   
   <body >
      <img id="banner1" src="img/testitesti.png" alt="ThermoApp">   
   
      <div id="wrapper">
         <div id="box">
            <div id="login"><b>Login</b></div>
            
            <div id="boxinfo">
               
               <form action = "" method = "post">
                  <label>Userame  :</label><input type = "text" name = "username" class = "box"/><br /><br />
                  <label>Password  :</label><input type = "password" name = "password" class = "box" /><br/><br />
                  <input type = "submit" value = " Submit "/><br />
               </form>
               
            </div>
            
         </div>
         
      </div>

      <footer>&#169;ThermoApp <p>Ryhmä 3 SKK</p></footer>

   </body>
</html>