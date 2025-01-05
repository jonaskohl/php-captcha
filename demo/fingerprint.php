<?php

require_once __DIR__.'/../vendor/autoload.php';

use jkohl\captcha\CaptchaBuilder;

echo count(CaptchaBuilder::create()
    ->build()
    ->getFingerprint()
);

echo "\n";
