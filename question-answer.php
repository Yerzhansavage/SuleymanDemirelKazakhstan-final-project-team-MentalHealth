<?php
include "header.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Тест</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>

        .form-group {
            margin-top: 80px;
            width: 50%;
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px #ccc;
        }

        .table-responsive {
            margin-top: 80px;
            width: 120%;
            background-color: #fff;
            padding: 30px 30px 30px 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px 0px #ccc;
        }

        .btn {
            border-radius: 20px;
            background-color: #2C3E50;
            color: #fff;
        }

        .btn:hover {
            background-color: #34495E;
        }

        label {
            display: block;
            font-size: 1.2rem;
            font-weight: bold;
            margin-bottom: 50px;
        }

        .footer {
            margin: 100px;
        }

        .front {
            margin: 20px;
        }

        .form-check-label1 {
            margin-bottom: 10px;
            margin-left: 10px;
        }
.table-responsive {
    padding-right: 100px;
    margin-right: 100px;
}


    </style>
</head>
<body class="container" style="background: linear-gradient(#59aad3, #cecfdb);
  background-color: #59aad3;">
<form action="test.php" method="post">
    <div>
        <div class="front"><p></p></div>
        <div style="color: aliceblue;"><h1>Тест</h1></div>
        <form>
            <div class="form-group">
                <label for="age">Сұрақ 1: Сіздің жасыңыз?</label>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="age" value=11>
                    <label class="form-check-label">11 немесе одан кем</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="age" value=12>
                    <label class="form-check-label">12</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="age" value=13>
                    <label class="form-check-label">13</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="age" value=14>
                    <label class="form-check-label">14</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="age" value=15>
                    <label class="form-check-label">15</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="age" value=16>
                    <label class="form-check-label">16</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="age" value=17>
                    <label class="form-check-label">17</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="age" value=18>
                    <label class="form-check-label">18</label>
                </div>
            </div>
            <div class="form-group">
                <label for="grade">Сұрақ 2: Сіз қай сыныпта оқисыз?</label>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="grade" value="8 класс">
                    <label class="form-check-label">8</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="grade" value="9 класс">
                    <label class="form-check-label">9</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="grade" value=10>
                    <label class="form-check-label">10</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="grade" value=11>
                    <label class="form-check-label">11</label>
                </div>
                <div class="form-check">
                    <input type="radio" class="form-check-input" name="grade" value=12>
                    <label class="form-check-label">12</label>
                </div>
            </div>

    </div>
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <h5>Сұрақ 3</h5>
                <th>Соңғы екі аптада келесі симптомдар Сізді мазалды ма?</th>
                <th> Мүлдем болған жоқ</th>
                <th> бірнеше күн</th>
                <th> жарты күннен артық</th>
                <th> күн сайын дерлік</th>
            </thead>
            <tbody>
            <tr>
                <td>қызығушылықтың немесе қуаныштың болмауы</td>
                <td>
                    <div class="form-check form-check-inline" style="margin-right: 40px;">
                        <input class="form-check-input" type="radio" name="question1"  value=0>
                        <label class="form-check-label1" for="question1b"></label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline" style="margin-right: 40px;">
                        <input class="form-check-input" type="radio" name="question1" value=1>
                        <label class="form-check-label1" for="question1c"></label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline" style="margin-right: 40px;">
                        <input class="form-check-input" type="radio" name="question1"  value=2>
                        <label class="form-check-label1" for="question1a"></label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline" style="margin-right: 0px;">
                        <input class="form-check-input" type="radio" name="question1" value=3>
                        <label class="form-check-label1" for="question1a"></label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>әлсіз аппетит, салмақ жоғалту немесе керісінше артық тамақтану</td>
                <td>
                    <div class="form-check form-check-inline" style="margin-right: 40px;">
                        <input class="form-check-input" type="radio" name="question2"  value=0>
                        <label class="form-check-label1" for="question1b"></label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline" style="margin-right: 40px;">
                        <input class="form-check-input" type="radio" name="question2" value=1>
                        <label class="form-check-label1" for="question1c"></label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline" style="margin-right: 40px;">
                        <input class="form-check-input" type="radio" name="question2" value=2>
                        <label class="form-check-label1" for="question1a"></label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline" style="margin-right: 0px;">
                        <input class="form-check-input" type="radio" name="question2" value=3>
                        <label class="form-check-label1" for="question1a"></label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>шаршау сезімі (себепсіз) немесе энергияның жетіспеушілігі</td>
                <td>
                    <div class="form-check form-check-inline" style="margin-right: 40px;">
                        <input class="form-check-input" type="radio" name="question3" value=0>
                        <label class="form-check-label1" for="question1b"></label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline" style="margin-right: 40px;">
                        <input class="form-check-input" type="radio" name="question3" value=1>
                        <label class="form-check-label1" for="question1c"></label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline" style="margin-right: 40px;">
                        <input class="form-check-input" type="radio" name="question3" value=2>
                        <label class="form-check-label1" for="question1a"></label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline" style="margin-right: 0px;">
                        <input class="form-check-input" type="radio" name="question3" value=3>
                        <label class="form-check-label1" for="question1a"></label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>сіз өзіңізді немесе отбасыңызды сәтсіздікке ұшыратқаныңыз туралы сезім</td>
                <td>
                    <div class="form-check form-check-inline" style="margin-right: 40px;">
                        <input class="form-check-input" type="radio" name="question4" value=0>
                        <label class="form-check-label1" for="question1b"></label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline" style="margin-right: 40px;">
                        <input class="form-check-input" type="radio" name="question4" value=1>
                        <label class="form-check-label1" for="question1c"></label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline" style="margin-right: 40px;">
                        <input class="form-check-input" type="radio" name="question4" value=2>
                        <label class="form-check-label1" for="question1a"></label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline" style="margin-right: 0px;">
                        <input class="form-check-input" type="radio" name="question4" value=3>
                        <label class="form-check-label1" for="question1a"></label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>мектепте, оқу кезінде және т. б. шоғырлану қиын.</td>
                <td>
                    <div class="form-check form-check-inline" style="margin-right: 40px;">
                        <input class="form-check-input" type="radio" name="question5" value=0>
                        <label class="form-check-label1" for="question1b"></label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline" style="margin-right: 40px;">
                        <input class="form-check-input" type="radio" name="question5" value=1>
                        <label class="form-check-label1" for="question1c"></label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline" style="margin-right: 40px;">
                        <input class="form-check-input" type="radio" name="question5" value=2>
                        <label class="form-check-label1" for="question1a"></label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline" style="margin-right: 0px;">
                        <input class="form-check-input" type="radio" name="question5" value=2>
                        <label class="form-check-label1" for="question1a"></label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>басқаларға байқалады қозғалыстағыныз немесе сөйлесу баяулауы, немесе керісінше мазасыздық немесе
                    әбігерлік (әдеттегіден көбірек қозғаласыз ба?)
                </td>
                <td>
                    <div class="form-check form-check-inline" style="margin-right: 40px;">
                        <input class="form-check-input" type="radio" name="question6" value=0>
                        <label class="form-check-label1" for="question1b"></label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline" style="margin-right: 40px;">
                        <input class="form-check-input" type="radio" name="question6" value=1>
                        <label class="form-check-label1" for="question1c"></label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline" style="margin-right: 40px;">
                        <input class="form-check-input" type="radio" name="question6" value=2>
                        <label class="form-check-label1" for="question1a"></label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline" style="margin-right: 0px;">
                        <input class="form-check-input" type="radio" name="question6" value=3>
                        <label class="form-check-label1" for="question1a"></label>
                    </div>
                </td>
            </tr>
            <tr>
                <td>өзіңізге зиян келтіру ойларыныз</td>
                <td>
                    <div class="form-check form-check-inline" style="margin-right: 40px;">
                        <input class="form-check-input" type="radio" name="question7" value=0>
                        <label class="form-check-label1" for="question1b"></label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline" style="margin-right: 40px;">
                        <input class="form-check-input" type="radio" name="question7" value=1>
                        <label class="form-check-label1" for="question1c"></label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline" style="margin-right: 40px;">
                        <input class="form-check-input" type="radio" name="question7" value=2>
                        <label class="form-check-label1" for="question1a"></label>
                    </div>
                </td>
                <td>
                    <div class="form-check form-check-inline" style="margin-right: 0px;">
                        <input class="form-check-input" type="radio" name="question7" value=3>
                        <label class="form-check-label1" for="question1a"></label>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>
    </div>

    <div class="form-group">
        <label for="question1">Сұрақ 4: Соңғы жылы өзіңізді жақсы сезінгенімен, көп жағдайда мұңды немесе басыңқы көңіл
            күйде сезіндіңіз бе?</label>
        <div class="form-check">
            <input type="radio" class="form-check-input" name="question8" value=1>
            <label class="form-check-label">Иә</label>
        </div>
        <div class="form-check">
            <input type="radio" class="form-check-input" name="question8" value=0>
            <label class="form-check-label">Жоқ</label>
        </div>
    </div>
    <div class="form-group">
        <label for="question2">Сұрақ 5: Егер сіз жоғарыда айтылғандардың біреуін бастан кешірсеңіз, мұндай жағдай
            оқуыңызды, жұмысыңызды, үй іші жұмыстарын немесе басқа адамдармен қарым-қатынасыңызды қаншалықты
            қиындатты?</label>
        <div class="form-check">
            <input type="radio" class="form-check-input" name="question9" value=0>
            <label class="form-check-label">әдеттегідей болды</label>
        </div>
        <div class="form-check">
            <input type="radio" class="form-check-input" name="question9" value=1>
            <label class="form-check-label">әдеттегіден сәл қиын</label>
        </div>
        <div class="form-check">
            <input type="radio" class="form-check-input" name="question9" value=2>
            <label class="form-check-label">қиынырақ болды</label>
        </div>
        <div class="form-check">
            <input type="radio" class="form-check-input" name="question9" value=3>
            <label class="form-check-label">қатты қиын болды</label>
        </div>
    </div>
    <div class="form-group">
        <label for="question1">Сұрақ 6: сіз өз мәселелеріңізді кіммен ашық талқылай аласыз?</label>
        <div class="form-check">
            <input type="radio" class="form-check-input" name="question10" value=0>
            <label class="form-check-label">ата-аналарыңыз, қамқоршыларыңыз, отбасы мүшелеріңіз</label>
        </div>
        <div class="form-check">
            <input type="radio" class="form-check-input" name="question10" value=0>
            <label class="form-check-label">достарыңыз</label>
        </div>
        <div class="form-check">
            <input type="radio" class="form-check-input" name="question10" value=0>
            <label class="form-check-label">сыныптастарыңыз</label>
        </div>
        <div class="form-check">
            <input type="radio" class="form-check-input" name="question10" value=0>
            <label class="form-check-label">мектептегі мұғалімдер немесе медицина қызметкерлері</label>
        </div>
        <div class="form-check">
            <input type="radio" class="form-check-input" name="question10" value=1>
            <label class="form-check-label">мәселелерді талқылайтын ешкім жоқ</label>
        </div>
    </div>


    <button type="submit" class="btn btn-primary">Отправить ответы</button>
</form>
</form>
<footer>
    <div>
        <p></p>
    </div>
</footer>
</body>
</html>
        
