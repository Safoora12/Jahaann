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
        <div class="map_div">
            <h2 class="h2">Solor Energy Plant</h2>

            <img class="applicationLogo" src="../images/solor.png" height="500px" width="auto">
        </div>
    </div>
</body>

</html>