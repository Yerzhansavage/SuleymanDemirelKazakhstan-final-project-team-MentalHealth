<?php
include "header.php";
?>
<!DOCTYPE html>
<html lang="kz">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Сұрақ-Жауап</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>

#faq h2 {
  font-size: 48px;
  font-weight: bold;
  margin-bottom: 50px;
}

#faq .card-header {
  background-color: #fff;
  border-bottom: 1px solid #ddd;
  cursor: pointer;
  position: relative;
}

#faq .card-header:hover {
  background-color: #f9f9f9;
}

#faq .card-header:focus {
  outline: none;
  box-shadow: none;
}

#faq .card-header button {
  font-size: 28px;
  font-weight: bold;
  color: #333;
  text-align: left;
  width: 100%;
  padding: 0;
}

#faq .card-header i {
  font-size: 24px;
  position: absolute
}
    </style>
</head>
<body style="background: linear-gradient(#59aad3, #cecfdb);background-color: #59aad3;">
    <section id="faq">
        <div class="container">
          <h2 class="text-center mb-5">Ұсыныстар</h2>
          <div class="accordion" id="accordionExample">
            <div class="card">
              <div class="card-header" id="headingOne">
                <h5 class="mb-0">
                  <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <i class="fas fa-angle-right mr-3"></i>Қандай уақытта жұмыс істейсіз?
                  </button>
                </h5>
              </div>
              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                  Біздің жұмыс уақыты - Дүйсенбіден жұмаға дейін, сағат 9:00-ден 17:00-ге дейін.
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingTwo">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    <i class="fas fa-angle-right mr-3"></i>Қандай тәулік тәсебілерін қабылдайсыз?
                  </button>
                </h5>
              </div>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="card-body">
                  Біз барлық круптар карталарын, PayPal мен банк переводтерін қабылдаймыз.
                </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header" id="headingThree">
                <h5 class="mb-0">
                  <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    <i class="fas fa-angle-right mr-3"></i>Сіздің алу болашақша қайтару туралы саясатыңыз қандай?
                  </button>
                </h5>
              </div>
              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                <div class="card-body">
                  Біздің қайтару саясатыңыз алу күнінен кейін 30 күн ішінде кез келген элементті толық алдын ала алуға мүмкін
      </div>
                  <footer>
                      <p>Свяжитесь с нами: +7 (708) 157-53-31</p>
                      <ul class="social-icons">
                          <li><a href="https://www.facebook.com/"><i class="fab fa-facebook"></i></a></li>
                          <li><a href="https://twitter.com/"><i class="fab fa-twitter"></i></a></li>
                          <li><a href="https://www.instagram.com/aaizen__/"><i class="fab fa-instagram"></i></a></li>
                      </ul>
                  </footer>
                  <style>
                      @media (max-width: 767px) {
                          .soft-blue {
                              width: 60vw;
                          }
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