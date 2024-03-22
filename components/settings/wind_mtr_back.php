<?php

 include('../configuration/sql_connection.php'); 

// Retrieve form data
$meter_name = $_POST['meter_name'];
$max_voltage = $_POST['max_voltage'];
$min_voltage = $_POST['min_voltage'];
$max_current = $_POST['max_current'];
$min_current = $_POST['min_current'];
$max_kW = $_POST['max_kW'];
$min_kW = $_POST['min_kW'];
$refresh_rate = $_POST['refresh_rate'];

// Querry to insert the wind Generation meters
// $sql = "INSERT INTO windGen (name, minVolt, maxVolt, minCurrnt, maxCurrnt, minEnergy, maxEnergy, Time, refresh) VALUES ('$meter_name', $min_voltage, $max_voltage, $min_current, $max_current, $min_kW, $max_kW, NOW(), $refresh_rate)";


// Querry to insert the wind paper Mill Meters
$sql = "INSERT INTO papaermill (name, minVolt, maxVolt, minCurrnt, maxCurrnt, minEnergy, maxEnergy, Time, refresh) VALUES ('$meter_name', $min_voltage, $max_voltage, $min_current, $max_current, $min_kW, $max_kW, NOW(), $refresh_rate)";





// Execute SQL query
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close MySQL connection
$conn->close();
?>
