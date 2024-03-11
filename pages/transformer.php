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
            <h2 class="h2">Transformer Monitoring</h2>

            <a href="./areal_view.php"><img class="applicationLogo" src="../images/back.png" width="60px" style="position: absolute;right:10px; top:10px"></a>
            <img class="applicationLogo" src="../images/transformer.png" style="margin-left:180px; margin-top:40px" alt="" onContextMenu="return false;" style="pointer-events: none">
            <!-- <img class="applicationLogo" src="../images/meter.jpg" style="position: absolute;left:580px; top:60px"> -->
            <!-- primary -->
            <div style="position:absolute; top:120px; left:535px;color:#0000FF;display: flex;">
                <p>26.08&#160;A</p>
                <p style="padding-left:15px;">11.29&#160;kV</p>
            </div>
            <div style="position:absolute; top:120px; left:690px;color:#0000FF;display: flex;">
                <p>25.82&#160;A</p>
                <p style="padding-left:15px;">11.30&#160;kV</p>
            </div>
            <div style="position:absolute; top:120px; left:830px;color:#0000FF;display: flex;">
                <p>24.63&#160;A</p>
                <p style="padding-left:15px;">11.30&#160;kV</p>
            </div>
            <!-- secondary -->
            <div style="position:absolute; top:160px; left:535px;color:#0000FF;display: flex;">
                <p>0.71&#160;kA</p>
                <p style="padding-left:15px;">419.74&#160;V</p>
            </div>
            <div style="position:absolute; top:160px; left:690px;color:#0000FF;display: flex;">
                <p>0.66&#160;kA</p>
                <p style="padding-left:15px;">419.99&#160;V</p>
            </div>
            <div style="position:absolute; top:160px; left:830px;color:#0000FF;display: flex;">
                <p>0.65&#160;kA</p>
                <p style="padding-left:15px;">419.18&#160;V</p>
            </div>
            <!-- calculated loss -->
            <div style="position:absolute; top:212px; left:555px;color:#0000FF;display: flex;">
                <p>1.02</p>
                <p style="padding-left:5px;">%</p>
            </div>
            <!-- tempurature -->
            <div style="position:absolute; top:423px; left:920px;color:#0000FF;display: flex;">
                <p id="result">35.30</p>
                <p style="padding-left:5px;">&deg;C</p>
            </div>
            <!-- transformer serial number -->
            <div style="position:absolute; top:581px; left:720px;color:#0000FF;display: flex; font-size: 15px;">
                <b><p>21900096</p></b>
            </div>
            <!-- transformer -->
            <div style="position:absolute; top:629px; left:290px;color:green;display: flex; font-size: 14px;">
                <b><p>TSUN&#160;6341</p></b>
            </div>
             <!-- Rated Power -->
             <div style="position:absolute; top:629px; left:495px;color:green;display: flex; font-size: 14px;">
                <b><p>1000&#160;kVA</p></b>
            </div>
             <!-- Rated Frequency -->
             <div style="position:absolute; top:629px; left:715px;color:green;display: flex; font-size: 14px;">
                <b><p>50&#160;Hz</p></b>
            </div>
            <!-- Rated&#160;Voltage -->
            <div style="position:absolute; top:629px; left:980px;color:green;display: flex; font-size: 14px;">
                <b><p>11&#160;kV</p></b>
                <b><p style="margin-left: 120px;">415&#160;kV</p></b>
            </div>
            <!-- <img class="applicationLogo" src="../images/meter.png" width="100px" style="position: absolute;left:880px; top:50px"> -->
            <!-- <div style="position:absolute; top:440px; left:875px;color:black;width:180px">
                <p style="padding-bottom:1px;">Power Flow</p>
                <p style="padding-bottom:1px;">Voltage</p>
                <p style="padding-bottom:1px;">Current</p>
                <p style="padding-bottom:1px;">Frequency</p>
               
            </div>
            <div style="position:absolute; top:440px; left:975px;color:#0000FF;width:80px">
                <p style="padding-bottom:1px;">48 MW</p>
                <p style="padding-bottom:1px;">3.6&#160;kV</p>
                <p style="padding-bottom:1px;">0.5&#160;kA</p>
                <p style="padding-bottom:1px;">59.8&#160;Hz</p>
               
            </div> -->

        </div>
    </div>
    <script>
    // Function to update the result
    function updateResult() {
        // Get a random number between 45 and 53
        let randomValue = Math.random() * (35.90 - 35.12) + 35.12;

        // Add the random value to 50 MW
        let result = (0 + randomValue).toFixed(1);

        // Get the HTML element by ID
        let resultElement = document.getElementById("result");

        // Set the content of the element to the result
        resultElement.textContent = result;
    }

    // Update the result every 2000 milliseconds (2 seconds)
    setInterval(updateResult, 2000);

    // Initial update
    updateResult();
</script>
</body>

</html>