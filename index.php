<?php
include "header.php";
?>
<html lang="kz" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>Document</title>

    <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
            rel="stylesheet"
    />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .soft-blue {
            color: #2c6ca7;
            background-color: #2c6ca7;
            border-color: #2c6ca7;
            width: 18vw;
        }

        .soft-orange {
            color: #c95c06;
            background-color: #fff2e6;
            border-color: #ffc28c;
        }

        a {
            text-decoration-line: none;
        }

        .navbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 1rem;
            color: #fafafa;
        }

        .navbar-nav {
            display: flex;
            align-items: center;
        }

        .nav-item {
            margin-right: 1rem;
        }

        .nav-link {
            color: #fff;
            text-decoration: none;
            font-size: 1rem;
        }

        .profile {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            background-color: #fff;
        }

        @media (max-width: 767px) {
            .soft-blue {
                width: 60vw;
            }

            .navbar-brand {
                display: flex;
                flex-direction: column;
                align-items: center;
            }

            .navbar-brand img {
                margin-bottom: 0.5rem;
            }

            .nav-item {
                margin-right: 0.5rem;
            }

            .lead {
                font-size: 1rem;
            }

            .btn {
                font-size: 1rem;
            }

            .col-md-6 {
                text-align: center;
                margin-bottom: 2rem;
            }
        }
    </style>
</head>
<body>
    <div class="container p-5">
        <div class="row align-items-center justify-content-center mx-5">
            <div class="col-md-6">
                <h1 class="mx-5 mb-4 text-white text-left">TYŃ</h1>
                <p
                        class="lead text-white mx-md-5 my-3 text-left"
                        style="font-size: 1.2rem"
                >
                    Психикалық денсаулыққа мамандандырылған платформа. Жеке
                    психотерапия, коучинг, есірткіні емдеу, генетикалық тестілеу,
                    жан-жақты емдеу қызметтерін ұсыну.
                </p>
                <a href="#test">
                    <button
                            class="btn m-md-5 my-4 rounded-pill p-2 px-5 text-white"
                            style="background-color: #95a8c2; font-size: 1.5rem"
                    >
                        Бастау
                    </button>
                </a
                >
            </div>
            <div class="col-md-6">
                <img src="./img/image%205.png" alt="Large Image" class="img-fluid"/>
            </div>
        </div>
    </div>
</div>
<div style="background: linear-gradient(#cecfdb, #ffffff)">
    <div
            class="container text-center bg-soft-blue py-5"
            id="test"
            style="background: linear-gradient(#cecfdb, #ffffff)"
    >
        <h1 style="color: #2c6ca7" class="m-3">
            Психикалық денсаулық сынағынан өтіңіз
        </h1>
        <h2 class="m-3">
            Онлайн тестілеу - бұл психикалық бұзылыстың белгілерін
            сезінетіндігіңізді анықтаудың ең жылдам және қарапайым әдістерінің
            бірі.
        </h2>
        <h2 class="m-3">
            Депрессия немесе мазасыздық сияқты психикалық бұзылулар шын, жиі
            кездеседі және емдеуге келеді. Қалыпқа келу мүмкін.
        </h2>
        <div class="row justify-content-center">
            <div class="col-md-3">
                <button
                        class="btn text-white soft-blue my-4 p-3"
                        style="
                background-color: #598cbc;
                font-size: 1rem;

                border-radius: 20px;
              "
                        disabled
                >
                    ДЕПРЕССИЯ ТЕСТI
                </button>
            </div>
            <div class="col-md-3">
                <button
                        class="btn text-white soft-blue my-4 p-3"
                        style="
                background-color: #598cbc;
                font-size: 1rem;

                border-radius: 20px;
              "
                        disabled
                >
                    ЗЖГС СИНДРОМЫ ТЕСТI
                </button>
            </div>
            <div class="col-md-3">
                <button
                        class="btn text-white soft-blue my-4 p-3"
                        style="
                background-color: #598cbc;
                font-size: 1rem;

                border-radius: 20px;
              "
                        disabled
                >
                    УРЕЙЛЕНУ БұЗЫЛЫСЫ ТЕСТI
                </button>
            </div>
        </div>
        <div class="mt-6">
            <a href="link">
                <button
                        class="btn m-md-4 px-5 py-2 text-white"
                        style="
                background-color: #e6a809;
                font-size: 1.4rem;
                border-radius: 20px;
              "
                >
                    Психикалық денсаулық тестінен өтіңіз
                </button>
            </a>
        </div>
    </div>
</div>

<div
        class="container text-center bg-soft-blue py-5"
        id="test"
        style="background-color: #bab1d1; border-radius: 50px"
>
    <h1 style="color: #12129b" class="m-3">Бұл қалай жұмыс істейді?</h1>
    <h3 class="m-4">
        Психикалық денсаулық сынағынан өткеннен кейін сіз өзіңіздің психикалық
        денсаулығыңызды түсінуге және жақсартуға көмектесетін ақпаратты,
        ресурстарды және құралдарды көресіз.
    </h3>
    <div>
        <button
                class="btn text-white my-4 p-3"
                style="
            background-color: #12129b;
            font-size: 1rem;

> Yerassyl:
border-radius: 20px;
          "
                disabled
        >
            ПСИХИКАЛЫҚ ДЕНСАУЛЫҚТЫ ОНЛАЙН ТЕСТІЛЕУ МАҒАН ҚАЛАЙ КӨМЕКТЕСЕ АЛАДЫ?
        </button>
    </div>
    <div>
        <button
                class="btn text-white my-4 px-5 py-3"
                style="
            background-color: #12129b;
            font-size: 1rem;

            border-radius: 20px;
          "
                disabled
        >
            МЕНІҢ ПСИХИКАЛЫҚ ДЕНСАУЛЫҒЫМА АРНАЛҒАН ТЕСТ НӘТИЖЕЛЕРІ НЕНІ БІЛДІРЕДІ?
        </button>
    </div>
    <h3 class="mx-5">
        Назар аударыңыз: онлайн скрининг құралдары сіздің психикалық
        денсаулығыңыз туралы тез түсінік алуға арналған. Егер сіздің
        нәтижелеріңіз сізде психикалық аурудың белгілері болуы мүмкін екенін
        көрсетсе, нәтижелеріңізді біреумен бөлісуді қарастырыңыз. Психикалық
        денсаулық сақтау маманы (мысалы, дәрігер немесе психотерапевт) сізге
        толық баға беріп, өзіңізді қалай жақсы сезіну керектігін талқылай алады.
        Бұл веб-сайт ақпараттық ресурс болып табылады. Біз дағдарыс жағдайында
        қолдау желісі емеспіз.
    </h3>
</div>
<footer>
    <p>Свяжитесь с нами: +7 (708) 157-53-31</p>
    <ul class="social-icons">
        <li><a href="https://www.facebook.com/"><i class="fab fa-facebook"></i></a></li>
        <li><a href="https://twitter.com/"><i class="fab fa-twitter"></i></a></li>
        <li><a href="https://www.instagram.com/aaizen__/"><i class="fab fa-instagram"></i></a></li>
    </ul>
</footer>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<style>
    footer {
        background-color: #7d7878;
        padding: 10px;
        text-align: center;
        font-size: 14px;
    }

    .social-icons {
        list-style-type: none;
        margin: 0;
        padding: 0;
    }

    .social-icons li {
        display: inline-block;
        margin: 0 10px;
    }

    .social-icons li a {
        color: #000;
        text-decoration: none;
    }

    .social-icons li a:hover {
        color: #666;
    }

    .social-icons li a i {
        font-size: 20px;
    }

</style>
</body>
</html>