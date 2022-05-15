<?php

use Twig\Environment as TwigEnvironment;
use Twig\Loader\FilesystemLoader as TwigFilesystemLoader;

require 'vendor/autoload.php';

$codes = require 'codes.php';

$loader = new TwigFilesystemLoader(__DIR__ . '/views');
$twig = new TwigEnvironment($loader);

foreach ($codes as $code) {
    $rendered = $twig->render('codes/' . $code . '.twig', ['code' => $code]);

    file_put_contents(__DIR__ . '/dist/' . $code . '.html', $rendered);
}