<?php
$http = new Swoole\HTTP\Server("0.0.0.0", 9501);

$http->on('start', static function ($server) {
    echo "Swoole http server is started at http://127.0.0.1:9501\n";
});

$http->on('request', static function ($request, $response) {
    $response->header("Content-Type", "text/plain");
    $response->end("Hello World\n");
});

$http->start();