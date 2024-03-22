<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Jahaann</title>
    <link rel="icon" type="image/x-icon" href="../images/favicon.png">

    <style>
        .bannerTable {
            display: flex;
            justify-content: space-between; /* Added to create space between logo and user info */
            align-items: center;
            width: 100%;
            height: 100%;
            margin-bottom: 1px;
            background-color: white;
            box-shadow: 0px 3px 5px 2px rgba(0,0,0,0.5);
           
        }

        .userImage {
            display: inline-block;
            margin-right: 10px; /* Added to create space between user image and username */
        }

        .headerInfo {
            display: flex;
            align-items: center;
        }

        .applicationCompanyLogo {
            /* margin-left: 10px; Added to create space between username and company logo */
        }

        #secondBannerContent{
           background-color: #1f5897;
        }
        .logoText {
            margin-top: 5px; /* Adjust as needed */
            text-align: center; /* Center the text */
            font-size: 13px; /* Adjust font size as needed */
            color: #1f5897; /* Adjust color as needed */
            font-weight: bold;
        }    
        #div_logo{
            display: flex;
          align-items: center;
        }   
          
        .logoutLink> a:hover {
        /* border-bottom: 3px solid transparent; /* Adjust the thickness as needed */
        /* position: relative; Necessary for positioning the border  */
        padding-bottom: 8px; /* Adjust this value to control the distance between text and underline */
        color: #00adee;
        cursor: pointer;
        }
        .logoutLink> a{
             text-decoration: none;
             color: black;
        }
        .currentUserName{
            color: #00adee;
        }

    </style>
</head>

   <div id="firstBannerContent" class="noSelect" >
    <div class="bannerTable"> 
        <div id="div_logo">
        <img class="applicationLogo" src="../images/logo1.png" height="50px">
       
    </div>
        <div id="applicationTitle" class="applicationTitle"></div>
        <div id="summaryView"><div class="summaryView noSelect"></div></div>
        <div class="headerInfo">
            <div class="userImage">
            <svg width="15" height="17" viewBox="0 0 15 17" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M9.9889 7.67046C11.3573 8.19676 12.4626 9.07397 13.3047 10.302C14.1819 11.5301 14.6205 12.8634 14.6205 14.3021V16.0915C14.6205 16.4073 14.4626 16.5652 14.1468 16.5652C13.831 16.5652 13.6731 16.4073 13.6731 16.0915V14.3021C13.6731 13.3897 13.4626 12.5125 13.0415 11.6704C12.6556 10.8283 12.0942 10.109 11.3573 9.51254C10.6205 8.9161 9.77841 8.51256 8.83098 8.302C8.83098 8.26697 8.81347 8.24938 8.77836 8.24938C8.74326 8.24938 8.72574 8.23186 8.72574 8.19676H8.67312C8.67312 8.19676 8.6556 8.17924 8.62049 8.14413C8.62049 8.14413 8.6029 8.14413 8.56787 8.14413C8.56787 8.10903 8.56787 8.07399 8.56787 8.03889H8.51518C8.51518 8.00378 8.51518 7.98627 8.51518 7.98627C8.51518 7.95116 8.51518 7.93357 8.51518 7.93357C8.51518 7.89854 8.51518 7.88095 8.51518 7.88095C8.51518 7.88095 8.51518 7.86343 8.51518 7.82832V7.7757C8.51518 7.7757 8.51518 7.75819 8.51518 7.72308C8.51518 7.68797 8.51518 7.67046 8.51518 7.67046C8.55028 7.63535 8.56787 7.61784 8.56787 7.61784V7.56521C8.56787 7.56521 8.58539 7.54762 8.62049 7.51259C8.62049 7.47748 8.63801 7.45989 8.67312 7.45989C8.70822 7.42483 8.72574 7.40729 8.72574 7.40729C9.217 7.16168 9.60295 6.77572 9.88365 6.2494C10.1644 5.72308 10.3047 5.17922 10.3047 4.61782C10.3047 3.77571 10.0064 3.05641 9.40998 2.45992C8.84857 1.82834 8.18185 1.51255 7.40995 1.51255C6.88363 1.51255 6.3924 1.65291 5.93627 1.9336C5.48012 2.2143 5.11171 2.60027 4.83101 3.0915C4.58539 3.54765 4.46258 4.05641 4.46258 4.61782C4.46258 5.17922 4.60293 5.72308 4.88364 6.2494C5.19942 6.77572 5.58539 7.16168 6.04153 7.40729C6.21697 7.47749 6.30468 7.61784 6.30468 7.82832C6.30468 8.074 6.18188 8.23186 5.93627 8.302C5.02399 8.51256 4.19942 8.9161 3.46258 9.51254C2.76083 10.0739 2.21697 10.7757 1.831 11.6178C1.44504 12.4599 1.25205 13.3546 1.25205 14.3021V15.6178H10.7258C11.0415 15.6178 11.1994 15.7757 11.1994 16.0915C11.1994 16.4073 11.0415 16.5652 10.7258 16.5652H0.77837C0.462583 16.5652 0.304688 16.4073 0.304688 16.0915V14.3021C0.304688 12.8283 0.708196 11.495 1.51522 10.302C2.35732 9.07397 3.46258 8.19676 4.83101 7.67046C3.95381 6.82835 3.51521 5.8108 3.51521 4.61782C3.51521 3.5301 3.90118 2.58273 4.67311 1.77571C5.44504 0.968692 6.35732 0.565186 7.40995 0.565186C8.46255 0.565186 9.35728 0.968692 10.0941 1.77571C10.8661 2.58273 11.2521 3.5301 11.2521 4.61782C11.2521 5.8108 10.831 6.82835 9.9889 7.67046Z" fill=" #00adee"></path>
            </svg>
             </div>
            <span class="currentUserName themeColor">demo</span>
            &nbsp;|&nbsp;
            <span class="logoutLink linkButton"><a href ="../configuration/logout.php">Logout</a></span>
            &nbsp;|&nbsp;
            <span class="logoutLink linkButton"><a>Help</a></span>
            <img class="applicationCompanyLogo" src="../images/alarm_3.png" height="30px">
        </div>
    </div>
</html>
