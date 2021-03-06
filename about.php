<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<link rel="icon" href="img/perkele.png" type="image/gif" sizes="16x16">
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
            <li><a href="delete.php">Delete patient</a></li>
            <li><a class="selected" href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li class="right"><a href="ulos.php">Log out</a></li>
            </ul>
		</div>

		<div class="testi">
		<div class="nurse_vasen">
			<img alt="hoitaja" src="img/nurse.jpg">
		</div>

		<div class="about">
            
			<h1 class="abouth1">About</h1>
			<h2 class="abouth2">Purpose of the application:</h2>
			<p>ThermoApp is designed to the hospital environment, which is intended for monitoring the temperature values. The purpose of the application is that the hospital staff will be able to examine patients’ temperature values at the same time from the screen. So basically the application is designed to save nurses time in the hospital environment.</p>
			<h2 class="abouth5">For nurses:</h2>

			<div class="about1">
				<p>Every nurse has their own individual login info. Temperature is measured automatically, value goes to database and is shown in the application. By a quick view nurses can see every patient’s temperature values at the same time. To add a new patient you will need patient’s social security number (SSN) to identify the patient, set patients name and the patient’s location.  Nurses has permission to add and delete patients from the application. The application will give an alert if temperature rises above certain temperature. Alert means that the patient needs to be checked. </p>
			</div>
		</div>
		</div>

		<div id="footer">
			&#169;ThermoApp<p>Ryhmä 3 SKK</p>
		</div><!-- #footer -->
	
		
		
	</div><!-- #wrapper -->


</body>

</html>