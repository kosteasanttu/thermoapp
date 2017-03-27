<?php
include("dbconnecttest.php");
session_start();
 
// Check connection
if($db === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$ssn = mysqli_real_escape_string($db, $_REQUEST['ssn']);
$name = mysqli_real_escape_string($db, $_REQUEST['name']);
$location = mysqli_real_escape_string($db, $_REQUEST['location']);
 
// attempt insert query execution
$sql = "INSERT INTO patients (ssn, name, location) VALUES ('$ssn', '$name', '$location')";
if(mysqli_query($db, $sql)){
    echo "Records added successfully.";
    echo "<br></br>"
    echo '<a href="http://users.metropolia.fi/~santtumk/uusitesti/tokasivu2.php">  Back to patientslist</a>';
    usleep(2000);
header("http://users.metropolia.fi/~santtumk/uusitesti/tokasivu2.php");
    
    exit();
} else{
    echo "ERROR: Could not able to execute insertion $sql. " . mysqli_error($db);
}
mysqli_close($db);
    
?>