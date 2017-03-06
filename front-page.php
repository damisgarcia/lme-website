<!doctype html>
<html class="no-js" lang="">
  <head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>www lme ufc br</title>

    <link rel="apple-touch-icon" href="apple-touch-icon.png">
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/main.css" media="all">
    <!-- build:js scripts/vendor/modernizr.js -->
    <script src="<?php bloginfo('template_directory'); ?>/bower_components/modernizr/modernizr.js"></script>
    <!-- endbuild -->
  </head>
  <body id='home' ng-controller='ApplicationCtrl as app' data-spy="scroll" data-target=".navbar" data-offset="60">
    <!--[if lt IE 10]>
      <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    <?php require "flash-messages.php" ?>

    <header>
      <nav class="navbar navbar-fixed-top lme-navbar-default navbar--transparent">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#home" scroll-sref>
              <img src="<?php bloginfo('template_directory'); ?>/images/lme.svg" width="98">
            </a>
          </div>
          <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav lme-collapse-navbar-nav navbar-right">
              <li class="active"><a href="#home" scroll-sref>Home</a></li>
              <li><a href="#sobre" scroll-sref>Sobre</a></li>
              <li><a href="#area-de-atuacao" scroll-sref>Áreas de Atuação</a></li>
              <li><a href="#portfolio" scroll-sref>Portfólio</a></li>
              <li><a href="#contato" scroll-sref>Contato</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <section>
      <div class="container">
        <div class="row">
          <div class='col-xs-12 col-sm-6 col-md-6'>
            <h3 class='lme-title'>LME</h3>
            <hr class="lme-line">
            <p>O Laboratório de Mídias Educacionais, vinculado ao Instituto UFC Virtual, tem como objetivo criar soluções tecnológicas inovadoras para a educação à distância.</p>
            <ul class='list-inline'>
              <li>
                <a href="https://www.instagram.com/lme.ufc/" target="_blank"><i class='fa fa-instagram fa-2x margin-right'></i></a>
                <a href="https://www.facebook.com/lmeufc/?ref=nf" target="_blank"><i class='fa fa-facebook fa-2x margin-right'></i></a>
                <a href="https://www.youtube.com/channel/UCuwWZXApMmAmwAHEw7HvP7w" target="_blank"><i class='fa fa-youtube-play fa-2x margin-right'></i></a>
              </li>
            </ul>
            <div id='sobre' class='line-6 hidden-sm hidden-xs'></div>
            <h3 class='lme-title'>Sobre Nós</h3>
            <hr class="lme-line">
            <p>Criado em 2013 por professores da Universidade Federal do Ceará, o LME é o braço de pesquisa e desenvolvimento do Instituto UFC Virtual. Somos um espaço de experimentação que trabalha na concepção e elaboração de novas tecnologias para a educação à distância.</p>
            <p>Buscamos dar suporte à EaD em todos os seus aspectos, desde os processos administrativos até o material didático. Entendemos que cada estudante tem seu estilo de aprendizado e tentamos forjar experiências de ensino atraentes que equilibrem interatividade, educação e entretenimento.</p>
            <p>Para isso, empregamos material multimídia, simuladores, realidade aumentada, aplicações web, animações, jogos, ambientes virtuais de aprendizagem e outras ferramentas que se adequam aos desafios da EaD. <a href="#portfolio">Conheça nosso trabalho</a></p>
          </div>
          <div class='col-xs-12 col-sm-6 col-md-6'>
            <div class='lme-devices'>
              <img src="<?php bloginfo('template_directory'); ?>/images/devices.png" class="img-responsive" style="max-width:80%;">
              <div class="line-10"></div>
              <img src="<?php bloginfo('template_directory'); ?>/images/notebook.png" class="img-responsive">
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id='area-de-atuacao' class='lme-section-b lme-devices-layer'>
      <div class="container">
        <div class="row">
          <div class='col-xs-12'>
            <h3 class='lme-title'>Áreas de Atuação</h3>
            <hr class="lme-line">
          </div>

          <div class='col-xs-12'>
            <div class="row">
              <div class="col-md-2">
                <img src="<?php bloginfo('template_directory'); ?>/images/devices.svg" class='lme-section-icon' width="48">
              </div>
              <div class="col-xs-12">
                <h4>Desenvolvimento de sistemas</h4>
                <p>Criamos sistemas de apoio para todo o funcionamento da Educação à Distância. Desde a informatização de processos administrativos até novas maneiras de conectar alunos e professores, trabalhamos para inovar e renovar as experiência de ensino e aprendizagem online.</p>
              </div>
            </div>
          </div>

          <div class='col-xs-12'>
            <div class="row">
              <div class="col-md-2">
                <img src="<?php bloginfo('template_directory'); ?>/images/multiplayer.svg" class='lme-section-icon' width="48">
              </div>
              <div class="col-xs-12">
                <h4>Desenvolvimento de jogos</h4>
                <p>A interação do estudante com o conteúdo pode ser didática e divertida, beneficiando alunos, professores e interessados. Para isso, desenvolvemos jogos educativos para dispositivos móveis e ferramentas para gamificação do aprendizado.</p>
              </div>
            </div>
          </div>

          <div class='col-xs-12'>
            <div class="row">
              <div class="col-md-2">
                <img src="<?php bloginfo('template_directory'); ?>/images/multimedia.svg" class='lme-section-icon' width="48">
              </div>
              <div class="col-xs-12">
                <h4>Multimídia</h4>
                <p>Sabemos que determinados conteúdos exigem mais que uma aula tradicional. Por isso, adotamos uma estratégia transmidiática para a criação de conteúdo, investindo em vídeos, animações e histórias em quadrinhos.</p>
              </div>
            </div>
          </div>

          <div class='col-xs-12'>
            <div class="row">
              <div class="col-md-2">
                <img src="<?php bloginfo('template_directory'); ?>/images/multimedia.svg" class='lme-section-icon' width="48">
              </div>
              <div class="col-xs-12">
                <h4>Pesquisa e Mineração de dados</h4>
                <p>Além dos produtos, o LME também se dedica à produção acadêmica. Trabalhamos em conjunto com professores da Universidade Federal do Ceará para estudar as articulações entre educação e tecnologia - o que, por sua vez, estimula à criação de novos recursos e sistemas.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id='portfolio'>
      <div class="container">
        <div class="row">
          <div class='col-md-3 col-xs-12'>
            <h3 class='lme-title'>Portifólio</h3>
            <hr class="lme-line">
          </div>
          <div class='col-md-9 col-xs-12'>
            <ul class="nav nav-pills lme-portfolio-pills" ng-show="app.categories.length">
              <li gallery-item-filter='undefined' class='active'><a>Tudo</a></li>
              <li ng-repeat="category in app.categories" gallery-item-filter='category.id'><a>{{category.name}}</a></li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <div class="row lme-gallery">
          <div class="col-md-3 lme-gallery-item" ng-repeat='page in app.gallery | filterByCategory: $currentCategory' gallery-item='page'>
            <div class='wave-box' ng-if='page.images' style="background-image: url({{page.images.thumbnail.source_url}});"></div>
            <gallery-content>
              <div id="gallery-popup-{{page.id}}" class="gallery-content mfp-with-anim mfp-hide">
                <div>
                  <ul class="nav nav-pills " role="tablist">
                    <li role="presentation" class="active"><a href="#desc" aria-controls="home" role="tab" data-toggle="tab">Descrição</a></li>
                    <!-- <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Imagens</a></li> -->
                    <li role="presentation"><a href="#yt" aria-controls="messages" role="tab" data-toggle="tab">Vídeo de Apresentação</a></li>
                    <!-- <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Settings</a></li> -->
                  </ul>

                  <!-- Tab panes -->
                  <div class="tab-content">
                    <div role="tabpanel" class="tab-pane active" id="desc">
                      <div class="row margin-lg-top">
                        <div class="col-md-4">
                          <img ng-src="{{page.images.full.source_url}}"/>
                        </div>
                        <div class="col-md-8">
                          <h3>{{page.title.rendered || 'Lorem ipsum'}}</h3>
                          <div ng-bind-html="renderHTML(page.excerpt.rendered)"></div>
                        </div>
                      </div>
                    </div>
                    <div role="tabpanel" class="tab-pane" id="yt">
                      <div class='margin-lg-top' data-type="youtube" data-video-id="{{page.acf.yt_video_id}}"></div>
                    </div>
                  </div>
                </div>
              </div>
            </gallery-content>
          </div>
        </div>
      </div>
    </section>

    <section id='contato'>
      <div class="container">
        <div class="row">
          <div class='col-xs-12'>
            <h3 class='lme-title'>Contato</h3>
            <hr class="lme-line">
          </div>
          </div>
          <div class='col-xs-12'>
            <p>Cras ultricies ligula sed magna dictum porta. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Nulla quis lorem ut libero malesuada feugiat. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Nulla porttitor accumsan tincidunt.</p>
          </div>
        </div>
      </div>
    </section>

    <section>
      <div class="container">
        <div class='col-md-4 col-xs-12'>
          <address>
      			<strong>Lorem ipsum dolor sit amet, consectetur adipisicing</strong><br>
        			15 Springfield Way<br>
        			Hythe<br>
        			Kent<br>
        			United Kingdon<br>
        			CT21 5SH<br>
        			<abbr title="Phone">P:</abbr> 01234 567 890
      		</address>
        </div>
        <div class='col-md-8 col-xs-12'>
          <form action="<?php bloginfo('template_directory'); ?>/contact.php" method="post" class="lme-contact-form">
            <input type='hidden' name='references' value="<?php echo get_site_url(); ?>"/>
            <div class="row">
              <div class="col-xs-6 col-md-6 form-group">
                <input class="form-control" id="name" name="name" placeholder="Nome" type="text" required />
              </div>
              <div class="col-xs-6 col-md-6 form-group">
                <input class="form-control" id="email" name="email" placeholder="Email" type="email" required />
              </div>
            </div>
            <textarea class="form-control" id="message" name="message" placeholder="Mensagem" rows="5"></textarea>
            <br />
            <div class="row">
              <div class="col-xs-12 col-md-12 form-group">
                <button class="btn btn-primary lme-contact-submit pull-right" type="submit">
                  <i class="fa fa-envelope-o fa-lg lme-contact-submit-icon" aria-hidden="true"></i>
                  <small>&nbsp; Enviar Mensagem</small>
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </section>

    <div map-lazy-load="https://maps.google.com/maps/api/js?key=AIzaSyBMwlB8SlPsgrqENYLynpPJuIwsqneLI6A">
      <div class='pin'></div>
      <div class='pulse'></div>
      <ng-map center='[-3.7451943,-38.5757737]' zoom="17" disable-default-u-i="true" draggable='false' scrollWheel="false" disable-double-click-zoom="true" zoomControl='false' styles="{{app.mapStyle}}"></ng-map>
    </div>

    <footer>
      <div class='container'>
        <img src="<?php bloginfo('template_directory'); ?>/images/lme.svg" width="115">
        <div class='row'>
          <div class='col-md-4'>
            <p>Cras ultricies ligula sed magna dictum porta. Donec rutrum congue leo eget malesuada.</p>
          </div>
          <div class='col-md-8'>
            <ul class="nav nav-pills lme-portfolio-pills">
              <li><a href="#home" scroll-sref>Home</a></li>
              <li><a href="#sobre" scroll-sref>Sobre</a></li>
              <li><a href="#area-de-atuacao" scroll-sref>Áreas de Atuação</a></li>
              <li><a href="#portfolio" scroll-sref>Portfólio</a></li>
              <li><a href="#contato" scroll-sref>Contato</a></li>
            </ul>
          </div>
        </div>
      </div>
    </footer>

    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
      (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
      function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
      e=o.createElement(i);r=o.getElementsByTagName(i)[0];
      e.src='https://www.google-analytics.com/analytics.js';
      r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
      ga('create','UA-XXXXX-X');ga('send','pageview');
    </script>

    <script src="<?php bloginfo('template_directory'); ?>/dist/vendor.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/dist/main.js"></script>

    <!-- application -->
    <script src="<?php bloginfo('template_directory'); ?>/js/app/bootstrap.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/app/wp.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/app/applicationCtrl.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/app/scrollSref.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/app/ngLazy.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/app/wavesDirective.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/app/filterByCategory.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/app/galleryItemDirective.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/app/galleryContentDirective.js"></script>
    <!-- endapplication -->
  </body>
</html>
