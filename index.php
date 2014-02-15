<?php
//web/index.php

require_once __DIR__.'/vendor/autoload.php';

$app = new Silex\Application();

$app['debug'] = true;

$app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/views',
));

$app->get('/', function () use ($app) {
    return 'Hello Brendan!';
});

$app->get('/twig',function() use ($app){
    return $app['twig']->render('hello.twig',array(
       'name' => "Brendan McGarrett",
    ));
});

$app->run();