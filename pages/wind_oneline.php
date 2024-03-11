<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        .body {
            background-color: #ebebeb;
        }

        .vertical-line {
            border-left: 2px solid #87C1B2;
            height: 210px;
            /* Adjust the height as needed */
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
            <h2 class="h2">Wind One Line</h2>
            <!-- Setting points below -->
            <a href="./areal_view.php"><img class="applicationLogo" src="../images/back.png" width="60px" style="position: absolute;right:30px; top:30px"></a>
                 
    </div>
</body>

</html>