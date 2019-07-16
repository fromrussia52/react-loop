<?php

require_once "../api2/vendor/autoload.php";

$loop = React\EventLoop\Factory::create();

$n = 0;
$loop->addPeriodicTimer(1, function ($timer) use ($loop, &$n) {
    if ($n != 10) {
        echo ($n++) . PHP_EOL;
    } else {
        $loop->cancelTimer($timer);
    }
});

$loop->run();
