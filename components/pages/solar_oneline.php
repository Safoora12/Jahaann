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
             
           
            <h2 class="h2">Solar Plant Single Line Diagram</h2>
            <a href="./areal_view.php"><img class="applicationLogo" src="../images/back.png" width="60px" style="position: absolute;right:10px; top:10px"></a>
            <!-- <img class="applicationLogo" src="../images/mall_sld.png"> -->
            <center><img src="../images/work.gif" alt="" width="350px" style="margin-top: 150px;"></center>
            
        </div>
    </div>
</body>
</html>
