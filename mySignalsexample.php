<?php
/*
 *
 *  Copyright (C) 2016 Libelium Comunicaciones Distribuidas S.L.
 *  http://www.libelium.com
 *
 *  This program is distributed WITHOUT ANY WARRANTY; without
 *  even the implied warranty of MERCHANTABILITY or FITNESS FOR A
 *  PARTICULAR PURPOSE.
 *
 *  By using it you accept the MySignals Terms and Conditions.
 *  You can find them at: http://libelium.com/legal
 *
 *
 *  Version:           0.1
 *  Design:            David Gascon
 */
include('includes/httpful.phar');
// Config
$email = 'metropolia.mysignals@gmail.com';
$password = 'myS1gnalsMP!';
// API Vars
$api_base = 'https://api.libelium.com/mysignals';
$api_headers = ['Accept' => 'application/x.webapi.v1+json'];
//1.- Login
$parameters = json_encode([
    'email' => $email,
    'password' => $password
]);
$response_login = \Httpful\Request::post($api_base . '/auth/login')
    ->sendsJson()
    ->body($parameters)
    ->addHeaders($api_headers)
    ->send();
echo "1.- Login: <br><br>".$response_login->raw_body."<hr><br>";
//Save the Token in the header array.
if($response_login->code == 200){
    $api_headers['Authorization'] = 'Bearer '.$response_login->body->token;
}
//2.- Get my members
$response_members = \Httpful\Request::get($api_base . '/members')
    ->addHeaders($api_headers)
    ->send();

//echo "2.- Get my members: <br><br><pre>".json_encode($response_members->body, JSON_PRETTY_PRINT)."</pre><hr><br>";

// 2.1 get the dates when the user X was using the box
//3.- Get values from the first of my members
if(count($response_members->body->data) >= 4){
    $member_id = $response_members->body->data[4]->id;
    $parameters = [
        'member_id' => '185',
        'sensor_id' => 'temp',
        'ts_start' => '2017-04-24 08:00:00',
        'ts_end' => '2017-04-24 09:00:00',
        'limit' => '10',
        'cursor' => '0',
        'order' => 'desc'
    ];
    $response_values = \Httpful\Request::get($api_base . '/values?'.http_build_query($parameters))
        ->addHeaders($api_headers)
        ->send();
     echo "3.- Get values from one member (member_id= ".$member_id."): <br><br><pre>".json_encode($response_values->body, JSON_PRETTY_PRINT)."</pre><hr><br>";
     echo "debuggaus lämpötilan arvon saamiseksi".json_encode($value);
    
    echo "<pre>";
    //var_dump($response_values->body);
    var_dump($response_values->body->data);
    //echo "which failed?";
    //var_dump($response_values->body["data"]);
    foreach($response_values->body->data as $key => $val){
        //echo "k: " . $key . " => value: ";
        //var_dump($val);
        //trying to get the temp
        echo "temp ?" . $response_values->body->data[$key]->value . "\n";
    }

    echo "</pre>";
    
    echo "<pre>";
    
    $ptemp = $response_values->body->data[$key]->value;
        echo $ptemp;
        
    echo "</pre>";
    
    
    include("dbconnecttest.php");
    session_start();

    // Check connection
    if($db === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
    }

    // Escape user inputs for security
    $ptemp = mysqli_real_escape_string($db, $_REQUEST['value']);
    

    // attempt insert query execution
    $sql = "INSERT INTO temperature (value) VALUES ('$ptemp')";
    if(mysqli_query($db, $sql)){
        echo "Records added successfully.";
        echo "<br></br>";
        echo '<a href="http://users.metropolia.fi/~santtumk/thermoapptestailuu/tokasivu2.php">  Back to patientslist</a>';

        echo ("<SCRIPT LANGUAGE='JavaScript'>
                window.alert('temperature data uppdated!')
                window.location.href='http://users.metropolia.fi/~santtumk/thermoapp/tokasivu2.php';
                </SCRIPT>");

        exit();
    } else{
        echo "ERROR: Could not able to execute insertion $sql. " . mysqli_error($db);
    }
    mysqli_close($db);
    
}
