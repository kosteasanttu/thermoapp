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
        
        
            <div id="content">
            <table class="taulukko" border="1">
              <tr>
                <th>SSN</th>
                <th>NAME</th>
                <th>LOCATION</th>
                <th>TEMP</th>
              </tr>  
                
        <?php
        include("dbconnecttest.php");
        session_start();
        $query = "SELECT * FROM `patients` ORDER BY ssn, name, location";
        $listresult = mysqli_query($db,$query);
        if($listresult === false){
            echo "query failed:" + mysqli_error($db);
        }
            else{
                while($row = mysqli_fetch_assoc($listresult)){
                   // var_dump($row);      
        ?>
		<tr>
            <td><?php echo $row['ssn']?></td>
            <td><?php echo $row['name']?></td>
            <td><?php echo $row['location']?></td>
        </tr>
			
		<?php
            }
            }
            ?>
        
        </table>
            
            
		</div><!-- #content -->
        
		<div id="footer">
			&#169;ThermoApp<p>Ryhmä 3 SKK</p>
		</div><!-- #footer -->
		
	</div><!-- #wrapper -->
	
</body>

</html>