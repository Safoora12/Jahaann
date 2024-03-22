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

    .headingSeletion {
        display: flex;
        justify-content: space-between;
    }

    .select-industry {
        margin-top: 10px;
        margin-right: 25px;
    }

    select {
        padding: 5px 20px;
        border-radius: 10px;
        font-size: 16px !important;
    }

    .tab-content {
        display: none;
        height: 90%;
        width: 100%;
        padding: 20px;
    }

    .tab-content.actives {
        display: block;
    }


    table {
        width: 100%;
        border-collapse: collapse;
    }

    th,
    td {
        border: 1px solid #ddd;
        padding: 8px;
        text-align: center;
    }

    th {
        background-color: #f2f2f2;
    }

    input[type="number"],
    input[type="text"] {
        width: 100%;
        padding: 5px;
        box-sizing: border-box;
        border-radius: 5px;
        border: 1px solid #ccc;
        outline: none;
    }

    .save-btn {
        background-color: #4CAF50;
        color: white;
        padding: 8px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        margin-top: 10px;
    }
    </style>
</head>

<body class="body">
    <?php include('../components/top_hearder.php'); ?>
    <?php include('../components/navbar.php'); ?>
    <div id="main">
        <?php include('../components/sidebar_settings.php'); ?>
        <div class="map_div" style="position: relative;">
            <div class="headingSeletion">
                <h2 class="h2">Configure Meters Params</h2>
                <div class="select-industry">
                    <select id="industry-select">
                        <option value="Null">Select Industry</option>
                        <option value="Sugar">Sugar Mill</option>
                        <option value="Shopping">Shopping Mall</option>
                        <option value="Textile">Textile Industry</option>
                        <option value="Beverages">Beverages Plant</option>
                        <option value="Paper">Paper Mill</option>
                        <option value="Chocolate">Chocolate Factory</option>
                        <option value="Ceramic">Ceramic Industry</option>
                        <option value="Solar">Solar Plant</option>
                        <option value="Wind">Wind Plant</option>
                        <option value="Hydel">Hydel Power Plant</option>
                    </select>
                </div>
            </div>
            <!-- Tab1 -->
            <div class="tab-content" id="sugar-tab">

                <table>
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Meter Name</th>
                            <th>Max Voltage (kV)</th>
                            <th>Min Voltage (kV)</th>
                            <th>Max Current (A)</th>
                            <th>Min Current (A)</th>
                            <th>Max Active Power (MW)</th>
                            <th>Min Active Power (MW)</th>
                            <th>Refresh Rate (sec)</th>
                            <th>Save</th>
                        </tr>
                    </thead>
                    <tbody>
                        <form class="ajax-form" action="sugar_back.php" method="POST">
                            <tr>
                                <td>1</td>
                                <td><input type="text" value="Main" name="meter_name"></td>
                                <td><input type="number" value="0" name="max_voltage"></td>
                                <td><input type="number" value="0" name="min_voltage"></td>
                                <td><input type="number" value="0" name="max_current"></td>
                                <td><input type="number" value="0" name="min_current"></td>
                                <td><input type="number" value="0" name="max_kW"></td>
                                <td><input type="number" value="0" name="min_kW"></td>
                                <td><input type="number" value="0" name="refresh_rate"></td>
                                <td><button class="save-btn" type="submit">Save</button></td>
                            </tr>
                        </form>
                        <form class="ajax-form" action="sugar_back.php" method="POST">
                            <tr>
                                <td>2</td>
                                <td><input type="text" value="Raw Juice Healing" name="meter_name"></td>
                                <td><input type="number" value="0" name="max_voltage"></td>
                                <td><input type="number" value="0" name="min_voltage"></td>
                                <td><input type="number" value="0" name="max_current"></td>
                                <td><input type="number" value="0" name="min_current"></td>
                                <td><input type="number" value="0" name="max_kW"></td>
                                <td><input type="number" value="0" name="min_kW"></td>
                                <td><input type="number" value="0" name="refresh_rate"></td>
                                <td><button class="save-btn" type="submit">Save</button></td>
                            </tr>
                        </form>
                        <form class="ajax-form" action="sugar_back.php" method="POST">
                            <tr>
                                <td>3</td>
                                <td><input type="text" value="Defected Juice Healing" name="meter_name"></td>
                                <td><input type="number" value="0" name="max_voltage"></td>
                                <td><input type="number" value="0" name="min_voltage"></td>
                                <td><input type="number" value="0" name="max_current"></td>
                                <td><input type="number" value="0" name="min_current"></td>
                                <td><input type="number" value="0" name="max_kW"></td>
                                <td><input type="number" value="0" name="min_kW"></td>
                                <td><input type="number" value="0" name="refresh_rate"></td>
                                <td><button class="save-btn" type="submit">Save</button></td>
                            </tr>
                        </form>
                        <form class="ajax-form" action="sugar_back.php" method="POST">
                            <tr>
                                <td>4</td>
                                <td><input type="text" value="Juice Clarification" name="meter_name"></td>
                                <td><input type="number" value="0" name="max_voltage"></td>
                                <td><input type="number" value="0" name="min_voltage"></td>
                                <td><input type="number" value="0" name="max_current"></td>
                                <td><input type="number" value="0" name="min_current"></td>
                                <td><input type="number" value="0" name="max_kW"></td>
                                <td><input type="number" value="0" name="min_kW"></td>
                                <td><input type="number" value="0" name="refresh_rate"></td>
                                <td><button class="save-btn" type="submit">Save</button></td>
                            </tr>
                        </form>
                        <form class="ajax-form" action="sugar_back.php" method="POST">
                            <tr>
                                <td>5</td>
                                <td><input type="text" value="Evaporation" name="meter_name"></td>
                                <td><input type="number" value="0" name="max_voltage"></td>
                                <td><input type="number" value="0" name="min_voltage"></td>
                                <td><input type="number" value="0" name="max_current"></td>
                                <td><input type="number" value="0" name="min_current"></td>
                                <td><input type="number" value="0" name="max_kW"></td>
                                <td><input type="number" value="0" name="min_kW"></td>
                                <td><input type="number" value="0" name="refresh_rate"></td>
                                <td><button class="save-btn" type="submit">Save</button></td>
                            </tr>
                        </form>
                        <form class="ajax-form" action="sugar_back.php" method="POST">
                            <tr>
                                <td>6</td>
                                <td><input type="text" value="Row Crystallization" name="meter_name"></td>
                                <td><input type="number" value="0" name="max_voltage"></td>
                                <td><input type="number" value="0" name="min_voltage"></td>
                                <td><input type="number" value="0" name="max_current"></td>
                                <td><input type="number" value="0" name="min_current"></td>
                                <td><input type="number" value="0" name="max_kW"></td>
                                <td><input type="number" value="0" name="min_kW"></td>
                                <td><input type="number" value="0" name="refresh_rate"></td>
                                <td><button class="save-btn" type="submit">Save</button></td>
                            </tr>
                        </form>
                        <form class="ajax-form" action="sugar_back.php" method="POST">
                            <tr>
                                <td>7</td>
                                <td><input type="text" value="Row Centrifugals" name="meter_name"></td>
                                <td><input type="number" value="0" name="max_voltage"></td>
                                <td><input type="number" value="0" name="min_voltage"></td>
                                <td><input type="number" value="0" name="max_current"></td>
                                <td><input type="number" value="0" name="min_current"></td>
                                <td><input type="number" value="0" name="max_kW"></td>
                                <td><input type="number" value="0" name="min_kW"></td>
                                <td><input type="number" value="0" name="refresh_rate"></td>
                                <td><button class="save-btn" type="submit">Save</button></td>
                            </tr>
                        </form>
                        <form class="ajax-form" action="sugar_back.php" method="POST">
                            <tr>
                                <td>8</td>
                                <td><input type="text" value="Melter" name="meter_name"></td>
                                <td><input type="number" value="0" name="max_voltage"></td>
                                <td><input type="number" value="0" name="min_voltage"></td>
                                <td><input type="number" value="0" name="max_current"></td>
                                <td><input type="number" value="0" name="min_current"></td>
                                <td><input type="number" value="0" name="max_kW"></td>
                                <td><input type="number" value="0" name="min_kW"></td>
                                <td><input type="number" value="0" name="refresh_rate"></td>
                                <td><button class="save-btn" type="submit">Save</button></td>
                            </tr>
                        </form>
                        <form class="ajax-form" action="sugar_back.php" method="POST">
                            <tr>
                                <td>9</td>
                                <td><input type="text" value="Melt Clarification" name="meter_name"></td>
                                <td><input type="number" value="0" name="max_voltage"></td>
                                <td><input type="number" value="0" name="min_voltage"></td>
                                <td><input type="number" value="0" name="max_current"></td>
                                <td><input type="number" value="0" name="min_current"></td>
                                <td><input type="number" value="0" name="max_kW"></td>
                                <td><input type="number" value="0" name="min_kW"></td>
                                <td><input type="number" value="0" name="refresh_rate"></td>
                                <td><button class="save-btn" type="submit">Save</button></td>
                            </tr>
                        </form>
                        <form class="ajax-form" action="sugar_back.php" method="POST">
                            <tr>
                                <td>10</td>
                                <td><input type="text" value="Melt Filteration" name="meter_name"></td>
                                <td><input type="number" value="0" name="max_voltage"></td>
                                <td><input type="number" value="0" name="min_voltage"></td>
                                <td><input type="number" value="0" name="max_current"></td>
                                <td><input type="number" value="0" name="min_current"></td>
                                <td><input type="number" value="0" name="max_kW"></td>
                                <td><input type="number" value="0" name="min_kW"></td>
                                <td><input type="number" value="0" name="refresh_rate"></td>
                                <td><button class="save-btn" type="submit">Save</button></td>
                            </tr>
                        </form>
                        <form class="ajax-form" action="sugar_back.php" method="POST">
                            <tr>
                                <td>11</td>
                                <td><input type="text" value="Melt Decolourization" name="meter_name"></td>
                                <td><input type="number" value="0" name="max_voltage"></td>
                                <td><input type="number" value="0" name="min_voltage"></td>
                                <td><input type="number" value="0" name="max_current"></td>
                                <td><input type="number" value="0" name="min_current"></td>
                                <td><input type="number" value="0" name="max_kW"></td>
                                <td><input type="number" value="0" name="min_kW"></td>
                                <td><input type="number" value="0" name="refresh_rate"></td>
                                <td><button class="save-btn" type="submit">Save</button></td>
                            </tr>
                        </form>
                        <form class="ajax-form" action="sugar_back.php" method="POST">
                            <tr>
                                <td>12</td>
                                <td><input type="text" value="Refined Crystallization" name="meter_name"></td>
                                <td><input type="number" value="0" name="max_voltage"></td>
                                <td><input type="number" value="0" name="min_voltage"></td>
                                <td><input type="number" value="0" name="max_current"></td>
                                <td><input type="number" value="0" name="min_current"></td>
                                <td><input type="number" value="0" name="max_kW"></td>
                                <td><input type="number" value="0" name="min_kW"></td>
                                <td><input type="number" value="0" name="refresh_rate"></td>
                                <td><button class="save-btn" type="submit">Save</button></td>
                            </tr>
                        </form>
                        <form class="ajax-form" action="sugar_back.php" method="POST">
                            <tr>
                                <td>13</td>
                                <td><input type="text" value="Refined Centrifugals" name="meter_name"></td>
                                <td><input type="number" value="0" name="max_voltage"></td>
                                <td><input type="number" value="0" name="min_voltage"></td>
                                <td><input type="number" value="0" name="max_current"></td>
                                <td><input type="number" value="0" name="min_current"></td>
                                <td><input type="number" value="0" name="max_kW"></td>
                                <td><input type="number" value="0" name="min_kW"></td>
                                <td><input type="number" value="0" name="refresh_rate"></td>
                                <td><button class="save-btn" type="submit">Save</button></td>
                            </tr>
                        </form>

                        <!-- Add more rows if needed -->
                    </tbody>
                </table>
            </div>
            <!-- Tab2 -->
            <div class="tab-content" id="shopping-tab">

                <table>
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Meter Name</th>
                            <th>Max Voltage (kV)</th>
                            <th>Min Voltage (kV)</th>
                            <th>Max Current (A)</th>
                            <th>Min Current (A)</th>
                            <th>Max Active Power (MW)</th>
                            <th>Min Active Power (MW)</th>
                            <th>Refresh Rate (sec)</th>
                            <th>Save</th>
                        </tr>
                    </thead>
                    <tbody>
                    <form class="ajax-form" action="shopping_back.php" method="POST">
                            <tr>
                                <td>1</td>
                                <td><input type="text" value="Main" name="meter_name"></td>
                                <td><input type="number" value="0" name="max_voltage"></td>
                                <td><input type="number" value="0" name="min_voltage"></td>
                                <td><input type="number" value="0" name="max_current"></td>
                                <td><input type="number" value="0" name="min_current"></td>
                                <td><input type="number" value="0" name="max_kW"></td>
                                <td><input type="number" value="0" name="min_kW"></td>
                                <td><input type="number" value="0" name="refresh_rate"></td>
                                <td><button class="save-btn" type="submit">Save</button></td>
                            </tr>
                        </form>
                        <form class="ajax-form" action="shopping_back.php" method="POST">
                            <tr>
                                <td>2</td>
                                <td><input type="text" value="Clothing Shops" name="meter_name"></td>
                                <td><input type="number" value="0" name="max_voltage"></td>
                                <td><input type="number" value="0" name="min_voltage"></td>
                                <td><input type="number" value="0" name="max_current"></td>
                                <td><input type="number" value="0" name="min_current"></td>
                                <td><input type="number" value="0" name="max_kW"></td>
                                <td><input type="number" value="0" name="min_kW"></td>
                                <td><input type="number" value="0" name="refresh_rate"></td>
                                <td><button class="save-btn" type="submit">Save</button></td>
                            </tr>
                        </form>
                        <form class="ajax-form" action="shopping_back.php" method="POST">
                            <tr>
                                <td>3</td>
                                <td><input type="text" value="Carrefour" name="meter_name"></td>
                                <td><input type="number" value="0" name="max_voltage"></td>
                                <td><input type="number" value="0" name="min_voltage"></td>
                                <td><input type="number" value="0" name="max_current"></td>
                                <td><input type="number" value="0" name="min_current"></td>
                                <td><input type="number" value="0" name="max_kW"></td>
                                <td><input type="number" value="0" name="min_kW"></td>
                                <td><input type="number" value="0" name="refresh_rate"></td>
                                <td><button class="save-btn" type="submit">Save</button></td>
                            </tr>
                        </form>
                        <form class="ajax-form" action="shopping_back.php" method="POST">
                            <tr>
                                <td>4</td>
                                <td><input type="text" value="Crockery Shops" name="meter_name"></td>
                                <td><input type="number" value="0" name="max_voltage"></td>
                                <td><input type="number" value="0" name="min_voltage"></td>
                                <td><input type="number" value="0" name="max_current"></td>
                                <td><input type="number" value="0" name="min_current"></td>
                                <td><input type="number" value="0" name="max_kW"></td>
                                <td><input type="number" value="0" name="min_kW"></td>
                                <td><input type="number" value="0" name="refresh_rate"></td>
                                <td><button class="save-btn" type="submit">Save</button></td>
                            </tr>
                        </form>
                        <form class="ajax-form" action="shopping_back.php" method="POST">
                            <tr>
                                <td>5</td>
                                <td><input type="text" value="1st-Floor CAM" name="meter_name"></td>
                                <td><input type="number" value="0" name="max_voltage"></td>
                                <td><input type="number" value="0" name="min_voltage"></td>
                                <td><input type="number" value="0" name="max_current"></td>
                                <td><input type="number" value="0" name="min_current"></td>
                                <td><input type="number" value="0" name="max_kW"></td>
                                <td><input type="number" value="0" name="min_kW"></td>
                                <td><input type="number" value="0" name="refresh_rate"></td>
                                <td><button class="save-btn" type="submit">Save</button></td>
                            </tr>
                        </form>
                        <form class="ajax-form" action="shopping_back.php" method="POST">
                            <tr>
                                <td>6</td>
                                <td><input type="text" value="Fashion Accessories" name="meter_name"></td>
                                <td><input type="number" value="0" name="max_voltage"></td>
                                <td><input type="number" value="0" name="min_voltage"></td>
                                <td><input type="number" value="0" name="max_current"></td>
                                <td><input type="number" value="0" name="min_current"></td>
                                <td><input type="number" value="0" name="max_kW"></td>
                                <td><input type="number" value="0" name="min_kW"></td>
                                <td><input type="number" value="0" name="refresh_rate"></td>
                                <td><button class="save-btn" type="submit">Save</button></td>
                            </tr>
                        </form>
                        <form class="ajax-form" action="shopping_back.php" method="POST">
                            <tr>
                                <td>7</td>
                                <td><input type="text" value="Offices" name="meter_name"></td>
                                <td><input type="number" value="0" name="max_voltage"></td>
                                <td><input type="number" value="0" name="min_voltage"></td>
                                <td><input type="number" value="0" name="max_current"></td>
                                <td><input type="number" value="0" name="min_current"></td>
                                <td><input type="number" value="0" name="max_kW"></td>
                                <td><input type="number" value="0" name="min_kW"></td>
                                <td><input type="number" value="0" name="refresh_rate"></td>
                                <td><button class="save-btn" type="submit">Save</button></td>
                            </tr>
                        </form>
                        <form class="ajax-form" action="shopping_back.php" method="POST">
                            <tr>
                                <td>8</td>
                                <td><input type="text" value="2nd-Floor CAM" name="meter_name"></td>
                                <td><input type="number" value="0" name="max_voltage"></td>
                                <td><input type="number" value="0" name="min_voltage"></td>
                                <td><input type="number" value="0" name="max_current"></td>
                                <td><input type="number" value="0" name="min_current"></td>
                                <td><input type="number" value="0" name="max_kW"></td>
                                <td><input type="number" value="0" name="min_kW"></td>
                                <td><input type="number" value="0" name="refresh_rate"></td>
                                <td><button class="save-btn" type="submit">Save</button></td>
                            </tr>
                        </form>
                        <form class="ajax-form" action="shopping_back.php" method="POST">
                            <tr>
                                <td>9</td>
                                <td><input type="text" value="Food Court" name="meter_name"></td>
                                <td><input type="number" value="0" name="max_voltage"></td>
                                <td><input type="number" value="0" name="min_voltage"></td>
                                <td><input type="number" value="0" name="max_current"></td>
                                <td><input type="number" value="0" name="min_current"></td>
                                <td><input type="number" value="0" name="max_kW"></td>
                                <td><input type="number" value="0" name="min_kW"></td>
                                <td><input type="number" value="0" name="refresh_rate"></td>
                                <td><button class="save-btn" type="submit">Save</button></td>
                            </tr>
                        </form>
                        <form class="ajax-form" action="shopping_back.php" method="POST">
                            <tr>
                                <td>10</td>
                                <td><input type="text" value="Sports & Games" name="meter_name"></td>
                                <td><input type="number" value="0" name="max_voltage"></td>
                                <td><input type="number" value="0" name="min_voltage"></td>
                                <td><input type="number" value="0" name="max_current"></td>
                                <td><input type="number" value="0" name="min_current"></td>
                                <td><input type="number" value="0" name="max_kW"></td>
                                <td><input type="number" value="0" name="min_kW"></td>
                                <td><input type="number" value="0" name="refresh_rate"></td>
                                <td><button class="save-btn" type="submit">Save</button></td>
                            </tr>
                        </form>
                        <form class="ajax-form" action="shopping_back.php" method="POST">
                            <tr>
                                <td>11</td>
                                <td><input type="text" value="Cinema" name="meter_name"></td>
                                <td><input type="number" value="0" name="max_voltage"></td>
                                <td><input type="number" value="0" name="min_voltage"></td>
                                <td><input type="number" value="0" name="max_current"></td>
                                <td><input type="number" value="0" name="min_current"></td>
                                <td><input type="number" value="0" name="max_kW"></td>
                                <td><input type="number" value="0" name="min_kW"></td>
                                <td><input type="number" value="0" name="refresh_rate"></td>
                                <td><button class="save-btn" type="submit">Save</button></td>
                            </tr>
                        </form>
                        <form class="ajax-form" action="shopping_back.php" method="POST">
                            <tr>
                                <td>12</td>
                                <td><input type="text" value="3rd-Floor CAM" name="meter_name"></td>
                                <td><input type="number" value="0" name="max_voltage"></td>
                                <td><input type="number" value="0" name="min_voltage"></td>
                                <td><input type="number" value="0" name="max_current"></td>
                                <td><input type="number" value="0" name="min_current"></td>
                                <td><input type="number" value="0" name="max_kW"></td>
                                <td><input type="number" value="0" name="min_kW"></td>
                                <td><input type="number" value="0" name="refresh_rate"></td>
                                <td><button class="save-btn" type="submit">Save</button></td>
                            </tr>
                        </form>

                        <!-- Add more rows if needed -->
                    </tbody>
                </table>
            </div>
            <!-- Tab3 -->
            <div class="tab-content" id="textile-tab">
                <form class="ajax-form" action="textile_back.php" method="POST">
                    <table>
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Meter Name</th>
                                <th>Max Voltage (kV)</th>
                                <th>Min Voltage (kV)</th>
                                <th>Max Current (A)</th>
                                <th>Min Current (A)</th>
                                <th>Max Active Power (MW)</th>
                                <th>Min Active Power (MW)</th>
                                <th>Refresh Rate (sec)</th>
                                <th>Save</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td><input type="text" value="SS2 Bus Coupler 7 SS2-SS4" name="meter_name"></td>
                                <td><input type="number" value="0" name="max_voltage"></td>
                                <td><input type="number" value="0" name="min_voltage"></td>
                                <td><input type="number" value="0" name="max_current"></td>
                                <td><input type="number" value="0" name="min_current"></td>
                                <td><input type="number" value="0" name="max_kW"></td>
                                <td><input type="number" value="0" name="min_kW"></td>
                                <td><input type="number" value="0" name="refresh_rate"></td>
                                <td><button class="save-btn" type="submit">Save</button></td>
                            </tr>
                </form>
                <form class="ajax-form" action="textile_back.php" method="POST">
                    <tr>
                        <td>2</td>
                        <td><input type="text" value="SS2 Incoming Feeder-14A" name="meter_name"></td>
                        <td><input type="number" value="0" name="max_voltage"></td>
                        <td><input type="number" value="0" name="min_voltage"></td>
                        <td><input type="number" value="0" name="max_current"></td>
                        <td><input type="number" value="0" name="min_current"></td>
                        <td><input type="number" value="0" name="max_kW"></td>
                        <td><input type="number" value="0" name="min_kW"></td>
                        <td><input type="number" value="0" name="refresh_rate"></td>
                        <td><button class="save-btn" type="submit">Save</button></td>
                    </tr>
                </form>
                <form class="ajax-form" action="textile_back.php" method="POST">
                    <tr>
                        <td>3</td>
                        <td><input type="text" value="SS2 Bus Coupler 6" name="meter_name"></td>
                        <td><input type="number" value="0" name="max_voltage"></td>
                        <td><input type="number" value="0" name="min_voltage"></td>
                        <td><input type="number" value="0" name="max_current"></td>
                        <td><input type="number" value="0" name="min_current"></td>
                        <td><input type="number" value="0" name="max_kW"></td>
                        <td><input type="number" value="0" name="min_kW"></td>
                        <td><input type="number" value="0" name="refresh_rate"></td>
                        <td><button class="save-btn" type="submit">Save</button></td>
                    </tr>
                </form>
                <form class="ajax-form" action="textile_back.php" method="POST">
                    <tr>
                        <td>4</td>
                        <td><input type="text" value="SS2 Bus Coupler 5" name="meter_name"></td>
                        <td><input type="number" value="0" name="max_voltage"></td>
                        <td><input type="number" value="0" name="min_voltage"></td>
                        <td><input type="number" value="0" name="max_current"></td>
                        <td><input type="number" value="0" name="min_current"></td>
                        <td><input type="number" value="0" name="max_kW"></td>
                        <td><input type="number" value="0" name="min_kW"></td>
                        <td><input type="number" value="0" name="refresh_rate"></td>
                        <td><button class="save-btn" type="submit">Save</button></td>
                    </tr>
                </form>
                <form class="ajax-form" action="textile_back.php" method="POST">
                    <tr>
                        <td>5</td>
                        <td><input type="text" value="SS2 Incoming Feeder 1" name="meter_name"></td>
                        <td><input type="number" value="0" name="max_voltage"></td>
                        <td><input type="number" value="0" name="min_voltage"></td>
                        <td><input type="number" value="0" name="max_current"></td>
                        <td><input type="number" value="0" name="min_current"></td>
                        <td><input type="number" value="0" name="max_kW"></td>
                        <td><input type="number" value="0" name="min_kW"></td>
                        <td><input type="number" value="0" name="refresh_rate"></td>
                        <td><button class="save-btn" type="submit">Save</button></td>
                    </tr>
                </form>
                <form class="ajax-form" action="textile_back.php" method="POST">
                    <tr>
                        <td>6</td>
                        <td><input type="text" value="SS2 Bus Coupler 4 SS2-SS1" name="meter_name"></td>
                        <td><input type="number" value="0" name="max_voltage"></td>
                        <td><input type="number" value="0" name="min_voltage"></td>
                        <td><input type="number" value="0" name="max_current"></td>
                        <td><input type="number" value="0" name="min_current"></td>
                        <td><input type="number" value="0" name="max_kW"></td>
                        <td><input type="number" value="0" name="min_kW"></td>
                        <td><input type="number" value="0" name="refresh_rate"></td>
                        <td><button class="save-btn" type="submit">Save</button></td>
                    </tr>
                </form>
                <form class="ajax-form" action="textile_back.php" method="POST">
                    <tr>
                        <td>7</td>
                        <td><input type="text" value="SS2 OutGoing Trafo 6" name="meter_name"></td>
                        <td><input type="number" value="0" name="max_voltage"></td>
                        <td><input type="number" value="0" name="min_voltage"></td>
                        <td><input type="number" value="0" name="max_current"></td>
                        <td><input type="number" value="0" name="min_current"></td>
                        <td><input type="number" value="0" name="max_kW"></td>
                        <td><input type="number" value="0" name="min_kW"></td>
                        <td><input type="number" value="0" name="refresh_rate"></td>
                        <td><button class="save-btn" type="submit">Save</button></td>
                    </tr>
                </form>
                <form class="ajax-form" action="textile_back.php" method="POST">
                    <tr>
                        <td>8</td>
                        <td><input type="text" value="SS2 OutGoing Trafo 5" name="meter_name"></td>
                        <td><input type="number" value="0" name="max_voltage"></td>
                        <td><input type="number" value="0" name="min_voltage"></td>
                        <td><input type="number" value="0" name="max_current"></td>
                        <td><input type="number" value="0" name="min_current"></td>
                        <td><input type="number" value="0" name="max_kW"></td>
                        <td><input type="number" value="0" name="min_kW"></td>
                        <td><input type="number" value="0" name="refresh_rate"></td>
                        <td><button class="save-btn" type="submit">Save</button></td>
                    </tr>
                </form>
                <form class="ajax-form" action="textile_back.php" method="POST">
                    <tr>
                        <td>9</td>
                        <td><input type="text" value="SS2 OutGoing Trafo 4" name="meter_name"></td>
                        <td><input type="number" value="0" name="max_voltage"></td>
                        <td><input type="number" value="0" name="min_voltage"></td>
                        <td><input type="number" value="0" name="max_current"></td>
                        <td><input type="number" value="0" name="min_current"></td>
                        <td><input type="number" value="0" name="max_kW"></td>
                        <td><input type="number" value="0" name="min_kW"></td>
                        <td><input type="number" value="0" name="refresh_rate"></td>
                        <td><button class="save-btn" type="submit">Save</button></td>
                    </tr>
                </form>
                <form class="ajax-form" action="textile_back.php" method="POST">
                    <tr>
                        <td>10</td>
                        <td><input type="text" value="ACB 3 4000A" name="meter_name"></td>
                        <td><input type="number" value="0" name="max_voltage"></td>
                        <td><input type="number" value="0" name="min_voltage"></td>
                        <td><input type="number" value="0" name="max_current"></td>
                        <td><input type="number" value="0" name="min_current"></td>
                        <td><input type="number" value="0" name="max_kW"></td>
                        <td><input type="number" value="0" name="min_kW"></td>
                        <td><input type="number" value="0" name="refresh_rate"></td>
                        <td><button class="save-btn" type="submit">Save</button></td>
                    </tr>
                </form>
                <form class="ajax-form" action="textile_back.php" method="POST">
                    <tr>
                        <td>11</td>
                        <td><input type="text" value="ACB 2 4000A" name="meter_name"></td>
                        <td><input type="number" value="0" name="max_voltage"></td>
                        <td><input type="number" value="0" name="min_voltage"></td>
                        <td><input type="number" value="0" name="max_current"></td>
                        <td><input type="number" value="0" name="min_current"></td>
                        <td><input type="number" value="0" name="max_kW"></td>
                        <td><input type="number" value="0" name="min_kW"></td>
                        <td><input type="number" value="0" name="refresh_rate"></td>
                        <td><button class="save-btn" type="submit">Save</button></td>
                    </tr>
                </form>
                <form class="ajax-form" action="textile_back.php" method="POST">
                    <tr>
                        <td>12</td>
                        <td><input type="text" value="ACB 1 4000A" name="meter_name"></td>
                        <td><input type="number" value="0" name="max_voltage"></td>
                        <td><input type="number" value="0" name="min_voltage"></td>
                        <td><input type="number" value="0" name="max_current"></td>
                        <td><input type="number" value="0" name="min_current"></td>
                        <td><input type="number" value="0" name="max_kW"></td>
                        <td><input type="number" value="0" name="min_kW"></td>
                        <td><input type="number" value="0" name="refresh_rate"></td>
                        <td><button class="save-btn" type="submit">Save</button></td>
                    </tr>
                </form>

                <!-- Add more rows if needed -->
                </tbody>
                </table>
            </div>
            <!-- Tab4 -->
            <div class="tab-content" id="beverages-tab">

                <form class="ajax-form" action="beverages_back.php" method="POST">
                    <table>
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Meter Name</th>
                                <th>Max Voltage (kV)</th>
                                <th>Min Voltage (kV)</th>
                                <th>Max Current (A)</th>
                                <th>Min Current (A)</th>
                                <th>Max Active Power (MW)</th>
                                <th>Min Active Power (MW)</th>
                                <th>Refresh Rate (sec)</th>
                                <th>Save</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td><input type="text" value="NH3 Compressor 4" name="meter_name"></td>
                                <td><input type="number" value="0" name="max_voltage"></td>
                                <td><input type="number" value="0" name="min_voltage"></td>
                                <td><input type="number" value="0" name="max_current"></td>
                                <td><input type="number" value="0" name="min_current"></td>
                                <td><input type="number" value="0" name="max_kW"></td>
                                <td><input type="number" value="0" name="min_kW"></td>
                                <td><input type="number" value="0" name="refresh_rate"></td>
                                <td><button class="save-btn" type="submit">Save</button></td>
                            </tr>
                </form>
                <form class="ajax-form" action="beverages_back.php" method="POST">
                    <tr>
                        <td>2</td>
                        <td><input type="text" value="NH3 Compressor 8" name="meter_name"></td>
                        <td><input type="number" value="0" name="max_voltage"></td>
                        <td><input type="number" value="0" name="min_voltage"></td>
                        <td><input type="number" value="0" name="max_current"></td>
                        <td><input type="number" value="0" name="min_current"></td>
                        <td><input type="number" value="0" name="max_kW"></td>
                        <td><input type="number" value="0" name="min_kW"></td>
                        <td><input type="number" value="0" name="refresh_rate"></td>
                        <td><button class="save-btn" type="submit">Save</button></td>
                    </tr>
                </form>
                <form class="ajax-form" action="beverages_back.php" method="POST">
                    <tr>
                        <td>3</td>
                        <td><input type="text" value="Juice Line" name="meter_name"></td>
                        <td><input type="number" value="0" name="max_voltage"></td>
                        <td><input type="number" value="0" name="min_voltage"></td>
                        <td><input type="number" value="0" name="max_current"></td>
                        <td><input type="number" value="0" name="min_current"></td>
                        <td><input type="number" value="0" name="max_kW"></td>
                        <td><input type="number" value="0" name="min_kW"></td>
                        <td><input type="number" value="0" name="refresh_rate"></td>
                        <td><button class="save-btn" type="submit">Save</button></td>
                    </tr>
                </form>
                <form class="ajax-form" action="beverages_back.php" method="POST">
                    <tr>
                        <td>4</td>
                        <td><input type="text" value="Blowing Machine C10" name="meter_name"></td>
                        <td><input type="number" value="0" name="max_voltage"></td>
                        <td><input type="number" value="0" name="min_voltage"></td>
                        <td><input type="number" value="0" name="max_current"></td>
                        <td><input type="number" value="0" name="min_current"></td>
                        <td><input type="number" value="0" name="max_kW"></td>
                        <td><input type="number" value="0" name="min_kW"></td>
                        <td><input type="number" value="0" name="refresh_rate"></td>
                        <td><button class="save-btn" type="submit">Save</button></td>
                    </tr>
                </form>
                <form class="ajax-form" action="beverages_back.php" method="POST">
                    <tr>
                        <td>5</td>
                        <td><input type="text" value="Syrup Room 3" name="meter_name"></td>
                        <td><input type="number" value="0" name="max_voltage"></td>
                        <td><input type="number" value="0" name="min_voltage"></td>
                        <td><input type="number" value="0" name="max_current"></td>
                        <td><input type="number" value="0" name="min_current"></td>
                        <td><input type="number" value="0" name="max_kW"></td>
                        <td><input type="number" value="0" name="min_kW"></td>
                        <td><input type="number" value="0" name="refresh_rate"></td>
                        <td><button class="save-btn" type="submit">Save</button></td>
                    </tr>
                </form>
                <form class="ajax-form" action="beverages_back.php" method="POST">
                    <tr>
                        <td>6</td>
                        <td><input type="text" value="HP Compressor 4" name="meter_name"></td>
                        <td><input type="number" value="0" name="max_voltage"></td>
                        <td><input type="number" value="0" name="min_voltage"></td>
                        <td><input type="number" value="0" name="max_current"></td>
                        <td><input type="number" value="0" name="min_current"></td>
                        <td><input type="number" value="0" name="max_kW"></td>
                        <td><input type="number" value="0" name="min_kW"></td>
                        <td><input type="number" value="0" name="refresh_rate"></td>
                        <td><button class="save-btn" type="submit">Save</button></td>
                    </tr>
                </form>
                <form class="ajax-form" action="beverages_back.php" method="POST">
                    <tr>
                        <td>7</td>
                        <td><input type="text" value="PET-Line 1Ltr" name="meter_name"></td>
                        <td><input type="number" value="0" name="max_voltage"></td>
                        <td><input type="number" value="0" name="min_voltage"></td>
                        <td><input type="number" value="0" name="max_current"></td>
                        <td><input type="number" value="0" name="min_current"></td>
                        <td><input type="number" value="0" name="max_kW"></td>
                        <td><input type="number" value="0" name="min_kW"></td>
                        <td><input type="number" value="0" name="refresh_rate"></td>
                        <td><button class="save-btn" type="submit">Save</button></td>
                    </tr>
                </form>
                <form class="ajax-form" action="beverages_back.php" method="POST">
                    <tr>
                        <td>8</td>
                        <td><input type="text" value="PET-Line 1Ltr Control" name="meter_name"></td>
                        <td><input type="number" value="0" name="max_voltage"></td>
                        <td><input type="number" value="0" name="min_voltage"></td>
                        <td><input type="number" value="0" name="max_current"></td>
                        <td><input type="number" value="0" name="min_current"></td>
                        <td><input type="number" value="0" name="max_kW"></td>
                        <td><input type="number" value="0" name="min_kW"></td>
                        <td><input type="number" value="0" name="refresh_rate"></td>
                        <td><button class="save-btn" type="submit">Save</button></td>
                    </tr>
                </form>
                <form class="ajax-form" action="beverages_back.php" method="POST">
                    <tr>
                        <td>9</td>
                        <td><input type="text" value="PET-Line 1/2Ltr" name="meter_name"></td>
                        <td><input type="number" value="0" name="max_voltage"></td>
                        <td><input type="number" value="0" name="min_voltage"></td>
                        <td><input type="number" value="0" name="max_current"></td>
                        <td><input type="number" value="0" name="min_current"></td>
                        <td><input type="number" value="0" name="max_kW"></td>
                        <td><input type="number" value="0" name="min_kW"></td>
                        <td><input type="number" value="0" name="refresh_rate"></td>
                        <td><button class="save-btn" type="submit">Save</button></td>
                    </tr>
                </form>
                <form class="ajax-form" action="beverages_back.php" method="POST">
                    <tr>
                        <td>10</td>
                        <td><input type="text" value="Glass Line" name="meter_name"></td>
                        <td><input type="number" value="0" name="max_voltage"></td>
                        <td><input type="number" value="0" name="min_voltage"></td>
                        <td><input type="number" value="0" name="max_current"></td>
                        <td><input type="number" value="0" name="min_current"></td>
                        <td><input type="number" value="0" name="max_kW"></td>
                        <td><input type="number" value="0" name="min_kW"></td>
                        <td><input type="number" value="0" name="refresh_rate"></td>
                        <td><button class="save-btn" type="submit">Save</button></td>
                    </tr>
                </form>
                <form class="ajax-form" action="beverages_back.php" method="POST">
                    <tr>
                        <td>11</td>
                        <td><input type="text" value="Sugar Dissolver" name="meter_name"></td>
                        <td><input type="number" value="0" name="max_voltage"></td>
                        <td><input type="number" value="0" name="min_voltage"></td>
                        <td><input type="number" value="0" name="max_current"></td>
                        <td><input type="number" value="0" name="min_current"></td>
                        <td><input type="number" value="0" name="max_kW"></td>
                        <td><input type="number" value="0" name="min_kW"></td>
                        <td><input type="number" value="0" name="refresh_rate"></td>
                        <td><button class="save-btn" type="submit">Save</button></td>
                    </tr>
                </form>
                <form class="ajax-form" action="beverages_back.php" method="POST">
                    <tr>
                        <td>12</td>
                        <td><input type="text" value="Shrink Tunnel PET-Line" name="meter_name"></td>
                        <td><input type="number" value="0" name="max_voltage"></td>
                        <td><input type="number" value="0" name="min_voltage"></td>
                        <td><input type="number" value="0" name="max_current"></td>
                        <td><input type="number" value="0" name="min_current"></td>
                        <td><input type="number" value="0" name="max_kW"></td>
                        <td><input type="number" value="0" name="min_kW"></td>
                        <td><input type="number" value="0" name="refresh_rate"></td>
                        <td><button class="save-btn" type="submit">Save</button></td>
                    </tr>
                </form>
                <!-- Add more rows if needed -->
                </tbody>
                </table>
            </div>
            <!-- Tab5 -->
            <div class="tab-content" id="paper-tab">
                <form class="ajax-form" action="papaer_back_update.php" method="POST">
                    <table>
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Meter Name</th>
                                <th>Max Voltage (kV)</th>
                                <th>Min Voltage (kV)</th>
                                <th>Max Current (A)</th>
                                <th>Min Current (A)</th>
                                <th>Max Active Power (MW)</th>
                                <th>Min Active Power (MW)</th>
                                <th>Refresh Rate (sec)</th>
                                <th>Save</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td><input type="text" value="T66 Printing LT" name="meter_name"></td>
                                <td><input type="number" value="0" name="max_voltage"></td>
                                <td><input type="number" value="0" name="min_voltage"></td>
                                <td><input type="number" value="0" name="max_current"></td>
                                <td><input type="number" value="0" name="min_current"></td>
                                <td><input type="number" value="0" name="max_kW"></td>
                                <td><input type="number" value="0" name="min_kW"></td>
                                <td><input type="number" value="0" name="refresh_rate"></td>
                                <td><button class="save-btn" type="submit">Save</button></td>
                            </tr>
                </form>
                <form class="ajax-form" action="papaer_back_update.php" method="POST">
                    <tr>
                        <td>2</td>
                        <td><input type="text" value="FNK" name="meter_name"></td>
                        <td><input type="number" value="0" name="max_voltage"></td>
                        <td><input type="number" value="0" name="min_voltage"></td>
                        <td><input type="number" value="0" name="max_current"></td>
                        <td><input type="number" value="0" name="min_current"></td>
                        <td><input type="number" value="0" name="max_kW"></td>
                        <td><input type="number" value="0" name="min_kW"></td>
                        <td><input type="number" value="0" name="refresh_rate"></td>
                        <td><button class="save-btn" type="submit">Save</button></td>
                    </tr>
                </form>
                <form class="ajax-form" action="papaer_back_update.php" method="POST">
                    <tr>
                        <td>3</td>
                        <td><input type="text" value="Miraflex Printing 1" name="meter_name"></td>
                        <td><input type="number" value="0" name="max_voltage"></td>
                        <td><input type="number" value="0" name="min_voltage"></td>
                        <td><input type="number" value="0" name="max_current"></td>
                        <td><input type="number" value="0" name="min_current"></td>
                        <td><input type="number" value="0" name="max_kW"></td>
                        <td><input type="number" value="0" name="min_kW"></td>
                        <td><input type="number" value="0" name="refresh_rate"></td>
                        <td><button class="save-btn" type="submit">Save</button></td>
                    </tr>
                </form>
                <form class="ajax-form" action="papaer_back_update.php" method="POST">
                    <tr>
                        <td>4</td>
                        <td><input type="text" value="Miraflex Printing" name="meter_name"></td>
                        <td><input type="number" value="0" name="max_voltage"></td>
                        <td><input type="number" value="0" name="min_voltage"></td>
                        <td><input type="number" value="0" name="max_current"></td>
                        <td><input type="number" value="0" name="min_current"></td>
                        <td><input type="number" value="0" name="max_kW"></td>
                        <td><input type="number" value="0" name="min_kW"></td>
                        <td><input type="number" value="0" name="refresh_rate"></td>
                        <td><button class="save-btn" type="submit">Save</button></td>
                    </tr>
                </form>
                <form class="ajax-form" action="papaer_back_update.php" method="POST">
                    <tr>
                        <td>5</td>
                        <td><input type="text" value="Printing Heliostar" name="meter_name"></td>
                        <td><input type="number" value="0" name="max_voltage"></td>
                        <td><input type="number" value="0" name="min_voltage"></td>
                        <td><input type="number" value="0" name="max_current"></td>
                        <td><input type="number" value="0" name="min_current"></td>
                        <td><input type="number" value="0" name="max_kW"></td>
                        <td><input type="number" value="0" name="min_kW"></td>
                        <td><input type="number" value="0" name="refresh_rate"></td>
                        <td><button class="save-btn" type="submit">Save</button></td>
                    </tr>
                </form>
                <form class="ajax-form" action="papaer_back_update.php" method="POST">
                    <tr>
                        <td>6</td>
                        <td><input type="text" value="White Cerutti" name="meter_name"></td>
                        <td><input type="number" value="0" name="max_voltage"></td>
                        <td><input type="number" value="0" name="min_voltage"></td>
                        <td><input type="number" value="0" name="max_current"></td>
                        <td><input type="number" value="0" name="min_current"></td>
                        <td><input type="number" value="0" name="max_kW"></td>
                        <td><input type="number" value="0" name="min_kW"></td>
                        <td><input type="number" value="0" name="refresh_rate"></td>
                        <td><button class="save-btn" type="submit">Save</button></td>
                    </tr>
                </form>
                <form class="ajax-form" action="papaer_back_update.php" method="POST">
                    <tr>
                        <td>7</td>
                        <td><input type="text" value="WNH" name="meter_name"></td>
                        <td><input type="number" value="0" name="max_voltage"></td>
                        <td><input type="number" value="0" name="min_voltage"></td>
                        <td><input type="number" value="0" name="max_current"></td>
                        <td><input type="number" value="0" name="min_current"></td>
                        <td><input type="number" value="0" name="max_kW"></td>
                        <td><input type="number" value="0" name="min_kW"></td>
                        <td><input type="number" value="0" name="refresh_rate"></td>
                        <td><button class="save-btn" type="submit">Save</button></td>
                    </tr>
                </form>
                <form class="ajax-form" action="papaer_back_update.php" method="POST">
                    <tr>
                        <td>8</td>
                        <td><input type="text" value="Miraflex Printing" name="meter_name"></td>
                        <td><input type="number" value="0" name="max_voltage"></td>
                        <td><input type="number" value="0" name="min_voltage"></td>
                        <td><input type="number" value="0" name="max_current"></td>
                        <td><input type="number" value="0" name="min_current"></td>
                        <td><input type="number" value="0" name="max_kW"></td>
                        <td><input type="number" value="0" name="min_kW"></td>
                        <td><input type="number" value="0" name="refresh_rate"></td>
                        <td><button class="save-btn" type="submit">Save</button></td>
                    </tr>
                </form>
                <form class="ajax-form" action="papaer_back_update.php" method="POST">
                    <tr>
                        <td>9</td>
                        <td><input type="text" value="Oil Heater 1" name="meter_name"></td>
                        <td><input type="number" value="0" name="max_voltage"></td>
                        <td><input type="number" value="0" name="min_voltage"></td>
                        <td><input type="number" value="0" name="max_current"></td>
                        <td><input type="number" value="0" name="min_current"></td>
                        <td><input type="number" value="0" name="max_kW"></td>
                        <td><input type="number" value="0" name="min_kW"></td>
                        <td><input type="number" value="0" name="refresh_rate"></td>
                        <td><button class="save-btn" type="submit">Save</button></td>
                    </tr>
                </form>
                <form class="ajax-form" action="papaer_back_update.php" method="POST">
                    <tr>
                        <td>10</td>
                        <td><input type="text" value="Oil Heater 2" name="meter_name"></td>
                        <td><input type="number" value="0" name="max_voltage"></td>
                        <td><input type="number" value="0" name="min_voltage"></td>
                        <td><input type="number" value="0" name="max_current"></td>
                        <td><input type="number" value="0" name="min_current"></td>
                        <td><input type="number" value="0" name="max_kW"></td>
                        <td><input type="number" value="0" name="min_kW"></td>
                        <td><input type="number" value="0" name="refresh_rate"></td>
                        <td><button class="save-btn" type="submit">Save</button></td>
                    </tr>
                </form>
                <form class="ajax-form" action="papaer_back_update.php" method="POST">
                    <tr>
                        <td>11</td>
                        <td><input type="text" value="Chiller 1" name="meter_name"></td>
                        <td><input type="number" value="0" name="max_voltage"></td>
                        <td><input type="number" value="0" name="min_voltage"></td>
                        <td><input type="number" value="0" name="max_current"></td>
                        <td><input type="number" value="0" name="min_current"></td>
                        <td><input type="number" value="0" name="max_kW"></td>
                        <td><input type="number" value="0" name="min_kW"></td>
                        <td><input type="number" value="0" name="refresh_rate"></td>
                        <td><button class="save-btn" type="submit">Save</button></td>
                    </tr>
                </form>
                <form class="ajax-form" action="papaer_back_update.php" method="POST">
                    <tr>
                        <td>12</td>
                        <td><input type="text" value="Chiller 2" name="meter_name"></td>
                        <td><input type="number" value="0" name="max_voltage"></td>
                        <td><input type="number" value="0" name="min_voltage"></td>
                        <td><input type="number" value="0" name="max_current"></td>
                        <td><input type="number" value="0" name="min_current"></td>
                        <td><input type="number" value="0" name="max_kW"></td>
                        <td><input type="number" value="0" name="min_kW"></td>
                        <td><input type="number" value="0" name="refresh_rate"></td>
                        <td><button class="save-btn" type="submit">Save</button></td>
                    </tr>
                </form>
                <form class="ajax-form" action="papaer_back_update.php" method="POST">
                    <tr>
                        <td>13</td>
                        <td><input type="text" value="Chiller 3" name="meter_name"></td>
                        <td><input type="number" value="0" name="max_voltage"></td>
                        <td><input type="number" value="0" name="min_voltage"></td>
                        <td><input type="number" value="0" name="max_current"></td>
                        <td><input type="number" value="0" name="min_current"></td>
                        <td><input type="number" value="0" name="max_kW"></td>
                        <td><input type="number" value="0" name="min_kW"></td>
                        <td><input type="number" value="0" name="refresh_rate"></td>
                        <td><button class="save-btn" type="submit">Save</button></td>
                    </tr>
                </form>

                </tbody>
                </table>
            </div>
            <!-- Tab6 -->
            <div class="tab-content" id="chocolate-tab">
                <form class="ajax-form" action="choclate_back.php" method="POST">
                    <table>
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Meter Name</th>
                                <th>Max Voltage (kV)</th>
                                <th>Min Voltage (kV)</th>
                                <th>Max Current (A)</th>
                                <th>Min Current (A)</th>
                                <th>Max Active Power (MW)</th>
                                <th>Min Active Power (MW)</th>
                                <th>Refresh Rate (sec)</th>
                                <th>Save</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td><input type="text" value="2Q1" name="meter_name"></td>
                                <td><input type="number" value="0" name="max_voltage"></td>
                                <td><input type="number" value="0" name="min_voltage"></td>
                                <td><input type="number" value="0" name="max_current"></td>
                                <td><input type="number" value="0" name="min_current"></td>
                                <td><input type="number" value="0" name="max_kW"></td>
                                <td><input type="number" value="0" name="min_kW"></td>
                                <td><input type="number" value="0" name="refresh_rate"></td>
                                <td><button class="save-btn" type="submit">Save</button></td>
                            </tr>
                </form>
                <form class="ajax-form" action="choclate_back.php" method="POST">
                    <tr>
                        <td>2</td>
                        <td><input type="text" value="1Q1" name="meter_name"></td>
                        <td><input type="number" value="0" name="max_voltage"></td>
                        <td><input type="number" value="0" name="min_voltage"></td>
                        <td><input type="number" value="0" name="max_current"></td>
                        <td><input type="number" value="0" name="min_current"></td>
                        <td><input type="number" value="0" name="max_kW"></td>
                        <td><input type="number" value="0" name="min_kW"></td>
                        <td><input type="number" value="0" name="refresh_rate"></td>
                        <td><button class="save-btn" type="submit">Save</button></td>
                    </tr>
                </form>
                <form class="ajax-form" action="choclate_back.php" method="POST">
                    <tr>
                        <td>3</td>
                        <td><input type="text" value="0Q1" name="meter_name"></td>
                        <td><input type="number" value="0" name="max_voltage"></td>
                        <td><input type="number" value="0" name="min_voltage"></td>
                        <td><input type="number" value="0" name="max_current"></td>
                        <td><input type="number" value="0" name="min_current"></td>
                        <td><input type="number" value="0" name="max_kW"></td>
                        <td><input type="number" value="0" name="min_kW"></td>
                        <td><input type="number" value="0" name="refresh_rate"></td>
                        <td><button class="save-btn" type="submit">Save</button></td>
                    </tr>
                </form>
                <form class="ajax-form" action="choclate_back.php" method="POST">
                    <tr>
                        <td>4</td>
                        <td><input type="text" value="Harvesting" name="meter_name"></td>
                        <td><input type="number" value="0" name="max_voltage"></td>
                        <td><input type="number" value="0" name="min_voltage"></td>
                        <td><input type="number" value="0" name="max_current"></td>
                        <td><input type="number" value="0" name="min_current"></td>
                        <td><input type="number" value="0" name="max_kW"></td>
                        <td><input type="number" value="0" name="min_kW"></td>
                        <td><input type="number" value="0" name="refresh_rate"></td>
                        <td><button class="save-btn" type="submit">Save</button></td>
                    </tr>
                </form>
                <form class="ajax-form" action="choclate_back.php" method="POST">
                    <tr>
                        <td>5</td>
                        <td><input type="text" value="Roasting" name="meter_name"></td>
                        <td><input type="number" value="0" name="max_voltage"></td>
                        <td><input type="number" value="0" name="min_voltage"></td>
                        <td><input type="number" value="0" name="max_current"></td>
                        <td><input type="number" value="0" name="min_current"></td>
                        <td><input type="number" value="0" name="max_kW"></td>
                        <td><input type="number" value="0" name="min_kW"></td>
                        <td><input type="number" value="0" name="refresh_rate"></td>
                        <td><button class="save-btn" type="submit">Save</button></td>
                    </tr>
                </form>
                <form class="ajax-form" action="choclate_back.php" method="POST">
                    <tr>
                        <td>6</td>
                        <td><input type="text" value="Grinding" name="meter_name"></td>
                        <td><input type="number" value="0" name="max_voltage"></td>
                        <td><input type="number" value="0" name="min_voltage"></td>
                        <td><input type="number" value="0" name="max_current"></td>
                        <td><input type="number" value="0" name="min_current"></td>
                        <td><input type="number" value="0" name="max_kW"></td>
                        <td><input type="number" value="0" name="min_kW"></td>
                        <td><input type="number" value="0" name="refresh_rate"></td>
                        <td><button class="save-btn" type="submit">Save</button></td>
                    </tr>
                </form>
                <form class="ajax-form" action="choclate_back.php" method="POST">
                    <tr>
                        <td>7</td>
                        <td><input type="text" value="Water" name="meter_name"></td>
                        <td><input type="number" value="0" name="max_voltage"></td>
                        <td><input type="number" value="0" name="min_voltage"></td>
                        <td><input type="number" value="0" name="max_current"></td>
                        <td><input type="number" value="0" name="min_current"></td>
                        <td><input type="number" value="0" name="max_kW"></td>
                        <td><input type="number" value="0" name="min_kW"></td>
                        <td><input type="number" value="0" name="refresh_rate"></td>
                        <td><button class="save-btn" type="submit">Save</button></td>
                    </tr>
                </form>
                <form class="ajax-form" action="choclate_back.php" method="POST">
                    <tr>
                        <td>8</td>

                        <td><input type="text" value="Compressed Air" name="meter_name"></td>
                        <td><input type="number" value="0" name="max_voltage"></td>
                        <td><input type="number" value="0" name="min_voltage"></td>
                        <td><input type="number" value="0" name="max_current"></td>
                        <td><input type="number" value="0" name="min_current"></td>
                        <td><input type="number" value="0" name="max_kW"></td>
                        <td><input type="number" value="0" name="min_kW"></td>
                        <td><input type="number" value="0" name="refresh_rate"></td>
                        <td><button class="save-btn" type="submit">Save</button></td>
                    </tr>
                </form>
                <form class="ajax-form" action="choclate_back.php" method="POST">
                    <tr>
                        <td>9</td>
                        <td><input type="text" value="Hot Water" name="meter_name"></td>
                        <td><input type="number" value="0" name="max_voltage"></td>
                        <td><input type="number" value="0" name="min_voltage"></td>
                        <td><input type="number" value="0" name="max_current"></td>
                        <td><input type="number" value="0" name="min_current"></td>
                        <td><input type="number" value="0" name="max_kW"></td>
                        <td><input type="number" value="0" name="min_kW"></td>
                        <td><input type="number" value="0" name="refresh_rate"></td>
                        <td><button class="save-btn" type="submit">Save</button></td>
                    </tr>
                </form>
                <form class="ajax-form" action="choclate_back.php" method="POST">
                    <tr>
                        <td>10</td>
                        <td><input type="text" value="Refregration" name="meter_name"></td>
                        <td><input type="number" value="0" name="max_voltage"></td>
                        <td><input type="number" value="0" name="min_voltage"></td>
                        <td><input type="number" value="0" name="max_current"></td>
                        <td><input type="number" value="0" name="min_current"></td>
                        <td><input type="number" value="0" name="max_kW"></td>
                        <td><input type="number" value="0" name="min_kW"></td>
                        <td><input type="number" value="0" name="refresh_rate"></td>
                        <td><button class="save-btn" type="submit">Save</button></td>
                    </tr>
                </form>
                <form class="ajax-form" action="choclate_back.php" method="POST">
                    <tr>
                        <td>11</td>
                        <td><input type="text" value="Logistic" name="meter_name"></td>
                        <td><input type="number" value="0" name="max_voltage"></td>
                        <td><input type="number" value="0" name="min_voltage"></td>
                        <td><input type="number" value="0" name="max_current"></td>
                        <td><input type="number" value="0" name="min_current"></td>
                        <td><input type="number" value="0" name="max_kW"></td>
                        <td><input type="number" value="0" name="min_kW"></td>
                        <td><input type="number" value="0" name="refresh_rate"></td>
                        <td><button class="save-btn" type="submit">Save</button></td>
                    </tr>
                </form>
                <form class="ajax-form" action="choclate_back.php" method="POST">
                    <tr>
                        <td>12</td>
                        <td><input type="text" value="Packaging" name="meter_name"></td>
                        <td><input type="number" value="0" name="max_voltage"></td>
                        <td><input type="number" value="0" name="min_voltage"></td>
                        <td><input type="number" value="0" name="max_current"></td>
                        <td><input type="number" value="0" name="min_current"></td>
                        <td><input type="number" value="0" name="max_kW"></td>
                        <td><input type="number" value="0" name="min_kW"></td>
                        <td><input type="number" value="0" name="refresh_rate"></td>
                        <td><button class="save-btn" type="submit">Save</button></td>
                    </tr>
                </form>
                <form class="ajax-form" action="choclate_back.php" method="POST">
                    <tr>
                        <td>13</td>
                        <td><input type="text" value="Mixing" name="meter_name"></td>
                        <td><input type="number" value="0" name="max_voltage"></td>
                        <td><input type="number" value="0" name="min_voltage"></td>
                        <td><input type="number" value="0" name="max_current"></td>
                        <td><input type="number" value="0" name="min_current"></td>
                        <td><input type="number" value="0" name="max_kW"></td>
                        <td><input type="number" value="0" name="min_kW"></td>
                        <td><input type="number" value="0" name="refresh_rate"></td>
                        <td><button class="save-btn" type="submit">Save</button></td>
                    </tr>
                </form>
                <form class="ajax-form" action="choclate_back.php" method="POST">
                    <tr>
                        <td>14</td>
                        <td><input type="text" value="Wafer Preparation" name="meter_name"></td>
                        <td><input type="number" value="0" name="max_voltage"></td>
                        <td><input type="number" value="0" name="min_voltage"></td>
                        <td><input type="number" value="0" name="max_current"></td>
                        <td><input type="number" value="0" name="min_current"></td>
                        <td><input type="number" value="0" name="max_kW"></td>
                        <td><input type="number" value="0" name="min_kW"></td>
                        <td><input type="number" value="0" name="refresh_rate"></td>
                        <td><button class="save-btn" type="submit">Save</button></td>
                    </tr>
                </form>
                <form class="ajax-form" action="choclate_back.php" method="POST">
                    <tr>
                        <td>15</td>
                        <td><input type="text" value="Sugar Dissolving" name="meter_name"></td>
                        <td><input type="number" value="0" name="max_voltage"></td>
                        <td><input type="number" value="0" name="min_voltage"></td>
                        <td><input type="number" value="0" name="max_current"></td>
                        <td><input type="number" value="0" name="min_current"></td>
                        <td><input type="number" value="0" name="max_kW"></td>
                        <td><input type="number" value="0" name="min_kW"></td>
                        <td><input type="number" value="0" name="refresh_rate"></td>
                        <td><button class="save-btn" type="submit">Save</button></td>
                    </tr>
                </form>
                <form class="ajax-form" action="choclate_back.php" method="POST">
                    <tr>
                        <td>16</td>
                        <td><input type="text" value="Syrup Room" name="meter_name"></td>
                        <td><input type="number" value="0" name="max_voltage"></td>
                        <td><input type="number" value="0" name="min_voltage"></td>
                        <td><input type="number" value="0" name="max_current"></td>
                        <td><input type="number" value="0" name="min_current"></td>
                        <td><input type="number" value="0" name="max_kW"></td>
                        <td><input type="number" value="0" name="min_kW"></td>
                        <td><input type="number" value="0" name="refresh_rate"></td>
                        <td><button class="save-btn" type="submit">Save</button></td>
                    </tr>
                </form>

                <!-- Add more rows if needed -->
                </tbody>
                </table>
            </div>
            <!-- Tab7 -->
            <div class="tab-content" id="ceramic-tab">
                <form class="ajax-form" action="ceramic_back.php" method="POST">
                    <table>
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Meter Name</th>
                                <th>Max Voltage (kV)</th>
                                <th>Min Voltage (kV)</th>
                                <th>Max Current (A)</th>
                                <th>Min Current (A)</th>
                                <th>Max Active Power (MW)</th>
                                <th>Min Active Power (MW)</th>
                                <th>Refresh Rate (sec)</th>
                                <th>Save</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td><input type="text" value="Colony D.B" name="meter_name"></td>
                                <td><input type="number" value="0" name="max_voltage"></td>
                                <td><input type="number" value="0" name="min_voltage"></td>
                                <td><input type="number" value="0" name="max_current"></td>
                                <td><input type="number" value="0" name="min_current"></td>
                                <td><input type="number" value="0" name="max_kW"></td>
                                <td><input type="number" value="0" name="min_kW"></td>
                                <td><input type="number" value="0" name="refresh_rate"></td>
                                <td><button class="save-btn" type="submit">Save</button></td>
                            </tr>
                </form>
                <form class="ajax-form" action="ceramic_back.php" method="POST">
                    <tr>
                        <td>2</td>
                        <td><input type="text" value="Light D.B # 01" name="meter_name"></td>
                        <td><input type="number" value="0" name="max_voltage"></td>
                        <td><input type="number" value="0" name="min_voltage"></td>
                        <td><input type="number" value="0" name="max_current"></td>
                        <td><input type="number" value="0" name="min_current"></td>
                        <td><input type="number" value="0" name="max_kW"></td>
                        <td><input type="number" value="0" name="min_kW"></td>
                        <td><input type="number" value="0" name="refresh_rate"></td>
                        <td><button class="save-btn" type="submit">Save</button></td>
                    </tr>
                </form>
                <form class="ajax-form" action="ceramic_back.php" method="POST">
                    <tr>
                        <td>3</td>
                        <td><input type="text" value="Light D.B # 02" name="meter_name"></td>
                        <td><input type="number" value="0" name="max_voltage"></td>
                        <td><input type="number" value="0" name="min_voltage"></td>
                        <td><input type="number" value="0" name="max_current"></td>
                        <td><input type="number" value="0" name="min_current"></td>
                        <td><input type="number" value="0" name="max_kW"></td>
                        <td><input type="number" value="0" name="min_kW"></td>
                        <td><input type="number" value="0" name="refresh_rate"></td>
                        <td><button class="save-btn" type="submit">Save</button></td>
                    </tr>
                </form>
                <form class="ajax-form" action="ceramic_back.php" method="POST">
                    <tr>
                        <td>4</td>
                        <td><input type="text" value="Kiln BlowerFan-(R.V.E)" name="meter_name"></td>
                        <td><input type="number" value="0" name="max_voltage"></td>
                        <td><input type="number" value="0" name="min_voltage"></td>
                        <td><input type="number" value="0" name="max_current"></td>
                        <td><input type="number" value="0" name="min_current"></td>
                        <td><input type="number" value="0" name="max_kW"></td>
                        <td><input type="number" value="0" name="min_kW"></td>
                        <td><input type="number" value="0" name="refresh_rate"></td>
                        <td><button class="save-btn" type="submit">Save</button></td>
                    </tr>
                </form>
                <form class="ajax-form" action="ceramic_back.php" method="POST">
                    <tr>
                        <td>5</td>
                        <td><input type="text" value="Glaze Line-1" name="meter_name"></td>
                        <td><input type="number" value="0" name="max_voltage"></td>
                        <td><input type="number" value="0" name="min_voltage"></td>
                        <td><input type="number" value="0" name="max_current"></td>
                        <td><input type="number" value="0" name="min_current"></td>
                        <td><input type="number" value="0" name="max_kW"></td>
                        <td><input type="number" value="0" name="min_kW"></td>
                        <td><input type="number" value="0" name="refresh_rate"></td>
                        <td><button class="save-btn" type="submit">Save</button></td>
                    </tr>
                </form>
                <form class="ajax-form" action="ceramic_back.php" method="POST">
                    <tr>
                        <td>6</td>
                        <td><input type="text" value="Prekiln 2950*16800 + KilnL" name="meter_name"></td>
                        <td><input type="number" value="0" name="max_voltage"></td>
                        <td><input type="number" value="0" name="min_voltage"></td>
                        <td><input type="number" value="0" name="max_current"></td>
                        <td><input type="number" value="0" name="min_current"></td>
                        <td><input type="number" value="0" name="max_kW"></td>
                        <td><input type="number" value="0" name="min_kW"></td>
                        <td><input type="number" value="0" name="refresh_rate"></td>
                        <td><button class="save-btn" type="submit">Save</button></td>
                    </tr>
                </form>
                <form class="ajax-form" action="ceramic_back.php" method="POST">
                    <tr>
                        <td>7</td>
                        <td><input type="text" value="5 Layer Dryer" name="meter_name"></td>
                        <td><input type="number" value="0" name="max_voltage"></td>
                        <td><input type="number" value="0" name="min_voltage"></td>
                        <td><input type="number" value="0" name="max_current"></td>
                        <td><input type="number" value="0" name="min_current"></td>
                        <td><input type="number" value="0" name="max_kW"></td>
                        <td><input type="number" value="0" name="min_kW"></td>
                        <td><input type="number" value="0" name="refresh_rate"></td>
                        <td><button class="save-btn" type="submit">Save</button></td>
                    </tr>
                </form>
                <form class="ajax-form" action="ceramic_back.php" method="POST">
                    <tr>
                        <td>8</td>
                        <td><input type="text" value="Ball Mills-2" name="meter_name"></td>
                        <td><input type="number" value="0" name="max_voltage"></td>
                        <td><input type="number" value="0" name="min_voltage"></td>
                        <td><input type="number" value="0" name="max_current"></td>
                        <td><input type="number" value="0" name="min_current"></td>
                        <td><input type="number" value="0" name="max_kW"></td>
                        <td><input type="number" value="0" name="min_kW"></td>
                        <td><input type="number" value="0" name="refresh_rate"></td>
                        <td><button class="save-btn" type="submit">Save</button></td>
                    </tr>
                </form>
                <form class="ajax-form" action="ceramic_back.php" method="POST">
                    <tr>
                        <td>9</td>
                        <td><input type="text" value="Laboratory" name="meter_name"></td>
                        <td><input type="number" value="0" name="max_voltage"></td>
                        <td><input type="number" value="0" name="min_voltage"></td>
                        <td><input type="number" value="0" name="max_current"></td>
                        <td><input type="number" value="0" name="min_current"></td>
                        <td><input type="number" value="0" name="max_kW"></td>
                        <td><input type="number" value="0" name="min_kW"></td>
                        <td><input type="number" value="0" name="refresh_rate"></td>
                        <td><button class="save-btn" type="submit">Save</button></td>
                    </tr>
                </form>
                <form class="ajax-form" action="ceramic_back.php" method="POST">
                    <tr>
                        <td>10</td>
                        <td><input type="text" value="Air Compressors-1" name="meter_name"></td>
                        <td><input type="number" value="0" name="max_voltage"></td>
                        <td><input type="number" value="0" name="min_voltage"></td>
                        <td><input type="number" value="0" name="max_current"></td>
                        <td><input type="number" value="0" name="min_current"></td>
                        <td><input type="number" value="0" name="max_kW"></td>
                        <td><input type="number" value="0" name="min_kW"></td>
                        <td><input type="number" value="0" name="refresh_rate"></td>
                        <td><button class="save-btn" type="submit">Save</button></td>
                    </tr>
                </form>
                <form class="ajax-form" action="ceramic_back.php" method="POST">
                    <tr>
                        <td>11</td>
                        <td><input type="text" value="Kiln Loading Machine with Compensator" name="meter_name"></td>
                        <td><input type="number" value="0" name="max_voltage"></td>
                        <td><input type="number" value="0" name="min_voltage"></td>
                        <td><input type="number" value="0" name="max_current"></td>
                        <td><input type="number" value="0" name="min_current"></td>
                        <td><input type="number" value="0" name="max_kW"></td>
                        <td><input type="number" value="0" name="min_kW"></td>
                        <td><input type="number" value="0" name="refresh_rate"></td>
                        <td><button class="save-btn" type="submit">Save</button></td>
                    </tr>
                </form>
                <form class="ajax-form" action="ceramic_back.php" method="POST">
                    <tr>
                        <td>12</td>
                        <td><input type="text" value="Lighting(Plant)" name="meter_name"></td>
                        <td><input type="number" value="0" name="max_voltage"></td>
                        <td><input type="number" value="0" name="min_voltage"></td>
                        <td><input type="number" value="0" name="max_current"></td>
                        <td><input type="number" value="0" name="min_current"></td>
                        <td><input type="number" value="0" name="max_kW"></td>
                        <td><input type="number" value="0" name="min_kW"></td>
                        <td><input type="number" value="0" name="refresh_rate"></td>
                        <td><button class="save-btn" type="submit">Save</button></td>
                    </tr>
                </form>
                <form class="ajax-form" action="ceramic_back.php" method="POST">
                    <tr>
                        <td>13</td>
                        <td><input type="text" value="Ball Mills-1" name="meter_name"></td>
                        <td><input type="number" value="0" name="max_voltage"></td>
                        <td><input type="number" value="0" name="min_voltage"></td>
                        <td><input type="number" value="0" name="max_current"></td>
                        <td><input type="number" value="0" name="min_current"></td>
                        <td><input type="number" value="0" name="max_kW"></td>
                        <td><input type="number" value="0" name="min_kW"></td>
                        <td><input type="number" value="0" name="refresh_rate"></td>
                        <td><button class="save-btn" type="submit">Save</button></td>
                    </tr>
                </form>
                <!-- Add more rows if needed -->
                </tbody>
                </table>
            </div>
            <!-- Tab8 -->
            <div class="tab-content" id="solar-tab">

                <table>
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Meter Name</th>
                            <th>Max Voltage (kV)</th>
                            <th>Min Voltage (kV)</th>
                            <th>Max Current (A)</th>
                            <th>Min Current (A)</th>
                            <th>Max Active Power (MW)</th>
                            <th>Min Active Power (MW)</th>
                            <th>Refresh Rate (sec)</th>
                            <th>Save</th>
                        </tr>
                    </thead>
                    <tbody>
                        <form class="ajax-form" action="solarback.php" method="POST">
                            <tr>
                                <td>1</td>
                                <td><input type="text" value="Main" name="meter_name"></td>
                                <td><input type="number" value="0" name="max_voltage"></td>
                                <td><input type="number" value="0" name="min_voltage"></td>
                                <td><input type="number" value="0" name="max_current"></td>
                                <td><input type="number" value="0" name="min_current"></td>
                                <td><input type="number" value="0" name="max_kW"></td>
                                <td><input type="number" value="0" name="min_kW"></td>
                                <td><input type="number" value="0" name="refresh_rate"></td>
                                <td><button class="save-btn" type="submit">Save</button></td>
                            </tr>
                        </form>

                        <!-- Add more rows if needed -->
                    </tbody>
                </table>

            </div>
            <!-- Tab9 -->
            <div class="tab-content" id="wind-tab">
                <!-- Wind Mill One -->
                <form class="ajax-form" action="update.php" method="POST">
                    <table>
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Meter Name</th>
                                <th>Max Voltage (kV)</th>
                                <th>Min Voltage (kV)</th>
                                <th>Max Current (A)</th>
                                <th>Min Current (A)</th>
                                <th>Max Active Power (MW)</th>
                                <th>Min Active Power (MW)</th>
                                <th>Refresh Rate (sec)</th>
                                <th>Save</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td><input type="text" value="Wind Mill 1" name="meter_name"></td>
                                <td><input type="number" value="0" name="max_voltage"></td>
                                <td><input type="number" value="0" name="min_voltage"></td>
                                <td><input type="number" value="0" name="max_current"></td>
                                <td><input type="number" value="0" name="min_current"></td>
                                <td><input type="number" value="0" name="max_kW"></td>
                                <td><input type="number" value="0" name="min_kW"></td>
                                <td><input type="number" value="0" name="refresh_rate"></td>
                                <td><button class="save-btn" type="submit">Save</button></td>
                            </tr>
                </form>
                <!-- Wind Mill two -->
                <form class="ajax-form" id="updateForm" action="update.php" method="POST">
                    <tr>
                        <td>2</td>
                        <td><input type="text" value="Wind Mill 2" name="meter_name"></td>
                        <td><input type="number" value="0" name="max_voltage"></td>
                        <td><input type="number" value="0" name="min_voltage"></td>
                        <td><input type="number" value="0" name="max_current"></td>
                        <td><input type="number" value="0" name="min_current"></td>
                        <td><input type="number" value="0" name="max_kW"></td>
                        <td><input type="number" value="0" name="min_kW"></td>
                        <td><input type="number" value="0" name="refresh_rate"></td>
                        <td><button class="save-btn" type="submit">Save</button></td>
                    </tr>
                </form>


                <!-- Wind Mill Main Meter -->
                <form class="ajax-form" action="update.php" method="POST">
                    <tr>
                        <td>3</td>
                        <td><input type="text" value="Main Meter" name="meter_name"></td>
                        <td><input type="number" value="0" name="max_voltage"></td>
                        <td><input type="number" value="0" name="min_voltage"></td>
                        <td><input type="number" value="0" name="max_current"></td>
                        <td><input type="number" value="0" name="min_current"></td>
                        <td><input type="number" value="0" name="max_kW"></td>
                        <td><input type="number" value="0" name="min_kW"></td>
                        <td><input type="number" value="0" name="refresh_rate"></td>
                        <td><button class="save-btn" type="submit">Save</button></td>
                    </tr>
                    </tbody>
                    </table>
                </form>


            </div>
            <!-- Tab10 -->
            <div class="tab-content" id="hydel-tab">
                <form class="ajax-form" action="hydel_back.php" method="POST">
                    <table>
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Meter Name</th>
                                <th>Max Voltage (kV)</th>
                                <th>Min Voltage (kV)</th>
                                <th>Max Current (A)</th>
                                <th>Min Current (A)</th>
                                <th>Max Active Power (MW)</th>
                                <th>Min Active Power (MW)</th>
                                <th>Refresh Rate (sec)</th>
                                <th>Save</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td><input type="text" value="Power Generation" name="meter_name"></td>
                                <td><input type="number" value="0" name="max_voltage"></td>
                                <td><input type="number" value="0" name="min_voltage"></td>
                                <td><input type="number" value="0" name="max_current"></td>
                                <td><input type="number" value="0" name="min_current"></td>
                                <td><input type="number" value="0" name="max_kW"></td>
                                <td><input type="number" value="0" name="min_kW"></td>
                                <td><input type="number" value="0" name="refresh_rate"></td>
                                <td><button class="save-btn" type="submit">Save</button></td>
                            </tr>
                </form>
                <form class="ajax-form" action="hydel_back.php" method="POST">

                    <tr>
                        <td>1</td>
                        <td><input type="text" value="Power Transmission" name="meter_name"></td>
                        <td><input type="number" value="0" name="max_voltage"></td>
                        <td><input type="number" value="0" name="min_voltage"></td>
                        <td><input type="number" value="0" name="max_current"></td>
                        <td><input type="number" value="0" name="min_current"></td>
                        <td><input type="number" value="0" name="max_kW"></td>
                        <td><input type="number" value="0" name="min_kW"></td>
                        <td><input type="number" value="0" name="refresh_rate"></td>
                        <td><button class="save-btn" type="submit">Save</button></td>
                    </tr>
                </form>
                <!-- Add more rows if needed -->
                </tbody>
                </table>
            </div>

            <!-- Add similar div elements for other tabs -->
        </div>
    </div>

    <!-- AjexRequest to send data on next page -->
    <script>
    // Get all forms with the class name "ajax-form" and attach event listeners to them
    document.querySelectorAll('.ajax-form').forEach(function(form) {
        form.addEventListener("submit", function(event) {
            event.preventDefault(); // Prevent the default form submission

            let formData = new FormData(this); // Get form data
            let xhr = new XMLHttpRequest(); // Create new XMLHttpRequest object
            xhr.open("POST", this.action, true); // Open connection
            xhr.onload = function() {
                // Handle response from the server
                if (xhr.status >= 200 && xhr.status < 300) {
                    // Request was successful
                    alert("Record updated successfully!");
                    console.log(xhr.responseText); // Log response
                    // You can perform further actions here, such as showing a success message
                } else {
                    // Request failed
                    console.error(xhr.statusText); // Log error message
                }
            };
            xhr.onerror = function() {
                // Handle connection error
                console.error("Request failed"); // Log error message
                // You can perform further actions here, such as showing an error message
            };
            xhr.send(formData); // Send form data to the server
        });
    });
    </script>

    <!-- changing TABS ON by selection -->
    <script>
    // Get the select element
    const selectElement = document.getElementById('industry-select');

    // Get all tab contents
    const tabContents = document.querySelectorAll('.tab-content');

    // Add event listener to the select element
    selectElement.addEventListener('change', function() {
        // Hide all tab contents
        tabContents.forEach(function(tabContent) {
            tabContent.classList.remove('actives');
        });

        // Get the selected value
        const selectedValue = selectElement.value;

        // Show the corresponding tab content
        const selectedTab = document.getElementById(selectedValue.toLowerCase() + '-tab');
        if (selectedTab) {
            selectedTab.classList.add('actives');
        }
    });
    </script>
</body>

</html>