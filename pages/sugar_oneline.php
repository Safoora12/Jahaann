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
            <!-- main -->
            <div style="position: absolute; top: 66px; left: 586px; color:#0000FF; font:600; font-size: 12px;">
                <p style="margin-bottom: -11px;" id="m13_volt"></p>
                <p style="margin-bottom: -11px;" id="m13_current"></p>
                <p id="m13_activepower"></p>

            </div>
            <!-- Raw Juice Healing -->
            <div style="position: absolute; top: 206px; left: 457px; color:#0000FF; font:600; font-size: 12px;">
                <p style="margin-bottom: -11px;" id="m1_volt"></p>
                <p style="margin-bottom: -11px;" id="m1_current"></p>
                <p id="m1_activepower"></p>

            </div>

            <!-- Defected Juice Healing -->
            <div style="position: absolute; top: 303px; left: 457px; color:#0000FF; font:600; font-size: 12px;">
                <p style="margin-bottom: -11px;" id="m2_volt"></p>
                <p style="margin-bottom: -11px;" id="m2_current"></p>
                <p id="m2_activepower"></p>
            </div>

            <!-- Juice Clarification -->
            <div style="position: absolute; top: 400px; left: 457px; color:#0000FF; font:600; font-size: 12px;">
                <p style="margin-bottom: -11px;" id="m3_volt"></p>
                <p style="margin-bottom: -11px;" id="m3_current"></p>
                <p id="m3_activepower"></p>
            </div>

            <!-- Evaporation -->
            <div style="position: absolute; top: 492px; left: 457px; color:#0000FF; font:600; font-size: 12px;">
                <p style="margin-bottom: -11px;" id="m4_volt"></p>
                <p style="margin-bottom: -11px;" id="m4_current"></p>
                <p id="m4_activepower"></p>
            </div>

            <!-- Crystallization -->
            <div style="position: absolute; top: 590px; left: 457px; color:#0000FF; font:600; font-size: 12px;">
                <p style="margin-bottom: -11px;" id="m12_volt"></p>
                <p style="margin-bottom: -11px;" id="m12_current"></p>
                <p id="m12_activepower"></p>
            </div>

            <!-- Centrifugals -->
            <div style="position: absolute; top: 685px; left: 457px; color:#0000FF; font:600; font-size: 12px;">
                <p style="margin-bottom: -11px;" id="m9_volt"></p>
                <p style="margin-bottom: -11px;" id="m9_current"></p>
                <p id="m9_activepower"></p>
            </div>

            <!-- Melter -->
            <div
                style="position: absolute; top: 208px; left: 603px; color:#0000FF; font:600; font-size: 12px; text-align: right;">
                <p style="margin-bottom: -11px;" id="m5_volt"></p>
                <p style="margin-bottom: -11px;" id="m5_current"></p>
                <p id="m5_activepower"></p>
            </div>

            <!-- Melt Clarification -->
            <div
                style="position: absolute; top: 303px; left: 603px; color:#0000FF; font:600; font-size: 12px; text-align: right;">
                <p style="margin-bottom: -11px;" id="m6_volt"></p>
                <p style="margin-bottom: -11px;" id="m6_current"></p>
                <p id="m6_activepower"></p>
            </div>

            <!-- Melt Filteration -->
            <div
                style="position: absolute; top: 400px; left: 603px; color:#0000FF; font:600; font-size: 12px; text-align: right;">
                <p style="margin-bottom: -11px;" id="m7_volt"></p>
                <p style="margin-bottom: -11px;" id="m7_current"></p>
                <p id="m7_activepower"></p>
            </div>

            <!-- Melt Decolorization -->
            <div
                style="position: absolute; top: 497px; left: 603px; color:#0000FF; font:600; font-size: 12px; text-align: right;">
                <p style="margin-bottom: -11px;" id="m8_volt"></p>
                <p style="margin-bottom: -11px;" id="m8_current"></p>
                <p id="m8_activepower"></p>
            </div>

            <!-- Crystallization -->
            <div
                style="position: absolute; top: 595px; left: 603px; color:#0000FF; font:600; font-size: 12px; text-align: right;">
                <p style="margin-bottom: -11px;" id="m11_volt"></p>
                <p style="margin-bottom: -11px;" id="m11_current"></p>
                <p id="m11_activepower"></p>
            </div>

            <!-- Centrifugals -->
            <div
                style="position: absolute; top: 690px; left: 603px; color:#0000FF; font:600; font-size: 12px; text-align: right;">
                <p style="margin-bottom: -11px;" id="m10_volt"></p>
                <p style="margin-bottom: -11px;" id="m10_current"></p>
                <p id="m10_activepower"></p>
            </div>
            <h2 class="h2" style="position: absolute;">Sugar Mill Single Line Diagram</h2>
            <a href="./areal_view.php"><img class="applicationLogo" src="../images/back.png" width="60px"
                    style="position: absolute;right:10px; top:10px"></a>
            <img class="applicationLogo" src="../images/sugar_sld.png" style="margin-left: 200px; margin-top: 20px;">

        </div>
    </div>
    <?php
    $results = array(
        array("id" => "m1_volt", "min" => $sugar_1_MinVolt, "max" => $sugar_1_MaxVolt, "refresh" => $sugar_1_Refresh * 1000, "unit" => "kV"),
        array("id" => "m1_current", "min" =>  $sugar_1_MinCurrnt, "max" => $sugar_1_MaxCurrnt, "refresh" => $sugar_1_Refresh * 1000, "unit" => "A"),
        array("id" => "m1_activepower", "min" => $sugar_1_MinEnergy, "max" => $sugar_1_MaxEnergy, "refresh" => 300000, "unit" => "MW"),

        array("id" => "m2_volt", "min" => $sugar_2_MinVolt, "max" => $sugar_2_MaxVolt, "refresh" => $sugar_2_Refresh * 1000, "unit" => "kV"),
        array("id" => "m2_current", "min" =>  $sugar_2_MinCurrnt, "max" => $sugar_2_MaxCurrnt, "refresh" => $sugar_2_Refresh * 1000, "unit" => "A"),
        array("id" => "m2_activepower", "min" => $sugar_2_MinEnergy, "max" => $sugar_2_MaxEnergy, "refresh" => 300000, "unit" => "MW"),

        array("id" => "m3_volt", "min" => $sugar_3_MinVolt, "max" => $sugar_3_MaxVolt, "refresh" => $sugar_3_Refresh * 1000, "unit" => "kV"),
        array("id" => "m3_current", "min" =>  $sugar_3_MinCurrnt, "max" => $sugar_3_MaxCurrnt, "refresh" => $sugar_3_Refresh * 1000, "unit" => "A"),
        array("id" => "m3_activepower", "min" => $sugar_3_MinEnergy, "max" => $sugar_3_MaxEnergy, "refresh" => 300000, "unit" => "MW"),

        array("id" => "m4_volt", "min" => $sugar_4_MinVolt, "max" => $sugar_4_MaxVolt, "refresh" => $sugar_4_Refresh * 1000, "unit" => "kV"),
        array("id" => "m4_current", "min" =>  $sugar_4_MinCurrnt, "max" => $sugar_4_MaxCurrnt, "refresh" => $sugar_4_Refresh * 1000, "unit" => "A"),
        array("id" => "m4_activepower", "min" => $sugar_4_MinEnergy, "max" => $sugar_4_MaxEnergy, "refresh" => 300000, "unit" => "MW"),

        array("id" => "m5_volt", "min" => $sugar_5_MinVolt, "max" => $sugar_5_MaxVolt, "refresh" => $sugar_5_Refresh * 1000, "unit" => "kV"),
        array("id" => "m5_current", "min" =>  $sugar_5_MinCurrnt, "max" => $sugar_5_MaxCurrnt, "refresh" => $sugar_5_Refresh * 1000, "unit" => "A"),
        array("id" => "m5_activepower", "min" => $sugar_5_MinEnergy, "max" => $sugar_5_MaxEnergy, "refresh" => 300000, "unit" => "MW"),

        array("id" => "m6_volt", "min" => $sugar_6_MinVolt, "max" => $sugar_6_MaxVolt, "refresh" => $sugar_6_Refresh * 1000, "unit" => "kV"),
        array("id" => "m6_current", "min" =>  $sugar_6_MinCurrnt, "max" => $sugar_6_MaxCurrnt, "refresh" => $sugar_6_Refresh * 1000, "unit" => "A"),
        array("id" => "m6_activepower", "min" => $sugar_6_MinEnergy, "max" => $sugar_6_MaxEnergy, "refresh" => 300000, "unit" => "MW"),

        array("id" => "m7_volt", "min" => $sugar_7_MinVolt, "max" => $sugar_7_MaxVolt, "refresh" => $sugar_7_Refresh * 1000, "unit" => "kV"),
        array("id" => "m7_current", "min" =>  $sugar_7_MinCurrnt, "max" => $sugar_7_MaxCurrnt, "refresh" => $sugar_7_Refresh * 1000, "unit" => "A"),
        array("id" => "m7_activepower", "min" => $sugar_7_MinEnergy, "max" => $sugar_7_MaxEnergy, "refresh" => 300000, "unit" => "MW"),

        array("id" => "m8_volt", "min" => $sugar_8_MinVolt, "max" => $sugar_8_MaxVolt, "refresh" => $sugar_8_Refresh * 1000, "unit" => "kV"),
        array("id" => "m8_current", "min" =>  $sugar_8_MinCurrnt, "max" => $sugar_8_MaxCurrnt, "refresh" => $sugar_8_Refresh * 1000, "unit" => "A"),
        array("id" => "m8_activepower", "min" => $sugar_8_MinEnergy, "max" => $sugar_8_MaxEnergy, "refresh" => 300000, "unit" => "MW"),

        array("id" => "m9_volt", "min" => $sugar_9_MinVolt, "max" => $sugar_9_MaxVolt, "refresh" => $sugar_9_Refresh * 1000, "unit" => "kV"),
        array("id" => "m9_current", "min" =>  $sugar_9_MinCurrnt, "max" => $sugar_9_MaxCurrnt, "refresh" => $sugar_9_Refresh * 1000, "unit" => "A"),
        array("id" => "m9_activepower", "min" => $sugar_9_MinEnergy, "max" => $sugar_9_MaxEnergy, "refresh" => 300000, "unit" => "MW"),

        array("id" => "m10_volt", "min" => $sugar_10_MinVolt, "max" => $sugar_10_MaxVolt, "refresh" => $sugar_10_Refresh * 1000, "unit" => "kV"),
        array("id" => "m10_current", "min" =>  $sugar_10_MinCurrnt, "max" => $sugar_10_MaxCurrnt, "refresh" => $sugar_10_Refresh * 1000, "unit" => "A"),
        array("id" => "m10_activepower", "min" => $sugar_10_MinEnergy, "max" => $sugar_10_MaxEnergy, "refresh" => 300000, "unit" => "MW"),

        array("id" => "m11_volt", "min" => $sugar_11_MinVolt, "max" => $sugar_11_MaxVolt, "refresh" => $sugar_11_Refresh * 1000, "unit" => "kV"),
        array("id" => "m11_current", "min" =>  $sugar_11_MinCurrnt, "max" => $sugar_11_MaxCurrnt, "refresh" => $sugar_11_Refresh * 1000, "unit" => "A"),
        array("id" => "m11_activepower", "min" => $sugar_11_MinEnergy, "max" => $sugar_11_MaxEnergy, "refresh" => 300000, "unit" => "MW"),

        array("id" => "m12_volt", "min" => $sugar_12_MinVolt, "max" => $sugar_12_MaxVolt, "refresh" => $sugar_12_Refresh * 1000, "unit" => "kV"),
        array("id" => "m12_current", "min" =>  $sugar_12_MinCurrnt, "max" => $sugar_12_MaxCurrnt, "refresh" => $sugar_12_Refresh * 1000, "unit" => "A"),
        array("id" => "m12_activepower", "min" => $sugar_12_MinEnergy, "max" => $sugar_12_MaxEnergy, "refresh" => 300000, "unit" => "MW"),

        array("id" => "m13_volt", "min" => $sugar_13_MinVolt, "max" => $sugar_13_MaxVolt, "refresh" => $sugar_13_Refresh * 1000, "unit" => "kV"),
        array("id" => "m13_current", "min" =>  $sugar_13_MinCurrnt, "max" => $sugar_13_MaxCurrnt, "refresh" => $sugar_13_Refresh * 1000, "unit" => "A"),
        array("id" => "m13_activepower", "min" => $sugar_13_MinEnergy, "max" => $sugar_13_MaxEnergy, "refresh" => 300000, "unit" => "MW"),
    );
    ?>
    <script>
    function updateResult(min, max, unit, resultElementId) {
        // Get a random number between min and max for m1_volt and m1_current
        let randomValue = (resultElementId.endsWith('_activepower')) ? null : Math.random() * (max - min) + min;
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