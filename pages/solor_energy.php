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
            <h2 class="h2">Solor Energy Plant</h2>

            <img class="applicationLogo" src="../images/solor.PNG">
            <img class="applicationLogo" src="../images/meter.jpg" style="position: absolute;left:580px; top:60px">
            <div style="position:absolute; top:83px; left:840px;color:#0000FF;width:80px">
                <p style="padding-bottom:1px;">48 MW</p>
                <p style="padding-bottom:1px;">3.6 kV</p>
                <p style="padding-bottom:1px;">9.1 kA</p>
                <p style="padding-bottom:1px;">Online</p>
                <p style="padding-bottom:1px;">1.6 W/m2</p>
                <p style="padding-bottom:1px;">11 &degC</p>
                <p style="padding-bottom:1px;">5 m/s</p>
            </div>
            <img class="applicationLogo" src="../images/meter.png" width="100px" style="position: absolute;left:880px; top:350px">
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
               
            </div>
            
        </div>
    </div>
</body>

</html>