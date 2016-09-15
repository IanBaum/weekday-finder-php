<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/Finder.php";
    date_default_timezone_set('America/New_York');

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__."/../views"));

    $app->get('/', function() use ($app) {
      $i = 1;
      return $app['twig']->render('weekdays.html.twig', array('i' => $i));
    });

    return $app;
 ?>
