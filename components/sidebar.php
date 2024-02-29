
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
}
@media screen and (max-width: 480px) {
    .sidebar {
        width: 50px;
        margin-right: 0px;
  }
  .sidebar h2{
    display: none;
  }
}
/* Map_div styling */
.map_div {
    width: 85%;
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
    text-align: center;
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
}

.diageram_below{
    padding-left:5px;
    font-size: 14px;
    border-bottom: 1px solid gray;
    padding-left:5px;
    padding-bottom: 4px;
}

.diageram_below:hover{
           color: black;
            cursor: pointer;
            
        }
  .active{
    border-bottom: 1px solid #1f5897;

  }
</style>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>


<div class="sidebar">  
   <section class= "side_items"> 
    <p class ="diageram">Diagram Section</p>

    <p class ="diageram_below active">1- &nbsp; Overview<i class="fa fa-ellipsis-v" style="float: right; margin-right: 10px;"></i></p>
    <p class ="diageram_below">2- &nbsp; Transmission Network <i class="fa fa-ellipsis-v" style="float: right; margin-right: 10px;"></i></p>
    <p class ="diageram_below">3- &nbsp; Regional EUI Map <i class="fa fa-ellipsis-v" style="float: right; margin-right: 10px;"></i> </p>
    <p class ="diageram_below">4- &nbsp; Wind Generation <i class="fa fa-ellipsis-v" style="float: right; margin-right: 10px;"></i></p>
    <p class ="diageram_below">5- &nbsp; Solar Generation <i class="fa fa-ellipsis-v" style="float: right; margin-right: 10px;"></i></p>
    <p class ="diageram_below">6- &nbsp; Transformer Monitoring  <i class="fa fa-ellipsis-v" style="float: right; margin-right: 10px;"></i></p>  
   </section> 
</div>



