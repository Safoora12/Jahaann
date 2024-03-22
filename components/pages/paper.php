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
            <h2 class="h2">Paper Mill Power Supply Overview</h2>
            <a href="./areal_view.php"><img class="applicationLogo" src="../images/back.png" width="60px" style="position: absolute;right:10px; top:10px"></a>
            <img class="applicationLogo" src="../images/papermill.png" height="500px" width="auto" style="margin-left: 200px; margin-top:100px">
            <img class="applicationLogo" src="../images/smoke.gif" height="20px" width="auto" style="position:absolute; top:298px; left:672px; transform:rotate(270deg)">
            <img class="applicationLogo" src="../images/smoke1.gif" height="20px" width="auto" style="position:absolute; top:298px; left:691px;transform:rotate(270deg)">
            <!-- values -->
            <div style="position:absolute; top:500px; left:1010px;color:black;width:200px">
                <p style="padding-bottom:1px;">Voltage</p>
                <p style="padding-bottom:1px;">Current</p>
                <p style="padding-bottom:1px;">Frequency</p>
                <p style="padding-bottom:1px;">Active Power</p>
                <p style="padding-bottom:1px;">Active Energy</p>
                <!-- maximum demand indicator -->
                <!-- <p style="padding-bottom:1px;">MDI</p> -->
            </div>
            <div style="position:absolute; top:501px; left:1130px;color:#0000FF;width:180px">
                <p style="padding-bottom:1px;">11.1 kV</p>
                <p style="padding-bottom:1px;">28.8 kA</p>
                <p style="padding-bottom:1px;">49.8 Hz</p>
                <p style="padding-bottom:1px;">3.6 MW</p>
                <p style="padding-bottom:1px;">1860 MWh</p>
                <!-- <p style="padding-bottom:1px;">22MW</p> -->
            </div>
            <div style="position:absolute; top:492px; left:260px;color:black;width:200px; display:flex;background-color:gray; width:220px; border-radius:10px">
                <!-- <p style="padding-bottom:1px;">Water Consumption</p> -->
                <p style="padding-left:20px; color:#fff">Paper Production</p>
                <p style="padding-left:20px; color:#0000FF"> 38.010 Ton</p>
                <!-- <p style="padding-bottom:1px;">Steam Consumption</p> -->
            </div>

        </div>
    </div>
</body>


</html>