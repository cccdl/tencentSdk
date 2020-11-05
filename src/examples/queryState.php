<?php

require_once __DIR__ . '/../../vendor/autoload.php';
require_once __DIR__ . '/comfig.php';

use cccdl\tencent_sdk\Exception\cccdlException;
use cccdl\tencent_sdk\Im\imOpenLoginSvc;

try {


    $im = new imOpenLoginSvc($appId, $key, $identifier);

    $res = $im->queryState(['1000001', '1000002']);

    var_dump($res);

} catch (cccdlException $e) {
    echo $e->getCode();
    echo '----';
    echo $e->getMessage();
}

