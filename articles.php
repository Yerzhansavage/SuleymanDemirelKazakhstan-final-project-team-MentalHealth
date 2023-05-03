<?php
include "header.php";
?>
<!DOCTYPE html>
<html lang="kz">
  <head>
    <title>Мақалалар</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
      body {
        background-color: #dbe0e0;
        margin-bottom: 50px;
      }
      *{
        scroll-behavior: smooth;
      }
      .jumbotron h1 {
        color: #fafdfd;
        font-size: 4rem;
        font-weight: bold;
        text-shadow: 2px 2px #000;
      }
      .card {
        margin-bottom: 20px;
        box-shadow: 0px 0px 10px 0px #ccc;
      }
      .card-body h5 {
        font-size: 1.8rem;
        font-weight: bold;
        margin-bottom: 10px;
      }
      .card-body p {
        font-size: 1.2rem;
        line-height: 1.5;
      }
      .card-img-top {
        height: 200px;
        object-fit: cover;
      }
      .btn {
        border-radius: 20px;
        background-color: #95a8c2;
        color: #fff;
      }
      .btn:hover {
        background-color: #adbed4;
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
    <div style="
  ">
        <div class="jumbotron  " style=" background-color:transparent; margin-bottom: 10rem; ">
            <div class="container ">
              <h1 class="display-1 ml-5">Мақалалар</h1>
              <p class="lead ml-5">Әртүрлі тақырыптардағы соңғы мақалаларды оқыңыз</p>
              <a href="#start" class="btn btn-lg ml-5" >Бастау</a>
            </div>
          </div>
    </div>
    
    
    
    
    
    <div class="container" id="start">
      <div class="row">
        <div class="col-md-4">
          <div class="card">
            <img class="card-img-top" src="https://i.imgur.com/NnrooKj.png" alt="Article Image">
            <div class="card-body">
              <h5 class="card-title">Йоганың пайдалары</h5>
              <p class="card-text">Йога мыңдаған жылдар бойы қолданылып келеді және оның физикалық және психикалық артықшылықтарымен танымал. Йога сіздің денсаулығыңыз бен әл-ауқатыңызды қалай жақсартуға болатыны туралы көбірек біліңіз.</p>
              <a href="#" class="btn btn-sm">Ары қарай оқу</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img class="card-img-top" src="https://i.imgur.com/ae4kZkr.jpeg" alt="Article Image">
            <div class="card-body">
              <h5 class="card-title">Уақытты басқару дағдыларын қалай жақсартуға болады</h5>
              <p class="card-text">Уақытты тиімді басқару сіздің жеке өміріңізде де, кәсіби өміріңізде де табысқа жету үшін өте маңызды. Уақытты басқару дағдыларын жақсарту үшін кейбір кеңестер мен амалдарды үйреніңіз.</p>
              <a href="#" class="btn btn-sm">Ары қарай оқу</a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card">
            <img class="card-img-top" src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d" alt="Article Image">
            <div class="card-body">
              <h5 class="card-title">Медитацияның пайдалары</h5>
              <p class="card-text">Медитация стрессті төмендетеді, шоғырлануды жақсартады және эмоционалды әл-ауқатқа ықпал етеді. Медитацияның артықшылықтары және оны қалай бастау керектігі туралы көбірек біліңіз.</p>
              <a href="#" class="btn btn-sm">Ары қарай оқу</a>
            </div>
          </div>
        </div>
      </div>
    </div>
   
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>

