<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Course Creator - Уведомления</title>
    <link rel="stylesheet" href="/css/nullCss.css">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/UserMain.css">
    <!--Favicon-->
    <link rel="icon" type="image/x-icon" href="/uploads/course-creator/favicon.ico">
</head>

<body class="body">
<div class="UserNotifications bcg">
    <div class="_container">
        <div class="User-header">
            <div class="User-logo user__logo">
                <div class="user__logo-img"><img src="../img/Logo.svg" alt=""></div>
                <div class="user__logo-text">Course Creator</div>
            </div>
            <div class="header-white__burger">
                <a href="/UserMenu">
                    <div class="main__burger">
                        <span></span>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <div class="popup__container">
    <div class="userPopup">
        <div class="user-content">
        <div class="aboutTheAuthor userPopup__title">
            Уведомления:
        </div>
        <div class="userPopup__body">
            <div class="UserNotifications-cards">
				<?php foreach($content as $nt){?>
                <div class="UserNotifications-item <?=$nt["class"]?>">
                    <div class="UserNotifications-item__img">
                        <img src="../img/UserNotifications/like.svg" alt="">
                    </div>
                    <div class="UserNotifications-item__text">
                        <?=$nt["body"]?>
                    </div>
                    <div class="UserNotifications-item__info">
                        <div class="UserNotifications-item__info-time">
                            <?=$nt["time"]?>
                        </div>
                        <div class="UserNotifications-item__info-date">
                            <?=$nt["date"]?>
                        </div>
                    </div>
                </div>
				<?}?>
            </div>
        </div>
    </div>
    </div>
    </div>

</div>

</div>
</body>
</html>