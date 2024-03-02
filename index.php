<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jahaann</title>
    <style>
        .body_bg {
            background-color: #313b54;
            display: flex;
            justify-content: center;
            align-items: center; /* Add align-items property */
            height: 100vh; /* Set height to 100vh for full viewport height */
            margin: 0px;
        }

        .login_banner {
            display: flex;
            flex-direction: column; /* Change flex-direction to column */
            width: 70vw;
            height: 60vh;
            background-image: url('./images/login7.jpeg');
            text-align: center;
            justify-content: center;
            align-items: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        .login_inner{
            background-color: white;
            width:100%;
            display: flex;
            align-items: center;
            justify-content: space-between;
            opacity: 0.9;
             height: 150px;
        }
        .form{
            padding-right:20px;
            display: flex;
            flex-direction: column;

            }
            .btn{
                background-color: #1f5896;
                border: none;
                padding: 4px 8px;
                color : white;
                border-radius:4px;
            }
            .input{
                margin-bottom: 4px;
                height: 28px;
                width: 200px;
                border-radius: 3px;
            }
    </style>
</head>

<body class="body_bg">

    <div class="login_banner">
        <div class = "login_inner"> 
        
        <img class="appLogo" src="./images/logo1.png" height="70px">   
        <form name="myform" method="POST" action="./configuration/login.php" class="form">       
         <input class="input"  type="text" name="email" placeholder="User Name" / autocomplete="off" required> 
         <input class="input" type="password" name="password" placeholder="Password" / autocomplete="off" required> 
         <button type="submit" class= "btn">Login</button>
        </form>
        </div>
    </div>

</body>
</html>
