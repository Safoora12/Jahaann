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

// Querry to insert the wind paper Mill Meters
// $sql = "INSERT INTO beverage (name, minVolt, maxVolt, minCurrnt, maxCurrnt, minEnergy, maxEnergy, Time, refresh) VALUES ('$meter_name', $min_voltage, $max_voltage, $min_current, $max_current, $min_kW, $max_kW, NOW(), $refresh_rate)";

// // Execute SQL query
// if ($conn->query($sql) === TRUE) {
//     echo "New record created successfully";
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }

//Querry to update the meter data
$sql = "UPDATE beverage
        SET minVolt = $min_voltage,
            maxVolt = $max_voltage,
            minCurrnt = $min_current,
            maxCurrnt = $max_current,
            minEnergy = $min_kW,
            maxEnergy = $max_kW,
            Time = NOW(),
            refresh = $refresh_rate
        WHERE name = '$meter_name'";
if ($conn->query($sql) === TRUE) {
    // Redirect to the meter_configurations.php page on success
    header("Location: ../settings/meter_configurations.php");
    exit(); // Ensure script execution stops after redirection
} else {
    // Redirect to the meter_configurations.php page with error message
    header("Location: ../settings/meter_configurations.php?error=" . urlencode("Error: " . $sql . "<br>" . $conn->error));
    exit(); // Ensure script execution stops after redirection
}

// Close MySQL connection
$conn->close();
?>
