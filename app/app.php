<?php
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/AnagramCheck.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
        return $app['twig']->render('form.html.twig');
    });

    $app->get("/anagrams", function() use($app)
    {
        $my_AnagramCheck = new AnagramCheck;
        $anagram_list = $my_AnagramCheck->checkAnagram($_GET['input_word'], $_GET['input_compare']);
        return $app['twig']->render('anagrams.html.twig', array('results' => $anagram_list));
    });

    return $app;

 ?>
