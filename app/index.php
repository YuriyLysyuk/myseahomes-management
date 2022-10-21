<?php

require 'phpLibs/php-multilang/MultiLang.php';
$ml = new MultiLang();

// if (((isset($_GET) && isset($_GET['lang']) && $_GET['lang'] === 'ru'))
//   || (isset($_COOKIE) && isset($_COOKIE['rl_lang_front']) && $_COOKIE['rl_lang_front'] === 'ru')) {
//   $ml->setLanguage('RU');
// };

?>

<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="utf-8" />

  <title>Отдел менеджмента Myseahomes</title>
  <meta name="description" content="Превратите свою квартиру в номер прибыльного апарт-отеля" />

  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

  <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png" />
  <link rel="manifest" href="site.webmanifest" />
  <link rel="mask-icon" href="safari-pinned-tab.svg" color="#1c222a" />
  <link rel="shortcut icon" href="favicon.ico" />
  <meta name="msapplication-TileColor" content="#1c222a" />
  <meta name="msapplication-config" content="browserconfig.xml" />
  <meta name="theme-color" content="#1c222a" />

  <link rel="stylesheet" href="css/fonts.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/izimodal/1.5.1/css/iziModal.min.css" />
  <link rel="stylesheet" href="css/main.min.css" />

  <!-- Yandex.Metrika counter -->
  <script type="text/javascript">
    (function(m, e, t, r, i, k, a) {
      m[i] =
        m[i] ||
        function() {
          (m[i].a = m[i].a || []).push(arguments);
        };
      m[i].l = 1 * new Date();
      (k = e.createElement(t)),
      (a = e.getElementsByTagName(t)[0]),
      (k.async = 1),
      (k.src = r),
      a.parentNode.insertBefore(k, a);
    })(
      window,
      document,
      'script',
      'https://mc.yandex.ru/metrika/tag.js',
      'ym'
    );

    ym(72242728, 'init', {
      clickmap: true,
      trackLinks: true,
      accurateTrackBounce: true,
      webvisor: true,
    });
  </script>
  <noscript>
    <div>
      <img src="https://mc.yandex.ru/watch/72242728" style="position: absolute; left: -9999px" alt="" />
    </div>
  </noscript>
  <!-- /Yandex.Metrika counter -->
</head>

<body>
  <header id="top" class="header">
    <div class="wrap">
      <a href="/"><img class="logo" src="img/logo.png" alt="Myseahomes logo" /></a>
    </div>
  </header>

  <section class="hero">
    <div class="wrap">
      <h1>
        <span class="hero__subtitle">Отдел менеджмента</span><br />
        <span class="text--accented">My</span>seahomes
      </h1>
      <p class="hero__desc">
        <span class="text--accented">/</span> Превратите свою квартиру на Кипре в номер <br>
        <span class="text--accented text--uppercased text--underlined text--bolded">прибыльного апарт-отеля</span>
      </p>
      <button class="btn trigger">Оставить заявку</button>
    </div>
  </section>

  <section class="differents">
    <div class="wrap">
      <h2 class="uppercased">
        Чем мы <br /><span class="text--accented">отличаемся</span> от конкурентов?
      </h2>
      <div class="differents__grid">
        <div class="differents__item">
          <div class="differents__item__number">
            0<span class="text--accented">1</span>
          </div>
          <div class="differents__item__desc">
            Обеспечиваем постоянную заполняемость за счет профессиональной рекламы.
          </div>
        </div>
        <div class="differents__item">
          <div class="differents__item__number">
            0<span class="text--accented">2</span>
          </div>
          <div class="differents__item__desc">
            Защищаем ваши интересы за счет регулярного контроля оплат, проверки состояния квартиры и юридического сопровождения.
          </div>
        </div>
        <div class="differents__item">
          <div class="differents__item__number">
            0<span class="text--accented">3</span>
          </div>
          <div class="differents__item__desc">
            Увеличиваем доходность с помощью консьерж-сервиса и широкого спектра допуслуг.
          </div>
        </div>
        <div class="differents__item">
          <div class="differents__item__number">
            0<span class="text--accented">4</span>
          </div>
          <div class="differents__item__desc">
            Мы работаем в сфере доверительного управления с 2015 года и знаем как быстро сдать апартаменты, виллу или бунгало на прозрачных и выгодных условиях для собственника.
          </div>
        </div>
        <div class="differents__item">
          <div class="differents__item__number">
            0<span class="text--accented">5</span>
          </div>
          <div class="differents__item__desc">
            Ваша квартира сохранится в отличном состоянии. Вы будете получать своевременную и полную отчетность по заселениям. Вы всегда сможете приехать в отпуск в готовую для проживания квартиру.
          </div>
        </div>
        <div class="differents__item differents__item--bordered">
          <div class="differents__item__title text--uppercased">
            <span>и на конец, главное...</span><br />
            мы делаем много денег !
          </div>
          <button class="btn btn--small trigger">оставить заявку</button>
        </div>
      </div>
    </div>
  </section>

  <section class="more">
    <div class="wrap">
      <h2 class="text--uppercased heading--smaller">
        <span class="text--accented">Делаем больше, </span><br />чем требуют наши обязанности!
      </h2>
      <div class="text--smaller">
        Заполните форму ниже и мы сделаем бесплатный аудит и приблизительный прогноз по результатам
      </div>
      <form action="#" class="form">
        <input type="text" name="name" placeholder="Введите ваше имя" required class="form__control form__control--wide" autocomplete="off" />
        <input type="tel" name="phone" placeholder="Контактный телефон" required class="form__control form__control--wide" autocomplete="off" />
        <button class="btn btn--wide" type="submit">Оставить заявку</button>
      </form>
    </div>
  </section>

  <section id="services" class="services">
    <h2 class="text--centered">
      Наши <span class="text--accented">услуги</span>
    </h2>
    <div class="wrap">
      <div class="services__item">
        <div class="img__wrap">
          <img src="img/services-1.jpg" alt="" />
        </div>
        <div class="services__box">
          <h3><span class="text--accented">Доверительное</span> управление вашей недвижимостью</h3>
          <p>
            Полный спектр услуг по управлению недвижимостью, чтобы помочь своим клиентам во всех аспектах их инвестиций в недвижимость.
          </p>
          <button class="btn trigger">Узнать подробнее</button>
        </div>
      </div>
      <div class="services__item">
        <div class="img__wrap">
          <img src="img/assistant.jpg" alt="" />
        </div>
        <div class="services__box">
          <h3><span class="text--accented">Консьерж-сервис</span></h3>
          <p>
            Предлагаем вашему вниманию услуги консьержа на Северном Кипре. Наши представители станут вашими настоящими помощниками в любых ваших вопросов.
          </p>
          <button class="btn trigger">Узнать подробнее</button>
        </div>
      </div>
    </div>
  </section>

  <section id="offer" class="offer">
    <div class="wrap">
      <h2>
        Что мы <span class="text--accented text--underlined">предлагаем</span>
      </h2>
      <div class="offer__grid">
        <div class="offer__item line__bottom line__bottom--first">
          <i class="fas fa-check-double"></i>
          <h3>
            <span class="text--accented">Заявка</span>
          </h3>
          <p>
            Вы оставляете заявку на нашем сайте или по телефону.
          </p>
          <div class="offer__number"><span>1</span></div>
        </div>
        <div class="offer__item line__bottom">
          <i class="fas fa-eye"></i>
          <h3>
            <span class="text--accented">Аудит</span> недвижимости
          </h3>
          <p>Мы проводим аудит вашей недвижимости: оценка состояния, расчет доходности, рекомендации по повышению стоимости сдаваемого жилья.</p>
          <div class="offer__number"><span>2</span></div>
        </div>
        <div class="offer__item line__bottom line__bottom--last">
          <i class="fas fa-tasks"></i>
          <h3>
            <span class="text--accented">Дополнительные</span>
            услуги
          </h3>
          <p>Вы выбираете дополнительные услуги (профессиональная фото/видеосъемка, декорирование, покупка бытовых принадлежностей, полная комплектация объекта под сдачу и др.)</p>
          <div class="offer__number"><span>3</span></div>
        </div>
        <div class="offer__item line__bottom">
          <i class="fas fa-rocket"></i>
          <h3><span class="text--accented">Запуск</span> рекламы</h3>
          <p>Мы запускаем рекламу и обеспечиваем комплексное маркетинговое сопровождение вашего объекта.</p>
          <div class="offer__number"><span>6</span></div>
        </div>
        <div class="offer__item line__bottom">
          <i class="fas fa-hammer"></i>
          <h3><span class="text--accented">Начало</span> работы</h3>
          <p>Мы приступаем к выполнению необходимых работ по договору.</p>
          <div class="offer__number"><span>5</span></div>
        </div>
        <div class="offer__item line__bottom line__bottom--last line__right">
          <i class="fas fa-file-contract"></i>
          <h3>
            <span class="text--accented">Подписание</span> договора
          </h3>
          <p>Мы подписываем договор доверительного управления, в котором юридически фиксируем нашу ответственность и обязательства перед собственником жилья.</p>
          <div class="offer__number"><span>4</span></div>
        </div>
        <div class="offer__item line__bottom line__left">
          <i class="fas fa-chalkboard-teacher"></i>
          <h3>
            <span class="text--accented">Обработка</span>
            заявок
          </h3>
          <p>Мы отвечаем за прием и обработку заявок, сопровождение арендаторов с момента бронирования до выезда.</p>
          <div class="offer__number"><span>7</span></div>
        </div>
        <div class="offer__item line__bottom">
          <i class="fas fa-money-bill-wave"></i>
          <h3>
            <span class="text--accented">Профит</span> :)
          </h3>
          <p>Вы получаете доход от сдачи жилья в аренду в соответствии с согласованными сроками по договору.</p>
          <div class="offer__number"><span>8</span></div>
        </div>
        <div class="offer__item offer__item--bg line__bottom line__bottom--last">
          <div class="bg">
            <h3>
              Нас
              <br />
              <span class="text--accented">рекомендуют</span>
              <br />
              друзьям
            </h3>
          </div>
          <div class="offer__number">
            <span><i class="fas fa-check"></i></span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="why-we" class="why-we">
    <div class="wrap">
      <h2 class="text--centered">
        <span class="text--accented">Почему мы</span>, а не кто-то другой
      </h2>
      <div class="why-we__grid">
        <div class="why-we__item why-we__item--bordered">
          <p>
            <span class="text--accented">Тщательный анализ</span> и выбор надежных арендаторов
          </p>
        </div>
        <div class="why-we__item why-we__item--bordered">
          <p>
            <span class="text--accented">Контроль своевременного</span> погашения арендной платы и коммунальных платежей
          </p>
        </div>
        <div class="why-we__item why-we__item--bordered">
          <p>
            <span class="text--accented">Решение всех</span> необходимых вопросов с ремонтом, уборкой и обслуживанием, включая консьерж-сервис для арендаторов
          </p>
        </div>
        <div class="why-we__item why-we__item--bordered">
          <p>
            <span class="text--accented">Регулярное предоставление</span> собственнику отчетов о проведенной работе
          </p>
        </div>
        <div class="why-we__item why-we__item--bordered">
          <p>
            <span class="text--accented">Быстрое разрешение</span> конфликтных ситуаций и бытовых вопросов с арендаторами
          </p>
        </div>
        <div class="why-we__item why-we__item--bordered">
          <p>
            <span class="text--accented">Обеспечение полной </span> сохранности вашей собственности, включая страхование и юридическую защиту интересов
          </p>
        </div>
        <div class="why-we__item why-we__item--bordered why-we__item--last">
          <p>
            <span class="text--accented">Наша команда на связи</span> 24/7
          </p>
          <p>А еще мы просто хорошие ребята)</p>
        </div>
      </div>
    </div>
  </section>

  <?php  require 'template-parts/reviews.php'; ?>

  <footer class="footer">
    <div class="footer__grid">
      <div class="footer__item footer__title">
        <p class="text--uppercased">
          <span class="text--accented">My</span>seahomes
        </p>
      </div>
      <div class="footer__item footer__nav">
        <a href="#top">Главная</a>
        <a href="#services">Наши услуги</a>
        <a href="#offer">Что мы предлагаем</a>
        <a href="#why-we">Почему мы</a>
      </div>
      <div class="footer__item footer__social">
        <p>Ищите нас в соц сетях</p>
        <div class="footer__social__grid">
          <a href="https://www.instagram.com/targetolog_ustinov/" target="_blank" class="instagram"><i class="fab fa-instagram"></i></a>
          <a href="https://www.facebook.com/Myseahomes" target="_blank" class="facebook"><i class="fab fa-facebook-f"></i></a>
          <a href="https://t.me/targetolog_ustinov" target="_blank" class="telegram"><i class="fab fa-telegram-plane"></i></a>
          <!--<a href="#" target="_blank" class="viber"
              ><i class="fab fa-viber"></i
            ></a>-->
          <a href="https://wa.me/905338365211" target="_blank" class="whatsapp"><i class="fab fa-whatsapp"></i></a>
        </div>
      </div>
      <div class="footer__item footer__phone">
        <a href="tel:+905338365211" class="btn">+905338365211</a>
        <p>Звоните, мы на связи</p>
      </div>
      <div class="footer__item footer__copyrights">
        <a href="https://www.myseahomes.com/privacy-policy.html" target="_blank">Политика конфиденциальности</a>
        <p>Все права защищены <br />© 2022</p>
      </div>
      <div class="footer__item footer__address">
        <p>
          <i class="fas fa-map-marker-alt"></i> Catalkoy, Ayaztepe Sokak,
          Riverside Sitesi
        </p>
      </div>
    </div>
  </footer>

  <div id="modal" data-izimodal-title="Оставьте заявку" data-izimodal-subtitle="Мы перезвоним вам в ближайшие 15 минут">
    <form action="#" class="form">
      <input type="text" name="name" placeholder="Введите ваше имя" required class="form__control form__control--wide" autocomplete="off" />
      <input type="tel" name="phone" placeholder="Контактный телефон" required class="form__control form__control--wide" autocomplete="off" />
      <button class="btn btn--wide" type="submit">Оставить заявку</button>
    </form>
  </div>

  <div id="thank-you" data-izimodal-title="Спасибо!" data-izimodal-subtitle="Ожидайте звонка в течении 15 минут"></div>

  <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
  <script src="js/libs.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/izimodal/1.5.1/js/iziModal.min.js"></script>
  <script src="js/common.js"></script>
</body>

</html>
