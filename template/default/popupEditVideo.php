<div id="popup__background" style="align-items: center">
    <div class="popup__edit">
        <div class="popup__header-container">
            <div class="popup__header">
                <div class="popup__header-left">
                    <button class="close__btn"><img src="../../img/ArrowLeft.svg" alt="Назад"></button>
                    <h2 class="display_name">Настройка действий</h2>
                </div>
                <button type="button" onclick="save();" class="popup__edit-btn">Сохранить</button>
            </div>
        </div>
        <form id="initButton" action="?option=VideoController&method=initVideoButton" method="POST" class="popup__body-container">
            <input id="id_item" name="id_item" type="hidden" value="">
            <div class="popup__body-block" style="width: 320px;">
                <!--Прелоудер-->
                <div class="slider__item">
                    <div class="slider__video popup-video">
                    </div>
                    <div class="slider__header _conatiner-player ">
                        <div class="slider__header-logo">
                            <div class="slider__header-logo-img">
                                <img width="48px" src="<?=$_SESSION["user"]['avatar']?>" alt="">
                            </div>
                            <div class="slider__header-logo-text">
                                <?=$_SESSION["user"]["first_name"]?>
                            </div>
                        </div>
                        <div class="slider__header-views">
                            <div class="slider__header-views-img">
                                <img src="../img/smallPlayer/views.svg" alt="">
                            </div>
                            <div class="slider__header-views-count">
                                126
                            </div>
                        </div>
                    </div>
                    <div class="slider__item-info _conatiner-player">
                        <div class="slider__item-title">

                        </div>
                        <div class="slider__item-text">

                        </div>
                        <div class="slider__item-button button-open">
                            <button type="button" class="button button-video">Клик</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="popup__body-block">
                <div class="popup__body-item">
                    <div class="popup__body-item__button">
                        <button class="button-end" type="button">Конец видео</button>
                        <button class="button-click" type="button">Клик на кнопку</button>
                    </div>
                    <label for="first_do">Дейсвтие после просмотра:</label>
                    <select name="first_do" id="first_do">
                        <option value="list" selected>Список уроков</option>
                        <option value="form">Форма заявки</option>
                        <option value="pay_form">Форма оплаты</option>
                        <option value="link">Переход по ссылке</option>
                        <option value="next_lesson">Открыть следующий урок</option>
                    </select>
                    <div class="popup__body-item" id="popup__body-form-1">
                        <label for="form_id display-none">Составляющие формы:</label>
                        <button class="addFormInput" id="first_do-list" onclick="addFormItem(this)" type="button"><img src="../../img/add.png"> Добавить поле</button>
                    </div>
                </div>
                <div class="popup__body-item">
                    <label for="button_text">Текст для кнопки:</label>
                    <input name="button_text" maxlength="20" class="videoname" id="video_name" type="text" style="padding-left: 15px" placeholder="<?=$v['button_text']?>">
                    <label class="second_do" for="second_do">После нажатия на кнопку:</label>
                    <select class="second_do" name="second_do" id="second_do">
                        <option value="list" selected>Список уроков</option>
                        <option value="form">Форма заявки</option>
                        <option value="pay_form">Форма оплаты</option>
                        <option value="link">Переход по ссылке</option>
                        <option value="next_lesson">Открыть следующий урок</option>
                    </select>
                    <div class="popup__body-item display-none" id="popup__body-form-2">
                        <label for="form_id">Составляющие формы:</label>
                        <button class="addFormInput" id="second_do-list" onclick="addFormItem(this)" type="button"><img src="../../img/add.png"> Добавить поле</button>
                    </div>
                </div>
            </div>
            <button type="submit" id="send__edit-video" hidden="hidden"></button>
        </form>
    </div>
</div>