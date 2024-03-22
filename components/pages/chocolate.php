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
            <h2 class="h2">Chocolate Factory Power Supply Overview</h2>
            <a href="./areal_view.php"><img class="applicationLogo" src="../images/back.png" width="60px" style="position: absolute;right:10px; top:10px"></a>
            <img class="applicationLogo" src="../images/chocolate.PNG" height="500px" width="auto" style="margin-left: 150px; margin-top:100px">
            <!-- values -->
            <img class="applicationLogo" src="../images/meter4.png" width="100px" style=" position: absolute;left:500px; top:370px;left: 1080px; top: 215px;">
          
            
            <div style="position:absolute;  top: 320px; left: 1100px; color:black;width:200px">
       
                <p style="padding-bottom:1px;">Voltage</p>
                <p style="padding-bottom:1px;">Current</p>
                <p style="padding-bottom:1px;">Frequency</p>
                <p style="padding-bottom:1px;">Active Power</p>
                <p style="padding-bottom:1px;">Active Energy</p>
                <!-- maximum demand indicator -->
                <!-- <p style="padding-bottom:1px;">MDI</p> -->
            </div>
            <div style="position:absolute; top: 320px; left: 1200px;color:#0000FF;width:180px">
      
                <p style="padding-bottom:1px;">11.1 kV</p>
                <p style="padding-bottom:1px;">28.8 kA</p>
                <p style="padding-bottom:1px;">49.8 Hz</p>
                <p style="padding-bottom:1px;">7 MW</p>
                <p style="padding-bottom:1px;">2160 MWh</p>
                <!-- <p style="padding-bottom:1px;">22MW</p> -->
            </div>
            <!-- <div style="position:absolute; top:612px; left:620px;color:black;width:200px;font-size:22px; width:200px; border-radius:10px">
                <p style="padding-left:20px;">Beverage Industry</p>
             </div>  -->
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