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
        include('../components/sidebar_trend.php');
        ?>
        <div class="map_div" style="position: relative;">
            <h2 class="h2">TRENDS</h2>
        </div>
    </div>
</body>


</html>