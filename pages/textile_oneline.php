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

            <h2 style="position: absolute; left:600px" class="h2">Textile Industry Single Line Diagram</h2>
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
        </div>
    </div>
</body>

</html>