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
            <li><a class="tokasivu2" href="tokasivu2.html">Home</a></li>
            <li><a class="help" href="help.php">Help</a></li>
            <li><a class="contact" href="contact.php">Contact</a></li>
            <li><a href="add.php">Add Patient</a></li>
            <li class="right"><a href="ulos.php">Log out</a></li>
            </ul>
		</div><!-- #header -->
		
		<div id="content">
			<table class="taulukko" border="1">
				<caption><h1>Potilastiedot</h1></caption>
				<tr><th>Potilas</th><th>Lämpötila</th><th>Sijainti</th><th>Tila</th></tr>
				<tr><td>potilas1</td><td>40,2&deg;C</td><td>401</td><td class="Tila1"></td></tr>
				<tr><td>potilas2</td><td>39,6&deg;C</td><td>401</td><td class="Tila1"></td></tr>
				<tr><td>potilas3</td><td>38,3&deg;C</td><td>401</td><td class="Tila1"></td></tr>
				<tr><td>potilas4</td><td>37,3&deg;C</td><td>402</td><td class="Tila2"></td></tr>
				<tr><td>potilas5</td><td>37,2&deg;C</td><td>403</td><td class="Tila2"></td></tr>
				<tr><td>potilas6</td><td>37,2&deg;C</td><td>403</td><td class="Tila2"></td></tr>
				<tr><td>potilas7</td><td>37&deg;C</td><td>404</td><td class="Tila2"></td></tr>
				<tr><td>potilas8</td><td>36,5&deg;C</td><td>405</td><td class="Tila3"></td></tr>
				<tr><td>potilas9</td><td>36,7&deg;C</td><td>405</td><td class="Tila3"></td></tr>
				<tr><td>potilas10</td><td>36,4&deg;C</td><td>405</td><td class="Tila3"></td></tr>
			</table>
		</div><!-- #content -->
		
		<div id="footer">
			&#169;ThermoApp<p>Ryhmä 3 SKK</p>
		</div><!-- #footer -->
		
	</div><!-- #wrapper -->
	
</body>

</html>