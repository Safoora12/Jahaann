<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="../images/favicon.png">
    <style>
        .body {
            background-color: #ebebeb;
        }

    </style>
</head>

<body class="body">

    <?php
    include('../components/top_hearder.php');
    ?>
    <?php
    include('../components/navbar.php');
    ?>
    <div id="main">
        <?php
        include('../components/sidebar.php');
        include('../fetching_meters_values/sugar.php');
        ?>
        <div class="map_div" style="position: relative;">
            <h2 class="h2">Sugar Mill Power Supply Overview</h2>
            <a href="./areal_view.php"><img class="applicationLogo" src="../images/back.png" width="60px" style="position: absolute;right:10px; top:10px"></a>
            <img class="applicationLogo" src="../images/sugar_mill.PNG" height="500px" width="auto" style="margin-left: 200px; margin-top:100px">
            <!-- values -->
            <a href="./sugar_oneline.php"><img class="applicationLogo" src="../images/meter4.png" width="100px" style=" position: absolute;left:1200px; top:330px;"></a>
            <div style="position:absolute; top:428px; left:1211px;color:black;width:200px">
                <p style="padding-bottom:1px;">Voltage</p>
                <p style="padding-bottom:1px;">Current</p>
                <p style="padding-bottom:1px;">Frequency</p>
                <p style="padding-bottom:1px;">Active Power</p>
                <p style="padding-bottom:1px;">Active Energy</p>
                <!-- maximum demand indicator -->
                <p style="padding-bottom:1px;">MDI</p>
            </div>
            <div style="position:absolute; top:429px; left:1330px;color:#0000FF;width:180px">
                <p style="padding-bottom:1px;" id="m13_volt"></p>
                <p style="padding-bottom:1px;" id="m13_current"></p>
                <p style="padding-bottom:1px;">49.8 Hz</p>
                <p style="padding-bottom:1px;" id="m13_activepower"></p>
                <p style="padding-bottom:1px;">2660 MWh</p>
                <p style="padding-bottom:1px;">4.8MW</p>
            </div>
            <div style="position:absolute; top:482px; left:360px;color:black;width:200px">
                <p style="padding-bottom:1px;">Water Consumption</p>
                <p style="padding-bottom:1px;">Sugar Production</p>
                <p style="padding-bottom:1px;">Steam Consumption</p>
            </div>
            <div style="position:absolute; top:482px; left:500px;color:#0000FF;width:180px">
                <p style="padding-bottom:1px;">11,540 m3</p>
                <p style="padding-bottom:1px;" id="production"></p>
                <p style="padding-bottom:1px;">46 % per ton</p>
            </div>
        </div>
    </div>
    <?php
    $results = array(
        array("id" => "m13_volt", "min" => $sugar_13_MinVolt, "max" => $sugar_13_MaxVolt, "refresh" => $sugar_13_Refresh * 1000, "unit" => "V"),
        array("id" => "m13_current", "min" =>  $sugar_13_MinCurrnt, "max" => $sugar_13_MaxCurrnt, "refresh" => $sugar_13_Refresh * 1000, "unit" => "A"),
        array("id" => "m13_activepower", "min" => $sugar_13_MinEnergy, "max" => $sugar_13_MaxEnergy, "refresh" => 300000, "unit" => "MW"),
        array("id" => "production", "min" => 701000, "max" => 900000, "refresh" => 1500, "unit" => "tons"),
    );
    ?>

    <script>
    function updateResult(min, max, unit, resultElementId) {
        // Get a random number between min and max for m1_volt and m1_current
        let randomValue = (resultElementId.endsWith('_activepower') || resultElementId === 'production') ? null : Math.random() * (max - min) + min;

        // Get the HTML element by ID
        let resultElement = document.getElementById(resultElementId);

        // If m1_activepower, increment value by 0.2 until max is reached, then reset to min
        if (resultElementId.endsWith('_activepower')) {
            // Get the current value from the element
            let currentValue = parseFloat(resultElement.textContent);

            // If the current value is less than max, add 0.2 to it; otherwise, reset to min
            let newValue = currentValue < max ? currentValue + 0.2 : min;

            // Set the content of the element to the new value
            resultElement.textContent = newValue.toFixed(2) + ' ' + unit; // Display with 2 decimal places
        } else if (resultElementId === 'production') {
            // Get the current value from the element
            let currentValue = parseFloat(resultElement.textContent);

            // If the current value is less than max, add 0.2 to it; otherwise, reset to min
            let newValue = currentValue < max ? currentValue + 1 : min;

            // Set the content of the element to the new value
            resultElement.textContent = newValue + ' ' + unit; // Display with 2 decimal places
        } else {
            // For m1_volt and m1_current, set random value
            resultElement.textContent = randomValue.toFixed(2) + ' ' + unit; // Display with 2 decimal places
        }
    }

    function updateAllResults() {
        <?php foreach ($results as $result) { ?>
        updateResult(<?php echo $result["min"]; ?>, <?php echo $result["max"]; ?>, '<?php echo $result["unit"]; ?>',
            '<?php echo $result["id"]; ?>');
        <?php } ?>
    }

    // Update all results according to their refresh rates
    <?php foreach ($results as $result) { ?>
    setInterval(function() {
        updateResult(<?php echo $result["min"]; ?>, <?php echo $result["max"]; ?>,
            '<?php echo $result["unit"]; ?>', '<?php echo $result["id"]; ?>');
    }, <?php echo $result["refresh"]; ?>);
    <?php } ?>

    // Initial update
    updateAllResults();
    </script>
</body>


</html>