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
        'titulo' => 'tech.meetupUY',
        'lugar' => 'Auditorio Torre de las Telecomunicaciones, Montevideo',
        'fecha' => '3/11/2012',
        'horario' => '',
        'costo' => '',
        'link' => 'http://tech.meetup.uy',
        'descripcion' => ''
    ),
    'devfest' => array(
        'titulo' => 'DevFest UY',
        'lugar' => 'Universidad Católica del Uruguay',
        'fecha' => '5/11/2012',
        'horario' => '15:00 a 20:00',
        'costo' => '',
        'link' => 'http://gdg.uy/devfest',
        'descripcion' => 'La temporada de DevFests ya ha comenzado en el mundo y en Uruguay se desarrollara el 5 de Noviembre desde las 15:00 en la Universidad Católica. El evento tendrá formato de conferencia donde participaran Ingenieros de Google y destacados expositores de la comunidad local donde se abordaran temas como Android, Go Language, HTML5, WebRTC, Google App Engine, Google APIs, YouTube APIs, Google Analytics entre otros.'
    ),
    '5MVDVALLEY' => array(
        'titulo' => '5MVDVALLEY',
        'lugar' => 'Luis Alberto de Herrera 1248 (Auditorium WTC), Montevideo.',
        'fecha' => '10/11/2012',
        'horario' => '10:00 a 23:00',
        'costo' => 'U$S 20',
        'audiencia' => '',
        'link' => 'http://montevideovalley.com/',
        'descripcion' => ''
    ),
    'PyconUY' => array(
        'titulo' => 'Pycon 2012',
        'lugar' => 'Laboratorio Tecnológico del Uruguay, Av. Italia 6201, Montevideo',
        'fecha' => '10/11/2012 a 11/11/2012',
        'horario' => '9:00 a 19:00',
        'costo' => '',
        'link' => 'http://uy.pycon.org',
        'descripcion' => ''
    ),
    'OWASP' => array(
        'titulo' => 'OWASP AppSec 2012',
        'lugar' => 'Auditorio Torre de las Telecomunicaciones, Montevideo',
        'fecha' => '18/11/2012 a 21/11/2012',
        'horario' => '8:00 a 17:30',
        'costo' => 'U$S 250 ~ USD 800',
        'link' => 'https://www.owasp.org/index.php/AppSecLatam2012',
        'descripcion' => ''
    ),
    'MoodleMoot' => array(
        'titulo' => 'MoodleMoot Uruguay',
        'lugar' => 'Auditorio Torre de las Telecomunicaciones, Montevideo',
        'fecha' => '22/11/2012 a 23/11/2012',
        //'horario' => '8:00 a 17:30',
        'link' => 'http://evento.moodlemoot.org.uy/',
        'descripcion' => ''
    ),
    'DEVLATAM' => array(
        'titulo' => 'Desarrollando América Latina',
        'lugar' => 'Laboratorio Tecnológico del Uruguay, Av. Italia 6201, Montevideo',
        'fecha' => '1/12/2012 a 2/12/2012',
        'horario' => '9:00 a 17:00',
        'costo' => '',
        'link' => 'https://eventioz.com/DALuruguay',
        'descripcion' => ''
    ),
    'Puntatech' => array(
        'titulo' => 'Punta Tech Meetup',
        'lugar' => 'Fundación Pablo Atchugarry, Punta del Este, Maldonado',
        'fecha' => '8/1/2013',
        'horario' => '19:00',
        'costo' => 'por invitación',
        'link' => 'http://puntameetup.com/',
        'descripcion' => ''
    ),
    'RybConf' => array(
        'titulo' => 'RubyConf',
        'lugar' => 'Auditorio Torre de las Telecomunicaciones, Montevideo',
        'fecha' => '3/2013',
        'horario' => '',
        'costo' => 'n/d',
        'link' => 'http://www.rubyconfuruguay.org',
        'descripcion' => ''
    ),
    'PlayaValley' => array(
        'titulo' => '#PlayaValley',
        'lugar' => 'Centro Cultural La Paloma, La Paloma, Rocha',
        'fecha' => '5/2013',
        'horario' => '',
        'costo' => '',
        'link' => 'http://playavalley.com/',
        'descripcion' => ''
    ),
);

$mensuales = array(
    'mysqlMeetup' => array(
        'titulo' => 'Mysql Meetup',
        'lugar' => 'UTU Buceo / Guruhub (ver link)',
        'fecha' => '2o jueves de mes',
        'horario' => '19:00',
        'costo' => '',
        'link' => 'http://www.meetup.com/The-Montevideo-MySQL-Meetup-Group',
        'descripcion' => '',
        'tags'=>'mysql,linux,lamp, nosql,database,linux'
    ),
    'rubyMeetup' => array(
        'titulo' => 'Ruby Meetup',
        'lugar' => 'CoworkingMVD, Bulevar España 2529 Esq. Libertad, Montevideo',
        'fecha' => '2o martes de mes',
        'horario' => '',
        'costo' => '',
        'link' => 'http://www.meetup.com/rubymvd/',
        'descripcion' => '',
        'tags'=>'ruby,rails,sinatra,web'
    ),
    'MvdJsMeetup' => array(
        'titulo' => 'MVDJS Meetup',
        'lugar' => 'Sophilabs, Marco Bruto 1504, Montevideo',
        'fecha' => '',
        'horario' => '20:00',
        'costo' => '',
        'link' => 'http://www.meetup.com/mvd-js/',
        'descripcion' => '',
        'tags'=>'javscript, nodeJS, html5, frontend, css'
    ),
    'techNbeers' => array(
        'titulo' => 'TechNbeers',
        'lugar' => 'Asia de Cuba, Montevideo',
        'fecha' => '4o jueves de mes',
        'horario' => '',
        'costo' => '',
        'link' => 'http://montevideovalley.com/',
        'descripcion' => '',
        'tags'=>'proyectos, tecnologia'
    ),
    'OpenCoffee' => array(
        'titulo' => 'Open Coffee',
        'lugar' => 'Amaretto Bakery Café',
        'fecha' => '2o Martes de mes',
        'horario' => '9:00',
        'costo' => '',
        'link' => 'http://opencoffeemvd.org/',
        'descripcion' => '',
        'tags' => 'proyectos, negocios, inversion, emprendedores'
    ),
);
