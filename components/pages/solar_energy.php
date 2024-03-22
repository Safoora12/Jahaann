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
        ?>
        <div class="map_div" style="position: relative;">
            <h2 class="h2">Solor Power Monitoring</h2>

            <a href="./areal_view.php"><img class="applicationLogo" src="../images/back.png" width="60px" style="position: absolute;right:10px; top:10px"></a>
            <img class="applicationLogo" src="../images/solar.png" width="870px" height="auto" style="margin-top:39px">
            <img class="applicationLogo" src="../images/test.png" style="position: absolute;left:600px; top:20px">
            <div style="position:absolute; top:43px; left:860px;color:#0000FF;width:80px">
                <p style="padding-bottom:1px;">20 MW</p>
                <p style="padding-bottom:1px;">18 MW</p>
                <p style="padding-bottom:1px;">3.6 kV</p>
                <p style="padding-bottom:1px;">9.1 kA</p>
                <p style="padding-bottom:7px;">Online</p>
                <p style="padding-bottom:1px; color:red">80 %</p>
                <p style="padding-bottom:1px;">1.6 W/m2</p>
                <p style="padding-bottom:1px;">11 &degC</p>
                <p style="padding-bottom:1px;">5 m/s</p>
            </div>
            <!-- <img class="applicationLogo" src="../images/meter.png" width="100px" style="position: absolute;left:880px; top:350px">
            <div style="position:absolute; top:440px; left:875px;color:black;width:180px">
                <p style="padding-bottom:1px;">Power Flow</p>
                <p style="padding-bottom:1px;">Voltage</p>
                <p style="padding-bottom:1px;">Current</p>
                <p style="padding-bottom:1px;">Frequency</p>
               
            </div>
            <div style="position:absolute; top:440px; left:975px;color:#0000FF;width:80px">
                <p style="padding-bottom:1px;">48 MW</p>
                <p style="padding-bottom:1px;">3.6 kV</p>
                <p style="padding-bottom:1px;">0.5 kA</p>
                <p style="padding-bottom:1px;">59.8 Hz</p>
               
            </div> -->
            
        </div>
    </div>
</body>

</html>