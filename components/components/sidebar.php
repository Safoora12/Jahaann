<?php
$page_name = basename(($_SERVER['PHP_SELF']) . "?" . ($_SERVER['QUERY_STRING']));
$page = basename($_SERVER['PHP_SELF']);
?>
<head>
<style>
        /* Sidebar styling*/
        .sidebar {
            width: 300px;
            float: left;
            background-color: #f2f2f2; 
            border: 2px solid grey;
            border-top: 5px solid #1f5897;
            height: 87vh;
            margin-top: 20px;
            box-sizing: border-box;
            border-radius: 7px;
            margin-left: 12px;
            margin-right: 10px;
            transition: width 0.3s ease; /* Add transition for smooth animation */
        }

        .sidebar.closed {
            width: 50px;
            margin-right: 0px;
            background-color: none;
        }

        .sidebar.closed h2{
            display: block;
            transform: rotate(90deg);
        }
        .sidebar.closed h3{
            display: none;
        }

        .sidebar h2{
            display: none;
        }

        .sidebar .toggle-button {
            position: absolute;
            top: 10px;
            right: 10px;
            cursor: pointer;
        }

        /* @media screen and (max-width: 480px) {
            .sidebar {
                width: 50px;
                margin-right: 0px;
            }
            .sidebar h3{
                display: none;
            }
            .sidebar h2{
                display: block;
                transform: rotate(90deg);
            }
        } */

        /* Map_div styling */
        .map_div {
            width: 100%;
            float: left;
            background-color: #ffffff;
            border: 2px solid grey; /* Black border */
            border-top: 5px solid #1f5897; /* Adjust top border thickness */
            padding-left: 5px; /*  Adjust padding as needed */
            box-sizing: border-box; /* Include padding and border in width and height */
            height: 87vh; /* Full height of the viewport */
            margin-top: 20px; /* Adjust top margin as needed */
            margin-left: 20px;
            border-radius: 7px;
            /* text-align: center; */
            overflow: auto;
            margin-right: 20px;
        }

        .h2{
            text-align: left;
        }

        #main{
            display: flex;
            flex-direction: row; 
            color: grey;

        }
        .diageram{
            background-color: #f2f2f2;
            border-bottom: 1px solid gray;
            padding-left:5px;
            padding-bottom: 7px;
            font-size: 13px;
            color: black;
            margin: 0px;
        
            padding: 10px 3px;
        }

        .diageram_below{
            padding-left:5px;
            font-size: 14px;
            border-bottom: 1px solid gray;
            padding-left:5px;
            padding-bottom: 4px;
            margin: 0px;
            padding: 10px 3px;

        }

        .diageram_below:hover{
                background-color:#e5e5e5;
                    cursor: pointer;             
                }
        .active:hover{
            background-color: #95bfed;
            cursor: pointer;                  
        }

        .active{
            border-bottom: 1px solid #1f5897;
            border-top: 1px solid #1f5897;
            background-color: #95bfed;

        }
        .side_items {
            position: relative;
        }
        .a {
            text-decoration: none;
            color: grey;
        }
       /* Additional styles for the submenu */
       .general_submenu {
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            background-color: #ffffff;
            border: 1px solid grey;
            border-radius: 5px;
            position: absolute;
            font-size: 14px;
            z-index: 999; /* Ensure the submenu appears above other elements */
            margin: 0px;
            width: 150px;
            margin-left: 7px;
            left: 235px; 
        }

       .anchor {
            text-decoration: none;
            color: grey;
            display : inline-block;
            padding: 10px 10px 10px 10px;
           
           
        }
        .al{
            width: 100%;
            border-bottom: 1px solid grey;
        }
        .al:hover{
            background-color: #e5e5e5;
            cursor: pointer;                         
        }

       .submenu {
          
         
            display: none; /* Hide the submenu by default */  
        }
        .submenu2 {
           
            display: none; /* Hide the submenu by default */  
        }
        .submenu3 {
         
            display: none; /* Hide the submenu by default */  
        }
        .submenu4 {
          
            display: none; /* Hide the submenu by default */  
        }
    
        .submenu5 {
          
          display: none; /* Hide the submenu by default */  
      }
      .submenu6 {
          
          display: none; /* Hide the submenu by default */  
      }
      .submenu7 {
          
          display: none; /* Hide the submenu by default */  
      }
      .submenu8 {
          
          display: none; /* Hide the submenu by default */  
      }
      
      .submenu9 {
          
          display: none; /* Hide the submenu by default */  
      }
      .submenu10 {
          
          display: none; /* Hide the submenu by default */  
      }

</style>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <div class="sidebar" id="sidebar">  
    <section class= "side_items"> 
        <div class="toggle-button" onclick="toggleSidebar()">
            <i class="fa fa-bars"></i>
        </div>
        <h3 class ="diageram">Diagram Section</h3>

        <h2 class ="diageram" style = " margin-left: 10px; border: none; height:36px;" >
            <div class="toggle-button" onclick="toggleSidebar()">
                <i class="fa fa-bars"></i>
            </div>
            <p style = " margin-left: 50px;margin-top: 2px;">Diagram&#160;Section</p>
        </h2>
        <a class= "a" href ='areal_view.php' ><h3 class ="diageram_below <?php if($page == 'areal_view.php'){ echo 'active';}?>">1- &nbsp; Overview<i  style="float: right; margin-right: 10px;"></i></h3></a>
        <a class= "a" href ='eui_map.php' ><h3 class ="diageram_below <?php if($page == 'eui_map.php'){ echo 'active';}?>">2- &nbsp; Regional EUI Map <i style="float: right; margin-right: 10px;"></i></h3></a>
        <a class= "a" href ='transformer.php'> <h3 class ="diageram_below <?php if($page == 'transformer.php'){ echo 'active';}?>"> 3- &nbsp; Transformer Monitoring <i style="float: right; margin-right: 10px;"></i> </h3></a>
        <h3 class="diageram_below <?php if($page == 'wind.php' || $page == 'wind_oneline.php' ){ echo 'active';}?>" onclick="toggleSubmenu()">4- &nbsp; Wind Generation <i class="fa fa-ellipsis-v" style="float: right; margin-right: 10px;"></i>
          
        <!-- Submenu for Wind Generation -->
            <div class="submenu general_submenu" id="submenu"> 
                <div class = "al" ><a  class  = "anchor" href="wind.php">&nbsp;&nbsp;i - Overview</a></div>
                    <div class = "al"><a   class  = "anchor"  href="wind_oneline.php">&nbsp;&nbsp;ii - One Line</a></div> 
            </div>   </h3>    
        <h3 class ="diageram_below <?php if($page == 'solar_energy.php' || $page == 'solar_oneline.php' ){ echo 'active';}?>" onclick="toggleSubmenu2()"> 5- &nbsp; Solar Generation <i class="fa fa-ellipsis-v" style="float: right; margin-right: 10px;"></i>
          <!-- Submenu for Solar Generation -->
          <div class="submenu2 general_submenu" id="submenu2"> 
                <div class = "al" ><a class  = "anchor" href="solar_energy.php">&nbsp;&nbsp;i - Overview</a></div>
                    <!-- <div class = "al"><a   class  = "anchor" href="solar_oneline.php">&nbsp;&nbsp;ii - One Line</a></div>  -->
            </div> </h3>
        <h3 class ="diageram_below <?php if($page == 'hydel.php' || $page == 'hydel_oneline.php' ){ echo 'active';}?>"  onclick="toggleSubmenu3()"> 6- &nbsp; Hydel Power Generation  <i class="fa fa-ellipsis-v" style="float: right; margin-right: 10px;"></i>
        <div class="submenu3 general_submenu" id="submenu3"> 
                <div class = "al" ><a class  = "anchor" href="hydel.php">&nbsp;&nbsp;i - Overview</a></div>
                    <!-- <div class = "al"><a   class  = "anchor" href="hydel_oneline.php">&nbsp;&nbsp;ii - One Line</a></div>  -->
            </div> </h3>
        <h3 class ="diageram_below <?php if($page == 'shopping.php' || $page == 'shopping_oneline.php' ){ echo 'active';}?>" onclick="toggleSubmenu4()"> 7- &nbsp; Shopping Mall  <i class="fa fa-ellipsis-v" style="float: right; margin-right: 10px;"></i> 
        <div class="submenu4 general_submenu" id="submenu4"> 
                <div class = "al" ><a class  = "anchor" href="shopping.php">&nbsp;&nbsp;i - Overview</a></div>
                    <div class = "al"><a   class  = "anchor" href="shopping_oneline.php">&nbsp;&nbsp;ii - One Line</a></div> 
            </div> </h3>
        <h3 class ="diageram_below <?php if($page == 'sugar.php' || $page == 'sugar_oneline.php' ){ echo 'active';}?>" onclick="toggleSubmenu5()"> 8- &nbsp; Sugar Mill  <i class="fa fa-ellipsis-v" style="float: right; margin-right: 10px;"></i>
            <div class="submenu5 general_submenu" id="submenu5"> 
                <div class = "al" ><a class  = "anchor" href="sugar.php">&nbsp;&nbsp;i - Overview</a></div>
                    <div class = "al"><a   class  = "anchor" href="sugar_oneline.php">&nbsp;&nbsp;ii - One Line</a></div> 
            </div>
        </h3>  
        
        <h3 class ="diageram_below <?php if($page == 'paper.php' || $page == 'paper_oneline.php'){ echo 'active';}?>" onclick="toggleSubmenu6()"> 9- &nbsp; Paper Mill  <i class="fa fa-ellipsis-v" style="float: right; margin-right: 10px;"></i>  
        <div class="submenu6 general_submenu" id="submenu6"> 
                <div class = "al" ><a class  = "anchor" href="paper.php">&nbsp;&nbsp;i - Overview</a></div>
                    <div class = "al"><a   class  = "anchor" href="paper_oneline.php">&nbsp;&nbsp;ii - One Line</a></div> 
            </div>
        </h3>
        <h3 class ="diageram_below <?php if($page == 'beverages.php' || $page == 'beverages_oneline.php' ){ echo 'active';}?>" onclick="toggleSubmenu7()"> 10- &nbsp; Beverages Plant  <i class="fa fa-ellipsis-v" style="float: right; margin-right: 10px;"></i>  
        <div class="submenu7 general_submenu" id="submenu7"> 
                <div class = "al" ><a class  = "anchor" href="beverages.php" >&nbsp;&nbsp;i - Overview</a></div>
                    <div class = "al"><a   class  = "anchor" href="beverages_oneline.php">&nbsp;&nbsp;ii - One Line</a></div> 
            </div>
        </h3>
        
        <h3 class ="diageram_below <?php if($page == 'chocolate.php'  || $page == 'chocolate_oneline.php' ){ echo 'active';}?>" onclick="toggleSubmenu8()"> 11- &nbsp; Chocolate Factory  <i class="fa fa-ellipsis-v" style="float: right; margin-right: 10px;"></i>
        <div class="submenu8 general_submenu" id="submenu8"> 
                <div class = "al" ><a class  = "anchor" href="chocolate.php" >&nbsp;&nbsp;i - Overview</a></div>
                    <div class = "al"><a   class  = "anchor" href="chocolate_oneline.php">&nbsp;&nbsp;ii - One Line</a></div> 
            </div>
        </h3>

        <h3 class ="diageram_below <?php if($page == 'ceramic.php' || $page == 'ceramic_oneline.php'  ){ echo 'active';}?>"  onclick="toggleSubmenu9()"> 12- &nbsp; Ceramic Industry  <i class="fa fa-ellipsis-v" style="float: right; margin-right: 10px;"></i>  
        <div class="submenu9 general_submenu" id="submenu9"> 
                <div class = "al" ><a class  = "anchor" href="ceramic.php" >&nbsp;&nbsp;i - Overview</a></div>
                    <div class = "al"><a   class  = "anchor" href="ceramic_oneline.php">&nbsp;&nbsp;ii - One Line</a></div> 
            </div>
        </h3>

        <h3 class ="diageram_below <?php if($page == 'textile.php' || $page == 'textile_oneline.php' || $page == 'LT_online.php' ){ echo 'active';}?>"  onclick="toggleSubmenu10()"> 13- &nbsp; Textile Industry  <i class="fa fa-ellipsis-v" style="float: right; margin-right: 10px;"></i>  
        <div class="submenu10 general_submenu" id="submenu10"> 
                <div class = "al" ><a class  = "anchor" href="textile.php" >&nbsp;&nbsp;i - Overview</a></div>
                    <div class = "al"><a   class  = "anchor" href="textile_oneline.php">&nbsp;&nbsp;ii - One Line</a></div> 
            </div>
        </h3>
    </section> 
    </div>
    <script>
        function toggleSidebar() {
            var sidebar = document.getElementById("sidebar");
            sidebar.classList.toggle("closed");
            var submenu = document.getElementById("submenu");
            submenu.style.display = "none";
        }

        // Sub menu Shwo and hide
        function toggleSubmenu() {
            var submenu = document.getElementById("submenu");
            var submenu2 = document.getElementById("submenu2");
            var submenu3 = document.getElementById("submenu3");
            var submenu4 = document.getElementById("submenu4");
            var submenu5 = document.getElementById("submenu5");
            var submenu6 = document.getElementById("submenu6");
            var submenu7 = document.getElementById("submenu7");
            var submenu8 = document.getElementById("submenu8");
            var submenu9 = document.getElementById("submenu9");
            var submenu10 = document.getElementById("submenu10");
            submenu10.style.display = "none";
            submenu9.style.display = "none";
            submenu8.style.display = "none";
            submenu2.style.display = "none";
            submenu3.style.display = "none";
            submenu4.style.display =  "none";
            submenu5.style.display =  "none";
            submenu6.style.display =  "none";
            submenu7.style.display =  "none";
            submenu.style.display = (submenu.style.display === "inline-block") ? "none" : "inline-block";
        }

        function toggleSubmenu2() {
            var submenu = document.getElementById("submenu");
            var submenu2 = document.getElementById("submenu2");
            var submenu3 = document.getElementById("submenu3");
            var submenu4 = document.getElementById("submenu4");
            var submenu5 = document.getElementById("submenu5");
            var submenu6 = document.getElementById("submenu6");
            var submenu7 = document.getElementById("submenu7");
            var submenu8 = document.getElementById("submenu8");
            var submenu9 = document.getElementById("submenu9");
            var submenu10 = document.getElementById("submenu10");
            submenu10.style.display = "none";
            submenu9.style.display = "none";
            submenu8.style.display = "none";
            submenu3.style.display = "none";
            submenu.style.display = "none";
            submenu4.style.display =  "none";
            submenu5.style.display =  "none";
            submenu6.style.display =  "none";
            submenu7.style.display =  "none";
            submenu2.style.display = (submenu2.style.display === "inline-block") ? "none" : "inline-block";
        }

        function toggleSubmenu3() {
            var submenu = document.getElementById("submenu");
            var submenu2 = document.getElementById("submenu2");
            var submenu3 = document.getElementById("submenu3");
            var submenu4 = document.getElementById("submenu4");
            var submenu5 = document.getElementById("submenu5");
            var submenu6 = document.getElementById("submenu6");
            var submenu7 = document.getElementById("submenu7");
            var submenu8 = document.getElementById("submenu8");
            var submenu9 = document.getElementById("submenu9");
            var submenu10 = document.getElementById("submenu10");
            submenu10.style.display = "none";
            submenu9.style.display = "none";
            submenu8.style.display = "none";
            submenu.style.display = "none";
            submenu2.style.display = "none";
            submenu4.style.display =  "none";
            submenu5.style.display =  "none";
            submenu6.style.display =  "none";
            submenu7.style.display =  "none";
            submenu3.style.display = (submenu3.style.display === "inline-block") ? "none" : "inline-block";
        }

        function toggleSubmenu4() {
            var submenu = document.getElementById("submenu");
            var submenu2 = document.getElementById("submenu2");
            var submenu3 = document.getElementById("submenu3");
            var submenu4 = document.getElementById("submenu4");
            var submenu5 = document.getElementById("submenu5");
            var submenu6 = document.getElementById("submenu6");
            var submenu7 = document.getElementById("submenu7");
            var submenu8 = document.getElementById("submenu8");
            var submenu9 = document.getElementById("submenu9");
            var submenu10 = document.getElementById("submenu10");
            submenu10.style.display = "none";
            submenu9.style.display = "none";
            submenu8.style.display = "none";
            submenu.style.display = "none";
            submenu2.style.display = "none";
            submenu3.style.display =  "none";
            submenu5.style.display =  "none";
            submenu6.style.display =  "none";
            submenu7.style.display =  "none";
            submenu4.style.display = (submenu4.style.display === "inline-block") ? "none" : "inline-block";
        }


        
        function toggleSubmenu5() {
            var submenu = document.getElementById("submenu");
            var submenu2 = document.getElementById("submenu2");
            var submenu3 = document.getElementById("submenu3");
            var submenu4 = document.getElementById("submenu4");
            var submenu5 = document.getElementById("submenu5");
            var submenu6 = document.getElementById("submenu6");
            var submenu7 = document.getElementById("submenu7");
            var submenu8 = document.getElementById("submenu8");
            var submenu9 = document.getElementById("submenu9");
            var submenu10 = document.getElementById("submenu10");
            submenu10.style.display = "none";
            submenu9.style.display = "none";
            submenu8.style.display = "none";
            submenu.style.display = "none";
            submenu2.style.display = "none";
            submenu3.style.display =  "none";
            submenu4.style.display =  "none";
            submenu6.style.display =  "none";
            submenu7.style.display =  "none";
            submenu5.style.display = (submenu5.style.display === "inline-block") ? "none" : "inline-block";
        }

        function toggleSubmenu6() {
            var submenu = document.getElementById("submenu");
            var submenu2 = document.getElementById("submenu2");
            var submenu3 = document.getElementById("submenu3");
            var submenu4 = document.getElementById("submenu4");
            var submenu5 = document.getElementById("submenu5");
            var submenu6 = document.getElementById("submenu6");
            var submenu7 = document.getElementById("submenu7");
            var submenu8 = document.getElementById("submenu8");
            var submenu9 = document.getElementById("submenu9");
            var submenu10 = document.getElementById("submenu10");
            submenu10.style.display = "none";
            submenu9.style.display = "none";
            submenu8.style.display = "none";
            submenu.style.display = "none";
            submenu2.style.display = "none";
            submenu3.style.display =  "none";
            submenu4.style.display =  "none";
            submenu5.style.display =  "none";
            submenu7.style.display =  "none";
            submenu6.style.display = (submenu6.style.display === "inline-block") ? "none" : "inline-block";
        }

        function toggleSubmenu7() {
            var submenu = document.getElementById("submenu");
            var submenu2 = document.getElementById("submenu2");
            var submenu3 = document.getElementById("submenu3");
            var submenu4 = document.getElementById("submenu4");
            var submenu5 = document.getElementById("submenu5");
            var submenu6 = document.getElementById("submenu6");
            var submenu7 = document.getElementById("submenu7");
            var submenu8 = document.getElementById("submenu8");
            var submenu9 = document.getElementById("submenu9");
            var submenu10 = document.getElementById("submenu10");
            submenu10.style.display = "none";
            submenu9.style.display = "none";
            submenu8.style.display = "none";
            submenu.style.display = "none";
            submenu2.style.display = "none";
            submenu3.style.display =  "none";
            submenu4.style.display =  "none";
            submenu5.style.display =  "none";
            submenu6.style.display =  "none";
            submenu7.style.display = (submenu7.style.display === "inline-block") ? "none" : "inline-block";
        }

        function toggleSubmenu8() {
            var submenu = document.getElementById("submenu");
            var submenu2 = document.getElementById("submenu2");
            var submenu3 = document.getElementById("submenu3");
            var submenu4 = document.getElementById("submenu4");
            var submenu5 = document.getElementById("submenu5");
            var submenu6 = document.getElementById("submenu6");
            var submenu7 = document.getElementById("submenu7");
            var submenu8 = document.getElementById("submenu8");
            var submenu9 = document.getElementById("submenu9");
            var submenu10 = document.getElementById("submenu10");
            submenu10.style.display = "none";
            submenu9.style.display = "none";
            submenu.style.display = "none";
            submenu2.style.display = "none";
            submenu3.style.display =  "none";
            submenu4.style.display =  "none";
            submenu5.style.display =  "none";
            submenu6.style.display =  "none";
            submenu7.style.display =  "none";
            submenu8.style.display = (submenu8.style.display === "inline-block") ? "none" : "inline-block";
        }

        function toggleSubmenu9() {
            var submenu = document.getElementById("submenu");
            var submenu2 = document.getElementById("submenu2");
            var submenu3 = document.getElementById("submenu3");
            var submenu4 = document.getElementById("submenu4");
            var submenu5 = document.getElementById("submenu5");
            var submenu6 = document.getElementById("submenu6");
            var submenu7 = document.getElementById("submenu7");
            var submenu8 = document.getElementById("submenu8");
            var submenu9 = document.getElementById("submenu9");
            var submenu10 = document.getElementById("submenu10");
            submenu10.style.display = "none";
            submenu8.style.display = "none";
            submenu.style.display = "none";
            submenu2.style.display = "none";
            submenu3.style.display =  "none";
            submenu4.style.display =  "none";
            submenu5.style.display =  "none";
            submenu6.style.display =  "none";
            submenu7.style.display =  "none";
            submenu9.style.display = (submenu9.style.display === "inline-block") ? "none" : "inline-block";
        }

        function toggleSubmenu10() {
            var submenu = document.getElementById("submenu");
            var submenu2 = document.getElementById("submenu2");
            var submenu3 = document.getElementById("submenu3");
            var submenu4 = document.getElementById("submenu4");
            var submenu5 = document.getElementById("submenu5");
            var submenu6 = document.getElementById("submenu6");
            var submenu7 = document.getElementById("submenu7");
            var submenu8 = document.getElementById("submenu8");
            var submenu9 = document.getElementById("submenu9");
            var submenu10 = document.getElementById("submenu10");
            submenu9.style.display = "none";
            submenu8.style.display = "none";
            submenu.style.display = "none";
            submenu2.style.display = "none";
            submenu3.style.display =  "none";
            submenu4.style.display =  "none";
            submenu5.style.display =  "none";
            submenu6.style.display =  "none";
            submenu7.style.display =  "none";
            submenu10.style.display = (submenu10.style.display === "inline-block") ? "none" : "inline-block";
        }
    </script>


</body>