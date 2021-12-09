<?php

// A commenter si vous utilisez composer
require __DIR__ . '/../vendor/autoload.php';

$hello = new \App\Hello();

echo $hello->say() . "\n";
