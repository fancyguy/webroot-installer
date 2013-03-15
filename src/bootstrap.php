<?php

include 'bootstrap-functions.php';

$rootAutoload = __DIR__ . '/../vendor/autoload.php';
$vendorAutoload = __DIR__ . '/../../../autoload.php';

if (!$loader = includeIfExists($rootAutoload) && (!$loader = includeIfExists($vendorAutoload)) {
    die('You must set up the project dependencies, run the following commands:' . PHP_EOL .
        'curl -s http://getcomposer.org/installer | php' . PHP_EOL .
        'php composer.phar install' . PHP_EOL);
}

return $loader;
