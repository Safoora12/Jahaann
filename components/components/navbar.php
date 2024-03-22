<?php
$page_name = basename(($_SERVER['PHP_SELF']) . "?" . ($_SERVER['QUERY_STRING']));
$page = basename($_SERVER['PHP_SELF']);

?>
<style>
* {
  box-sizing: border-box;
}
body {
  font-size: 12px;
  font-family: Arial, Verdana, "Helvetica Neue", "Lucida Grande", "Segoe UI", Arial, Helvetica, sans-serif;
  margin: 0px;
  
}

.nav {
  height: 35px;
  width: 100%;
  background-color: #1f5897;
  position: relative;
}

.nav > .nav-header {
  display: inline;
}

.nav > .nav-header > .nav-title {
  display: inline-block;
  font-size: 14px;
  color: #fff;
  padding: 10px 10px 10px 10px;
}

.nav > .nav-btn {
  display: none;
}

.nav > .nav-links {
  display: inline;
  /* float: left; */
  font-size: 14px;
}

.nav > .nav-links > a {
  display: inline-block;
  padding: 10px 10px 10px 10px;
  text-decoration: none;
  color: #efefef;
}

    .nav > .nav-links > a:hover {
        border-bottom: 3px solid transparent; /* Adjust the thickness as needed */
        position: relative; /* Necessary for positioning the border */
        padding-bottom: 8px; /* Adjust this value to control the distance between text and underline */
    }

    .nav > .nav-links > a:hover::after {
        content: ""; 
        position: absolute; 
        left: 0; 
        bottom: 0; 
        width: 100%; 
        border-bottom: 3px solid white; /* Adjust color and thickness as needed */
    }


.nav > #nav-check {
  display: none;
}

@media (max-width:600px) {
  .nav > .nav-btn {
    display: inline-block;
    position: absolute;
    right: 0px;
    top: 0px;
  }
  .nav > .nav-btn > label {
    display: inline-block;
    width: 40px;
    height: 40px;
    padding: 8px;
  }
  .nav > .nav-btn > label:hover,.nav  #nav-check:checked ~ .nav-btn > label {
    background-color: rgba(0, 0, 0, 0.3);
  }
  .nav > .nav-btn > label > span {
    display: block;
    width: 22px;
    height: 8px;
    border-top: 2px solid white;
  }
  .nav > .nav-links {
    position: absolute;
    display: block;
    width: 100%;
    background-color: #1f5897;
    height: 0px;
    transition: all 0.3s ease-in;
    overflow-y: hidden;
    top: 50px;
    left: 0px;
  }
  .nav > .nav-links > a {
    display: block;
    width: 100%;
  }
  .nav > #nav-check:not(:checked) ~ .nav-links {
    height: 0px;
  }
  .nav > #nav-check:checked ~ .nav-links {
    height: calc(100vh - 50px);
    overflow-y: auto;
  }
}
.activee{
       border-bottom: 3px solid white; 
      
       
   }
</style>

<div class="nav">
  <input type="checkbox" id="nav-check">
  
  <div class="nav-btn">
    <label for="nav-check">
      <span></span>
      <span></span>
      <span></span>
    </label>
  </div>
  
  <div class="nav-links">
     <!-- Add the pages  here fot the nav tab activation -->
    <a href="../dashboard/dashboard_main.php" class  ="<?php if($page =='dashboard_main.php' ){ echo 'activee';}?>"  style="padding-bottom:5px;" >DASHBOARD</a>
    <a href="../pages/areal_view.php" class  ="<?php if($page =='areal_view.php' || $page =='beverages_oneline.php' || $page =='beverages.php' || $page =='ceramic_oneline.php' || $page =='ceramic.php' || $page =='chocolate_oneline.php' || $page =='chocolate.php' || $page =='eui_map.php' || $page =='hydel_oneline.php' || $page =='hydel.php' || $page =='paper_oneline.php' || $page =='paper.php' ||  $page =='shopping_oneline.php' || $page =='shopping.php' || $page =='solar_energy.php' || $page =='solar_oneline.php' || $page =='sugar_oneline.php' || $page =='sugar.php' || $page =='textile_oneline.php'  || $page =='textile.php' || $page =='transformer.php' || $page =='wind_oneline.php' || $page =='wind.php' ){ echo 'activee';}?>"  style="padding-bottom:5px;">DIAGRAMS</a>
    <a href="../Trends/trend_main.php" class  ="<?php if($page =='trend_main.php' ){ echo 'activee';}?>"  style="padding-bottom:5px;">TRENDS</a>
    <a href="../alarms/alarms_main.php" class  ="<?php if($page =='alarms_main.php' ){ echo 'activee';}?>"  style="padding-bottom:5px;">ALARMS</a>
    <a href="../reports/report_main.php" class  ="<?php if($page =='report_main.php' ){ echo 'activee';}?>"  style="padding-bottom:5px;">REPORTS</a>
    <a href="../settings/meter_configurations.php" class  ="<?php if($page =='meter_configurations.php' ){ echo 'activee';}?>"  style="padding-bottom:5px;">SETTINGS</a>
  </div>
</div>
