<style>
/* Sidebar styling*/
.sidebar {
    width: 22%;
    float: left;
    background-color: #f2f2f2; 
    border: 2px solid grey;
    border-top: 5px solid #1f5897;
    height: 87vh;
    margin-top: 20px;
    box-sizing: border-box;
    border-radius: 7px;
    margin-left: 12px;
}

/* Map_div styling */
.map_div {
    width: 73%;
    float: left;
    background-color: #ffffff;
    border: 2px solid grey; /* Black border */
    border-top: 5px solid #1f5897; /* Adjust top border thickness */
    padding-left: 5px; /*  Adjust padding as needed */
    box-sizing: border-box; /* Include padding and border in width and height */
    height: 87vh; /* Full height of the viewport */
    margin-top: 20px; /* Adjust top margin as needed */
    margin-left: 40px;
    border-radius: 7px;
    text-align: center;
}

.h2{
    text-align: left;
}

#main{
    display: flex;
    flex-direction: row; 
    color: grey;

}
</style>

<div id = "main">
<div class="sidebar">  
    <h2>Side bar </h2>   
</div>
<div class="map_div">
    <h2 class = "h2">Network Overview</h2>
    
    <img class="applicationLogo" src="../images/map2.png" height="80%"  width= "auto">
</div>
</div>


