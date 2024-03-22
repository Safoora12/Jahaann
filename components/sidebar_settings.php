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
        <h3 class ="diageram">Settings & Configurations</h3>
        <h2 class ="diageram" style = " margin-left: 10px; border: none; height:36px;" >
            <div class="toggle-button" onclick="toggleSidebar()">
                <i class="fa fa-bars"></i>
            </div>
            <p style = " margin-left: 50px;margin-top: 2px;">Settings&#160;&Configurations</p>
        </h2>
        <a class= "a" href ='meter_configurations.php' ><h3 class ="diageram_below <?php if($page == 'meter_configurations.php'){ echo 'active';}?>">1- &nbsp; Set Meter Values <i class="fa fa-ellipsis-v"  style="float: right; margin-right: 10px;"></i></h3></a>
    </section> 
    </div>
</body>

<script>
        function toggleSidebar() {
            var sidebar = document.getElementById("sidebar");
            sidebar.classList.toggle("closed");
            var submenu = document.getElementById("submenu");
            submenu.style.display = "none";
        }
 </script>