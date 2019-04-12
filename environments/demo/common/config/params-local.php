<?php

/**
 * Lombardia Informatica S.p.A.
 * OPEN 2.0
 *
 *
 * @package    lispa\amos\basic\template
 * @category   CategoryName
 */

return [
    'assistance' => [
        'enabled' => true, //Enable the assistance button
        'type' => 'email', //Assistance button mode: url or email
        'email' => 'help@example.com', //Assistance mail
        'url' => '/path/to/assistance/page' //Url to the assistance page
    ],
    'isDemo' => true,
    'demoModelBlackList' => [
        'lispa\amos\cwh\base\ModelContentInterface',
        'lispa\amos\community\models\Community'
    ],
    'google_places_api_key' => '',
    'google_recaptcha_site_key' => '',
    'platform' => [
        'frontendUrl' => 'FRONTEND_URL',
        'backendUrl' => 'FRONTEND_URL',
    ],
    'logoMail' => '/img/logo.png' //default logo backend/web/img/logo.png
];
