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

    <a href="tokasivu2.php">
    <img id="banner" src="img/testitesti.png" alt="ThermoApp">
    </a>
    
	<div id="wrapper">
		<div id="banner"></div>
			
		
		<div id="header">
			<ul class="topnav">
            <li><a class="tokasivu2" href="tokasivu2.php">Home</a></li>
            <li><a class="help" href="help.php">Help</a></li>
            <li><a class="contact" href="contact.php">Contact</a></li>
            <li><a href="add.php">Add Patient</a></li>
            <li class="right"><a href="ulos.php">Log out</a></li>
            </ul>
		</div><!-- #header -->
		
        
        <div id = "box">
        <div id = "boxinfo">
		<div id="addform">  
            <h1>Add patient</h1>
        <form  action="insertpatient.php" method="post">
            <p>
            <label><h3>Ssn: </h3></label>
            <input type= "text" minlenght="11" maxlength="11" name = "ssn" class ="box">
            </p>
            <p>
            <label><h3>Name: </h3></label>
            <input type="text" minlenght="1" name="name" class = "box">
            </p>
            <p>
            <label><h3>Location:  </h3></label>
            <input type="number" minlenght="1" maxlength="3" name="location" class="box">
            </p>
            <input class = "submit" type="submit" value="Add">
        </form>
			
		</div><!-- #content -->
            </div>
            </div>
		
		<div id="footer">
			&#169;ThermoApp<p>Ryhmä 3 SKK</p>
		</div><!-- #footer -->
		
	</div><!-- #wrapper -->
    
	
</body>

</html>