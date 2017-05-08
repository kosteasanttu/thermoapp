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
            <li><a class="add_patient" href="add.php">Add patient</a></li>
            <li><a href="delete.php">Delete patient</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li class="right"><a href="ulos.php">Log out</a></li>
            </ul>
		</div><!-- #header -->
		
        
        <div id ="box">
        <div id ="boxinfo">
		<div id="addform">  
            <h1>Add patient</h1>
        <form  action="insertpatient.php" method="post">
            <p>
            <label><h3>SSN: </h3></label>
            <input type="text" name="ssn" class="box" placeholder="270694-XXXX"> 
            </p>
            <p>
            <label><h3>Name: </h3></label>
            <input type="text" name="name" class="box">
            </p>
            <p>
            <label><h3>Location:  </h3></label>
            <input type="number" name="location" class="box">
            </p>
            <input class="submit" type="submit" value="Add">
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