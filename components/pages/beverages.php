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
            <h2 class="h2">Beverage Industry Power Supply Overview</h2>
            <a href="./areal_view.php"><img class="applicationLogo" src="../images/back.png" width="60px" style="position: absolute;right:10px; top:10px"></a>
            <img class="applicationLogo" src="../images/beverage.PNG" height="500px" width="auto" style="margin-left: 50px; margin-top:100px">
            <img class="applicationLogo" src="../images/beverage.gif" height="340px" style="position:absolute; top:370px; left:515px">
            <!-- <div style="position:absolute; top:366px; left:589px;width:180px; height:100px; background-color: #fff;">

            </div> -->
            <!-- <img class="applicationLogo" src="../images/smoke.gif" height="20px" width="auto" style="position:absolute; top:416px; left:689px; transform:rotate(270deg)">
            <img class="applicationLogo" src="../images/smoke1.gif" height="20px" width="auto" style="position:absolute; top:416px; left:708px;transform:rotate(270deg)"> -->

            <!-- <img class="applicationLogo" src="../images/smoke.gif" height="20px" width="auto" style="position:absolute; top:416px; left:652px; transform:rotate(270deg)">
            <img class="applicationLogo" src="../images/smoke1.gif" height="20px" width="auto" style="position:absolute; top:416px; left:671px;transform:rotate(270deg)"> -->
            <!-- values -->
            <img class="applicationLogo" src="../images/meter4.png" width="100px" style=" position: absolute;left:1000px; top:370px;">
            <div style="position:absolute; top:470px; left:1010px;color:black;width:200px">
                <p style="padding-bottom:1px;">Voltage</p>
                <p style="padding-bottom:1px;">Current</p>
                <p style="padding-bottom:1px;">Frequency</p>
                <p style="padding-bottom:1px;">Active Power</p>
                <p style="padding-bottom:1px;">Active Energy</p>
                <!-- maximum demand indicator -->
                <!-- <p style="padding-bottom:1px;">MDI</p> -->
            </div>
            <div style="position:absolute; top:471px; left:1130px;color:#0000FF;width:180px">
                <p style="padding-bottom:1px;">11.1 kV</p>
                <p style="padding-bottom:1px;">28.8 kA</p>
                <p style="padding-bottom:1px;">49.8 Hz</p>
                <p style="padding-bottom:1px;">2.1 MW</p>
                <p style="padding-bottom:1px;">1410 MWh</p>
                <!-- <p style="padding-bottom:1px;">22MW</p> -->
            </div>
            <div style="position:absolute; top:612px; left:620px;color:black;width:200px;font-size:22px; width:200px; border-radius:10px">
                <p style="padding-left:20px;">Beverage Industry</p>
            </div>
            <!-- <div style="position:absolute; top:492px; left:260px;color:black;width:200px; display:flex;background-color:gray; width:220px; border-radius:10px">
                <p style="padding-bottom:1px;">Water Consumption</p>
                <p style="padding-left:20px; color:#fff">Paper Production</p>
                <p style="padding-left:20px; color:#0000FF"> 38.010 Ton</p>
                <p style="padding-bottom:1px;">Steam Consumption</p>
            </div> -->

        </div>
    </div>
</body>


</html>