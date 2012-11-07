<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <title>#meetupUY - Índice de eventos de tecnología en Uruguay</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Indice de eventos relacionados con tecnología en Uruguay">
        <meta name="author" content="Diego Sapriza">
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-responsive.min.css" rel="stylesheet">
        <link href="css/font-awesome.css" rel="stylesheet">
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
        <!--[if lt IE 8]>
          <link href="css/font-awesome-ie7.css" rel="stylesheet">
        <![endif]-->
        <link href="css/base.css" rel="stylesheet">
        <link href="css/blue.css" rel="stylesheet">
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
        <link rel="shortcut icon" href="img/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" href="img/ico/favicon.ico">
        <link href="css/landing.css" rel="stylesheet">
    </head>

    <body>

        <div class="navbar navbar-fixed-top">
            <div class="navbar-inner">
                <div class="container">
                    <a class="btn btn-primary btn-dropnav" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href=".">#meetupUY</a>
                    <div class="nav-collapse collapse">
                        <ul class="nav pull-right">
                            <li><a href="http://twitter.com/meetupUY" target="_blank">@meetupUY</a></li>
                            <li><a href="mailto:info@meetup.uy">Contacto</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <div id="header">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <h1>Eventos de tecnología en Uruguay:</h1>
                    </div>
                </div>
            </div>
        </div>
<?php
/*
  'conferencia' => array(
            'titulo'    => '',
            'lugar'     => '',
            'fecha'     => array(
                'ini' => '2012/11/4',
                'fin' => '2012/11/4'
            ),
            'horario'   =>  array(
                '2012/11/4' => array(
                    'ini' => '15:00',
                    'fin' => '20:00'
                 )
            ),
            'costo'   => '',
            'link'      => '',
            'descripcion' => ''
        ),
 */
    $anuales = array(
        'TechMeetup' => array(
            'titulo'    => 'tech.meetupUY',
            'lugar'     => 'Auditorio Torre de las Telecomunicaciones, Montevideo',
            'fecha'     => '3/11/2012',
            'horario'   => '',
            'costo'     => '',
            'link'      => 'http://tech.meetup.uy',
            'descripcion' => ''
        ),
        'devfest' => array(
            'titulo'    => 'DevFest UY',
            'lugar'     => 'Universidad Católica del Uruguay',
            'fecha'     => '4/11/2012',
            'horario'   =>  '15:00 a 20:00',
            'costo'     => '',
            'link'      => 'http://gdg.uy/devfest',
            'descripcion' => 'La temporada de DevFests ya ha comenzado en el mundo y en Uruguay se desarrollara el 5 de Noviembre desde las 15:00 en la Universidad Católica. El evento tendrá formato de conferencia donde participaran Ingenieros de Google y destacados expositores de la comunidad local donde se abordaran temas como Android, Go Language, HTML5, WebRTC, Google App Engine, Google APIs, YouTube APIs, Google Analytics entre otros.'
        ),
        '5MVDVALLEY' => array(
            'titulo'    => '5MVDVALLEY',
            'lugar'     => 'Luis Alberto de Herrera 1248 (Auditorium WTC), Montevideo.',
            'fecha'     => '10/11/2012',
            'horario'   =>  '10:00 a 23:00',
            'costo'     => 'U$S 20',
            'audiencia' => '',
            'link'      => 'http://montevideovalley.com/',
            'descripcion' => ''
        ),
        'PyconUY' => array(
            'titulo'    => 'Pycon 2012',
            'lugar'     => 'Laboratorio Tecnológico del Uruguay, Av. Italia 6201, Montevideo',
            'fecha'     => '10/11/2012 a 11/11/2012',
            'horario'   =>  '9:00 a 19:00',
            'costo'     => '',
            'link'      => 'http://uy.pycon.org',
            'descripcion' => ''
        ),
        'OWASP' => array(
            'titulo'    => 'OWASP AppSec 2012',
            'lugar'     => 'Auditorio Torre de las Telecomunicaciones, Montevideo',
            'fecha'     => '18/11/2012 a 21/11/2012',
            'horario'   =>  '8:00 a 17:30',
            'costo'     => 'U$S 250 ~ USD 800',
            'link'      => 'https://www.owasp.org/index.php/AppSecLatam2012',
            'descripcion' => ''
        ),
         'DEVLATAM' => array(
            'titulo'    => 'Desarrollando América Latina',
            'lugar'     => 'Laboratorio Tecnológico del Uruguay, Av. Italia 6201, Montevideo',
            'fecha'     => '1/12/2012 a 2/12/2012',
            'horario'   =>  '9:00 a 17:00',
            'costo'     => '',
            'link'      => 'https://eventioz.com/DALuruguay',
            'descripcion' => ''
        ),
        'Puntatech' => array(
            'titulo'    => 'Punta Tech Meetup',
            'lugar'     => 'Fundación Pablo Atchugarry, Punta del Este, Maldonado',
            'fecha'     => '8/1/2013',
            'horario'   =>  '19:00',
            'costo'     => 'por invitación',
            'link'      => 'http://puntameetup.com/',
            'descripcion' => ''
        ),
        'RybConf' => array(
            'titulo'    => 'RubyConf',
            'lugar'     => 'Auditorio Torre de las Telecomunicaciones, Montevideo',
            'fecha'     => '3/2013',
            'horario'   => '',
            'costo'     => 'n/d',
            'link'      => 'http://www.rubyconfuruguay.org',
            'descripcion' => ''
        ),
        'PlayaValley' => array(
            'titulo'    => '#PlayaValley',
            'lugar'     => 'Centro Cultural La Paloma, La Paloma, Rocha',
            'fecha'     => '5/2013',
            'horario'   => '',
            'costo'     => '',
            'link'      => 'http://playavalley.com/',
            'descripcion' => ''
        ),

    );

    $mensuales = array(
        'mysqlMeetup' => array(
            'titulo'    => 'Mysql Meetup',
            'lugar'     => 'UTU Buceo / Guruhub (ver link)',
            'fecha'     => '2o jueves de mes',
            'horario'   => '19:00',
            'costo'     => '',
            'link'      => 'http://www.meetup.com/The-Montevideo-MySQL-Meetup-Group',
            'descripcion' => ''
        ),
        'rubyMeetup' => array(
            'titulo'    => 'Ruby Meetup',
            'lugar'     => 'CoworkingMVD, Bulevar España 2529 Esq. Libertad, Montevideo',
            'fecha'     => '2o martes de mes',
            'horario'   => '',
            'costo'     => '',
            'link'      => 'http://www.meetup.com/rubymvd/',
            'descripcion' => ''
        ),
        'techNbeers' => array(
            'titulo'    => 'TechNbeers',
            'lugar'     => 'Asia de Cuba, Montevideo',
            'fecha'     => '4o jueves de mes',
            'horario'   => '',
            'costo'     => '',
            'link'      => 'http://montevideovalley.com/',
            'descripcion' => ''
        ),
        'OpenCoffee' => array(
            'titulo'    => 'Open Coffee',
            'lugar'     => 'Amaretto Bakery Café',
            'fecha'     => '2o Martes de mes',
            'horario'   => '9:00',
            'costo'     => '',
            'link'      => 'http://opencoffeemvd.org/',
            'descripcion' => ''
        ),
    );

    $anuales_chunks = array_chunk($anuales, 2);
    $mensuales_chunks = array_chunk($mensuales, 2);

    function print_bloque($evento){
        ?>
        <div class="span5 well2">
            <h2 class="sub"><a href="<?= $evento['link']; ?>" target="_blank"><?= $evento['titulo']; ?></a></h2>
            <ul class="unstyled">
                <li><i class="icon-map-marker"></i> <?=$evento['lugar']; ?></li>
                <li><i class="icon-calendar"></i> <?= $evento['fecha']; ?></li>
                <?php if(!empty($evento['horario']) && $evento['horario']!= ''): ?>
                    <li><i class="icon-time"></i> <?= $evento['horario']; ?></li>
                <?php endif; ?>

                <?php if(!empty($evento['costo']) && $evento['costo'] != ''): ?>
                    <li><i class="icon-money"></i> <?= $evento['costo']; ?></li>
                <?php endif; ?>
            </ul>
        </div>
        <?php
    }
?>
        <div id="landing">
          <div class="container">
            <div class="row">
              <div class="span8 offset2 txt-middle">
                <div id="myCarousel" class="carousel slide">
                  <h3>Ediciones anteriores:</h3>
                  <div class="carousel-inner">
                            <?php

                                for($i=1; $i<=14; $i++){
                                    $active = '';
                                    if($i == 1){
                                        $active = 'active';
                                    }
                                    echo '<div class="'.$active.' item"><a href="http://tech.meetup.uy" target="_blank"><img alt="" src="http://tech.meetup.uy/img/2012_presentacion/tm2012-'.sprintf('%02d', $i).'.jpg"></a></div>';
                                }
                            ?>
                    </div>
                    <a class="carousel-control left" href="#myCarousel" data-slide="prev"><i class="icon-chevron-left"></i></a>
                    <a class="carousel-control right" href="#myCarousel" data-slide="next"><i class="icon-chevron-right"></i></a>
              </div>
            </div>
          </div>
         </div>
        </div>
        <div id="content">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <h2 class="txt-middle">Eventos anuales</h2>
                        <hr class="dashed">
                    </div>
                </div>
                <?php
                foreach($anuales_chunks as $eventos_row):
                    ?>
                    <div class="row">
                        <?php
                        foreach($eventos_row as $evento):
                            print_bloque($evento);
                        endforeach;
                        ?>
                    </div>
                    <?php
                endforeach;
                ?>

                <div class="row">
                    <div class="span12">
                        <h2 class="txt-middle">Eventos mensuales</h2>
                        <hr class="dashed">
                    </div>
                </div>
                <?php
                foreach($mensuales_chunks as $eventos_row):
                    ?>
                    <div class="row">
                        <?php
                        foreach($eventos_row as $evento):
                           print_bloque($evento);
                        endforeach;
                        ?>
                    </div>
                    <?php
                endforeach;
                ?>
                <!--
                <div class="row">
                    <div class="span12">
                        <div class="callout well">
                            <h2>Try our service free for 30 days</h2>
                            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit arcu massa, vehicula in felis.</p>
                            <a href="#" class="btn btn-primary btn-action">Get Started Now <i class="icon-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
                -->
                <div class="row">
                    <div class="row12" style="text-align: center;">
                        <p>
                            <small>Las fechas / horarios / precios y lugares deben ser tomados de las páginas webs correspondientes a cada evento.</small>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!--
        <div id="footer">
            <div class="container">
                <div class="row">
                    <div class="span3">
                        <h3>Quick Links</h3>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Features</a></li>
                            <li><a href="#">Pricing</a></li>
                        </ul>
                    </div>
                    <div class="span3">
                        <h3>Company</h3>
                        <ul>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Terms of Use</a></li>
                            <li><a href="#">FAQ</a></li>
                        </ul>
                    </div>
                    <div class="span3">
                        <h3>We're Social</h3>
                        <ul>
                            <li><a href="#">Facebook</a></li>
                            <li><a href="#">Twitter</a></li>
                            <li><a href="#">Google &#43;</a></li>
                        </ul>
                    </div>
                    <div class="span3">
                        <h3>Subscribe</h3>
                        <p>Subscribe to our newsletter and stay up to date with the latest news and deals!</p>
                        <form>
                            <input class="span3" type="text" placeholder="Your Email" name="subscribe">
                            <button class="btn btn-primary">Subscribe</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        -->
        <div id="copywrite">
            <div class="container">
                <div class="row">
                    <div class="span12">
                        <p>&copy; 2012 tech.Meetup.UY <span id="totop" class="pull-right">Back to Top <i class="icon-arrow-up"></i></span></p>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/jquery-1.8.2.min.js"><\/script>')</script>
        <script src="js/bootstrap.min.js"></script>
        <script>
            $(document).ready(function(){
                $("#totop").click(function () {
                    $("body, html").animate({
                        scrollTop: 0
                    }, 300);
                    return false;
                });
            });
        </script>

    </body>
</html>
