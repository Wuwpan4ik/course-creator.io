/*SmallPlayer*/$(document).ready(function() {    const button = document.querySelectorAll('.button-open');    let video = document.querySelectorAll('.slider__video-item');    const pauseVideo = document.querySelector('.pause__video');    const playVideo = document.querySelectorAll('.play__video');    const popUpBuy = document.querySelector('.popup__buy');    const videoChoice = document.querySelectorAll('.popup__allLessons-item-video');    const buttonBuy = document.querySelectorAll('.button-buy');    const backPopUpBuy = document.querySelectorAll('.button-back');    //    // playVideo.addEventListener('click', () => {    //     Array.from(video).forEach((elem) => {    //         elem.play();    //     })    //     console.log('214124')    //     playVideo.classList.remove('active');    //    //    // })   // document.querySelectorAll('.slider__item').forEach((item) => {   //     if(item.classList.contains('.slick-current')){   //         console.log('fdsfds')   //     }   //     // tem.querySelectorAll('.slider__video-item').forEach((el) => {   //     //     el.addEventListener('click', () =>{   //     //   //     //     })   //     // })   //   //   //  })    Array.from(playVideo).forEach((elem) => {        elem.addEventListener('click', () => {            elem.parentElement.querySelector('.slider__video-item').play();            elem.classList.remove('active');        })    })    Array.from(button).forEach((elem) => {        elem.addEventListener('click', () => {            elem.parentElement.parentElement.querySelector('.overlay').classList.add('active');            if (pauseVideo) {                pauseVideo.classList.add('active');            }            setTimeout(function () {                elem.parentElement.parentElement.querySelector('.popup').classList.add('active');            }, (20));            Array.from(video).forEach((elem) => {                elem.pause();            })        })    })    Array.from(videoChoice).forEach((elem) => {        elem.addEventListener('click', () => {            popUpBuy.classList.add('active');            Array.from(button).forEach((elem) => {                elem.parentElement.parentElement.querySelector('.popup-button').classList.remove('active');            })        })    })    Array.from(buttonBuy).forEach((elem) => {        elem.addEventListener('click', () => {            popUpBuy.classList.add('active');            Array.from(button).forEach((elem) => {                elem.parentElement.parentElement.querySelector('.popup-button').classList.remove('active');            })        })    })    Array.from(backPopUpBuy).forEach((elem) => {        elem.addEventListener('click', () => {            Array.from(button).forEach((elem) => {                setTimeout(function () {                    popUpBuy.classList.remove('active');                }, (20));                elem.parentElement.parentElement.querySelector('.popup-button').classList.add('active');            })        })    })    Array.from(document.querySelectorAll('.overlay')).forEach((elem) => {        elem.onclick = function (event) {            if (event.target === elem) {                Array.from(document.querySelectorAll('.popup')).forEach((elem) => {                    elem.classList.remove('active');                    pauseVideo.classList.remove('active');                });                setTimeout(function () {                    elem.classList.remove('active');                }, (500));            }        };    });});document.addEventListener("click", function (is_close) {    var close_next;    if (is_close.target.className == "showup") {        close_next = is_close.target.id;        document.getElementById(close_next).nextElementSibling.style = "display:block";    }    if (is_close.target.className == "close") {        document.getElementById(close_next).nextElementSibling.style = "display:none";    }});/* Analytics*/const checkBox = document.body.querySelectorAll('.checkbox');checkBox.forEach(item =>{    item.onclick = function (){        item.parentElement.parentElement.classList.toggle('completed')    }})/*UserPopups*/const otherCourses = document.querySelectorAll('.otherCourses');const availableСoursesBtn = document.querySelectorAll('.availableСoursesBtn');const aboutTheAuthor = document.querySelector('.aboutTheAuthor');const availableToYou = document.querySelector('.availableToYou');const questionBtn = document.querySelectorAll('.questionBtn');const question = document.querySelector('.question');const course = document.querySelector('.Course');const allLessons = document.querySelector('.AllLessons');const youChosen = document.querySelector('.youChosen');const backToCourse = document.querySelectorAll('.courseBackBtn');backToCourse.forEach((item) => {    item.addEventListener('click', function () {        document.querySelectorAll('.userPopup').forEach(item => {            if (item.classList.contains('active')) {                item.classList.remove('active');            }        })        aboutTheAuthor.classList.add('active');    })})availableСoursesBtn.forEach(item => {    item.onclick = function () {        availableToYou.classList.add('active');        aboutTheAuthor.classList.remove('active')    }})questionBtn.forEach(item => {    item.onclick = function () {        question.classList.add('active');        availableToYou.classList.remove('active');        aboutTheAuthor.classList.remove('active');        course.classList.remove('active');        course.classList.remove('active');        youChosen.classList.remove('active');    }})otherCourses.forEach(item => {    item.onclick = function () {        allLessons.classList.add('active');        availableToYou.classList.remove('active')    }})// courseBackBtn.onclick = function () {//     availableToYou.classList.add('active');//     course.classList.remove('active');// }// allLessonsBackBtn.onclick = function () {//     availableToYou.classList.add('active');//     allLessons.classList.remove('active');// }// youChosenBackBtn.onclick = function () {//     allLessons.classList.add('active');//     youChosen.classList.remove('active');// }// questionBackBtn.onclick = function () {//     aboutTheAuthor.classList.add('active');//     question.classList.remove('active');// }