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
              <!-- Main Meter  -->
              <div class = "main_meter" style = "left: 612px;  top: 247px;  position: absolute;  width: 76px; height: 72px;  display: flex; flex-direction: column; align-items: center; color: blue;font-size: 12px; padding-top: 4px;" >
              
              <span>417.0 V</span>
                    <span  style = "padding-top: 5px;">71.9 A</span>
                    <span style = "padding-top: 5px;">28.1 kW</span>
               </div>


                <!-- LINE 1  -->
                <div class = "main_meter" style = "left: 33PX; top: 524px;  position: absolute;  width: 76px; height: 72px;  display: flex; flex-direction: column; align-items: center; color: blue;font-size: 12px; padding-top: 4px;" >
                    <span>413 V</span>
                    <span  style = "padding-top: 2px;">40 A</span>
                    <span style = "padding-top: 2px;">8 kW</span>
               </div>

     
                <!-- LINE 2  -->
                <div class = "main_meter" style = "left: 121PX; top: 675px;  position: absolute;  width: 76px; height: 72px;  display: flex; flex-direction: column; align-items: center; color: blue;font-size: 12px; padding-top: 4px;" >
                    <span>411.2 V</span>
                    <span  style = "padding-top: 2px;">45.8 A</span>
                    <span style = "padding-top: 2px;">9 kW</span>
               </div>
       
          
                <!-- LINE 3  -->
                <div class = "main_meter" style = "left: 546PX;  top: 524px;  position: absolute;  width: 76px; height: 72px;  display: flex; flex-direction: column; align-items: center; color: blue;font-size: 12px; padding-top: 4px;" >
                    <span>414.2 V</span>
                    <span  style = "padding-top: 2px;">97 A</span>
                    <span style = "padding-top: 2px;">35 kW</span>
               </div>
          
                <!-- LINE 4  -->
                <div class = "main_meter" style = "left: 775PX; top: 524px; position: absolute;  width: 76px; height: 72px;  display: flex; flex-direction: column; align-items: center; color: blue;font-size: 12px; padding-top: 4px;" >
                    <span>416.2 V</span>
                    <span  style = "padding-top: 2px;">130 A</span>
                    <span style = "padding-top: 2px;">98 kW</span>
               </div>
       

                <!-- LINE 5  -->
                <div class = "main_meter" style = "left: 1007PX; top: 688px;  position: absolute;  width: 76px; height: 72px;  display: flex; flex-direction: column; align-items: center; color: blue;font-size: 12px; padding-top: 4px;" >
                    <span>427.2 V</span>
                    <span  style = "padding-top: 2px;">360 A</span>
                    <span style = "padding-top: 2px;">170 kW</span>
               </div>
        
                 <!-- LPAC 1  -->
                <div class = "main_meter" style = "left: 215PX;  top: 524px;  position: absolute;  width: 76px; height: 72px;  display: flex; flex-direction: column; align-items: center; color: blue;font-size: 12px; padding-top: 4px;" >
                    <span>419 V</span>
                    <span  style = "padding-top: 2px;">0.5 A</span>
                    <span style = "padding-top: 2px;">0 kW</span>
               </div>  

               <!-- LPAC 444  -->
               <div class = "main_meter" style = "left: 407PX; top: 524px;  position: absolute;  width: 76px; height: 72px;  display: flex; flex-direction: column; align-items: center; color: blue;font-size: 12px; padding-top: 4px;" >
                    <span>412 V</span>
                    <span  style = "padding-top: 2px;">0.7 A</span>
                    <span style = "padding-top: 2px;">0 kW</span>
               </div>
         
                <!-- LPAC 2  -->
                <div class = "main_meter" style = "left: 322PX;  top: 690px;  position: absolute;  width: 76px; height: 72px;  display: flex; flex-direction: column; align-items: center; color: blue;font-size: 12px; padding-top: 4px;" >
                    <span>412.6 V</span>
                    <span  style = "padding-top: 2px;">0.9 A</span>
                    <span style = "padding-top: 2px;">0 kW</span>
               </div>  
       
         

                <!-- LPAC 3  -->
                <div class = "main_meter" style = "left: 675PX;   top: 688px;  position: absolute;  width: 76px; height: 72px;  display: flex; flex-direction: column; align-items: center; color: blue;font-size: 12px; padding-top: 4px;" >
                    <span>413.4 V</span>
                    <span  style = "padding-top: 2px;">9.4 A</span>
                    <span style = "padding-top: 2px;">0 kW</span>
               </div>  


                <!-- LPAC 4  -->
                <div class = "main_meter" style = "left: 924PX; top: 524px;  position: absolute;  width: 76px; height: 72px;  display: flex; flex-direction: column; align-items: center; color: blue;font-size: 12px; padding-top: 4px;" >
                    <span>411.7 V</span>
                    <span  style = "padding-top: 2px;">160.3 A</span>
                    <span style = "padding-top: 2px;">96 kW</span>
               </div>  
        

                <!-- ECR SECTION -->
               <!-- New Boiler -->
                <div class = "main_meter" style = "left: 1089PX;  top: 524px; position: absolute;  width: 76px; height: 72px;  display: flex; flex-direction: column; align-items: center; color: blue;font-size: 12px; padding-top: 4px;" >
                    <span>416.9 V</span>
                    <span  style = "padding-top: 2px;">56.3 A</span>
                    <span style = "padding-top: 2px;">32 kW</span>
               </div> 

        
                <!--syrup roooom -->
                <div class = "main_meter" style = "left: 1193PX; top: 688px;  position: absolute;  width: 76px; height: 72px;  display: flex; flex-direction: column; align-items: center; color: blue;font-size: 12px; padding-top: 4px;" >
                    <span>427.1 V</span>
                    <span  style = "padding-top: 2px;">19.2 A</span>
                    <span style = "padding-top: 2px;">6 kW</span>
                </div> 

                 <!--Last One -->
                 <div class = "main_meter" style = "left: 1274PX; top: 524px;  position: absolute;  width: 76px; height: 72px;  display: flex; flex-direction: column; align-items: center; color: blue;font-size: 12px; padding-top: 4px;" >
                    <span>427.1 V</span>
                    <span  style = "padding-top: 2px;">15.2 A</span>
                    <span style = "padding-top: 2px;">8 kW</span>
                </div> 

       
            <h2 class="h2">Ceramic Industry Single Line Diagram</h2>
            <a href="./areal_view.php"><img class="applicationLogo" src="../images/back.png" width="60px" style="position: absolute;right:10px; top:10px"></a>
            <img class="applicationLogo" src="../images/CERAMICCC.PNG" height="700px" width="auto" style="padding-left: 35px;">
        </div>
    </div>
</body>
</html>
