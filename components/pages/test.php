<?php 
$results = array(
    array("id" => "v_result", "min" => 30, "max" => 40, "refresh" => 5000),
    array("id" => "a_result", "min" => 80, "max" => 90, "refresh" => 7000),
    array("id" => "kw_result", "min" => 120, "max" => 140, "refresh" => 10000)
);
?>
<div id="v_result"></div>
<div id="a_result"></div>
<div id="kw_result"></div>
<script>
function updateResult(min, max, resultElementId) {
    // Get a random number between min and max for v_result and a_result
    let randomValue = (resultElementId === 'kw_result') ? null : Math.random() * (max - min) + min;

    // Get the HTML element by ID
    let resultElement = document.getElementById(resultElementId);

    // If kw_result, increment value by 0.2 until max is reached, then reset to min
    if (resultElementId === 'kw_result') {
        // Get the current value from the element
        let currentValue = parseFloat(resultElement.textContent);

        // If the current value is less than max, add 0.2 to it; otherwise, reset to min
        let newValue = currentValue < max ? currentValue + 0.2 : min;

        // Set the content of the element to the new value
        resultElement.textContent = newValue.toFixed(2); // Display with 2 decimal places
    } else {
        // For v_result and a_result, set random value
        resultElement.textContent = randomValue.toFixed(2); // Display with 2 decimal places
    }
}

function updateAllResults() {
    <?php foreach ($results as $result) { ?>
        updateResult(<?php echo $result["min"]; ?>, <?php echo $result["max"]; ?>, '<?php echo $result["id"]; ?>');
    <?php } ?>
}

// Update all results according to their refresh rates
<?php foreach ($results as $result) { ?>
    setInterval(function() {
        updateResult(<?php echo $result["min"]; ?>, <?php echo $result["max"]; ?>, '<?php echo $result["id"]; ?>');
    }, <?php echo $result["refresh"]; ?>);
<?php } ?>

// Initial update
updateAllResults();
</script>
