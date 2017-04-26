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
		<div id="header">
			<ul class="topnav">
            <li><a href="tokasivu2.php">Patient list</a></li>
            <li><a href="add.php">Add patient</a></li>
            <li><a class="delete_patient" href="delete.php">Delete patient</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li class="right"><a href="ulos.php">Log out</a></li>
            </ul>
		</div><!-- #header -->
		
        
        <div id ="box">
        <div id ="boxinfo">
		<div id="addform">  
            <h1>Delete patient by ssn</h1>
        <form  action="deletepatient.php" method="post">
            <p>
            <label><h3>SSN: </h3></label>
            <input type="text" name="ssn" class="box">
            </p>
            <input class="submit" type="submit" value="Delete">
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