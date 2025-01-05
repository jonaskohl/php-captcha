<?php

require_once __DIR__.'/../vendor/autoload.php';

use jkohl\captcha\CaptchaBuilder;

header('Content-type: image/jpeg');

CaptchaBuilder::create()
    ->build()
    ->output()
;
