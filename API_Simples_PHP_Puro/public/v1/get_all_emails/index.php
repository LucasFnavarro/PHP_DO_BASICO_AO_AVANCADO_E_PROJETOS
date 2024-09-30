<?php

require_once __DIR__ . '../../../../api_core/config.php';
require_once __DIR__ . '../../../../api_core/response.php';

$data = require_once __DIR__ . '../../../../api_core/data.php';

$emails = [];
foreach($data as $item){
    $emails[] = $item['email'];
}

echo Response::json(200, 'success', $emails);