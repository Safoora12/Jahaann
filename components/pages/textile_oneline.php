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

            <h2 style="position: absolute; left:550px" class="h2">Textile Industry Single Line Diagram</h2>
            <a href="./areal_view.php"><img class="applicationLogo" src="../images/back.png" width="60px" style="position: absolute;right:10px; top:10px"></a>
            <img class="applicationLogo" src="../images/textile_oneline3.PNG" style="padding-left: 35px;">
            <!-- values -->
            <!-- 1 -->
            <div style="position: absolute; top:195px ; left:215px; color:#0000FF; font:600; font-size: 14px; text-align: center;">
                <p>0.0 A</p>
                <p>0.0 kW</p>
            </div>
            <!-- 2 -->
            <div style="position: absolute; top:195px ; left:385px; color:#0000FF; font:600; font-size: 14px; text-align: center;">
                <p>0.0 A</p>
                <p>0.0 MW</p>
            </div>
            <!-- 3 -->
            <div style="position: absolute; top:227px ; left:558px; color:#0000FF; font:600; font-size: 14px; text-align: center;">
                <p>53.0 A</p>
                <p>992.5 kW</p>
            </div>
            <!-- 4 -->
            <div style="position: absolute; top:227px ; left:880px; color:#0000FF; font:600; font-size: 14px; text-align: center;">
                <p>106.6 A</p>
                <p>1490.8 kW</p>
            </div>
            <!-- 5 -->
            <div style="position: absolute; top:195px ; left:1055px; color:#0000FF; font:600; font-size: 14px; text-align: center;">
                <p>162.3 A</p>
                <p>3.0 MW</p>
            </div>
            <!-- 6 -->
            <div style="position: absolute; top:195px ; left:1225px; color:#0000FF; font:600; font-size: 14px; text-align: center;">
                <p>0.0 A</p>
                <p>0.0 kW</p>
            </div>
            <!-- 7 -->
            <div style="position: absolute; top:390px ; left:400px; color:#0000FF; font:600; font-size: 14px; text-align: center;">
                <p>55.6 A</p>
                <p>1.0 MW</p>
            </div>
            <!-- 8 -->
            <div style="position: absolute; top:390px ; left:730px; color:#0000FF; font:600; font-size: 14px; text-align: center;">
                <p>53.4 A</p>
                <p>1.0 MW</p>
            </div>
            <!-- 9 -->
            <div style="position: absolute; top:390px ; left:1050px; color:#0000FF; font:600; font-size: 14px; text-align: center;">
                <p>52.5 A</p>
                <p>1.0 MW</p>
            </div>
            <!-- 10 -->
            <div style="position: absolute; top:625px ; left:210px; color:#0000FF; font:600; font-size: 14px; text-align: center;">
                <p>-89.6 kVAR</p>
                <!-- <p>1.0 MW</p>     -->
            </div>
            <!-- 11 -->
            <div style="position: absolute; top:605px ; left:400px; color:#0000FF; font:600; font-size: 14px; text-align: center;">
                <p>1463.6.6 A</p>
                <p>1029.7 kW</p>
            </div>

            <!-- arrow 1 -->
            <a href="LT_online.php"><div style="position: absolute; top:730px ; left:340px; color:#0000FF; font:600; font-size: 14px; text-align: center;  cursor: pointer; width: 70px; height: 70px;">
              
            </div>
            </a>
            <!-- arrow 2 -->
            <a href="LT_online.php"><div style="position: absolute; top:730px ; left:655px; color:#0000FF; font:600; font-size: 14px; text-align: center;  cursor: pointer; width: 70px; height: 70px;">
            </div>
            </a>
            <!-- arrow 3 -->
            <a href="LT_online.php"><div style="position: absolute; top:730px ; left:975px; color:#0000FF; font:600; font-size: 14px; text-align: center;  cursor: pointer; width: 70px; height: 70px;">
            </div>
            </a>
            <!-- 12 -->
            <div style="position: absolute; top:605px ; left:730px; color:#0000FF; font:600; font-size: 14px; text-align: center;">
                <p>1418.4 A</p>
                <p>991.0 kW</p>
            </div>
            <!-- 13 -->
            <div style="position: absolute; top:625px ; left:890px; color:#0000FF; font:600; font-size: 14px; text-align: center;">
                <p>-90.4 kVAR</p>
                <!-- <p>1.0 MW</p>     -->
            </div>
            <!-- 14 -->
            <div style="position: absolute; top:605px ; left:1050px; color:#0000FF; font:600; font-size: 14px; text-align: center;">
                <p>1398.1 A</p>
                <p>974.4 kW</p>
            </div>
            <!-- 15 -->
            <div style="position: absolute; top:625px ; left:1265px; color:#0000FF; font:600; font-size: 14px; text-align: center;">
                <p>-44.8 kVAR</p>
                <!-- <p>1.0 MW</p>     -->
            </div>
            <!-- tempurature -->
            <div style="position: absolute; top:490px ; left:1060px; color:#0000FF; font:600; font-size: 14px; text-align: center;">
                <p>48.2 &deg;C</p>
            </div>
            <div style="position: absolute; top:490px ; left:740px; color:#0000FF; font:600; font-size: 14px; text-align: center;">
                <p>51.1 &deg;C</p>
            </div>
            <div style="position: absolute; top:490px ; left:410px; color:#0000FF; font:600; font-size: 14px; text-align: center;">
                <p>49.1 &deg;C</p>
            </div>
            <!-- % -->
            <div style="position: absolute; top:515px ; left:205px; color:#0000FF; font:600; font-size: 14px; text-align: center;">
                <p>95.9 %</p>
            </div>
            <div style="position: absolute; top:515px ; left:875px; color:#0000FF; font:600; font-size: 14px; text-align: center;">
                <p>96.2 %</p>
            </div>
            <div style="position: absolute; top:515px ; left:1255px; color:#0000FF; font:600; font-size: 14px; text-align: center;">
                <p>95.4 %</p>
            </div>
        </div>
    </div>
</body>

</html>