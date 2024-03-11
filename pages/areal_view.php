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
            <h2 class="h2">Network Overview</h2>

            <img class="applicationLogo" src="../images/pakistan_map.png" height="750px" width="auto" style="padding-left: 35px;">
            <?php
            include('../components/area_set.php');
            ?>
        </div>
    </div>
</body>


</html>