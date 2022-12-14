<div class="overlay-allLessons overlay overlay-<?=$name?>">
    <div class="whiteSpace" style="position: absolute;top: 0;width: 100%;">

    </div>
    <div class="popup__allLessons popup popup-<?=$name?>">
        <div class="popup__allLessons-body">
            <div class="popup__allLessons-title popup-title">Все уроки курса:</div>
            <div class="popup__allLessons-text popup-text">Курс состоит из <?=count($content['course_content']); ?> уроков</div>
            <div class="popup__allLessons-body__items">
                <?php $count = 1; foreach ($content['course_content'] as $item) { ?>
                    <div class="popup__allLessons-item popup-item">
                        <div class="popup__allLessons-item-video" data-price="<?=$item['price']?>" data-course="<?=$item['id'];?>" data-author="<?=$item['author_id'];?>">
                            <div class="popup__allLessons-item-video__img">
                                <img src="/<?=$item['thubnails']?>" alt="">
                                <div class="popup__allLessons-item-video-play">
                                    <img src="../img/smallPlayer/play.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="popup__allLessons-item-info">
                            <div class="popup__allLessons-item-info-header">
                                <div class="popup__allLessons-item-info-header-number">
                                    0<?=$count?>
                                </div>
                            </div>
                            <div class="popup__allLessons-item-info-title">
                                <?=$item['name']?>
                            </div>
                        </div>
                    </div>
                    <?php $count += 1;
                } ?>
            </div>
        </div>
        <div class="popup__allLessons-form">
            <div class="popup__allLessons-form-buy button-open">
                <button data-price="<?=$content['course_id'][0]['price']?>" data-course="<?=$content['course_id'][0]['id']?>" data-author="<?=$content['course_id'][0]['author_id']?>" type="button" class="button button-buy">Купить весь курс за <?php print_r($content['course_id'][0]['price']) ?> <?=isset($_SESSION["user"]['currency']) ? $_SESSION["user"]['currency'] : '₽'?></button>
            </div>
            <div class="popup__allLessons-form-notBuy">
                <button type="button" class="button button-notBuy">Пока не хочу покупать</button>
            </div>
        </div>
    </div>
</div>