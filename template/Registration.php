<!DOCTYPE html><html lang="en"><head>    <meta charset="UTF-8">    <meta http-equiv="X-UA-Compatible" content="IE=edge">    <meta name="viewport" content="width=device-width, initial-scale=1.0">    <link rel="stylesheet" href="/css/nullCss.css">    <link rel="stylesheet" href="/css/auth.css">    <title>Course Creator - Регистрация</title>    <!--Favicon-->    <link rel="icon" type="image/x-icon" href="/uploads/course-creator/favicon.ico"></head><body><div class="create-account container-reg">    <form method="POST" action="/LoginController/reg" enctype="multipart/form-data">        <div class="reg-logo">            <img src="../img/regLogo.jpg" alt="">        </div>        <h3>Создайте ваш первый курс прямо сейчас</h3>        <?php if(isset($_SESSION['error']['registration_message'])) echo $_SESSION['error']['registration_message']?>            <div class="reg-name">                <div class="input_focus">                    <label for="first_name" class="label_focus">Имя</label>                    <input required type="text" name="first_name">                    <span class="clear_input_val">                        <img src="/img/clear_input.svg" alt="">                    </span>                </div>                <div class="input_focus">                    <label for="second_name" class="label_focus">Фамилия</label>                    <input required type="text" name="second_name">                    <span class="clear_input_val">                        <img src="/img/clear_input.svg" alt="">                    </span>                </div>            </div>        <div class="reg-info">            <div class="input_focus">                <label for="login_name" class="label_focus">Логин</label>                <input type="text" name="login_name">                <span class="clear_input_val">                        <img src="/img/clear_input.svg" alt="">                    </span>            </div>            <div class="input_focus">                <label for="email" class="label_focus">Ваша почта</label>                <input required type="email" name="email">                <span class="clear_input_val">                        <img src="/img/clear_input.svg" alt="">                    </span>            </div>            <div class="input_focus">                <label for="pass" class="label_focus">Ваш пароль</label>                <input required type="password" name="pass">                <span class="clear_input_val">                        <img src="/img/clear_input.svg" alt="">                    </span>            </div>        </div>        <div>            <p>Выберите нишу</p>            <select class="choose-niche" required name="niche">                <option>Эзотерика</option>                <option>Обучение</option>                <option>Дизайн</option>                <option>Политика</option>                <option>Спорт</option>                <option>Игры</option>                <option>Животные</option>            </select>        </div>        <div>            <p>Добавьте аватар</p>            <div class="avatar">                <div class="avatar-body">                    <img src="../img/saveAvatar.svg" alt="">                    <div class="avatar-body__info">                        <span id="file-name" class="file-box"></span>                        <span id="file-size" class="file-box"></span>                    </div>                </div>                <div class="input__wrapper">                    <input  accept="image/img, image/jpeg, image/png" name="avatar" type="file" id="input__file" class="input input__file" onchange='uploadFile(this)' multiple>                    <label for="input__file" class="input__file-button">                        <span class="input__file-icon-wrapper"><img class="input__file-icon" src="./img/plus.svg"  width="25"></span>                        <span class="input__file-button-text">Добавить</span>                    </label>                </div>            </div>        </div>        <button class="reg__button" type="submit" id="submit">Регистрация</button>        <div class="entrance">            <a href="/login">Есть аккаунт?</a>        </div>    </form>    <? unset($_SESSION['error']) ?></div><script src="/js/printFailName.js"></script><!--For Input Holders--><script src="/js/jquery-3.6.1.min.js"></script><script>    window.onload = () =>{        let inputs = document.querySelectorAll('.input_focus input');        let inputsLabel = document.querySelectorAll('.input_focus label');        let inputClear = document.querySelectorAll('.input_focus span');        for(let i =0; i < inputs.length; i++){            inputs[i].addEventListener('input', function(){                if(inputs[i].value != ""){                    inputsLabel[i].classList.add('activeLabel');                    inputClear[i].classList.add('has_content');                }                else {                    inputsLabel[i].classList.remove('activeLabel');                    inputClear[i].classList.remove('has_content');                }            });            inputClear[i].onclick = () =>{                inputsLabel[i].classList.remove('activeLabel')                inputs[i].value = "";                inputClear[i].classList.remove('has_content')            }        }    }</script></body></html>