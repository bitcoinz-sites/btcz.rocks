<?php

function siteUrl($return = false) {
    global $settings;

    if ($return) {
        return $settings['work_path'];
    }

    echo $settings['work_path'];
}
