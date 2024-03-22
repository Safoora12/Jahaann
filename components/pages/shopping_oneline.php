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
        include('../fetching_meters_values/shopping.php');
        ?>
        <div class="map_div" style="position: relative;">
            <!-- TOP WALA METER -->

            <div
                style="position: absolute; top: 99px; left: 309px; color:#0000FF; font:600; font-size: 14px; text-align: center;width:70px">
                <p style="margin-bottom: -11px;" id="m12_volt"></p>
                <p style="margin-bottom: -11px;" id="m12_current"></p>
                <p id="m12_activepower"></p>

            </div>

            <!-- FLOR1 1 -->
            <div
                style="position: absolute; top: 232px; left: 229px; color:#0000FF; font:600; font-size: 14px; text-align: center;width:70px">
                <p style="margin-bottom: -11px;" id="m1_volt"></p>
                <p style="margin-bottom: -11px;" id="m1_current"></p>
                <p id="m1_activepower"></p>
            </div>


            <!--FLOR1 2 -->
            <div
                style="position: absolute; top: 324px; left: 229px; color:#0000FF; font:600; font-size: 14px; text-align: center;width:70px">
                <p style="margin-bottom: -11px;" id="m2_volt"></p>
                <p style="margin-bottom: -11px;" id="m2_current"></p>
                <p id="m2_activepower"></p>
            </div>

            <!--FLOR1 3 -->
            <div
                style="position: absolute; top: 420px; left: 228px; color:#0000FF; font:600; font-size: 14px; text-align: center;width:70px">
                <p style="margin-bottom: -11px;" id="m3_volt"></p>
                <p style="margin-bottom: -11px;" id="m3_current"></p>
                <p id="m3_activepower"></p>
            </div>


            <!--FLOR1 4 -->
            <div
                style="position: absolute; top: 512px; left: 228px; color:#0000FF; font:600; font-size: 14px; text-align: center;width:70px">
                <p style="margin-bottom: -11px;" id="m4_volt"></p>
                <p style="margin-bottom: -11px;" id="m4_current"></p>
                <p id="m4_activepower"></p>
            </div>





            <!-- FLOR2 1 -->
            <div
                style="position: absolute; top: 232px; left:726px; color:#0000FF; font:600; font-size: 14px; text-align: center;width:70px">
                <p style="margin-bottom: -11px;" id="m5_volt"></p>
                <p style="margin-bottom: -11px;" id="m5_current"></p>
                <p id="m5_activepower"></p>
            </div>


            <!--FLOR2 2 -->
            <div
                style="position: absolute; top: 324px; left:726px; color:#0000FF; font:600; font-size: 14px; text-align: center;width:70px">
                <p style="margin-bottom: -11px;" id="m6_volt"></p>
                <p style="margin-bottom: -11px;" id="m6_current"></p>
                <p id="m6_activepower"></p>
            </div>

            <!--FLOR2 3 -->
            <div
                style="position: absolute; top: 420px; left: 726px; color:#0000FF; font:600; font-size: 14px; text-align: center;width:70px">
                <p style="margin-bottom: -11px;" id="m7_volt"></p>
                <p style="margin-bottom: -11px;" id="m7_current"></p>
                <p id="m7_activepower"></p>
            </div>




            <!-- FLOR3 1 -->
            <div
                style="position: absolute; top: 232px; left:1214px; color:#0000FF; font:600; font-size: 14px; text-align: center;width:70px">
                <p style="margin-bottom: -11px;" id="m8_volt"></p>
                <p style="margin-bottom: -11px;" id="m8_current"></p>
                <p id="m8_activepower"></p>
            </div>


            <!--FLOR3 2 -->
            <div
                style="position: absolute; top: 324px; left:1214px; color:#0000FF; font:600; font-size: 14px; text-align: center;width:70px">
                <p style="margin-bottom: -11px;" id="m9_volt"></p>
                <p style="margin-bottom: -11px;" id="m9_current"></p>
                <p id="m9_activepower"></p>
            </div>

            <!--FLOR3 3 -->
            <div
                style="position: absolute; top: 420px; left: 1214px; color:#0000FF; font:600; font-size: 14px; text-align: center;width:70px">
                <p style="margin-bottom: -11px;" id="m10_volt"></p>
                <p style="margin-bottom: -11px;" id="m10_current"></p>
                <p id="m10_activepower"></p>
            </div>

            <!--FLOR3 4 -->
            <div
                style="position: absolute; top: 512px; left: 1214px; color:#0000FF; font:600; font-size: 14px; text-align: center;width:70px">
                <p style="margin-bottom: -11px;" id="m11_volt"></p>
                <p style="margin-bottom: -11px;" id="m11_current"></p>
                <p id="m11_activepower"></p>
            </div>

            <h2 class="h2">Shopping Mall Single Line Diagram</h2>
            <a href="./areal_view.php"><img class="applicationLogo" src="../images/back.png" width="60px"
                    style="position: absolute;right:10px; top:10px"></a>
            <img class="applicationLogo" src="../images/shoppingmall_sld.png">
        </div>
    </div>
    <?php
    $results = array(
        array("id" => "m1_volt", "min" => $shopping_1_MinVolt, "max" => $shopping_1_MaxVolt, "refresh" => $shopping_1_Refresh * 1000, "unit" => "kV"),
        array("id" => "m1_current", "min" =>  $shopping_1_MinCurrnt, "max" => $shopping_1_MaxCurrnt, "refresh" => $shopping_1_Refresh * 1000, "unit" => "A"),
        array("id" => "m1_activepower", "min" => $shopping_1_MinEnergy, "max" => $shopping_1_MaxEnergy, "refresh" => 300000, "unit" => "MW"),

        array("id" => "m2_volt", "min" => $shopping_2_MinVolt, "max" => $shopping_2_MaxVolt, "refresh" => $shopping_2_Refresh * 1000, "unit" => "kV"),
        array("id" => "m2_current", "min" =>  $shopping_2_MinCurrnt, "max" => $shopping_2_MaxCurrnt, "refresh" => $shopping_2_Refresh * 1000, "unit" => "A"),
        array("id" => "m2_activepower", "min" => $shopping_2_MinEnergy, "max" => $shopping_2_MaxEnergy, "refresh" => 300000, "unit" => "MW"),

        array("id" => "m3_volt", "min" => $shopping_3_MinVolt, "max" => $shopping_3_MaxVolt, "refresh" => $shopping_3_Refresh * 1000, "unit" => "kV"),
        array("id" => "m3_current", "min" =>  $shopping_3_MinCurrnt, "max" => $shopping_3_MaxCurrnt, "refresh" => $shopping_3_Refresh * 1000, "unit" => "A"),
        array("id" => "m3_activepower", "min" => $shopping_3_MinEnergy, "max" => $shopping_3_MaxEnergy, "refresh" => 300000, "unit" => "MW"),

        array("id" => "m4_volt", "min" => $shopping_4_MinVolt, "max" => $shopping_4_MaxVolt, "refresh" => $shopping_4_Refresh * 1000, "unit" => "kV"),
        array("id" => "m4_current", "min" =>  $shopping_4_MinCurrnt, "max" => $shopping_4_MaxCurrnt, "refresh" => $shopping_4_Refresh * 1000, "unit" => "A"),
        array("id" => "m4_activepower", "min" => $shopping_4_MinEnergy, "max" => $shopping_4_MaxEnergy, "refresh" => 300000, "unit" => "MW"),

        array("id" => "m5_volt", "min" => $shopping_5_MinVolt, "max" => $shopping_5_MaxVolt, "refresh" => $shopping_5_Refresh * 1000, "unit" => "kV"),
        array("id" => "m5_current", "min" =>  $shopping_5_MinCurrnt, "max" => $shopping_5_MaxCurrnt, "refresh" => $shopping_5_Refresh * 1000, "unit" => "A"),
        array("id" => "m5_activepower", "min" => $shopping_5_MinEnergy, "max" => $shopping_5_MaxEnergy, "refresh" => 300000, "unit" => "MW"),

        array("id" => "m6_volt", "min" => $shopping_6_MinVolt, "max" => $shopping_6_MaxVolt, "refresh" => $shopping_6_Refresh * 1000, "unit" => "kV"),
        array("id" => "m6_current", "min" =>  $shopping_6_MinCurrnt, "max" => $shopping_6_MaxCurrnt, "refresh" => $shopping_6_Refresh * 1000, "unit" => "A"),
        array("id" => "m6_activepower", "min" => $shopping_6_MinEnergy, "max" => $shopping_6_MaxEnergy, "refresh" => 300000, "unit" => "MW"),

        array("id" => "m7_volt", "min" => $shopping_7_MinVolt, "max" => $shopping_7_MaxVolt, "refresh" => $shopping_7_Refresh * 1000, "unit" => "kV"),
        array("id" => "m7_current", "min" =>  $shopping_7_MinCurrnt, "max" => $shopping_7_MaxCurrnt, "refresh" => $shopping_7_Refresh * 1000, "unit" => "A"),
        array("id" => "m7_activepower", "min" => $shopping_7_MinEnergy, "max" => $shopping_7_MaxEnergy, "refresh" => 300000, "unit" => "MW"),

        array("id" => "m8_volt", "min" => $shopping_8_MinVolt, "max" => $shopping_8_MaxVolt, "refresh" => $shopping_8_Refresh * 1000, "unit" => "kV"),
        array("id" => "m8_current", "min" =>  $shopping_8_MinCurrnt, "max" => $shopping_8_MaxCurrnt, "refresh" => $shopping_8_Refresh * 1000, "unit" => "A"),
        array("id" => "m8_activepower", "min" => $shopping_8_MinEnergy, "max" => $shopping_8_MaxEnergy, "refresh" => 300000, "unit" => "MW"),

        array("id" => "m9_volt", "min" => $shopping_9_MinVolt, "max" => $shopping_9_MaxVolt, "refresh" => $shopping_9_Refresh * 1000, "unit" => "kV"),
        array("id" => "m9_current", "min" =>  $shopping_9_MinCurrnt, "max" => $shopping_9_MaxCurrnt, "refresh" => $shopping_9_Refresh * 1000, "unit" => "A"),
        array("id" => "m9_activepower", "min" => $shopping_9_MinEnergy, "max" => $shopping_9_MaxEnergy, "refresh" => 300000, "unit" => "MW"),

        array("id" => "m10_volt", "min" => $shopping_10_MinVolt, "max" => $shopping_10_MaxVolt, "refresh" => $shopping_10_Refresh * 1000, "unit" => "kV"),
        array("id" => "m10_current", "min" =>  $shopping_10_MinCurrnt, "max" => $shopping_10_MaxCurrnt, "refresh" => $shopping_10_Refresh * 1000, "unit" => "A"),
        array("id" => "m10_activepower", "min" => $shopping_10_MinEnergy, "max" => $shopping_10_MaxEnergy, "refresh" => 300000, "unit" => "MW"),

        array("id" => "m11_volt", "min" => $shopping_11_MinVolt, "max" => $shopping_11_MaxVolt, "refresh" => $shopping_11_Refresh * 1000, "unit" => "kV"),
        array("id" => "m11_current", "min" =>  $shopping_11_MinCurrnt, "max" => $shopping_11_MaxCurrnt, "refresh" => $shopping_11_Refresh * 1000, "unit" => "A"),
        array("id" => "m11_activepower", "min" => $shopping_11_MinEnergy, "max" => $shopping_11_MaxEnergy, "refresh" => 300000, "unit" => "MW"),

        array("id" => "m12_volt", "min" => $shopping_12_MinVolt, "max" => $shopping_12_MaxVolt, "refresh" => $shopping_12_Refresh * 1000, "unit" => "kV"),
        array("id" => "m12_current", "min" =>  $shopping_12_MinCurrnt, "max" => $shopping_12_MaxCurrnt, "refresh" => $shopping_12_Refresh * 1000, "unit" => "A"),
        array("id" => "m12_activepower", "min" => $shopping_12_MinEnergy, "max" => $shopping_12_MaxEnergy, "refresh" => 300000, "unit" => "MW"),
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