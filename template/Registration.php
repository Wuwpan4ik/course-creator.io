<!DOCTYPE html><html lang="ru"><head>    <meta charset="UTF-8">    <meta http-equiv="X-UA-Compatible" content="IE=edge">    <meta name="viewport" content="width=device-width, initial-scale=1.0">    <link rel="stylesheet" href="/css/nullCss.css">    <link rel="stylesheet" href="/css/auth.css">    <title>Course Creator - Регистрация</title>    <!--Favicon-->    <link rel="icon" type="image/x-icon" href="/uploads/course-creator/favicon.ico"></head><body><div class="create-account container-reg">    <form method="POST" action="/LoginController/reg" enctype="multipart/form-data">        <div class="reg-logo">            <img src="../img/regLogo.jpg" alt="">        </div>        <h3>Создайте ваш первый курс прямо сейчас</h3>        <?php if(isset($_SESSION['error']['registration_message'])) echo $_SESSION['error']['registration_message']?>            <div class="reg-name">                <input required placeholder="Имя" type="text" name="first_name">                <input required placeholder="Фамилия" type="text" name="surname">            </div>        <div class="reg-info">            <input required placeholder="Логин" type="text" name="login">            <input required placeholder="Ваш Email" type="email" name="email">            <input required placeholder="Ваш пароль" type="password" name="pass">        </div>        <div>            <p>Выберите вашу нишу</p>            <select required name="niche">                <option>Эзотерика</option>                <option>Обучение</option>                <option>Дизайн</option>                <option>Политика</option>                <option>Спорт</option>                <option>Игры</option>                <option>Животные</option>            </select>        </div>        <div>            <p>Добавьте аватар</p>            <div class="avatar">                <div class="avatar-body">                    <img src="../img/saveAvatar.svg" alt="">                    <div class="avatar-body__info">                        <span id="file-name" class="file-box"></span>                        <span id="file-size" class="file-box"></span>                    </div>                </div>                <div class="input__wrapper">                    <input  accept="image/img, image/jpeg, image/png" name="file" type="file" id="input__file" class="input input__file" onchange='uploadFile(this)' multiple>                    <label for="input__file" class="input__file-button">                        <span class="input__file-icon-wrapper"><img class="input__file-icon" src="./img/plus.svg"  width="25"></span>                        <span class="input__file-button-text">Добавить</span>                    </label>                </div>            </div>        </div>        <button class="reg__button" type="submit" id="submit">Регистрация</button>        <div class="entrance">            <a href="/login">Есть аккаунт?</a>        </div>    </form>    <? unset($_SESSION['error']) ?></div><script src="/js/printFailName.js" ></script></body></html>