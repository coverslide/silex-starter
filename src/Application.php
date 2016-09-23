<?php

namespace CoverSlide\SilexTest;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;

class Application extends \Silex\Application {
  function init () {
    $app = $this;
    $app['debug'] = true;

    $app->register(new \Silex\Provider\TwigServiceProvider(), array(
      'twig.path' => __DIR__.'/../views',
    ));

    $app->get('/json', function () {
      return new JsonResponse(['test' => true]);
    });

    $app->get('/{name}', function ($name) use ($app) {
      return $app['twig']->render('hello.html.twig', [
        'name' => $name
      ]);
    })->value('name', 'World');
  }
}
