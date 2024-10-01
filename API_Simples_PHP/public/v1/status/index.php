<?php

// Importando as configs da API e o metódo static de respostas e status
require_once __DIR__ . '/../../../api_core/config.php';
require_once __DIR__ . '../../../../api_core/response.php';

echo Response::json(200, 'API is running!');