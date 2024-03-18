<?php

$codes = require 'codes.php';

foreach ($codes as $code) {
    exec('chown www-data: ' . escapeshellarg(__DIR__ . '/dist/' . $code . '.html'));

    exec('ln -s ' . escapeshellarg(__DIR__ . '/dist/errors/' . $code . '.html') . ' ' . escapeshellarg('../custom_' . $code . '.html'));
}