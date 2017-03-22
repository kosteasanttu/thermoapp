<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title>ThermoApp</title>
	
	<link rel="stylesheet" type="text/css" href="style4.css"/>	

	<!--[if lt IE 7]>
		<style type="text/css">
			#wrapper { height:100%; }
		</style>
	<![endif]-->
	
</head>
    


<body>

	<div id="wrapper">
		<div id="banner"></div>
			<img id="banner" src="img/testitesti.png" alt="ThermoApp">
		
		<div id="header">
			<ul class="topnav">
            <li><a class="tokasivu2" href="tokasivu2.php">Home</a></li>
            <li><a class="help" href="help.php">Help</a></li>
            <li><a class="contact" href="contact.php">Contact</a></li>
            <li><a href="add.php">Add Patient</a></li>
            <li class="right"><a href="ulos.php">Log out</a></li>
            </ul>
		</div><!-- #header -->
		
		<div id="addform">
            
            
        <form action="insertpatient.php" method="post">
            <p>
            <label>Ssn: </label>
            <input type= "text" name = "ssn" class ="box">
            </p>
            <p>
            <label>Name: </label>
            <input type="text" name="name" class = "box">
            </p>
            <p>
            <label>Location:  </label>
            <input type="number" name="location" class="box">
            </p>
            <input type="submit" value="Submit">
        </form>
			
		</div><!-- #content -->
		
		<div id="footer">
			&#169;ThermoApp<p>Ryhmä 3 SKK</p>
		</div><!-- #footer -->
		
	</div><!-- #wrapper -->
    
	
</body>

</html>