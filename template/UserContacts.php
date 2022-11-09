<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Моя тестовая страница</title>
    <link rel="stylesheet" href="css/nullCss.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/settingsAccountUser.css">
    <link rel="stylesheet" href="css/UserMenu.css">



</head>

<body class="body">
<div class="UserContacts bcg">
    <div class="_container">
        <div class="User-header">
            <div class="User-logo user__logo">
                <div class="user__logo-img"><img src="../img/Logo.svg" alt=""></div>
                <div class="user__logo-text">Центр Ратнера</div>
            </div>
            <div class="header-white__burger">
                <div class="white__burger">
                    <span></span>
                </div>
            </div>
        </div>
    </div>
    <div class="popup__container">
        <div class="userPopup">
            <div class=" userPopup__title">
                Контакты:
            </div>
            <div class=" UserContacts userPopup__body">
                <div class="UserContacts-body ">
                    <div class="UserContacts-item UserContacts-body__telephone ">
                        <div class="UserContacts-body__header">
                            <img src="../img/UserContacts/phone.svg" alt="">
                            <span>Телефон:</span>
                        </div>
                        <input type="tel" placeholder="<?=$content[0]["telephone"]?>" maxlength="15" disabled>
                    </div>
                    <div class="UserContacts-item UserContacts-body__socialNetwork">
                        <div class="UserContacts-body__header">
                            <img src="../img/UserContacts/SocialNetworks.svg" alt="">
                            <span>Социальные сети:</span>
                            <ul class="UserContacts-list">
                                <li><a href=""><img src="../img/UserContacts/SocialNetworcs/instagram.svg" alt=""></a></li>
                                <li><a href=""><img src="../img/UserContacts/SocialNetworcs/whatsapp.svg" alt=""></a></li>
                                <li><a href=""><img src="../img/UserContacts/SocialNetworcs/telegram.svg" alt=""></a></li>
                                <li><a href=""><img src="../img/UserContacts/SocialNetworcs/facebook.svg" alt=""></a></li>
                                <li><a href=""><img src="../img/UserContacts/SocialNetworcs/youtube.svg" alt=""></a></li>
                                <li><a href=""><img src="../img/UserContacts/SocialNetworcs/twitter.svg" alt=""></a></li>
                                <li><a href=""><img src="../img/UserContacts/SocialNetworcs/skype.svg" alt=""></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <form method="POST" action="?option=ContactController&method=SendQuestion">
                <div class="UserContacts-footer">
                    <div class="UserContacts-footer__title">
                        Есть вопросы?
                    </div>
                    <div class="UserContacts-footer__tarea">
                        <textarea name="question" id=""  placeholder="Ваш вопрос"></textarea>
                        <span> <img src="../img/textarea.svg" alt=""></span>
                    </div>
                </div>
                <div class="UserContacts userPopup__button">
                    <button>Отправить вопрос</button>
                </div>
            </form>
        </div>
    </div>

</div>

</div>
</body>
</html>