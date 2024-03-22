<?php
include('../configuration/sql_connection.php'); 
$meters_data = array();
// Fetch all unique meter IDs from the sugar table
$query = "SELECT DISTINCT id FROM windgen";
$result = mysqli_query($conn, $query);

// Check if query executed successfully
if ($result) {
    // Fetching data for each meter ID
    while ($row = mysqli_fetch_assoc($result)) {
        $meter_id = $row['id'];
        
        // Fetch data for the current meter ID
        $query = "SELECT * FROM windgen WHERE id = $meter_id";
        $data_result = mysqli_query($conn, $query);
        
        if ($data_result && mysqli_num_rows($data_result) > 0) {
            // Fetch the row
            $meter_row = mysqli_fetch_assoc($data_result);
            
            // Store data in variables
            ${'wind_' . $meter_id . '_name'} = $meter_row['name'];
            ${'wind_' . $meter_id . '_MinVolt'} = $meter_row['minVolt'];
            ${'wind_' . $meter_id . '_MaxVolt'} = $meter_row['maxVolt'];
            ${'wind_' . $meter_id . '_MinCurrnt'} = $meter_row['minCurrnt'];
            ${'wind_' . $meter_id . '_MaxCurrnt'} = $meter_row['maxCurrnt'];
            ${'wind_' . $meter_id . '_MinEnergy'} = $meter_row['minEnergy'];
            ${'wind_' . $meter_id . '_MaxEnergy'} = $meter_row['maxEnergy'];
            ${'wind_' . $meter_id . '_Refresh'} = $meter_row['refresh'];      
            
            // Store data in array
            $meters_data[$meter_id] = $meter_row;
        }
    }
}

// Access data for a specific meter
echo $sugar_1_name; // Output: Name of the meter with ID 1
echo $sugar_1_MinVolt; // Output: Value of minVolt for meter with ID 1


?>
