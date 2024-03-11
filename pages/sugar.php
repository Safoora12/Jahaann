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
            <h2 class="h2">Sugar Mill Power Supply Overview</h2>
            <a href="./areal_view.php"><img class="applicationLogo" src="../images/back.png" width="60px" style="position: absolute;right:10px; top:10px"></a>

            <img class="applicationLogo" src="../images/sugar_mill.png" height="500px" width="auto" style="margin-left: 200px; margin-top:100px">
            <!-- values -->
            <img class="applicationLogo" src="../images/meter4.png" width="100px" style=" position: absolute;left:1200px; top:330px;">
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
                <p style="padding-bottom:1px;">11.1 kV</p>
                <p style="padding-bottom:1px;">28.8 kA</p>
                <p style="padding-bottom:1px;">49.8 Hz</p>
                <p style="padding-bottom:1px;">6 MW</p>
                <p style="padding-bottom:1px;">2160 MWh</p>
                <p style="padding-bottom:1px;">4.8MW</p>
            </div>
            <div style="position:absolute; top:482px; left:360px;color:black;width:200px">
                <p style="padding-bottom:1px;">Water Consumption</p>
                <p style="padding-bottom:1px;">Sugar Production</p>
                <p style="padding-bottom:1px;">Steam Consumption</p>
            </div>
            <div style="position:absolute; top:482px; left:500px;color:#0000FF;width:180px">
                <p style="padding-bottom:1px;">11,540 m3</p>
                <p style="padding-bottom:1px;">900,000 tons</p>
                <p style="padding-bottom:1px;">46 % per ton</p>
            </div>
        </div>
    </div>
</body>


</html>