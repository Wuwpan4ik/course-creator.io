<!DOCTYPE html><html lang="ru"><head>    <meta charset="UTF-8">    <meta http-equiv="X-UA-Compatible" content="IE=edge">    <meta name="viewport" content="width=device-width, initial-scale=1.0">    <link rel="stylesheet" href="/css/nullCss.css">    <link rel="stylesheet" href="/css/auth.css">    <title>Course Creator - Вход</title>    <!--Favicon-->    <link rel="icon" type="image/x-icon" href="/uploads/course-creator/favicon.ico"></head><body><div class=" login-account container-reg">    <form method="POST" action="/LoginController/login">        <div class="reg-logo">            <img src="../img/regLogo.jpg" alt="">        </div>        <h3>Войдите в аккаунт</h3>        <div class="login-inputs">            <div class="input_focus">                <label for="email" class="label_focus">Ваш логин</label>                <input type="email" name="email">            </div>            <div class="input_focus">                <label for="pass" class="label_focus">Ваш пароль</label>                <input type="password" name="pass">            </div>        </div>        <button class="reg__button" type="submit" id="submit">Войти</button>        <div class="entrance login-footer">            <a href="/reg">Зарегистрироваться</a>            <a href="/recovery">Забыли пароль?</a>        </div>    </form>    <!--For Input Holders-->    <script src="/js/jquery-3.6.1.min.js"></script>    <script>        window.onload = () =>{            let inputs = document.querySelectorAll('.input_focus input');            let inputsLabel = document.querySelectorAll('.input_focus label');            for(let i =0; i < inputs.length; i++){                inputs[i].addEventListener('input', function(){                    if(inputs[i].value != ""){                        inputsLabel[i].classList.add('activeLabel');                    }                    else {                        inputsLabel[i].classList.remove('activeLabel');                    }                });            }        }    </script></div></body></html>