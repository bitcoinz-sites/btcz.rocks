<?php

$metaLanguages = include('meta_languages.php');
$settings = include(__DIR__ . '/../settings.php');

class L
{
    private static $_IS_LOAD_COMPLETED = false;
    private static $_COOKIENAME = "bitcoinz_selected_language";

    public static $_META;
    public static $_CONTENT;

    public static function Load()
    {
        global $metaLanguages;

        $found = false;
        $selectedLanguage = $metaLanguages["default"];

        if (isset($_COOKIE[self::$_COOKIENAME]) && self::IsLanguageAvailable($_COOKIE[self::$_COOKIENAME])) {
            $selectedLanguage = $_COOKIE[self::$_COOKIENAME];
            $found = true;
        } else if (isset($_SERVER['HTTP_ACCEPT_LANGUAGE'])) {
            $browserLangs = explode(',', $_SERVER['HTTP_ACCEPT_LANGUAGE']);

            foreach ($browserLangs as $langName) {
                if (strlen($langName) <= 1) {
                    continue;
                }

                $langName = substr($langName, 0, 2);

                if (self::IsLanguageAvailable($langName)) {
                    $selectedLanguage = $langName;
                    self::ChangeTo($langName);
                    $found = true;
                    break;
                }
            }
        }

        if (!$found) {
            self::ChangeTo($selectedLanguage);
        }

        self::SetMetaAndContent($selectedLanguage);
        self::$_IS_LOAD_COMPLETED = true;
    }

    private static function IsLanguageAvailable($language)
    {
        global $metaLanguages;

        if (array_key_exists(strtolower($language), $metaLanguages['availableLanguages'])) {
            return true;
        }

        return false;
    }

    private static function SetMetaAndContent($language)
    {
        global $metaLanguages;

        self::$_META = $metaLanguages['availableLanguages'][$language];
        self::$_CONTENT = include('language_contents/' . $language . '.php');
    }

    public static function ChangeTo($newLanguage)
    {
        global $settings;

        if (self::IsLanguageAvailable($newLanguage)) {
            $_COOKIE[self::$_COOKIENAME] = $newLanguage;
            setcookie(self::$_COOKIENAME, $newLanguage, time() + (60 * 60 * 24 * 365), '/', $settings['domain']);

            if (self::$_IS_LOAD_COMPLETED) {
                self::Load();
            }

            return true;
        }

        return false;
    }

    public static function DeleteCookie()
    {
        global $settings;
        setcookie(self::$_COOKIENAME, '', time() - 3600, '/', $settings['domain']);

        if (isset($_COOKIE[self::$_COOKIENAME])) {
            unset($_COOKIE[self::$_COOKIENAME]);
        }
    }

    public static function GetAvailableLanguages()
    {
        global $metaLanguages;
        return $metaLanguages['availableLanguages'];
    }

    // Content
    public static function G($key)
    {
        if (array_key_exists($key, self::$_CONTENT)) {
            return self::$_CONTENT[$key];
        }

        return $key;
    }

    public static function W($key)
    {
        echo self::G($key);
    }

    // Meta
    public static function MG($key)
    {
        if (array_key_exists($key, self::$_META)) {
            return self::$_META[$key];
        }

        return $key;
    }

    public static function MW($key)
    {
        echo self::MG($key);
    }
}
