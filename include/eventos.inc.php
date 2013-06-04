<?php
$anuales = array(
    'encGenexus' => array(
        'id'  =>  'encgenexus',
        'titulo' => 'XXIII Encuentro GeneXus',
        'lugar' => 'Hotel Radisson, Montevideo',
        'fecha' => '30/9/2013 a 2/10/2013',
        'horario' => '',
        'costo' => '',
        'link' => 'http://www.genexus.com/',
        'descripcion' => '',
        'tags'=>'genexus'
    ),
    'jsconfuy' => array(
        'id'  =>  'jsconfuy',
        'titulo' => 'JSConf Uruguay 2013',
        'lugar' => 'Auditorio Torre de las Telecomunicaciones, Montevideo',
        'fecha' => '18 y 19/10/2013',
        'horario' => '',
        'costo' => '',
        'link' => 'http://jsconf.uy',
        'descripcion' => '',
        'tags'=>'javascript, frontend, desarrollo',
        'links_otros'=>array(
                array(
                    'txt' => '@JSConfUY',
                    'uri' => 'https://twitter.com/JSConfUY',
                    'alt' => 'twitter'
                ),
                array(
                    'txt' => 'Facebook',
                    'uri' => 'https://www.facebook.com/JsConfUY',
                    'alt' => 'Facebook'
                ),
            ),
    ),
    'PyconUY' => array(
        'id'  =>  'pycon',
        'titulo' => 'PyCon Uruguay 2013',
        'lugar' => 'Auditorio Torre de las Telecomunicaciones, Montevideo',
        'fecha' => '1 y 2/11/2013',
        'horario' => '',
        'costo' => '',
        'link' => 'http://uy.pycon.org',
        'tags'=>'python, desarrollo',
        'descripcion' => '',
        'links_otros'=>array(
                array(
                    'txt' => '@PyConUy',
                    'uri' => 'https://twitter.com/PyConUy',
                    'alt' => 'twitter'
                ),
                array(
                    'txt' => 'Facebook',
                    'uri' => 'https://www.facebook.com/PyConUy',
                    'alt' => 'Facebook'
                ),
            ),
    ),
    'techmeetup' => array(
        'id'  =>  'techmeetupuy',
        'titulo' => 'tech.meetupUY 2013',
        'lugar' => 'Auditorio Torre de las Telecomunicaciones, Montevideo',
        'fecha' => '22 y 23/11/2013',
        'horario' => '',
        'costo' => '',
        'link' => 'http://tech.meetup.uy',
        'descripcion' => '',
        'tags'=>'desarrollo, tecnología, IT',
        'links_otros'=>array(
                array(
                    'txt' => '@meetupUY',
                    'uri' => 'https://twitter.com/meetupUY',
                    'alt' => 'twitter'
                ),
                array(
                    'txt' => 'Facebook',
                    'uri' => 'https://www.facebook.com/meetupuy',
                    'alt' => 'Facebook'
                ),
            ),
    ),
);

$mensuales = array(
    'mvdjsmeetup' => array(
        'id'  =>  'mvdjsmeetup',
        'titulo' => 'MVDJS Meetup',
        'subtitulo' => 'Meetup de Javascript en Montevideo',
        'lugar' => 'ver web.',
        'fecha' => '1er jueves de mes',
        'horario' => '19:00',
        'costo' => '',
        'link' => 'http://www.meetup.com/mvd-js/',
        'descripcion' => '',
        'tags'=>'javascript, nodeJS, html5, frontend, css'
    ),
    'opencoffee' => array(
        'id'  =>  'opencoffee',
        'titulo' => 'Open Coffee',
        'lugar' => 'Amaretto Bakery Café',
        'fecha' => '2o martes de mes',
        'horario' => '9:00',
        'costo' => '',
        'link' => 'http://opencoffeemvd.org/',
        'descripcion' => '',
        'tags' => 'proyectos, negocios, inversion, emprendedores'
    ),
    'ruby' => array(
        'id'  =>  'rubymeetup',
        'titulo' => 'Ruby Meetup',
        'lugar' => 'CoworkingMVD, Bulevar España 2529 Esq. Libertad, Montevideo',
        'fecha' => '2o martes de mes',
        'horario' => '19:30',
        'costo' => '',
        'link' => 'http://www.meetup.com/rubymvd/',
        'descripcion' => '',
        'tags'=>'ruby,rails,sinatra,web'
    ),
    'agileuy' => array(
        'id'  =>  'agileuy',
        'titulo' => 'Agile UY',
        'subtitulo' => 'Comunidad agile de Uruguay',
        'lugar' => 'ver web',
        'fecha' => '2o miércoles de mes',
        'horario' => '20:00',
        'costo' => 'gratis',
        'link' => 'http://www.meetup.com/AgileUY/',
        'descripcion' => '',
        'tags'=>'agile, scrum, XP, kanban, metodologias',
        'links_otros'=>array(
            array(
                    'txt' => '@AgileUY',
                    'uri' => 'https://twitter.com/AgileUy',
                    'alt' => 'twitter'
                ),
            ),
    ),

    'interactiondesign' => array(
        'id'  =>  'interactionDesign',
        'titulo' => 'Interaction Design UY',
        'lugar' => 'CoworkingMVD, Bulevar España 2529 Esq. Libertad, Montevideo',
        'fecha' => '3er martes cada 2 meses',
        'horario' => '19:30 ~ 20:00',
        'costo' => '',
        'link' => 'http://www.meetup.com/Interaction-design-Uruguay',
        'descripcion' => '',
        'tags'=>'interaction Design,UX,content strategy,usability',
        'links_otros'=>array(),
    ),
    'devopsmvd' => array(
        'id'  =>  'devopsmvd',
        'titulo' => 'DevOps MVD',
        'lugar' => 'Case UY, San José 1337 of 11, Montevideo',
        'fecha' => '3er miércoles de mes',
        'horario' => '19:30',
        'costo' => 'gratis',
        'link' => 'http://devops.meetup.uy',
        'descripcion' => '',
        'tags'=>'devops, sysadmin, it',
        'links_otros'=>array(
                array(
                    'txt' => 'irc://irc.freenode.net/devopsuy',
                    'uri' => '',
                    'alt' => ''
                ),
            ),
    ),
    'scala' => array(
        'id'  =>  'scalameetup',
        'titulo' => 'Scala Meetup',
        'subtitulo' => 'Grupo de Usuarios de Scala.',
        'lugar' => 'ver web',
        'fecha' => '3er jueves de mes',
        'horario' => '20:00',
        'costo' => '',
        'link' => 'http://www.meetup.com/Scala-Meetup-UY/',
        'descripcion' => '',
        'tags'=>'scala',
        'links_otros'=>array(
                array(
                    'txt' => 'blog',
                    'uri' => 'http://scala.meetup.uy',
                    'alt' => 'blog'
                ),
            ),
    ),
    'phpmvd' => array(
        'id'  =>  'phpmvd',
        'titulo' => 'PHP Montevideo',
        'subtitulo' => 'Comunidad de desarrolladores PHP',
        'lugar' => 'ver web',
        'fecha' => '4o martes de mes',
        'horario' => '20:00',
        'costo' => 'gratis',
        'link' => 'http://www.meetup.com/PHPmvd/',
        'descripcion' => '',
        'tags'=>'php, web development, php frameworks',
        'links_otros'=>array(),
    ),

    'automationuy' => array(
        'id'  =>  'automationuy',
        'titulo' => 'AutomationUY',
        'lugar' => 'ver web',
        'fecha' => 'ver web',
        'horario' => '19:00',
        'costo' => '',
        'link' => 'http://www.meetup.com/AutomationUY/',
        'descripcion' => '',
        'tags'=>'automation, testing, functional programming',
        'links_otros'=>array(),
    ),
    'technbeers' => array(
        'id'  =>  'technbeers',
        'titulo' => 'TechNbeers',
        'lugar' => 'Mess Resto Pub (Gabriel Pereira 3064)',
        'fecha' => '3er martes de mes',
        'horario' => '',
        'costo' => '',
        'link' => 'http://montevideovalley.com/',
        'descripcion' => '',
        'tags'=>'proyectos, tecnologia, startups, demo',
        'links_otros'=>array(
                array(
                    'txt' => '#TechNbeers',
                    'uri' => 'https://twitter.com/search/realtime?q=technbeers&src=typd',
                    'alt' => 'twitter'
                ),
            ),
    ),

    'gugmvd' => array(
        'id'  =>  'gugmvd',
        'titulo' => 'Grupo de Usuarios GeneXus MVD',
        'subtitulo' => 'Comunidad GeneXus en Montevideo',
        'lugar' => 'CDC - Latu, Av. Italia 6201',
        'fecha' => '',
        'horario' => '',
        'costo' => '',
        'link' => 'http://gugmontevideo.wordpress.com/',
        'descripcion' => '',
        'tags'=>'Genexus'
    ),
    'usdug' => array(
        'id'  =>  'usdug',
        'titulo' => 'Salesforce Developer User Group Uruguay',
        'subtitulo' => '',
        'lugar' => 'ver web',
        'fecha' => '',
        'horario' => '',
        'costo' => '',
        'link' => 'http://www.meetup.com/Uruguay-Salesforce-Developer-User-Group/',
        'descripcion' => '',
        'tags'=>'salesforce, dev'
    ),
);
