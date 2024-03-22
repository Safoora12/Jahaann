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
              <div class = "main_meter" style = "left: 695px;   top: 299px;  position: absolute;  width: 76px; height: 72px;  display: flex; flex-direction: column; align-items: center; color: blue;font-size: 12px; padding-top: 4px;" >
              
              <span>415.3 V</span>
                    <span  style = "padding-top: 5px;">72.8 A&nbsp;</span>
                    <span style = "padding-top: 5px;">37.16 kW</span>
               </div>
       

                <!-- LINE 1  -->
                <div class = "main_meter" style = "left: 72PX; top: 555px;  position: absolute;  width: 76px; height: 72px;  display: flex; flex-direction: column; align-items: center; color: blue;font-size: 12px; padding-top: 4px;" >
                    <span>412 V</span>
                    <span  style = "padding-top: 2px;">38 A</span>
                    <span style = "padding-top: 2px;">8 kW</span>
               </div>

     
                <!-- LINE 2  -->
                <div class = "main_meter" style = " left: 307PX; top: 555px;   position: absolute;  width: 76px; height: 72px;  display: flex; flex-direction: column; align-items: center; color: blue;font-size: 12px; padding-top: 4px;" >
                    <span>412.2 V</span>
                    <span  style = "padding-top: 2px;">17.8 A</span>
                    <span style = "padding-top: 2px;">6 kW</span>
               </div>
          

                <!-- LINE 3  -->
                <div class = "main_meter" style = "left: 648PX;  top: 740px;  position: absolute;  width: 76px; height: 72px;  display: flex; flex-direction: column; align-items: center; color: blue;font-size: 12px; padding-top: 4px;" >
                    <span>411.2 V</span>
                    <span  style = "padding-top: 2px;">91 A</span>
                    <span style = "padding-top: 2px;">34 kW</span>
               </div>
           
                <!-- LINE 4  -->
                <div class = "main_meter" style = "left: 1102PX; top: 736px; position: absolute;  width: 76px; height: 72px;  display: flex; flex-direction: column; align-items: center; color: blue;font-size: 12px; padding-top: 4px;" >
                    <span>417.2 V</span>
                    <span  style = "padding-top: 2px;">136 A</span>
                    <span style = "padding-top: 2px;">97 kW</span>
               </div>
         

                <!-- LINE 5  -->
                <div class = "main_meter" style = "left: 1254PX; top: 555px;  position: absolute;  width: 76px; height: 72px;  display: flex; flex-direction: column; align-items: center; color: blue;font-size: 12px; padding-top: 4px;" >
                    <span>427.2 V</span>
                    <span  style = "padding-top: 2px;">362 A</span>
                    <span style = "padding-top: 2px;">169 kW</span>
               </div>
           
   
                 <!-- LPAC 1  -->
                <div class = "main_meter" style = "left: 194PX;  top: 733px; position: absolute;  width: 76px; height: 72px;  display: flex; flex-direction: column; align-items: center; color: blue;font-size: 12px; padding-top: 4px;" >
                    <span>412 V</span>
                    <span  style = "padding-top: 2px;">0.9 A</span>
                    <span style = "padding-top: 2px;">0 kW</span>
               </div>  
       
               <!-- LPAC 444  -->
               <div class = "main_meter" style = "left: 423PX; top: 738px;  position: absolute;  width: 76px; height: 72px;  display: flex; flex-direction: column; align-items: center; color: blue;font-size: 12px; padding-top: 4px;" >
                    <span>412 V</span>
                    <span  style = "padding-top: 2px;">0.9 A</span>
                    <span style = "padding-top: 2px;">0 kW</span>
               </div>

         
      
                <!-- LPAC 2  -->
                <div class = "main_meter" style = "left: 541PX; top: 555px;  position: absolute;  width: 76px; height: 72px;  display: flex; flex-direction: column; align-items: center; color: blue;font-size: 12px; padding-top: 4px;" >
                    <span>412 V</span>
                    <span  style = "padding-top: 2px;">0.8 A</span>
                    <span style = "padding-top: 2px;">0 kW</span>
               </div>  
        
            

                <!-- LPAC 3  -->
                <div class = "main_meter" style = " left: 770PX; top: 569px;  position: absolute;  width: 76px; height: 72px;  display: flex; flex-direction: column; align-items: center; color: blue;font-size: 12px; padding-top: 4px;" >
                    <span>413 V</span>
                    <span  style = "padding-top: 2px;">1.4 A</span>
                    <span style = "padding-top: 2px;">0 kW</span>
               </div>  
            
          
                <!-- LPAC 4  -->
                <div class = "main_meter" style = "left: 879PX; top: 736px;  position: absolute;  width: 76px; height: 72px;  display: flex; flex-direction: column; align-items: center; color: blue;font-size: 12px; padding-top: 4px;" >
                    <span>411.7 V</span>
                    <span  style = "padding-top: 2px;">159.3 A</span>
                    <span style = "padding-top: 2px;">95 kW</span>
               </div>  

         
                <!-- ECR SECTION -->
               <!-- New Boiler -->
                <div class = "main_meter" style = "left: 1367PX;    top: 737px; position: absolute;  width: 76px; height: 72px;  display: flex; flex-direction: column; align-items: center; color: blue;font-size: 12px; padding-top: 4px;" >
                    <span>416.9 V</span>
                    <span  style = "padding-top: 2px;">53.3 A</span>
                    <span style = "padding-top: 2px;">31 kW</span>
               </div> 
          
                <!--syrup roooom -->
                <div class = "main_meter" style = "left: 996PX; top: 558px;  position: absolute;  width: 76px; height: 72px;  display: flex; flex-direction: column; align-items: center; color: blue;font-size: 12px; padding-top: 4px;" >
                    <span>427.1 V</span>
                    <span  style = "padding-top: 2px;">12.2 A</span>
                    <span style = "padding-top: 2px;">6 kW</span>
                </div> 
   
           
            <h2 class="h2">Beverages Single Line Diagram</h2>
            <a href="./areal_view.php"><img class="applicationLogo" src="../images/back.png" width="60px" style="position: absolute;right:10px; top:10px"></a>
            <img class="applicationLogo" src="../images/baverages1.PNG"   style="padding-left: 35px;">
        </div>
    </div>
</body>
</html>
