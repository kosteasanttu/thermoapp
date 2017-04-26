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
            <li><a class="selected" href="tokasivu2.php">Patient list</a></li>
            <li><a href="add.php">Add patient</a></li>
            <li><a href="delete.php">Delete patient</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li class="right"><a href="ulos.php">Log out</a></li>
            </ul>
		</div><!-- #header -->

        <div class="lomake_selitys">
            <h4><span style="color:red">Punainen tila</span> tarkoittaa, että potilaan lämpötila on ylittänyt kriittisen lämpötila-arvon 39°C</h4>
            <h4><span style="color:yellow">Keltainen tila</span> tarkoittaa, että potilaan lämpötila on ylittänyt normaalin kuumerajan +37°C</h4>   
            <h4><span style="color:green"> Vihreä tila</span> tarkoittaa, että potilaan lämpötila on normaalien lämpötila-arvojen sisällä</h4>
        </div>
        
        <div id="refresh">
        <button class="submit" onclick="window.location.href='http://users.metropolia.fi/~santtumk/thermoapp/mySignalsexample.php'">Refresh</button>
        </div>
        
            <div id="content">
            <table class="taulukko" border="1">
              <tr>
                <th>SSN</th>
                <th>NAME</th>
                <th>LOCATION</th>
                <th>TEMPERATURE</th>
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