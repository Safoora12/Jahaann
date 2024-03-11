<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
            <h2 class="h2">Hydel Power Plant</h2>
            <a href="./areal_view.php"><img class="applicationLogo" src="../images/back.png" width="60px" style="position: absolute;right:10px; top:10px"></a>

            <!-- Setting points below -->
            <!-- WIRE LINES -->
            <div class="vertical-line" style="position: absolute;left:929px; top:344px;height:87px;transform:rotate(60deg)"></div>
            <div class="vertical-line" style="position: absolute;left:967px; top:162px;height:205px;transform:rotate(0deg)"></div>
            <div class="vertical-line" style="position: absolute;left:288px; top:568px;height:40px;transform:rotate(0deg)"></div>
            <div class="vertical-line" style="position: absolute;left:154px; top:606px;height:40px;transform:rotate(0deg)"></div>
            <div class="vertical-line" style="position: absolute;left:221px; top:539px;height:136px;transform:rotate(90deg)"></div>
            <!-- MAP -->
            <img class="applicationLogo" src="../images/hydelplant.jpg" style="margin-left:60px;">
            <!-- METERS -->
            <img class="applicationLogo" src="../images/meter.png" style="width: 100px; position: absolute;left:117px; top:615px;">
            <img class="applicationLogo" src="../images/meter4.png" style=" position: absolute;left:905px; top:53px;">
            <!-- VALUES -->
            <div style="position:absolute; top:43px; left:1026px;color:black;width:180px">
                <p style="padding-bottom:1px; font-size:14px; font-weight: 600;">Hydel Generation</p>
                <p style="padding-bottom:1px;">Generation</p>
                <p style="padding-bottom:1px;">Voltage</p>
                <p style="padding-bottom:1px;">Current</p>
                <p style="padding-bottom:1px;">Status</p>
                <p style="padding-bottom:1px;">Effeciency</p>
            </div>
            <div style="position:absolute; top:42px; left:1120px;color:#0000FF;width:180px">
                <p style="padding-bottom:22px;"></p>
                <p style="padding-bottom:1px;">134 MW</p>
                <p style="padding-bottom:1px;">11 kV</p>
                <p style="padding-bottom:1px;">41.7 kA</p>
                <p style="padding-bottom:1px;">Online</p>
                <p style="padding-bottom:1px;">85 %</p>
            </div>

            <div style="position:absolute; top:608px; left:216px;color:black;width:200px">
                <p style=" font-size:14px; font-weight: 600;">Hydel Power Transmission</p>
                <p>Power Flow</p>
                <p>Voltage</p>
                <p>Current</p>
                <p>Frequency</p>
                <p>V Unbalance</p>
            </div>
            <div style="position:absolute; top:606px; left:332px;color:#0000FF;width:180px">
                <p style="padding-bottom:22px;"></p>
                <p>125 MW</p>
                <p>110.0 kV</p>
                <p>0.3 kA</p>
                <p>59.8 Hz</p>
                <p>1.4 V</p>
            </div>
            <div style="position:absolute; top:578px; left:877px;color:black;width:180px">
                <p style="padding-bottom:2px;">Water Speed</p>
                <p style="padding-bottom:2px;">Water Level</p>
            </div>
            <div style="position:absolute;  top:578px; left:992px;color:#0000FF;width:180px">
                <p style="padding-bottom:2px;">40 m/s</p>
                <p style="padding-bottom:2px;">80%</p>
            </div>
        </div>
    </div>
</body>

</html>