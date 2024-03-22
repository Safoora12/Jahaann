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
              <div class = "main_meter" style = " left: 382px;    top: 165px;  position: absolute;  width: 76px; height: 72px;  display: flex; flex-direction: column; align-items: center; color: blue;font-size: 12px; padding-top: 4px;" >
              
              <span>415.3 V</span>
                    <span  style = "padding-top: 5px;">72.8 A&nbsp;</span>
                    <span style = "padding-top: 5px;">37.16 kW</span>
               </div>

        <!-- Main Meter  2 -->
        <div class = "main_meter" style = " left: 758px;    top: 165px;  position: absolute;  width: 76px; height: 72px;  display: flex; flex-direction: column; align-items: center; color: blue;font-size: 12px; padding-top: 4px;" >
              
              <span>415.3 V</span>
                    <span  style = "padding-top: 5px;">72.8 A&nbsp;</span>
                    <span style = "padding-top: 5px;">37.16 kW</span>
               </div>


                       <!-- Main Meter  3-->
              <div class = "main_meter" style = " left: 1095px;    top: 165px;  position: absolute;  width: 76px; height: 72px;  display: flex; flex-direction: column; align-items: center; color: blue;font-size: 12px; padding-top: 4px;" >
              
              <span>415.3 V</span>
                    <span  style = "padding-top: 5px;">72.8 A&nbsp;</span>
                    <span style = "padding-top: 5px;">37.16 kW</span>
               </div>
              
                <!-- Harvesting  -->
                <div class = "main_meter" style = "left: 240PX; top: 415px;  position: absolute;  width: 76px; height: 72px;  display: flex; flex-direction: column; align-items: center; color: blue;font-size: 12px; padding-top: 4px;" >
                    <span>412 V</span>
                    <span  style = "padding-top: 2px;">38 A</span>
                    <span style = "padding-top: 2px;">8 kW</span>
               </div>
        
     
                <!-- Roasting  -->
                <div class = "main_meter" style = "left: 420PX; top: 415px;   position: absolute;  width: 76px; height: 72px;  display: flex; flex-direction: column; align-items: center; color: blue;font-size: 12px; padding-top: 4px;" >
                    <span>412.2 V</span>
                    <span  style = "padding-top: 2px;">17.8 A</span>
                    <span style = "padding-top: 2px;">6 kW</span>
               </div>
          
             
                <!-- Packaging -->
                <div class = "main_meter" style = "left: 534PX;  top: 700px;  position: absolute;  width: 76px; height: 72px;  display: flex; flex-direction: column; align-items: center; color: blue;font-size: 12px; padding-top: 4px;" >
                    <span>411.2 V</span>
                    <span  style = "padding-top: 2px;">91 A</span>
                    <span style = "padding-top: 2px;">34 kW</span>
               </div>
           
                <!-- Wafer Preparation  -->
                <div class = "main_meter" style = " left: 884PX; top: 700px; position: absolute;  width: 76px; height: 72px;  display: flex; flex-direction: column; align-items: center; color: blue;font-size: 12px; padding-top: 4px;" >
                    <span>417.2 V</span>
                    <span  style = "padding-top: 2px;">136 A</span>
                    <span style = "padding-top: 2px;">97 kW</span>
               </div>
         

                <!-- Hot Water  -->
                <div class = "main_meter" style = "left: 1265PX; top: 413px;  position: absolute;  width: 76px; height: 72px;  display: flex; flex-direction: column; align-items: center; color: blue;font-size: 12px; padding-top: 4px;" >
                    <span>427.2 V</span>
                    <span  style = "padding-top: 2px;">362 A</span>
                    <span style = "padding-top: 2px;">169 kW</span>
               </div>
         
               
                 <!-- Refrigration  -->
                <div class = "main_meter" style = "left: 186PX;  top: 700px; position: absolute;  width: 76px; height: 72px;  display: flex; flex-direction: column; align-items: center; color: blue;font-size: 12px; padding-top: 4px;" >
                    <span>412 V</span>
                    <span  style = "padding-top: 2px;">0.9 A</span>
                    <span style = "padding-top: 2px;">0 kW</span>
               </div>  
          
               <!-- Logistic  -->
               <div class = "main_meter" style = "left: 357PX; top: 700px; position: absolute;  width: 76px; height: 72px;  display: flex; flex-direction: column; align-items: center; color: blue;font-size: 12px; padding-top: 4px;" >
                    <span>412 V</span>
                    <span  style = "padding-top: 2px;">0.9 A</span>
                    <span style = "padding-top: 2px;">0 kW</span>
               </div>

         
      
                <!-- Grinding  -->
                <div class = "main_meter" style = "left: 593PX; top: 415px;  position: absolute;  width: 76px; height: 72px;  display: flex; flex-direction: column; align-items: center; color: blue;font-size: 12px; padding-top: 4px;" >
                    <span>412 V</span>
                    <span  style = "padding-top: 2px;">0.8 A</span>
                    <span style = "padding-top: 2px;">0 kW</span>
               </div>  
        
            

                <!-- water  -->
                <div class = "main_meter" style = " left: 912PX; top: 412px;  position: absolute;  width: 76px; height: 72px;  display: flex; flex-direction: column; align-items: center; color: blue;font-size: 12px; padding-top: 4px;" >
                    <span>413 V</span>
                    <span  style = "padding-top: 2px;">1.4 A</span>
                    <span style = "padding-top: 2px;">0 kW</span>
               </div>  

                <!-- Mixing  -->
                <div class = "main_meter" style = "left: 708PX; top: 700px;  position: absolute;  width: 76px; height: 72px;  display: flex; flex-direction: column; align-items: center; color: blue;font-size: 12px; padding-top: 4px;" >
                    <span>411.7 V</span>
                    <span  style = "padding-top: 2px;">159.3 A</span>
                    <span style = "padding-top: 2px;">95 kW</span>
               </div>  

             <!-- ECR SECTION -->
               <!-- Sugar Dissolving -->
                <div class = "main_meter" style = " left: 1059PX;   top: 700px; position: absolute;  width: 76px; height: 72px;  display: flex; flex-direction: column; align-items: center; color: blue;font-size: 12px; padding-top: 4px;" >
                    <span>416.9 V</span>
                    <span  style = "padding-top: 2px;">53.3 A</span>
                    <span style = "padding-top: 2px;">31 kW</span>
               </div> 

<!-- Syrup Room-->
               <div class = "main_meter" style = " left: 1230PX;   top: 700px; position: absolute;  width: 76px; height: 72px;  display: flex; flex-direction: column; align-items: center; color: blue;font-size: 12px; padding-top: 4px;" >
                    <span>416.9 V</span>
                    <span  style = "padding-top: 2px;">53.3 A</span>
                    <span style = "padding-top: 2px;">31 kW</span>
               </div> 
          
                <!--Compressed Air -->
                <div class = "main_meter" style = "left: 1090PX; top: 413px;  position: absolute;  width: 76px; height: 72px;  display: flex; flex-direction: column; align-items: center; color: blue;font-size: 12px; padding-top: 4px;" >
                    <span>427.1 V</span>
                    <span  style = "padding-top: 2px;">12.2 A</span>
                    <span style = "padding-top: 2px;">6 kW</span>
                
                </div> 
   
         
            <h2 class="h2">Chocolate Industry Single Line Diagram</h2>
            <a href="./areal_view.php"><img class="applicationLogo" src="../images/back.png" width="60px" style="position: absolute;right:10px; top:10px"></a>
            <img class="applicationLogo" src="../images/factory.PNG" height="750px">
        </div>
    </div>
</body>
</html>
