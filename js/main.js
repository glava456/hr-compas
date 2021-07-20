jQuery(document).ready(function () {
  let burger = $('.header__burger'); /* Создаем переменную, в которой сам бургер */
  let all = $(
    '.header__overlay, .header__navigation, .header__button, .menu',
  ); /* Создаем переменную, в которой все классы, которым добавляем active */

  burger.on('click', function () {
    /* Создаем функцию по клику на бургер */ all.toggleClass(
      'active',
    ); /* Добавляем и убираем класс active при клике */
  });

  // ------------------- Липкое меню ---------------
  window.onscroll = function () {
    myFunction();
  };

  var navbar = document.getElementById('navbar');
  var sticky = navbar.offsetTop;

  function myFunction() {
    if (window.pageYOffset >= sticky) {
      navbar.classList.add('sticky');
    } else {
      navbar.classList.remove('sticky');
    }
  }

  // ------------------- Слайдер ---------------
  jQuery(document).ready(function() {
    if (jQuery(window).width() < 860 ) {
      $('.imagesnew_dotted').css({
        display: 'none',
      });
    };
  
  });

  $('.images').slick({
    // это изначально slick слайдер для основного блока изображений
    slidesToShow: 1, // по одному слайдеру
    slidesToScroll: 1, // по одному менять
    arrows: true, // включение стрелок (если не нужны false)
    cssEase: 'linear',
    // adaptiveHeight: true,
    infinite: true,
    speed: 400,
  fade: true,
    adaptiveHeight: true, //высота слайдера меняется от контента
    // nextArrow: '<img src="./image/bt-arrow-next.png" alt="" class="next">',
    // prevArrow: '<img src="./image/bt arrow_prev.png" alt="" class="prev">',
    asNavFor: '.imagesnew_dotted', // указываем что навигация для слайдера будет отдельно (указываем класс куда вешаем навигацию)
  });

  $('.imagesnew_dotted').slick({
    // настройка навигации
    slidesToShow: 12, // указываем что нужно показывать 3 навигационных изображения
    asNavFor: '.images', // указываем что это навигация для блока выше
    // rows:2,
    focusOnSelect: true, // указываем что бы слайделось по клику
    arrows: false, // включение стрелок (если не нужны false)
  });



  $('.images__flex').css({
    'min-width': '0',
    display: 'flex',
    'flex-wrap': 'wrap',
  });

  $('.slick-track').css({
    'min-width': '0',
    display: 'flex',
    'flex-wrap': 'wrap',
  });




  // ------------------- Переключение табов ---------------

  // ------------------- Попап ---------------

  var elements = $('.modal-overlay, .modal');

  $('#bisness_reg').click(function () {
    $('body').addClass('active__body');
    elements.addClass('active');
    $('#description_modal').val('002 Конференция: HR-компас курс на ассессмент Business');
  });

  $('#free_reg').click(function () {
    $('body').addClass('active__body');
    elements.addClass('active');
    $('#description_modal').val('002 Конференция: HR-компас курс на ассессмент free');
  });

  $('.close-modal').click(function () {
    event.preventDefault();
    elements.removeClass('active');
    $('body').removeClass('active__body');
  });

  //-------------footer-date------------------------

  let date = new Date().getFullYear(); /* Создаем переменную, в которой (new Date().getFullYear()) - текущий год */
  $('#date').text(
    new Date().getFullYear(),
  ); /* Находим нужный отрезок в html, чтобы заменить его на текущий год */

  // ----------------- плавный скролл по странице к нужному месту -----------

  // $(window).scroll(function () {
  //    let height = $(window).scrollTop();
  //    /*Если сделали скролл на 600px задаём новый класс для span*/
  //    if (height > 600) {
  //       $('#span').addClass('active');
  //    } else {
  //       /*Если меньше 600px удаляем класс для span*/
  //       $('#span').removeClass('active');
  //    }

  //    if (height > 100) {
  //       /*Если сделали скролл на 100px задаём новый класс для ancor*/
  //       $('#ancor').addClass('active');
  //    } else {
  //       /*Если меньше 100px удаляем класс для ancor*/
  //       $('#ancor').removeClass('active');
  //    }

  // $("#menu, #ancor").on("click", "a", function (event) { /* Создаем функцию, по клику на якорь и меню (2 действия в одной функции, можно отделить убран не нужный id) */
  //    event.preventDefault();
  //    let id = $(this).attr('href'), /* Создаем переменную, в которой обращаемся к хрефу на текущей странице */
  //       top = $(id).offset().top; /* Создаем переменную, в которой обращаемся к хрефу на текущей странице выше и возвращаем объект к верхней точке на странице */
  //    $('body,html').animate({ scrollTop: top }, 1500); /* Задаем анимацию с какой скоростью произойдет скролл к верху страницы */
  // });

  // });
});

function openCity(evt, cityName) {
  // Declare all variables
  var i, tabcontent, tablinks;

  // Get all elements with class="tabcontent" and hide them
  tabcontent = document.getElementsByClassName('tab__content');
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = 'none';
  }

  // Get all elements with class="tablinks" and remove the class "active"
  tablinks = document.getElementsByClassName('tab__links');
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(' active', '');
  }

  // Show the current tab, and add an "active" class to the button that opened the tab
  document.getElementById(cityName).style.display = 'block';
  evt.currentTarget.className += ' active';
}

$('a[href*="#"]').on('click', function (e) {
  e.preventDefault();

  if ($(window).width() < 576) {
    $('html, body').animate(
      {
        scrollTop: $($(this).attr('href')).offset().top - 100,
      },
      500,
      'linear',
    );
  } else {
    $('html, body').animate(
      {
        scrollTop: $($(this).attr('href')).offset().top - 165,
      },
      500,
      'linear',
    );
  }
});