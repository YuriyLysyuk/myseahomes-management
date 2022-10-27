<?php

require 'phpLibs/php-multilang/MultiLang.php';
$ml = new MultiLang();
$langUrl = '';

if (
  (isset($_GET) && isset($_GET['lang']) && $_GET['lang'] === 'en') ||
  (isset($_COOKIE) &&
    isset($_COOKIE['rl_lang_front']) &&
    $_COOKIE['rl_lang_front'] === 'en')
) {
  $ml->setLanguage('EN');
  $lang = 'en';
}

if (
  (isset($_GET) && isset($_GET['lang']) && $_GET['lang'] === 'ru') ||
  (isset($_COOKIE) &&
    isset($_COOKIE['rl_lang_front']) &&
    $_COOKIE['rl_lang_front'] === 'ru')
) {
  $ml->setLanguage('RU');
  $lang = 'ru';
  $langUrl = '/ru/';
}

if (
  (isset($_GET) && isset($_GET['lang']) && $_GET['lang'] === 'tr') ||
  (isset($_COOKIE) &&
    isset($_COOKIE['rl_lang_front']) &&
    $_COOKIE['rl_lang_front'] === 'tr')
) {
  $ml->setLanguage('TR');
  $lang = 'tr';
  $langUrl = '/tr/';
}
?>

<!DOCTYPE html>
<html lang="<?= $lang ?>">

<head>
  <meta charset="utf-8" />

  <title><?= $ml->tr('Отдел менеджмента Myseahomes') ?></title>
  <meta name="description" content="<?= $ml->tr(
    'Превратите свою квартиру в номер прибыльного апарт-отеля'
  ) ?>" />

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
  <link rel="stylesheet" href="css/main.min.css?1" />

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
      <a href="https://www.myseahomes.com<?php echo $langUrl; ?>"><img class="logo" src="img/logo.png" alt="Myseahomes logo" /></a>
    </div>
  </header>

  <section class="hero">
    <div class="wrap">
      <h1>
        <span class="hero__subtitle"><?= $ml->tr(
          'Отдел менеджмента'
        ) ?></span><br />
        <span class="text--accented">My</span>seahomes
      </h1>
      <p class="hero__desc">
        <span class="text--accented">/</span> <?= $ml->tr(
          'Превратите свою квартиру на Кипре в номер'
        ) ?> <br>
        <span class="text--accented text--uppercased text--underlined text--bolded"><?= $ml->tr(
          'прибыльного апарт-отеля'
        ) ?></span>
      </p>
      <button class="btn trigger"><?= $ml->tr('Оставить заявку') ?></button>
    </div>
  </section>

  <section class="differents">
    <div class="wrap">
      <h2 class="uppercased">
        <?= $ml->tr('Чем мы') ?> <br /><span class="text--accented"><?= $ml->tr(
   'отличаемся'
 ) ?></span> <?= $ml->tr('от конкурентов') ?>?
      </h2>
      <div class="differents__grid">
        <div class="differents__item">
          <div class="differents__item__number">
            0<span class="text--accented">1</span>
          </div>
          <div class="differents__item__desc">
            <?= $ml->tr(
              'Обеспечиваем постоянную заполняемость за счет профессиональной рекламы.'
            ) ?>
          </div>
        </div>
        <div class="differents__item">
          <div class="differents__item__number">
            0<span class="text--accented">2</span>
          </div>
          <div class="differents__item__desc">
            <?= $ml->tr(
              'Защищаем ваши интересы за счет регулярного контроля оплат, проверки состояния квартиры и юридического сопровождения.'
            ) ?>
          </div>
        </div>
        <div class="differents__item">
          <div class="differents__item__number">
            0<span class="text--accented">3</span>
          </div>
          <div class="differents__item__desc">
            <?= $ml->tr(
              'Увеличиваем доходность с помощью консьерж-сервиса и широкого спектра допуслуг.'
            ) ?>
          </div>
        </div>
        <div class="differents__item">
          <div class="differents__item__number">
            0<span class="text--accented">4</span>
          </div>
          <div class="differents__item__desc">
            <?= $ml->tr(
              'Мы работаем в сфере доверительного управления с 2015 года и знаем как быстро сдать апартаменты, виллу или бунгало на прозрачных и выгодных условиях для собственника.'
            ) ?>
          </div>
        </div>
        <div class="differents__item">
          <div class="differents__item__number">
            0<span class="text--accented">5</span>
          </div>
          <div class="differents__item__desc">
            <?= $ml->tr(
              'Ваша квартира сохранится в отличном состоянии. Вы будете получать своевременную и полную отчетность по заселениям. Вы всегда сможете приехать в отпуск в готовую для проживания квартиру.'
            ) ?>
          </div>
        </div>
        <div class="differents__item differents__item--bordered">
          <div class="differents__item__title text--uppercased">
            <span><?= $ml->tr('и на конец, главное...') ?></span><br />
            <?= $ml->tr('мы делаем много денег!') ?>
          </div>
          <button class="btn btn--small trigger"><?= $ml->tr(
            'оставить заявку'
          ) ?></button>
        </div>
      </div>
    </div>
  </section>

  <section class="more">
    <div class="wrap">
      <h2 class="text--uppercased heading--smaller">
        <span class="text--accented"><?= $ml->tr(
          'Делаем больше'
        ) ?>, </span><br /><?= $ml->tr('чем требуют наши обязанности!') ?>
      </h2>
      <div class="text--smaller">
        <?= $ml->tr(
          'Заполните форму ниже и мы сделаем бесплатный аудит и приблизительный прогноз по результатам'
        ) ?>
      </div>
      <form action="#" class="form">
        <input type="text" name="name" placeholder="<?= $ml->tr(
          'Введите ваше имя'
        ) ?>" required class="form__control form__control--wide" autocomplete="off" />
        <input type="tel" name="phone" placeholder="<?= $ml->tr(
          'Контактный телефон'
        ) ?>" required class="form__control form__control--wide" autocomplete="off" />
        <button class="btn btn--wide" type="submit"><?= $ml->tr(
          'Оставить заявку'
        ) ?></button>
      </form>
    </div>
  </section>

  <section id="services" class="services">
    <h2 class="text--centered">
      <?= $ml->tr('Наши') ?> <span class="text--accented"><?= $ml->tr(
   'услуги'
 ) ?></span>
    </h2>
    <div class="wrap">
      <div class="services__item">
        <div class="img__wrap">
          <img class="lazy" data-src="img/services-1.jpg" alt="" />
        </div>
        <div class="services__box">
          <h3><span class="text--accented"><?= $ml->tr(
            'Доверительное'
          ) ?></span> <?= $ml->tr('управление вашей недвижимостью') ?></h3>
          <p>
            <?= $ml->tr(
              'Полный спектр услуг по управлению недвижимостью, чтобы помочь своим клиентам во всех аспектах их инвестиций в недвижимость.'
            ) ?>
          </p>
          <button class="btn trigger"><?= $ml->tr(
            'Узнать подробнее'
          ) ?></button>
        </div>
      </div>
      <div class="services__item">
        <div class="img__wrap">
          <img class="lazy" data-src="img/assistant.jpg" alt="" />
        </div>
        <div class="services__box">
          <h3><span class="text--accented"><?= $ml->tr(
            'Консьерж-сервис'
          ) ?></span></h3>
          <p>
            <?= $ml->tr(
              'Предлагаем вашему вниманию услуги консьержа на Северном Кипре. Наши представители станут вашими настоящими помощниками в любых ваших вопросов.'
            ) ?>
          </p>
          <button class="btn trigger"><?= $ml->tr(
            'Узнать подробнее'
          ) ?></button>
        </div>
      </div>
    </div>
  </section>

  <section id="offer" class="offer">
    <div class="wrap">
      <h2>
        <?= $ml->tr(
          'Что мы'
        ) ?> <span class="text--accented text--underlined"><?= $ml->tr(
   'предлагаем'
 ) ?></span>
      </h2>
      <div class="offer__grid">
        <div class="offer__item line__bottom line__bottom--first">
          <i class="fas fa-check-double"></i>
          <h3>
            <span class="text--accented"><?= $ml->tr('Заявка') ?></span>
          </h3>
          <p>
            <?= $ml->tr(
              'Вы оставляете заявку на нашем сайте или по телефону.'
            ) ?>
          </p>
          <div class="offer__number"><span>1</span></div>
        </div>
        <div class="offer__item line__bottom">
          <i class="fas fa-eye"></i>
          <h3>
            <span class="text--accented"><?= $ml->tr(
              'Аудит'
            ) ?></span> <?= $ml->tr('недвижимости') ?>
          </h3>
          <p><?= $ml->tr(
            'Мы проводим аудит вашей недвижимости: оценка состояния, расчет доходности, рекомендации по повышению стоимости сдаваемого жилья.'
          ) ?></p>
          <div class="offer__number"><span>2</span></div>
        </div>
        <div class="offer__item line__bottom line__bottom--last">
          <i class="fas fa-tasks"></i>
          <h3>
            <span class="text--accented"><?= $ml->tr('Дополнительные') ?></span>
            <?= $ml->tr('услуги') ?>
          </h3>
          <p><?= $ml->tr(
            'Вы выбираете дополнительные услуги (профессиональная фото/видеосъемка, декорирование, покупка бытовых принадлежностей, полная комплектация объекта под сдачу и др.)'
          ) ?></p>
          <div class="offer__number"><span>3</span></div>
        </div>
        <div class="offer__item line__bottom">
          <i class="fas fa-rocket"></i>
          <h3><span class="text--accented"><?= $ml->tr(
            'Запуск'
          ) ?></span> <?= $ml->tr('рекламы') ?></h3>
          <p><?= $ml->tr(
            'Мы запускаем рекламу и обеспечиваем комплексное маркетинговое сопровождение вашего объекта.'
          ) ?></p>
          <div class="offer__number"><span>6</span></div>
        </div>
        <div class="offer__item line__bottom">
          <i class="fas fa-hammer"></i>
          <h3><span class="text--accented"><?= $ml->tr(
            'Начало'
          ) ?></span> <?= $ml->tr('работы') ?></h3>
          <p><?= $ml->tr(
            'Мы приступаем к выполнению необходимых работ по договору.'
          ) ?></p>
          <div class="offer__number"><span>5</span></div>
        </div>
        <div class="offer__item line__bottom line__bottom--last line__right">
          <i class="fas fa-file-contract"></i>
          <h3>
            <span class="text--accented"><?= $ml->tr(
              'Подписание'
            ) ?></span> <?= $ml->tr('договора') ?>
          </h3>
          <p><?= $ml->tr(
            'Мы подписываем договор доверительного управления, в котором юридически фиксируем нашу ответственность и обязательства перед собственником жилья.'
          ) ?></p>
          <div class="offer__number"><span>4</span></div>
        </div>
        <div class="offer__item line__bottom line__left">
          <i class="fas fa-chalkboard-teacher"></i>
          <h3>
            <span class="text--accented"><?= $ml->tr('Обработка') ?></span>
            <?= $ml->tr('заявок') ?>
          </h3>
          <p><?= $ml->tr(
            'Мы отвечаем за прием и обработку заявок, сопровождение арендаторов с момента бронирования до выезда.'
          ) ?></p>
          <div class="offer__number"><span>7</span></div>
        </div>
        <div class="offer__item line__bottom">
          <i class="fas fa-money-bill-wave"></i>
          <h3>
            <span class="text--accented"><?= $ml->tr('Профит') ?></span> :)
          </h3>
          <p><?= $ml->tr(
            'Вы получаете доход от сдачи жилья в аренду в соответствии с согласованными сроками по договору.'
          ) ?></p>
          <div class="offer__number"><span>8</span></div>
        </div>
        <div class="offer__item offer__item--bg line__bottom line__bottom--last">
          <div class="bg lazy" data-src="./img/offer.jpg">
            <h3>
              <?= $ml->tr('Нас') ?>
              <br />
              <span class="text--accented"><?= $ml->tr('рекомендуют') ?></span>
              <br />
              <?= $ml->tr('друзьям') ?>
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
        <span class="text--accented"><?= $ml->tr(
          'Почему мы'
        ) ?></span>, <?= $ml->tr('а не кто-то другой') ?>
      </h2>
      <div class="why-we__grid">
        <div class="why-we__item why-we__item--bordered">
          <p>
            <span class="text--accented"><?= $ml->tr(
              'Тщательный анализ'
            ) ?></span> <?= $ml->tr('и выбор надежных арендаторов') ?>
          </p>
        </div>
        <div class="why-we__item why-we__item--bordered">
          <p>
            <span class="text--accented"><?= $ml->tr(
              'Контроль своевременного'
            ) ?></span> <?= $ml->tr(
  'погашения арендной платы и коммунальных платежей'
) ?>
          </p>
        </div>
        <div class="why-we__item why-we__item--bordered">
          <p>
            <span class="text--accented"><?= $ml->tr(
              'Решение всех'
            ) ?></span> <?= $ml->tr(
  'необходимых вопросов с ремонтом, уборкой и обслуживанием, включая консьерж-сервис для арендаторов'
) ?>
          </p>
        </div>
        <div class="why-we__item why-we__item--bordered">
          <p>
            <span class="text--accented"><?= $ml->tr(
              'Регулярное предоставление'
            ) ?></span> <?= $ml->tr(
  'собственнику отчетов о проведенной работе'
) ?>
          </p>
        </div>
        <div class="why-we__item why-we__item--bordered">
          <p>
            <span class="text--accented"><?= $ml->tr(
              'Быстрое разрешение'
            ) ?></span> <?= $ml->tr(
  'конфликтных ситуаций и бытовых вопросов с арендаторами'
) ?>
          </p>
        </div>
        <div class="why-we__item why-we__item--bordered">
          <p>
            <span class="text--accented"><?= $ml->tr(
              'Обеспечение полной'
            ) ?> </span> <?= $ml->tr(
   'сохранности вашей собственности, включая страхование и юридическую защиту интересов'
 ) ?>
          </p>
        </div>
        <div class="why-we__item why-we__item--bordered why-we__item--last">
          <p>
            <span class="text--accented"><?= $ml->tr(
              'Наша команда на связи'
            ) ?></span> 24/7
          </p>
          <p><?= $ml->tr('А еще мы просто хорошие ребята)') ?></p>
        </div>
      </div>
    </div>
  </section>

  <?php require 'template-parts/reviews.php'; ?>

  <footer class="footer">
    <div class="footer__grid">
      <div class="footer__item footer__title">
        <p class="text--uppercased">
          <span class="text--accented">My</span>seahomes
        </p>
      </div>
      <div class="footer__item footer__nav">
        <a href="#top"><?= $ml->tr('Главная') ?></a>
        <a href="#services"><?= $ml->tr('Наши услуги') ?></a>
        <a href="#offer"><?= $ml->tr('Что мы предлагаем') ?></a>
        <a href="#why-we"><?= $ml->tr('Почему мы') ?></a>
      </div>
      <div class="footer__item footer__social">
        <p><?= $ml->tr('Ищите нас в соц сетях') ?></p>
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
        <p><?= $ml->tr('Звоните, мы на связи') ?></p>
      </div>
      <div class="footer__item footer__copyrights">
        <a href="https://www.myseahomes.com/privacy-policy.html" target="_blank"><?= $ml->tr(
          'Политика конфиденциальности'
        ) ?></a>
        <p><?= $ml->tr('Все права защищены') ?> <br />© 2022</p>
      </div>
      <div class="footer__item footer__address">
        <p>
          <i class="fas fa-map-marker-alt"></i> Catalkoy, Ayaztepe Sokak,
          Riverside Sitesi
        </p>
      </div>
    </div>
  </footer>

  <div id="modal" data-izimodal-title="<?= $ml->tr(
    'Оставьте заявку'
  ) ?>" data-izimodal-subtitle="<?= $ml->tr(
  'Мы перезвоним вам в ближайшие 15 минут'
) ?>">
    <form action="#" class="form">
      <input type="text" name="name" placeholder="<?= $ml->tr(
        'Введите ваше имя'
      ) ?>" required class="form__control form__control--wide" autocomplete="off" />
      <input type="tel" name="phone" placeholder="<?= $ml->tr(
        'Контактный телефон'
      ) ?>" required class="form__control form__control--wide" autocomplete="off" />
      <button class="btn btn--wide" type="submit"><?= $ml->tr(
        'Оставить заявку'
      ) ?></button>
    </form>
  </div>

  <div id="thank-you" data-izimodal-title="<?= $ml->tr(
    'Спасибо!'
  ) ?>" data-izimodal-subtitle="<?= $ml->tr(
  'Ожидайте звонка в течении 15 минут'
) ?>"></div>

  <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.9.1/jquery.min.js" integrity="sha512-jGR1T3dQerLCSm/IGEGbndPwzszJBlKQ5Br9vuB0Pw2iyxOy+7AK+lJcCC8eaXyz/9du+bkCy4HXxByhxkHf+w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/izimodal/1.5.1/js/iziModal.min.js"></script>
  <script src="js/common.js?1"></script>
</body>

</html>
