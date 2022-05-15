<?php

require '../vendor/autoload.php';

$codes = require 'codes.php';

foreach ($codes as $code) {
    exec('ln -s ../dist/' . $code . '.html ../../custom_' . $code . '.html');
}