<?php
ob_start();
session_start();
//$_SESSION['SessionUserId'] = 1;
if (empty($_SESSION['SessionUserId']))
    $_SESSION['SessionUserId'] = 1;



if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['logout-button-submit'])) {
        $_SESSION['SessionUserId'] = 1;
        $_SESSION['didUserFound'] == false;
        header('Location:./login.php');
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Fashion4u</title>
    <link rel="stylesheet" href="style.css" />
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css" />

    <style>
        @import url("https://fonts.googleapis.com/css2?family=Vazirmatn:wght@300&display=swap");

        * {
            margin: 0;
            padding: 0;
            scroll-behavior: smooth;
            box-sizing: border-box;
            list-style: none;
            text-decoration: none;
            font-family: Helvetica (sans-serif);
        }

        a {
            text-decoration: none;

        }

        .b2 {

            padding: 0px 7px;

            background: #FAF9F8;

            color: #ac8c25;

            border-radius: 7px;
            font-size: 18px;

        }



        .b2:hover {

            background: #88D792;

            color: #36122A;
            /** COlor for text */

        }

        header {
            position: fixed;
            width: 100%;
            top: 0;
            right: 0;
            z-index: 1000;
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 18px 100px;
            background: #FAF9F8;
            /** white background of header */

        }

        .logo {
            font-size: 1.8rem;
            font-weight: 1000;
            color: #ac8c25;
            /** text color for nav bar */
        }

        .logo span {
            color: #ac8c25;
            /** text color for nav bar */
        }

        .logo:hover {
            color: #000080;
        }

        .menubar {
            position: relative;
            display: flex;
        }

        .menubar a {
            font-size: 1rem;
            padding: 10px 20px;
            font-weight: 900;
            color: #ac8c25;
            /** text color for nav bar */
        }

        .menubar a:hover {
            color: #000080;
        }

        .menubar a.live {
            color: #ac8c25;
        }


        .mainpage {
            width: 100%;
            height: 100vh;
            background-image: url(./assets/mainimage.png);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: top 50% right 25%;
            background-attachment: fixed;
            display: flex;
            align-items: center;
        }

        .mainpage-text h1 {
            margin-top: 30px;
            font-size: 2.2rem;
            padding-left: 40px;
        }

        .mainpage-text p {
            font-size: 1rem;
            margin: 1rem 0 2rem;
            padding-left: 50px;
        }

        .mainpage-text span {
            color: #ac8c25;
        }

        .button {
            padding: 10px 14px;
            background: #000000;
            color: #fff;
            border-radius: 7px;
            font-size: 18px;
            margin-left: 50px;
        }

        .disabled-cart-button {
            position: absolute;
            bottom: 0;
            right: 0;
            padding: 2px;
            font-size: 20px;
            color: rgb(253, 253, 253);
            border-radius: 7px 0 7px 0;
            background: #ac8c25;

        }

        .button:hover {
            background: #ac8c25;
        }

        .shoph,
        .nwh {
            text-align: center;
            margin: 35px 0;
        }

        .shoph span {
            font-size: 20px;
            font-weight: 800;
            color: #ac8c25;
            text-transform: uppercase;
        }

        .nwh span {
            font-size: 20px;
            font-weight: 800;
            color: #ac8c25;
            text-transform: uppercase;
        }

        .shcontain,
        .nwcontain {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, auto));
            gap: 1rem;
            margin-top: 2rem;
            margin-bottom: 50px;
        }

        .detail {
            margin-left: 35px;
        }

        .mainbx {
            position: relative;
            box-shadow: 1px 4px 4px rgb(0, 0, 0, 0.1);
            border-radius: 30px 4px 4px 4px;
            margin: 10px;
        }

        .mainbx .imgbx {
            width: 100%;
            height: 250px;
            overflow: hidden;
            border-radius: 44px 4px 0 0;
        }

        .m-color {
            color: #ac8c25;
            font-weight: bolder;
            font-size: large;
        }

        .mainbx .imgbx img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
        }

        .mainbx .imgbx img:hover {
            transform: scale(1.1);
            transition: 0.5s;
        }

        .main-price {
            display: flex;
            justify-content: space-between;
            padding: 12px;
        }

        .main-price h3 {
            font-size: 1rem;
            font-weight: 600;
        }

        .mainbx span {
            font-size: 1.1rem;
            font-weight: 800;
            padding-left: 14px;
            color: #ac8c25;
        }

        .ratting .bx {
            color: #000000;
        }

        .mainbx .bx-cart {
            position: absolute;
            bottom: 0;
            right: 0;
            padding: 7px;
            font-size: 20px;
            color: rgb(253, 253, 253);
            border-radius: 7px 0 7px 0;
            background: #000000;
        }

        .disabled-cart-button {
            position: absolute;
            bottom: 0;
            right: 0;
            padding: 2px;
            font-size: 20px;
            color: rgb(253, 253, 253);
            border-radius: 7px 0 7px 0;
            background: #ac8c25;

        }

        .mainbx .bx-cart:hover {
            background: #ac8c25;
        }

        .nwcontain .mainbx {
            border-radius: 7px;
        }

        .nwcontain .mainbx .imgbx {
            border-radius: 7px;
        }

        .moreimformation {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1.5rem;
        }

        .imgofus img {
            width: 80%;
            border-radius: 7px;
            object-fit: contain;
        }

        .ourh {
            margin-top: 75px;
        }

        .ourh span {
            font-size: 20px;
            font-weight: 800;
            text-transform: uppercase;
            color: #ac8c25;
        }

        .ourh p {
            font-size: 1rem;
            margin: 1rem 0 2rem;
        }

        .button1 {
            padding: 12px 14px;
            background: #000000;
            color: #fff;
            border-radius: 7px;
            font-size: 14px;
        }

        .button1:hover {
            background: #ac8c25;
        }


        .mediaaccount {
            display: flex;
            align-items: center;
        }

        .mediaaccount a {
            font-size: 30px;
            margin-right: 10px;
            color: #fff;
        }

        .mediaaccount a:hover {
            color: #ac8c25;
        }


        .copyrightarea {
            padding: 20px;
            text-align: center;
        }

        /* Shopping page  */
        .shoph-page {
            text-align: center;
            margin-top: 100px;
        }

        .shoph-page span {
            font-size: 20px;
            font-weight: 800;
            color: #ac8c25;
            text-transform: uppercase;
        }

        /* Newarrival Page */
        .nwh-page {
            text-align: center;
            margin-top: 100px;
        }

        .nwh-page span {
            font-size: 20px;
            font-weight: 800;
            color: #ac8c25;
            text-transform: uppercase;
        }

        /* about us page  */
        .moreimformation-page {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1.5rem;
            margin-top: 50px;
        }

        /* Contact us page */
        .detailinformation {
            margin-top: 100px;
        }

        .detail span {
            font-size: 20px;
            font-weight: 500;
            color: #ac8c25;
        }

        .detail h2 {
            font-size: 25px;
            padding: 10px 0;
        }

        .detail li {
            display: flex;
            padding: 15px 0;
        }

        .detail li i {
            font-size: 20px;
            padding-right: 10px;
        }

        .members {
            margin: 40px 30px;
            display: flex;
            /* align-items: center; */
            justify-content: space-between;
        }



        .members div {
            padding-bottom: 20px;

        }

        .members div p {
            margin: 0;
            font-size: 15px;
            line-height: 20px;
        }

        .members div p span {

            font-size: 30px;
            font-weight: 300;
            color: #ac8c25
        }


        /* Cart page  */
        .cart-selection {
            margin: 120px 0;
        }


        .cart-selection table {
            width: 80%;
            white-space: nowrap;
            table-layout: fixed;
            border-collapse: collapse;
            margin-left: 50px;
        }

        .cart-selection table td:nth-child(3) input {
            margin-top: 10px;
            width: 50px;
            padding: 10px 5px 10px 5px;
        }

        .cart-selection table thead {
            border: 1px solid #000000;
        }

        .cart-selection table thead td {
            font-weight: 500;
            font-size: 15px;
            text-transform: uppercase;
            padding: 5px 0;
        }

        .finaltotal {
            display: flex;
            justify-content: center;
            margin-bottom: 35px;
        }

        .totalamount {
            width: 50%;
            margin-bottom: 10px;
            border: 1px solid #000000;
            padding: 10px;
            background-color: rgba(192, 181, 222, 0.57);
            border-radius: 20px;
        }

        .totalamount table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 15px;
            background-color: #fff;
        }

        .totalamount table td {
            width: 50%;
            border: 1px solid #000000;
            padding: 15px;
            font-size: 15px;
        }

        .checkout {
            background-color: #000;
            color: #fff;
            padding: 15px 15px;
            border-radius: 10px;
            cursor: pointer;
            font-size: 15px;

        }

        .checkout:hover {
            background-color: #ac8c25;

        }

        .b58 {
            background-color: Transparent;
            background-repeat: no-repeat;
            border: none;
        }

        /** About us css below */
        #aboutus_team-title {
            /* font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif; */
            font-size: 3.25rem;
            font-weight: bold;
            line-height: 3.25rem;
            color: #7d3cff;
            text-align: center;
        }

        .aboutus_team-image-here2 {

            border: black;
            vertical-align: middle;
            width: 250px;
            height: auto;
            border-radius: 50%;
        }

        .aboutus_container1 {
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            flex-basis: 200px;
            align-content: center;
            text-align: center;
            justify-content: center;
        }

        .aboutus_container {
            margin: 250px;
            background-color: rgba(255, 255, 255, 0.5);
            border-radius: 10px;
            padding: 10px;
            margin-top: 30px;
            background-color: #fceed1;
            margin-bottom: 30px;
        }



        .aboutus_team-content-here {

            width: 50%;
            color: #36122A;
            margin: auto;
        }

        /* 
Footer Css below */

        .footer-dark {
            padding: 50px 0;
            color: #f0f9ff;
            background-color: #282d32;
        }

        .footer-dark h3 {
            margin-top: 0;
            margin-bottom: 12px;
            font-weight: bold;
            font-size: 16px;
        }

        .footer-dark ul {
            padding: 0;
            list-style: none;
            line-height: 1.6;
            font-size: 14px;
            margin-bottom: 0;
        }

        .footer-dark ul a {
            color: inherit;
            text-decoration: none;
            opacity: 0.6;
        }

        .footer-dark ul a:hover {
            opacity: 0.8;
        }

        @media (max-width:767px) {
            .footer-dark .item:not(.social) {
                text-align: center;
                padding-bottom: 20px;
            }
        }

        .footer-dark .item.text {
            margin-bottom: 36px;
        }

        @media (max-width:767px) {
            .footer-dark .item.text {
                margin-bottom: 0;
            }
        }

        .footer-dark .item.text p {
            opacity: 0.6;
            margin-bottom: 0;
        }

        .footer-dark .item.social {
            text-align: center;
        }

        @media (max-width:991px) {
            .footer-dark .item.social {
                text-align: center;
                margin-top: 20px;
            }
        }

        .footer-dark .item.social>a {
            font-size: 20px;
            width: 36px;
            height: 36px;
            line-height: 36px;
            display: inline-block;
            text-align: center;
            border-radius: 50%;
            box-shadow: 0 0 0 1px rgba(255, 255, 255, 0.4);
            margin: 0 8px;
            color: #fff;
            opacity: 0.75;
        }

        .footer-dark .item.social>a:hover {
            opacity: 0.9;
        }

        .footer-dark .copyright {
            text-align: center;
            padding-top: 24px;
            opacity: 0.3;
            font-size: 13px;
            margin-bottom: 0;
        }
    </style>
    <?php

    require('./functions.php');

    ?>
</head>

<body>
    <header>
        <a href="./index.php" class="logo">Fashion<span>4u</span></a>

        <ul class="menubar">

            <li><a href="./index.php" style="color:<?php echo ($_SERVER['PHP_SELF'] == '/group-13/index.php') ? "#ac8c25" : "" ?>">Home</a></li>
            <li><a href="./shop_men_products.php" style="color:<?php echo ($_SERVER['PHP_SELF'] == '/group-13/shopNow.php') ? "#ac8c25" : "" ?>">Men</a></li>
            <li><a href="./shop_women_products.php" style="color:<?php echo ($_SERVER['PHP_SELF'] == '/group-13/shopNow.php') ? "#ac8c25" : "" ?>">Women</a></li>
            <li><a href="./aboutUs.php" style="color:<?php echo ($_SERVER['PHP_SELF'] == '/group-13/aboutUs.php') ? "#ac8c25" : "" ?>">About Us</a></li>
            <li><a href="./cart.php" style="color:<?php echo ($_SERVER['PHP_SELF'] == '/group-13/cart.php') ? "#ac8c25" : "" ?>">Cart <i class='bx <?php echo ($cart->getCount($_SESSION['SessionUserId']) > 0) ?  "bxs-cart" : "bx-cart" ?> '></i> <?php echo ($cart->getCount($_SESSION['SessionUserId']) > 0) ?  $cart->getCount($_SESSION['SessionUserId']) : "" ?></a></li>

            <?php

            $UserId = $_SESSION['SessionUserId'];
            if ($_SERVER['PHP_SELF'] != '/group-13/login.php') {
                if ($UserId == '1') {
            ?>
                    <li><a href="./login.php" style="color:<?php echo ($_SERVER['PHP_SELF'] == '/group-13/login.php') ? "#ac8c25" : "" ?>">Log in</a></li>
                <?php
                } else {

                ?>
                    <li><a style="color:#1C2833; font-weight: bold;">Hello, <?php echo $user->getUserName($_SESSION['SessionUserId'])  ?></a></li>

            <?php
                }
            }
            ?>
            <?php
            if ($_SESSION['SessionUserId'] != '1') {
            ?>
                <form method="POST">
                    <li><button name="logout-button-submit" class="b2 b58">
                            <b>Logout </b></button></li>
                </form>
            <?php

            }
            ?>
            <li><audio id="music">
                    <source src="./music/audio.mp3" type="audio/mpeg"> Your browser does not support the audio element.
                </audio> <button onclick="togglePlay()" type="button">&#x1F3B5;</button>
                <script>
                    var audioFiles = ["./music/audio.mp3", "./music/audio2.mp3", "./music/audio3.mp3"];
                    var audio = document.getElementById("music");
                    var source = audio.getElementsByTagName("source")[0];
                    source.src = audioFiles[Math.floor(Math.random() * audioFiles.length)];
                    audio.load();

                    function togglePlay() {
                        var audio = document.getElementById("music");
                        if (audio.paused) {
                            audio.play();
                        } else {
                            audio.pause();
                            audio.currentTime = 0;
                        }
                    }
                </script>
            </li>

        </ul>
    </header>

    <main>