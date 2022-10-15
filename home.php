<!DOCTYPE html>
<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Kalki Bank Service</title>
    <style>
        body {
            background-color: #FFFFFF;
            width: auto;
            height: auto;
            background-image: url("Radha Krishna colored by flow692 on DeviantArt.jpg"); 
            background-size: cover;
            background-repeat: no-repeat;
            margin-right: 0px;
            margin-left: 0px;
        }

        .header {
            margin-left: 0px;
            color: #243e83;
            font-size: 61px;
            font-variant: small-caps;
        }

        .img {
            height: 29rem;
            /* padding-left: 1rem; */
            margin-top: -70px;
        }

        .content {
            margin-top: -300px;
            margin-left: 500px;
            color: #0dfcfc;
            font-size: 40px;
        }

        h5 {
            margin-top: -51px;
        }


        .topnav {
            overflow: hidden;
        }

        .btnstyle {
            padding-left: 0rem;
            padding-top: -39.1px
        }

        .btnadj2 {
            padding-left: 13rem;
            margin-top: -2.3rem;
        }

        .topnav {
            overflow: hidden;
            background-color: white;
        }

        .topnav a {
            float: left;
            color: black;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }

        .topnav a:hover {
            background-color: #2b67f8;
            color: white;
        }

        .topnav a.active {
            background-color: #2b67f8;
            color: white;
        }

        .topnav-right {
            float: right;
        }

        @media screen and (max-width: 600px) {
            .topnav a:not(:first-child) {
                display: none;
            }

            .topnav a.icon {
                float: right;
                display: block;
            }
        }

        @media screen and (max-width: 400px) {
            .topnav.responsive {
                position: relative;
            }

            .topnav.responsive .icon {
                position: absolute;
                right: 0;
                top: 0;
            }

            .topnav.responsive a {
                float: none;
                display: block;
                text-align: left;
            }

            .topnav.responsive .dropdown {
                float: none;
            }

            .topnav.responsive .dropdown-content {
                position: relative;
            }

            .topnav.responsive .dropdown .dropbtn {
                display: block;
                width: 100%;
                text-align: left;
            }
        }


        .button {
            display: inline-block;
            border-radius: 29px;
            background-color: #2b67f8;
            text-decoration: none;
            border: none;
            color: #FFFFFF;
            text-align: center;
            font-size: 20px;
            padding: 20px;
            width: 200px;
            transition: all 0.5s;
            cursor: pointer;
            margin: 5px;
        }

        .button span {
            cursor: pointer;
            display: inline-block;
            position: relative;
            transition: 0.5s;
        }

        .button span:after {
            content: '\00bb';
            position: absolute;
            opacity: 0;
            top: 0;
            right: -20px;
            transition: 0.5s;
        }

        .button:hover span {
            padding-right: 25px;
        }

        .button:hover span:after {
            opacity: 1;
            right: 0;
        }
    </style>

</head>

<body>

    <?php

    ?>
    <div class="topnav">
        <div class="topnav-right">
            <a class="active" href="home.php">Home</a>
            <a href="View.php">View Customers</a>
            <a href="transc.php">View Transactions</a>
        </div>
    </div>

    <div class="header">
        <h5 style="padding-right: 1rem">Kalki Bank Service</h5>
        <div class="img">
            <img src="12.png"></img>

        </div>

        <div class="content">
            <p style="color: rgb(206, 10, 255); padding-left: 1rem;">
                We Are Here To Give You
                <br>The Bloody Service You Need
            </p>

            <a href="view.php">
                <button class="button" style="vertical-align:middle">
                    <span>Customers </span></button></a>
            <a href="transc.php">
                <button class="button" style="vertical-align:middle">
                    <span>Transactions</span></button></a>

        </div>
        <!-- <div class="btnstyle">
            <div class="btnadj">
                <a class="button" href="view.php">Customers</a>
                <div class="btnadj2">
                    <a class="button" href="transc.php" style="margin-top: 0px;">Transactions</a>
                </div>
            </div>
        </div> -->






</body>

</html>
