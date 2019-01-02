<?php

declare(strict_types=1);

if (!$loader = @include __DIR__.'/../vendor/autoload.php') {
    echo <<<EOM
You must set up the project dependencies by running the following commands:

curl -s http://getcomposer.org/installer | php
php composer.phar install

EOM;

    exit(1);
}

$loader->add('Retry\Test', __DIR__);
