<?php  

require 'phpLibs/php-multilang/MultiLang.php'; 
$ml = new MultiLang();

if ((($_GET && $_GET['lang'] && $_GET['lang'] === 'ru'))
  || ($_COOKIE && $_COOKIE['rl_lang_front'] && $_COOKIE['rl_lang_front'] === 'ru')) {
  $ml->setLanguage('RU');
};

?>

<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8" />

    <title><?= $ml->tr('Marketing department') ?> Myseahomes</title>
    <meta
      name="description"
      content="<?= $ml->tr('Start to receive first leads on the second day of work') ?> <?= $ml->tr('or') ?> <?= $ml->tr('we will refund your money') ?>"
    />

    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, maximum-scale=1"
    />

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
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/izimodal/1.5.1/css/iziModal.min.css"
    />
    <link rel="stylesheet" href="css/main.min.css" />

    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
      (function (m, e, t, r, i, k, a) {
        m[i] =
          m[i] ||
          function () {
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
    <noscript
      ><div>
        <img
          src="https://mc.yandex.ru/watch/72242728"
          style="position: absolute; left: -9999px"
          alt=""
        /></div
    ></noscript>
    <!-- /Yandex.Metrika counter -->
  </head>

  <body>
    <header id="top" class="header">
      <div class="wrap">
        <img class="logo" src="img/logo.png" alt="Myseahomes logo" />
      </div>
    </header>

    <section class="hero">
      <div class="wrap">
        <h1>
          <span class="hero__subtitle"><?= $ml->tr('Marketing department') ?></span><br />
          <span class="text--accented">My</span>seahomes
        </h1>
        <p class="hero__desc">
          <span class="text--accented">/</span> <?= $ml->tr('Start to receive first leads on the second day of work') ?> <br> <?= $ml->tr('or') ?>
          <span
            class="text--accented text--uppercased text--underlined text--bolded"
            ><?= $ml->tr('we will refund your money') ?></span
          >
        </p>
        <button class="btn trigger"><?= $ml->tr('Submit application') ?></button>
      </div>
    </section>

    <section class="differents">
      <div class="wrap">
        <h2 class="uppercased">
        <?= $ml->tr('How we get') ?> <br /><span class="text--accented"><?= $ml->tr('different') ?></span> <?= $ml->tr('from competitors') ?>?
        </h2>
        <div class="differents__grid">
          <div class="differents__item">
            <div class="differents__item__number">
              0<span class="text--accented">1</span>
            </div>
            <div class="differents__item__desc">
              <?= $ml->tr('Order trafficking from us and you will receive a full-fledged marketing audit of your business with recommendations, from your website to offline activities.') ?>
            </div>
          </div>
          <div class="differents__item">
            <div class="differents__item__number">
              0<span class="text--accented">2</span>
            </div>
            <div class="differents__item__desc">
              <?= $ml->tr('24/7. Our clients are located in many different countries so we have to be available when it is convenient to the clients. We start a chat with experts and your question will not be left unanswered for more than an hour.') ?>
            </div>
          </div>
          <div class="differents__item">
            <div class="differents__item__number">
              0<span class="text--accented">3</span>
            </div>
            <div class="differents__item__desc">
              <?= $ml->tr('We are constantly updating our platform: attend most prestigious master classes, educate ourselves and study a lot. How does it affect you? You are working with a team of people who always move on, who are introducing new marketing tools to the business.') ?>
            </div>
          </div>
          <div class="differents__item">
            <div class="differents__item__number">
              0<span class="text--accented">4</span>
            </div>
            <div class="differents__item__desc">
              <?= $ml->tr('We think in the way of numbers, that is why we offer FREE analytics and CRM to analyze each application and the configured audience.') ?>
            </div>
          </div>
          <div class="differents__item">
            <div class="differents__item__number">
              0<span class="text--accented">5</span>
            </div>
            <div class="differents__item__desc">
              <?= $ml->tr('We focus not on the price of application but on result – the order.') ?>
            </div>
          </div>
          <div class="differents__item differents__item--bordered">
            <div class="differents__item__title text--uppercased">
              <span><?= $ml->tr('and finally most importantly') ?>...</span><br />
              <?= $ml->tr('we make lots of money') ?>!
            </div>
            <button class="btn btn--small trigger"><?= $ml->tr('Submit application') ?></button>
          </div>
        </div>
      </div>
    </section>

    <section class="more">
      <div class="wrap">
        <h2 class="text--uppercased heading--smaller">
          <span class="text--accented"><?= $ml->tr('We do more') ?>, </span><br /><?= $ml->tr('than what is required by our duties') ?>!
        </h2>
        <div class="text--smaller">
          <?= $ml->tr('Fill out the form below and we will make an analysis and an approximate forecast based on the results') ?>
        </div>
        <form action="#" class="form">
          <input
            type="text"
            name="name"
            placeholder="<?= $ml->tr('Enter your name') ?>"
            required
            class="form__control form__control--wide"
            autocomplete="off"
          />
          <input
            type="tel"
            name="phone"
            placeholder="<?= $ml->tr('Enter your phone') ?>"
            required
            class="form__control form__control--wide"
            autocomplete="off"
          />
          <button class="btn btn--wide" type="submit"><?= $ml->tr('Submit application') ?></button>
        </form>
      </div>
    </section>

    <section id="services" class="services">
      <h2 class="text--centered">
        <?= $ml->tr('Our') ?> <span class="text--accented"><?= $ml->tr('services') ?></span>
      </h2>
      <div class="wrap">
        <div class="services__item">
          <div class="img__wrap">
            <img src="img/services-1.jpg" alt="<?= $ml->tr('Targeted') ?> <?= $ml->tr('advertisement') ?>" />
          </div>
          <div class="services__box">
            <h3><span class="text--accented"><?= $ml->tr('Targeted') ?></span> <?= $ml->tr('advertisement') ?></h3>
            <p>
              <?= $ml->tr('We do a full analysis of landing pages, connect analytics and AmoCRM to analyze advertisements and each enquiry. This allows you to focus not on the price of the lead, but on the final cost.') ?>
            </p>
            <button class="btn trigger"><?= $ml->tr('Learn more') ?></button>
          </div>
        </div>
        <div class="services__item">
          <div class="img__wrap">
            <img src="img/services-2.jpg" alt="<?= $ml->tr('Funnel') ?>" />
          </div>
          <div class="services__box">
            <h3><span class="text--accented"><?= $ml->tr('Funnel') ?></span></h3>
            <p>
              <?= $ml->tr('We develop automated marketing funnels with the connection of chat bots. This not only unloads the sales department, but also allows you to warm up each potential client, bringing him to a purchase. You paid money so that he went to the site and left a request, so you need to work with him and "squeeze".') ?>
            </p>
            <button class="btn trigger"><?= $ml->tr('Learn more') ?></button>
          </div>
        </div>
      </div>
    </section>

    <section id="offer" class="offer">
      <div class="wrap">
        <h2>
          <?= $ml->tr('What we') ?> <span class="text--accented text--underlined"><?= $ml->tr('offer') ?></span>
        </h2>
        <div class="offer__grid">
          <div class="offer__item line__bottom line__bottom--first">
            <i class="fas fa-chart-line"></i>
            <h3>
              <span class="text--accented"><?= $ml->tr('Analisys') ?></span>
              <?= $ml->tr('business and competitor') ?>
            </h3>
            <p>
              <?= $ml->tr('We give advice on improving the funnel / lead magnet and your business model in general') ?>
            </p>
            <div class="offer__number"><span>1</span></div>
          </div>
          <div class="offer__item line__bottom">
            <i class="far fa-user-circle"></i>
            <h3>
              <span class="text--accented"><?= $ml->tr('Mental') ?></span>
              <?= $ml->tr('map') ?>
            </h3>
            <p><?= $ml->tr('Visualizing of work plan') ?></p>
            <div class="offer__number"><span>2</span></div>
          </div>
          <div class="offer__item line__bottom line__bottom--last">
            <i class="fas fa-sliders-h"></i>
            <h3>
              <span class="text--accented"><?= $ml->tr('Connecting metrics') ?></span>
              <?= $ml->tr('to your website') ?>
            </h3>
            <p><?= $ml->tr('To provide complete analysis of targeted traffic behavior') ?></p>
            <div class="offer__number"><span>3</span></div>
          </div>
          <div class="offer__item line__bottom">
            <i class="fab fa-instagram"></i>
            <h3><span class="text--accented"><?= $ml->tr('Scaling') ?></span></h3>
            <p><?= $ml->tr('Developing of new traffic sources') ?></p>
            <div class="offer__number"><span>6</span></div>
          </div>
          <div class="offer__item line__bottom">
            <i class="fas fa-layer-group"></i>
            <h3><span class="text--accented"><?= $ml->tr('Re-marketing') ?></span></h3>
            <p><?= $ml->tr('Convert generally interested clients into buying customers') ?></p>
            <div class="offer__number"><span>5</span></div>
          </div>
          <div class="offer__item line__bottom line__bottom--last line__right">
            <i class="fab fa-sketch"></i>
            <h3>
              <span class="text--accented"><?= $ml->tr('Development of') ?></span>
              <?= $ml->tr('designs') ?>
            </h3>
            <p><?= $ml->tr('Unique images and videos') ?></p>
            <div class="offer__number"><span>4</span></div>
          </div>
          <div class="offer__item line__bottom line__left">
            <i class="fas fa-check-double"></i>
            <h3>
              <span class="text--accented"><?= $ml->tr('Interim') ?></span>
              <?= $ml->tr('analisys') ?>
            </h3>
            <p><?= $ml->tr('Identification of weaknesses and optimization of advertising campaign') ?></p>
            <div class="offer__number"><span>7</span></div>
          </div>
          <div class="offer__item line__bottom">
            <i class="fas fa-cog"></i>
            <h3>
              <span class="text--accented"><?= $ml->tr('Setting up the') ?></span> <?= $ml->tr('test ad compaing') ?>
            </h3>
            <p><?= $ml->tr('Audience segmentation and testing up creatives') ?></p>
            <div class="offer__number"><span>8</span></div>
          </div>
          <div
            class="offer__item offer__item--bg line__bottom line__bottom--last"
          >
            <div class="bg">
              <h3>
                <span class="text--accented"><?= $ml->tr('Get tons') ?></span><br />
                <?= $ml->tr('of clients') ?>
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
          <span class="text--accented"><?= $ml->tr('Why us') ?></span> <?= $ml->tr('and not someone else') ?>
        </h2>
        <div class="why-we__grid">
          <div class="why-we__item why-we__item--bordered">
            <p>
              <span class="text--accented"><?= $ml->tr('We create') ?></span> <?= $ml->tr('full marketing strategy') ?>
            </p>
            <p><?= $ml->tr('Tailored to your niche and business-model') ?></p>
          </div>
          <div class="why-we__item why-we__item--bordered">
            <p>
              <span class="text--accented"><?= $ml->tr('Complex') ?></span> <?= $ml->tr('marketing approach') ?>
            </p>
            <p>
              <?= $ml->tr('In addition to advertisements we will set up a bunch of other useful tools for you') ?>
            </p>
          </div>
          <div class="why-we__item why-we__item--bordered">
            <p>
              <span class="text--accented"><?= $ml->tr('We strengthen a pixel') ?></span> <?= $ml->tr('of your website') ?>
            </p>
            <p><?= $ml->tr('So that you get only quality customers') ?></p>
          </div>
          <div class="why-we__item why-we__item--bordered">
            <p>
              <span class="text--accented"><?= $ml->tr('We are aiming') ?></span> <?= $ml->tr('on a quick payback') ?>
            </p>
            <p><?= $ml->tr('For your ROI and not just for leads and CTR') ?></p>
          </div>
          <div class="why-we__item why-we__item--bordered">
            <p>
              <span class="text--accented"><?= $ml->tr('We develop flexible') ?></span> <?= $ml->tr('marketing strategy') ?>
            </p>
            <p><?= $ml->tr('With an effective advertising campaign') ?></p>
          </div>
          <div class="why-we__item why-we__item--bordered">
            <p>
              <span class="text--accented"><?= $ml->tr('We create') ?></span> <?= $ml->tr('design creatives in your own corporate style') ?>
            </p>
            <p><?= $ml->tr('And yes, we make videos)') ?></p>
          </div>
          <div class="why-we__item why-we__item--bordered why-we__item--last">
            <p>
              <span class="text--accented"><?= $ml->tr('Our team is available') ?></span> 24/7
            </p>
            <p><?= $ml->tr('And we\'re just good guys') ?></p>
          </div>
        </div>
      </div>
    </section>

    <footer class="footer">
      <div class="footer__grid">
        <div class="footer__item footer__title">
          <p class="text--uppercased">
            <span class="text--accented">My</span>seahomes
          </p>
        </div>
        <div class="footer__item footer__nav">
          <a href="#top"><?= $ml->tr('Main') ?></a>
          <a href="#services"><?= $ml->tr('Our services') ?></a>
          <a href="#offer"><?= $ml->tr('What we offer') ?></a>
          <a href="#why-we"><?= $ml->tr('Why we') ?></a>
        </div>
        <div class="footer__item footer__social">
          <p><?= $ml->tr('Look for us in social networks') ?></p>
          <div class="footer__social__grid">
            <a
              href="https://www.instagram.com/targetolog_ustinov/"
              target="_blank"
              class="instagram"
              ><i class="fab fa-instagram"></i
            ></a>
            <a
              href="https://www.facebook.com/Myseahomes"
              target="_blank"
              class="facebook"
              ><i class="fab fa-facebook-f"></i
            ></a>
            <a
              href="https://t.me/targetolog_ustinov"
              target="_blank"
              class="telegram"
              ><i class="fab fa-telegram-plane"></i
            ></a>
            <!--<a href="#" target="_blank" class="viber"
              ><i class="fab fa-viber"></i
            ></a>-->
            <a
              href="https://wa.me/905338365211"
              target="_blank"
              class="whatsapp"
              ><i class="fab fa-whatsapp"></i
            ></a>
          </div>
        </div>
        <div class="footer__item footer__phone">
          <a href="tel:+905338365211" class="btn">+905338365211</a>
          <p><?= $ml->tr('Call us, we are in touch') ?></p>
        </div>
        <div class="footer__item footer__copyrights">
          <a
            href="https://www.myseahomes.com/privacy-policy.html"
            target="_blank"
            ><?= $ml->tr('Privacy Policy') ?></a
          >
          <p><?= $ml->tr('All rights reserved') ?> <br />© 2022</p>
        </div>
        <div class="footer__item footer__address">
          <p>
            <i class="fas fa-map-marker-alt"></i> Catalkoy, Ayaztepe Sokak,
            Riverside Sitesi
          </p>
        </div>
      </div>
    </footer>

    <div id="modal" data-izimodal-title="<?= $ml->tr('Leave a request') ?>" data-izimodal-subtitle="<?= $ml->tr('We will call you back in the next 15 minutes') ?>">
      <form action="#" class="form">
        <input
          type="text"
          name="name"
          placeholder="<?= $ml->tr('Enter your name') ?>"
          required
          class="form__control form__control--wide"
          autocomplete="off"
        />
        <input
          type="tel"
          name="phone"
          placeholder="<?= $ml->tr('Enter your phone') ?>"
          required
          class="form__control form__control--wide"
          autocomplete="off"
        />
        <button class="btn btn--wide" type="submit"><?= $ml->tr('Submit application') ?></button>
      </form>
    </div>

    <div id="thank-you" data-izimodal-title="<?= $ml->tr('Thanks') ?>!" data-izimodal-subtitle="<?= $ml->tr('Expect a call within 15 minutes') ?>"></div>

    <script
      defer
      src="https://use.fontawesome.com/releases/v5.15.4/js/all.js"
      integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc"
      crossorigin="anonymous"
    ></script>
    <script src="js/libs.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/izimodal/1.5.1/js/iziModal.min.js"></script>
    <script src="js/common.js"></script>
  </body>
</html>
