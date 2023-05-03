<?php
session_start();
?>
<div
    style="
        background: linear-gradient(#59aad3, #cecfdb);
        background-color: #59aad3;
        height: 100vh;
      "
>
    <div class="d-flex justify-content-center align-items-center">
        <div class="mx-2 mx-md-5 mb-0 p-2 p-md-5 text-center">
            <nav class="navbar navbar-expand-lg">
                <a class="navbar-brand mx-3 mx-md-5" href="index.php">
                    <img
                            src="./img/image%201.png"
                            alt="Logo"
                            width="120"
                            height="120"
                            class="d-inline-block align-middle"
                    />
                </a>
                <button
                        class="navbar-toggler"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#navbarNav"
                        aria-controls="navbarNav"
                        aria-expanded="false"
                        aria-label="Toggle navigation"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item my-2 mx-4 my-lg-0">
                            <a class="nav-link" href="aboutus.html">Біз туралы</a>
                        </li>
                        <li class="nav-item my-2 mx-4 my-lg-0">
                            <a class="nav-link" href="test.html">Сұрақ жауап</a>
                        </li>
                        <li class="nav-item my-2 mx-4 my-lg-0">
                            <a class="nav-link" href="SurakZhauap.html">FAQ</a>
                        </li>
                        <li class="nav-item my-2 mx-4 my-lg-0">
                            <a class="nav-link" href="articles.html">Мақалалар</a>
                        </li>
                        <li class="nav-item my-2 mx-4 my-lg-0">
                            <a class="nav-link" href="help.html">Көмек</a>
                        </li>
                        <li class="nav-item my-2 mx-4 my-lg-0">
                        </li>
                        <?php if (!isset($_SESSION['firstname'])) {?>
                            <li class="nav-item my-2 mx-4 my-lg-0"><a class="nav-link" href="signup.html">Тіркелу</a>
                            <li class="nav-item my-0 mx-0 my-lg-0"></li>
                            <a class="nav-link" href="login.html">Кіру</a></li>
                            <?php
                        }?>

                        <?php if (isset($_SESSION['email'])) { ?>
                        <img src="img/image%204.png">
                        <?php } ?>
                            <?php if (isset($_SESSION['firstname'])) { ?>
                            <li class="nav-item my-1 mx-2 my-lg-0"> </li>
                            <a class="nav-link"  href="profile.php">
                                <?php echo $_SESSION['firstname'];}?>
                            </a>
                        <?php if (isset($_SESSION['firstname'])) { ?>
                            <li class="nav-item my-1 mx-2 my-lg-0"> </li>
                        <a class="nav-link"  href="logout.php">Logout</a>
                        <?php } ?>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
