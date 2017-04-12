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
 
// attempt delete query execution
$sql = "DELETE FROM patients WHERE ssn= ('$ssn')";

if(mysqli_query($db, $sql)){
    echo "Records deleted successfully.";
    echo "<br></br>";
    echo '<a href="http://users.metropolia.fi/~santtumk/thermoapptestailuu/tokasivu2.php">  Back to patientslist</a>';
    
    echo ("<SCRIPT LANGUAGE='JavaScript'>
            window.alert('Patient deleted!')
            window.location.href='http://users.metropolia.fi/~santtumk/thermoapp/tokasivu2.php';
            </SCRIPT>");
    
    exit();
} else{
    echo "ERROR: Could not able to execute deletion $sql. " . mysqli_error($db);
}
mysqli_close($db);
    
?>