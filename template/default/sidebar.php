<?php session_start(); ?>
<html>

  <head>

    <meta charset="utf-8">

    <title>Моя тестовая страница</title>

    <link rel="stylesheet" href="css/main.css">

    <link rel="stylesheet" href="css/sidebar.css">

    <link rel="stylesheet" href="css/sidebaroption.css">

    <link rel="stylesheet" href="css/userprofile.css">

    </head>

    <body>

        <?php

        if(is_null($_SESSION["user"]["name"])){?>

            <div class="nav">

            <div class="sidebar" style="height:88vh;">

				<a href="?option=Login">

					<div class="sidebarOption" >

						<div class="option">

							<img class="ico" src="img/Log.svg">

								<h2>Войти</h2>

						</div>

					</div>

				</a>

				<a href="?option=Registration">

					<div class="sidebarOption">

						<div class="option">

							<img class="ico" src="img/Reg.svg">

								<h2>Зарегистрироваться</h2>

						</div>

					</div>

				</a>

            </div>

            <div class="contactSignout">

                <div class="sidebarOption">

                    <img class="ico" src="img/Support.svg">

                    <h2>Поддержка</h2>

                </div>

            </div>

        </div>

        <?}else{

        ?>

        <div class="nav">

            <div class="sidebar">

                <div class="UserProfile">
					<div class="userProfileContent">
						<img id="avatar" src="<?=$_SESSION['user']['avatar']?>"/>

						<div class="text-info">

							<p>Добро пожаловать,</p>

							<h1><?=$_SESSION["user"]["name"]?></h1>

						</div>
					</div>

                    <button id="msg">5</button>

                    <div>

                        <a href="?option=Account">

							<button class="ico_button"><img class="ico" src="img/Settings.svg"></button>

						</a>

                    </div>

                </div>

				<a href="?option=Main">

					<div class="sidebarOption" >

							<div class="option">

								<img class="ico" src="img/Main.svg">

									<h2>Основные показатели</h2>

							</div>

					</div>

				</a>

				<a href="?option=Project">

					<div class="sidebarOption">

							<div class="option">

								<img class="ico" src="img/Proj.svg">

									<h2>Мои проекты</h2>

							</div>

					</div>

				</a>

				<a href="?option=Analytics">

					<div class="sidebarOption">

							<div class="option">

								<img class="ico" src="img/Analytics.svg">

									<h2>Аналитика</h2>

							</div>

					</div>

				</a>

				<a href="?option=Cases">

					<div class="sidebarOption">

							<div class="option">

								<img class="ico" src="img/Case.svg">

									<h2>Кейсы</h2>

							</div>

					</div>

				</a>

            </div>

            <div class="contactSignout">

                <div class="sidebarOption">

					<div class="option noBG">

						<img class="ico" src="img/Support.svg">

						<h2>Поддержка</h2>

					</div>

                </div>

				<a href="?option=LoginController&method=logout">

					<div class="sidebarOption noBG">

						<div class="option">

							<img class="ico" src="img/Exit.svg">

							<h2>Выход</h2>

						</div>

					</div>

				</a>

            </div>

        </div>

        <?}?>

    </body>

</html>