<?php

$sites = [
    'en' => '/en/',        // English
    'cz' => '/cz/',        // Cheiz
    'ru' => '/ru/',        // Russia
    'de' => '/de/',        // Gegmany
    'fr' => '/fr/',        // France
    'es' => '/es/',        // Spanish
    'bg' => '/bg/',        // Bulgaria
    'lt' => '/lt/',        // Lithuanian
    'pt' => '/pt-br/',    // Portugaliya
    'pl' => '/pl/',        // Poland
    'uk' => '/uk/',        // Ukraine
    'nl' => '/nl/',        // Dusth
    'be' => '/nl/',        // Dusth
    'tr' => '/tr/',        // Turkey
    'sv' => '/sv/',        // Swedish
    'fi' => '/sv/',        // Swedish (Finland)
    'ro' => '/ro/',        // Romanian
    'mo' => '/ro/',        // Romanian (Moldavia)
    'no' => '/no/',        // Norwegian
    'nb' => '/no/',        // Norwegian (Bokmal)
    'nn' => '/no/',        // Norwegian (Nynorsk)
    'hi' => '/hi/',        // Hindi
    'vi' => '/vi/',        // Vietnamese
    'zh' => '/zh/',        // Chinese
    'cn' => '/cn/',        // Chinese
    'hk' => '/zh/',        // Honk-Kong
    'tw' => '/cn/',        // Chinese Taiwan
    'sg' => '/cn/',        // Singapur
];

// Get 2 char lang code

$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

// Установка языка по умолчанию если переменная $lang не соответствуют не одному значению из массива $site

if (!isset($sites[$lang])) {
    $lang = 'en';
}

// Редирект пользователя на нужный домен

header('Location: ' . $sites[$lang]);
