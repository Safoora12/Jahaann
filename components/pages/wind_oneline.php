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
              <!-- Wind Mill 1 -->
            
                <div style="position: absolute; top: 316px; left: 362px; color:#0000FF; font:600; font-size: 14px; text-align: center;">
                    <p  style = "margin-bottom: -11px;">11 kV</p>
                    <p  style = "margin-bottom: -11px;">1166 A</p>
                    <p>3.24 MW</p>
                   
                </div>
              
              <!-- Wind mill 2 -->
            
                <div style="position: absolute; top: 315px; left: 671px; color:#0000FF; font:600; font-size: 14px; text-align: center;">
                    <p  style = "margin-bottom: -11px;">10.6 kV</p>
                    <p  style = "margin-bottom: -11px;">1166 A</p>
                    <p>3.06 MW</p>
                    
                </div>
  
                <!-- total meter -->
            
                <div style="position: absolute; top: 485px; left: 516px; color:#0000FF; font:600; font-size: 14px; text-align: center;">
                    <p  style = "margin-bottom: -11px;">10.8 kV</p>
                    <p  style = "margin-bottom: -11px;">1166 A</p> 
                    <p>6.3 MW</p>          
                </div>

     
            <h2 class="h2">Shopping Mall Single Line Diagram</h2>
            <a href="./areal_view.php"><img class="applicationLogo" src="../images/back.png" width="60px" style="position: absolute;right:10px; top:10px"></a>
            <img class="applicationLogo" src="../images/wind_oneline1.png"  >
        </div>
    </div>
</body>
</html>
