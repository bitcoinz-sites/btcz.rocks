<?php
$settings = include("settings.php");

function siteUrl( $protocol = "//", $return = false ) {
    global $settings;
    $path = $protocol . $settings["domain"] . $settings["work_path"];

    if( $return )
        return $path;
    else
        echo($path);
}