<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ryohei ishikawaのポートフォリオ</title>
    <link href="//unpkg.com/sanitize.css" rel="stylesheet" />
    <link rel="preconnect" href="//fonts.googleapis.com" />
    <link rel="preconnect" href="//fonts.gstatic.com" crossorigin />
    <link
      href="//fonts.googleapis.com/css2?family=Noto+Serif+JP&family=Oswald&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/styles/style.css" />

    <?php wp_head(); ?>
  </head>
  <body>
    <div id="global_container">
      <div class="loading">
        <div class="loading__inner">
          Loading...Loading...Loading...
        </div>
      </div>
        <div id="container">
          <header class="header">
            <div class="header__cover">
              <div class="header__content">
                <div class="header__logo"><a href="#">Ryohei</a></div>
                <div class="header__btn">
                  <span class="span"></span>
                  <span class="span"></span>
                  <span class="span"></span>
                </div>
              </div>
            </div>
          </header>
          <div class="mobile_menu__cover"></div>
          <div class="name_back">
            <span>RyoheiIshikawa</span>
            <span>RyoheiIshikawa</span>
            <span>RyoheiIshikawa</span>
            <span>RyoheiIshikawa</span>
          </div>
          <main class="main">
            <div class="main_visual">
              <img src="<?php echo get_template_directory_uri(); ?>/images/main2.jpg" alt="プロフィール画像" />
              <div class="main_visual__inner">Every day is a new day.</div>
            </div>
            <section id="about" class="about">
              <div id="about__white" class="target text_white">自己紹介</div>
              <div class="about__wrapper">
                <div id="about__black" class="target text_black">自己紹介</div>
                <div class="about__inner">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/ishikawa.jpg" alt="" class="target about__img" />
                  <div class="target about__text">
                    <h2>石川 涼平</h2>
                    <div class="about__pro">
                      <h3>生年月日</h3>
                      <p>/2000年01月26日</p>
                      <h3>血液型</h3>
                      <p>/A型</p>
                      <h3>mail</h3>
                      <p>/ryohey.yattaze@outlook.jp</p>
                    </div>
                    <p class="about__pr">明治大学経営学部会計学科の石川涼平と申します。学生時代は主に会計学を学んでいましたが、大学4年の夏にプログラミングに出会い感銘を受け、エンジニアを目指すことを決意しました。プログラミング歴は3か月と短く、独学で学んでいたため実務経験もありません。しかし何よりプログラミングが好きで、学ぶ姿勢は誰にも負けない自信があります。</p>
                    <div class="target about__skill">
                      <h2>スキル</h2>
                      <div class="about__detail">
                        <ul class="about__ul">
                          <li class="about__li">
                            <p>技術</p>
                            <p>スキル</p>
                            <p>詳細</p>
                          </li>
                          <li class="about__li">
                            <p>HTML5</p>
                            <p>★★★★☆</p>
                            <p>基本的な部分はできます。</p>
                          </li>
                          <li class="about__li">
                            <p>CSS</p>
                            <p>★★★☆☆</p>
                            <p>scssを使ってます。</p>
                          </li>
                          <li class="about__li">
                            <p>JavaScript</p>
                            <p>★★☆☆☆</p>
                            <p>簡単な処理を関数にまとめることができます。</p>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </section>
            <section id="works" class="works">
              <div id="works__white" class="target text_white">作品紹介</div>
              <div class="works__wrapper">
                <div id="works__black" class="target text_black">作品紹介</div>
                <ul class="works__ul">
                  <li class="target works__li">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/demosite1.png" alt="" class="works__img" />
                    <div class="works__text">
                      <p>
                        古民家喫茶の架空サイトです。和の雰囲気が出るよう、背景色、レイアウトを工夫しました。
                      </p>
                      <div class="works__link">
                        <a class="cubic" href="https://demositeno1.netlify.app/" target="_self">
                          <span class="hovering">view</span>
                          <span class="default">view</span>
                        </a>
                      </div>
                      <div class="works__cover">
                      <div class="works__cover_inner">
                        <h3>01</h3>
                        <div class="works__btn">
                          <a href="https://demositeno1.netlify.app/" target="_self">
                            view
                            <div class="arrow">
                                <div class="line01"></div>
                                <div class="line02"></div>
                              </div>
                        </a>
                        </div>
                      </div>
                    </div>
                    </div>
                  </li>
                  <li class="target works__li">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/demosite2.png" alt="" class="works__img" />
                    <div class="works__text">
                      <p>
                        パン屋の架空サイトです。
                      </p>
                      <div class="works__link">
                        <a class="cubic" href="https://demositeno2.netlify.app/" target="_self">
                          <span class="hovering">view</span>
                          <span class="default">view</span>
                        </a>
                      </div>
                      <div class="works__cover">
                      <div class="works__cover_inner">
                        <h3>02</h3>
                        <div class="works__btn">
                          <a href="https://demositeno2.netlify.app/" target="_self">
                            view
                            <div class="arrow">
                                <div class="line01"></div>
                                <div class="line02"></div>
                              </div>
                          </a>
                        </div>
                      </div>
                    </div>
                    </div>
                  </li>
                  <li class="target works__li">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/demosite3.png" alt="" class="works__img" />
                    <div class="works__text">
                      <p>
                        写真が好きな人のためのコミュニティの架空サイトです。文字アニメーションを用いて、にぎやかな雰囲気になるよう心がけました。
                      </p>
                      <div class="works__link">
                        <a class="cubic" href="https://demositeno3.netlify.app/" target="_self">
                          <span class="hovering">view</span>
                          <span class="default">view</span>
                        </a>
                      </div>
                      <div class="works__cover">
                      <div class="works__cover_inner">
                        <h3>03</h3>
                        <div class="works__btn">
                          <a href="https://demositeno3.netlify.app/" target="_self">
                            view
                            <div class="arrow">
                                <div class="line01"></div>
                                <div class="line02"></div>
                              </div>
                          </a>
                        </div>
                      </div>
                    </div>
                    </div>
                  </li>
                </ul>
              </div>
            </section>
            <section id="contact" class="contact">
              <div id="contact__white" class="target text_white">お問い合わせ</div>
              <div class="contact__wrapper">
                <div id="contact__black" class="target text_black">お問い合わせ</div>
                <div class="target contact__inner">
                  <?php echo do_shortcode('[mwform_formkey key="5"]')
                  ?>
                  </div>
                  <p class="back"><a href="#">トップへ戻る</a></p>
                </div>
              </div>
            </section>
          </main>
          <footer class="footer">
            <p>&copy;&nbsp;Rohei&nbsp;Ishikawa</p>
          </footer>
        </div>
        <nav class="mobile_menu">
          <div class="mobile_menu__wrapper">
            <ul class="mobile_menu__ul">
              <li class="mobile_menu__li">
                <a href="#about" class="mobile_menu__link">自己紹介</a>
              </li>
              <li class="mobile_menu__li">
                <a href="#works" class="mobile_menu__link">作品紹介</a>
              </li>
              <li class="mobile_menu__li">
                <a href="#contact" class="mobile_menu__link">お問い合わせ</a>
              </li>
            </ul>
          </div>
        </nav>
    </div>
    <script src="<?php echo get_template_directory_uri(); ?>/scripts/main.js"></script>
    <?php wp_footer(); ?>
  </body>
</html>
