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

            <h2 class="h2">One Line Diagram</h2>
            <a href="./areal_view.php"><img class="applicationLogo" src="../images/back.jpg" width="60px" style="position: absolute;right:10px; top:10px"></a>
            <img class="applicationLogo" src="../images/naubahar.png" height="750px" width="auto" style="padding-left: 35px;">
         
      
        </div>
    </div>
</body>

</html>