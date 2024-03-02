<!-- solar -->
<a href="../pages/solor_energy.php">
    <div style="height:67px; width:158px; position:absolute; top:618px; left:930px"></div>
    <div style="font-weight: 500 ">
        <p style="color:black; position:absolute; top:638px; left:930px">Capacity</p>
        <p style="color:#0000FF; position:absolute; top:635px; left:1010px; font-size:14px; width:100px">50 MW</p>

        <p style="color:black; position:absolute; top:663px; left:930px">Generation</p>
        <p id="result" style="color:#0000FF; position:absolute; top:660px; left:1010px; font-size:14px; width:100px">48 MW
        </p>
    </div>
</a>
<!-- wind -->
<a href="../pages/wind.php">
    <div style="height:67px; width:158px; position:absolute; top:690px; left:268px"></div>
<div style="font-weight: 500">
    <p style="color:black; position:absolute; top:710px; left:268px">Capacity</p>
    <p style="color:#0000FF; position:absolute; top:707px; left:348px; font-size:14px; width:100px">45 MW</p>

    <p style="color:black; position:absolute; top:740px; left:268px">Generation</p>
    <p id="result1" style="color:#0000FF; position:absolute; top:737px; left:348px; font-size:14px; width:100px">48 MW
    </p>
</div>
</a>
<!-- beverages -->
<div style="font-weight: 500">
    <p style="color:black; position:absolute; top:350px; left:955px">Capacity</p>
    <p style="color:#0000FF; position:absolute; top:348px; left:1035px; font-size:14px; width:100px">100 MW</p>

    <p style="color:black; position:absolute; top:375px; left:955px">Generation</p>
    <p id="result2" style="color:#0000FF; position:absolute; top:373px; left:1035px; font-size:14px; width:100px">92 MW
    </p>
</div>
<!-- paper -->
<div style="font-weight: 500">
    <p style="color:black; position:absolute; top:445px; left:875px">Capacity</p>
    <p style="color:#0000FF; position:absolute; top:443px; left:955px; font-size:14px; width:100px">50 MW</p>

    <p style="color:black; position:absolute; top:470px; left:875px">Generation</p>
    <p id="result3" style="color:#0000FF; position:absolute; top:467px; left:955px; font-size:14px; width:100px">48 MW
    </p>
</div>
<!-- sugar mill -->
<div style="font-weight: 500">
    <p style="color:black; position:absolute; top:145px; left:240px">Capacity</p>
    <p style="color:#0000FF; position:absolute; top:143px; left:320px; font-size:14px; width:100px">150 MW</p>

    <p style="color:black; position:absolute; top:173px; left:240px">Generation</p>
    <p id="result4" style="color:#0000FF; position:absolute; top:171px; left:320px; font-size:14px; width:100px">48 MW
    </p>
</div>
<!-- power plant -->
<div style="font-weight: 500">
    <p style="color:black; position:absolute; top:85px; left:1060px">Capacity</p>
    <p style="color:#0000FF; position:absolute; top:82px; left:1140px; font-size:14px; width:100px">150 MW</p>

    <p style="color:black; position:absolute; top:115px; left:1060px">Generation</p>
    <p id="result5" style="color:#0000FF; position:absolute; top:112px; left:1140px; font-size:14px; width:100px">48 MW
    </p>
</div>
<script>
    // Function to update the result
    function updateResult() {
        // Get a random number between 45 and 53
        let randomValue = Math.floor(Math.random() * (48 - 40 + 1)) + 40;
        let randomValue1 = Math.floor(Math.random() * (44 - 40 + 1)) + 37;
        let randomValue2 = Math.floor(Math.random() * (98 - 90 + 1)) + 90;
        let randomValue3 = Math.floor(Math.random() * (48 - 40 + 1)) + 39;
        let randomValue4 = Math.floor(Math.random() * (148 - 140 + 1)) + 140;
        let randomValue5 = Math.floor(Math.random() * (148 - 140 + 1)) + 140;

        // Add the random value to 50 MW
        let result = 0 + randomValue;
        let result1 = 0 + randomValue1;
        let result2 = 0 + randomValue2;
        let result3 = 0 + randomValue3;
        let result4 = 0 + randomValue4;
        let result5 = 0 + randomValue5;

        // Get the HTML element by ID
        let resultElement = document.getElementById("result");
        let resultElement1 = document.getElementById("result1");
        let resultElement2 = document.getElementById("result2");
        let resultElement3 = document.getElementById("result3");
        let resultElement4 = document.getElementById("result4");
        let resultElement5 = document.getElementById("result5");

        // Set the content of the element to the result
        resultElement.textContent = result + " MW";
        resultElement1.textContent = result1 + " MW";
        resultElement2.textContent = result2 + " MW";
        resultElement3.textContent = result3 + " MW";
        resultElement4.textContent = result4 + " MW";
        resultElement5.textContent = result5 + " MW";
    }

    // Update the result every 2000 milliseconds (2 seconds)
    setInterval(updateResult, 1000);

    // Initial update
    updateResult();
</script>