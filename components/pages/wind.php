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

        .vertical-line {
            border-left: 2px solid #87C1B2;
            height: 220px;
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
            <h2 class="h2">Wind Power Generation Overview</h2>
            <!-- Setting points below -->
            <a href="./areal_view.php"><img class="applicationLogo" src="../images/back.png" width="60px" style="position: absolute;right:10px; top:10px"></a>
            <div style="position:absolute; top:351px; left:183px;color:black;width:200px">
            <p style="padding-bottom:1px; font-size:14px; font-weight: 600;">Wind Mill 1</p>
                <p style="padding-bottom:1px;">Capacity</p>
                <p style="padding-bottom:1px;">Generation</p>
                <p style="padding-bottom:1px;">Voltage</p>
                <p style="padding-bottom:1px;">Current</p>
                <p style="padding-bottom:1px;">Status</p>
                <p style="padding-bottom:1px;">Effeciency</p>
                <p style="padding-bottom:1px;">Running Hours</p>
            </div>
            <div style="position:absolute; top:351px; left:273px;color:#0000FF;width:180px">
            <p style="padding-bottom:22px;"></p>
                <p style="padding-bottom:1px;">3.6 MW</p>
                <p style="padding-bottom:1px;">3.24 MW</p>
                <p style="padding-bottom:1px;">11 kV</p>
                <p style="padding-bottom:1px;">1166 A</p>
                <p style="padding-bottom:1px; color: green">Running</p>
                <p style="padding-bottom:1px;">90 %</p>
                <p style="padding-bottom:1px;" id="counter">00:00:00</p>
            </div>
            <div style="position:absolute; top:437px; left:380px;color:black;width:200px">
                <p style="padding-bottom:1px; font-size:14px; font-weight: 600;">Wind Mill 2</p>
                <p style="padding-bottom:1px;">Capacity</p>
                <p style="padding-bottom:1px;">Generation</p>
                <p style="padding-bottom:1px;">Voltage</p>
                <p style="padding-bottom:1px;">Current</p>
                <p style="padding-bottom:1px;">Status</p>
                <p style="padding-bottom:1px;">Effeciency</p>
                <p style="padding-bottom:1px;">Running Hours</p>
            </div>
            <div style="position:absolute; top:437px; left:479px;color:#0000FF;width:180px">
                <p style="padding-bottom:22px;"></p>
                <p style="padding-bottom:1px;">3.6 MW</p>
                <p style="padding-bottom:1px;">3.06 MW</p>
                <p style="padding-bottom:1px;">10.6 kV</p>
                <p style="padding-bottom:1px;">1166 A</p>
                <p style="padding-bottom:1px; color: green">Running</p>
                <p style="padding-bottom:1px; color: red">85 %</p>
                <p style="padding-bottom:1px;" id="counter1">00:00:00</p>
            </div>

            <div style="position:absolute; top:40px; left:845px;color:black;width:180px">
                <p style="padding-bottom:1px; font-size:14px; font-weight: 600;">Wind Power Transmission</p>
                <p style="padding-bottom:1px;">Power Flow</p>
                <p style="padding-bottom:1px;">Voltage</p>
                <p style="padding-bottom:1px;">Current</p>
                <p style="padding-bottom:1px;">Frequency</p>
                <p style="padding-bottom:1px;">V Unbalance</p>

            </div>
            <div style="position:absolute; top:40px; left:965px;color:#0000FF;width:180px">
                <p style="padding-bottom:22px;"></p>
                <p style="padding-bottom:1px;">6.3 MW</p>
                <p style="padding-bottom:1px;">10.8 kV</p>
                <p style="padding-bottom:1px;">1166 A</p>
                <p style="padding-bottom:1px;">49.8 Hz</p>
                <p style="padding-bottom:1px;">0.4 V</p>
            </div>
            <div style="position:absolute; top:220px; left:22px;color:black;width:180px">
                <p style="padding-bottom:2px;">Wind Speed</p>
                <p style="padding-bottom:2px;">Wind Direction</p>
                <p style="padding-bottom:2px;">Air Temperature</p>
            </div>
            <div style="position:absolute;  top:220px; left:133px;color:#0000FF;width:180px">
                <p style="padding-bottom:2px;">4 kts</p>
                <p style="padding-bottom:2px;">N / 10°</p>
                <p style="padding-bottom:2px;">26 &deg;C</p>
            </div>
            <div class="vertical-line" style="position: absolute;left:760px; top:59px;"></div>
            <div class="vertical-line" style="height:120px;position: absolute;left:430px; top:329px;transform:rotate(-65deg)"></div>
            <img class="applicationLogo" src="../images/meter4.png" style=" position: absolute;left:700px; top:53px;">
            <img class="applicationLogo" src="../images/Wind_turbin.png" width="auto" height="300px" style="position: absolute;left:241px; top:85px;">
            <img class="applicationLogo" src="../images/Wind_turbin.png" width="auto" height="300px" style="position: absolute;left:416px; top:164px;">
            <img class="applicationLogo" src="../images/windd.png" style="margin-top: 30px;">
            <!-- <img class="applicationLogo" src="../images/meter.png" style="width: 100px; position: absolute;left:764px; top:540px;"> -->
        </div>
    </div>
    <script>
    function getCurrentTime() {
        const now = new Date();
        return {
            hours: now.getHours(),
            minutes: now.getMinutes(),
            seconds: now.getSeconds()
        };
    }

    function resetTimer() {
        // Reset the timer to 00:00:00
        seconds = 0;
        minutes = 0;
        hours = 0;

        // Update the counter element
        updateCounter();
    }

    // Function to update the counter
    function updateCounter() {
        seconds++;

        if (seconds === 60) {
            seconds = 0;
            minutes++;

            if (minutes === 60) {
                minutes = 0;
                hours++;
            }
        }

        // Format the time
        const formattedTime = `${String(hours).padStart(2, '0')}:${String(minutes).padStart(2, '0')}:${String(seconds).padStart(2, '0')}`;

        // Update the counter element
        document.getElementById('counter').innerText = formattedTime;
        document.getElementById('counter1').innerText = formattedTime;

        // Save the elapsed time to localStorage
        localStorage.setItem('seconds', seconds);
        localStorage.setItem('minutes', minutes);
        localStorage.setItem('hours', hours);

        // Check if it's 7 am to reset the timer
        const currentTime = getCurrentTime();
        if (currentTime.hours === 7 && currentTime.minutes === 0 && currentTime.seconds === 0) {
            resetTimer();
        }
    }

    // Restore previous timer values from localStorage
    seconds = parseInt(localStorage.getItem('seconds')) || 0;
    minutes = parseInt(localStorage.getItem('minutes')) || 0;
    hours = parseInt(localStorage.getItem('hours')) || 0;

    // Update the counter every second
    setInterval(updateCounter, 1000);
</script>
</body>

</html>