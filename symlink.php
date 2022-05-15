<?php

$codes = require 'codes.php';

foreach ($codes as $code) {
    exec('ln -s ' . __DIR__ . '/dist/' . $code . '.html ../custom_' . $code . '.html');
}