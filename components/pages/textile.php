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

        /* element.style {
            fill: rgb(166, 209, 48);
            stroke: rgb(129, 151, 57);
            stroke-width: 2px;
        }

        path {
            fill: rgb(255, 0, 0);
            stroke: rgb(255, 0, 0);
            stroke-width: 0;
        } */
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
            <h2 class="h2">Textile Industry Power Supply Overview</h2>
            <a href="./areal_view.php"><img class="applicationLogo" src="../images/back.png" width="60px" style="position: absolute;right:10px; top:10px"></a>
            <img class="applicationLogo" src="../images/textile_overview.png" height="550px" width="auto" style="margin-left: 150px; margin-top:50px">
            <!-- values -->
            <img class="applicationLogo" src="../images/meter4.png" width="100px" style=" position: absolute; left: 1005px; top: 306px;">
            <div style="position:absolute; top: 415px; left: 1002px; color:black;width:200px">
    
                <p style="padding-bottom:1px;">Voltage</p>
                <p style="padding-bottom:1px;">Current</p>
                <p style="padding-bottom:1px;">Frequency</p>
                <p style="padding-bottom:1px;">Active Power</p>
                <p style="padding-bottom:1px;">Active Energy</p>
      
            </div>
            <div style="position:absolute; top: 417px; left: 1117px; color:#0000FF;width:180px">
                <p style="padding-bottom:1px;">11.1 kV</p>
                <p style="padding-bottom:1px;">28.8 kA</p>
                <p style="padding-bottom:1px;">49.8 Hz</p>
                <p style="padding-bottom:1px;">2.8 MW</p>
                <p style="padding-bottom:1px;">1560 MWh</p>
                <!-- <p style="padding-bottom:1px;">22MW</p> -->
            </div>
    
   
           
        </div>
    </div>
</body>


</html>