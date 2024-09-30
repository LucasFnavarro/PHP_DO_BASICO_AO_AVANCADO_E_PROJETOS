<?php

require_once __DIR__ . '/../../../api_core/config.php';
require_once __DIR__ . '../../../../api_core/response.php';

$data = require_once __DIR__ . '../../../../api_core/data.php';

$email_domains = [];

foreach($data as $person){
    // Verifica se o email é válido
    if(filter_var($person['email'], FILTER_VALIDATE_EMAIL)){
        // Extrai o domínio do email
        $email_domain = explode("@", $person['email'])[1];

         // Adiciona o domínio ao array se ele ainda não estiver presente
        if(!in_array($email_domain, $email_domains)){
            $email_domains[] = $email_domain;
        }
    }
}
echo Response::json(200, 'success', $email_domains);
