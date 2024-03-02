<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .body {
            background-color: #ebebeb;
        }

        .vertical-line {
            border-left: 2px solid #87C1B2;
            height: 210px;
            /* Adjust the height as needed */
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
            <h2 class="h2">Wind Farm</h2>
            <!-- Setting points below -->

            <div style="position:absolute; top:532px; left:600px;color:black;width:180px">
                <p style="padding-bottom:1px; font-size:14px; font-weight: 600;">Wind Power Transmission</p>
                <p style="padding-bottom:1px;">Power Flow</p>
                <p style="padding-bottom:1px;">Voltage</p>
                <p style="padding-bottom:1px;">Current</p>
                <p style="padding-bottom:1px;">Frequency</p>
                <p style="padding-bottom:1px;">V Unbalance</p>
            </div>
            <div style="position:absolute; top:532px; left:710px;color:#0000FF;width:180px">
                <p style="padding-bottom:22px;"></p>
                <p style="padding-bottom:1px;">42 MW</p>
                <p style="padding-bottom:1px;">110.0 kV</p>
                <p style="padding-bottom:1px;">0.3 kA</p>
                <p style="padding-bottom:1px;">59.8 Hz</p>
                <p style="padding-bottom:1px;">1.4 V</p>
            </div>

            <div style="position:absolute; top:40px; left:845px;color:black;width:180px">
                <p style="padding-bottom:1px; font-size:14px; font-weight: 600;">Wind Generation</p>
                <p style="padding-bottom:1px;">Generation</p>
                <p style="padding-bottom:1px;">Voltage</p>
                <p style="padding-bottom:1px;">Current</p>
                <p style="padding-bottom:1px;">Status</p>
            </div>
            <div style="position:absolute; top:40px; left:965px;color:#0000FF;width:180px">
                <p style="padding-bottom:22px;"></p>
                <p style="padding-bottom:1px;">44 MW</p>
                <p style="padding-bottom:1px;">0.7 kV</p>
                <p style="padding-bottom:1px;">41.7 kA</p>
                <p style="padding-bottom:1px;">Online</p>
            </div>
            <div style="position:absolute; top:478px; left:147px;color:black;width:180px">
                <p style="padding-bottom:2px;">Wind Speed</p>
                <p style="padding-bottom:2px;">Wind Direction</p>
                <p style="padding-bottom:2px;">Air Temperature</p>
            </div>
            <div style="position:absolute;  top:478px; left:262px;color:#0000FF;width:180px">
                <p style="padding-bottom:2px;">40 m/s</p>
                <p style="padding-bottom:2px;">SE</p>
                <p style="padding-bottom:2px;">15 &deg;C</p>
            </div>
            <div class="vertical-line" style="position: absolute;left:760px; top:59px;"></div>
            <div class="vertical-line" style="height:120px;position: absolute;left:430px; top:329px;transform:rotate(-65deg)"></div>
            <img class="applicationLogo" src="../images/meter4.png" style=" position: absolute;left:700px; top:53px;">
            <img class="applicationLogo" src="../images/Wind_turbine.png" width="auto" height="400px" style="position: absolute;left:200px; top:0px;">
            <img class="applicationLogo" src="../images/Wind_turbine.png" width="auto" height="400px" style="position: absolute;left:380px; top:100px;">
            <img class="applicationLogo" src="../images/wind1.jpg" style="margin-top: 30px;">
            <img class="applicationLogo" src="../images/meter.png" style="width: 100px; position: absolute;left:764px; top:540px;">
        </div>
    </div>
</body>

</html>