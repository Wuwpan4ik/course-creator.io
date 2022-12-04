<html lang="ru">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Course Creator - Контакты</title>
    <link rel="stylesheet" href="/css/nullCss.css">
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/UserMain.css">
    <!--Favicon-->
    <link rel="icon" type="image/x-icon" href="/uploads/course-creator/favicon.ico">
</head>

<body class="body">
<? print_r($_SESSION['error']); ?>
<div class="UserContacts bcg">
    <div class="_container">
        <div class="User-header">
            <div class="User-logo user__logo">
                <div class="user__logo-img"><img src="../img/Logo.svg" alt=""></div>
                <div class="user__logo-text">Course Creator</div>
            </div>
            <div class="header-main__burger">
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
                        <input style="font-size: 16px;" type="tel" placeholder="<?=$content['contacts'][0]["telephone"]?>" maxlength="15" disabled>
                    </div>
                    <div class="UserContacts-item UserContacts-body__telephone ">
                        <div class="UserContacts-body__header">
                            <img src="../img/UserContacts/email.svg" alt="">
                            <span>Почта:</span>
                        </div>
                        <input style="font-size: 16px;" type="tel" placeholder="<?=$content['contacts'][0]["email"]?>" maxlength="15" disabled>
                    </div>
                    <?php
                    if ($content['is_contacts']) { ?>
                    <div class="UserContacts-item UserContacts-body__socialNetwork">
                        <div class="UserContacts-body__header">
                            <img src="../img/UserContacts/SocialNetworks.svg" alt="">
                            <span>Социальные сети:</span>
                            <ul class="UserContacts-list">
                                <?php foreach (['instagram', 'whatsapp', 'telegram', 'facebook', 'youtube', 'twitter', 'skype'] as $item) {
                                    if (!is_null($content['contacts'][$item])) {
                                ?>
                                <li><a href="<?php echo htmlspecialchars($content['contacts'][0][$item]) ?>"><img src="../img/UserContacts/SocialNetworcs/<?=$item?>.svg" alt=""></a></li>
                                <?php } } ?>
                            </ul>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
            <form method="POST" action="/ContactController/sendQuestions">
                <input type="hidden" name="author_id" value="<?=$_SESSION['item_id']; ?>">
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
                    <button type="submit">Отправить вопрос</button>
                </div>
            </form>
        </div>
    </div>
</div>

</div>
</body>
</html>