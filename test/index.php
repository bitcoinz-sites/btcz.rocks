<?php

?>
<?php
$sites = array(

"en" => "/en/",		// English

"cz" => "/cz/",		// Cheiz

"ru" => "/ru/",		// Russia

"de" => "/de/",		// Gegmany

"fr" => "/fr/",		// France

"es" => "/es/",		// Spanish

"bg" => "/bg/",		// Bulgaria

"lt" => "/lt/",		// Lithuanian
		
"pt" => "/pt-br/",	// Portugaliya

"pl" => "/pl/",		// Poland
			
"uk" => "/uk/",		// Ukraine

"nl" => "/nl/",		// Dusth

"be" => "/nl/",		// Dusth

"tr" => "/tr/",		// Turkey

"sv" => "/sv/",     // Swedish 

"fi" => "/sv/",		// Swedish (Finland) 

"ro" => "/ro/",     // Romanian 

"mo" => "/ro/",		// Romanian (Moldavia)

"no" => "/no/",		// Norwegian 

"nb" => "/no/",     // Norwegian (Bokmal)

"nn" => "/no/",		// Norwegian (Nynorsk)

"hi" => "/hi/",		// Hindi

"vi" => "/vi/",		// Vietnamese

);

// Get 2 char lang code

$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

// 

if (!isset($sites[$lang])) {

$lang = "en";

}

// 

header('Location: ' . $sites[$lang]);

exit;?>
