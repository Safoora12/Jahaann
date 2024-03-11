<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

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
            <h2 class="h2">Shopping Mall Power Supply Overview</h2>

            <img class="applicationLogo" src="../images/mall.PNG" height="600px" width="auto" style="margin-left: 50px; margin-top:-50px">
            <a href="./areal_view.php"><img class="applicationLogo" src="../images/back.png" width="60px" style="position: absolute;right:10px; top:10px"></a>
            <!-- values -->
            <img class="applicationLogo" src="../images/meter.png" style="width: 100px; position: absolute;left:381px; top:138px;">
            <div style="position:absolute; top:140px; left:481px;color:black;width:200px">
                <p style="padding-bottom:1px;">Voltage</p>
                <p style="padding-bottom:1px;">Current</p>
                <p style="padding-bottom:1px;">Frequency</p>
                <p style="padding-bottom:1px;">Active Power</p>
                <p style="padding-bottom:1px;">Active Energy</p>
            </div>
            <div style="position:absolute; top:141px; left:600px;color:#0000FF;width:180px">
                <p style="padding-bottom:1px;">11.1 kV</p>
                <p style="padding-bottom:1px;">28.8 kA</p>
                <p style="padding-bottom:1px;">49.8 Hz</p>
                <p style="padding-bottom:1px;">300 kW</p>
                <p style="padding-bottom:1px;">142 MWh</p>
            </div>
            <!-- <img class="applicationLogo" src="../images/meter4.png" style=" position: absolute;left:80px; top:490px;">
            <div style="position:absolute; top:500px; left:220px;color:black;width:200px">
            <p style="padding-bottom:1px;">Voltage</p>
                <p style="padding-bottom:1px;">Current</p>
                <p style="padding-bottom:1px;">Frequency</p>
                <p style="padding-bottom:1px;">Active Power</p>
            </div>
            <div style="position:absolute; top:500px; left:350px;color:#0000FF;width:180px">
            <p style="padding-bottom:1px;">11.1 kV</p>
                <p style="padding-bottom:1px;">28.8 kA</p>
                <p style="padding-bottom:1px;">49.8 Hz</p>
                <p style="padding-bottom:1px;">16 MW</p> -->
            </div>
        </div>
    </div>
</body>


</html>