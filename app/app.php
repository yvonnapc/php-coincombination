<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/CoinCombination.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__."/../views"));

    $app->get('/', function() use($app){
      return $app['twig']->render('form.html.twig');
    });

    $app->get('/result', function() use($app){
      $new_CoinCombination = new CoinCombination;
      $results_coins = $new_CoinCombination->makeCombination($_GET['amount']);
      return $app['twig']->render(('result.html.twig'), array('results' => $results_coins));
    });

    return $app;
 ?>
