<?php

session_start();

include('../functions.php');
include('../translation/manager.php');

$settings = include('../settings.php');

if (isset($_GET['lang']) && strlen($_GET['lang']) > 1) {
    L::ChangeTo($_GET['lang']);
}

L::Load();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Language Test Tool</title>

    <style>
        html, body {
            font-family: Calibri, sans-serif;
        }

        h3 {
            color: #446655;
            font-size: 18px;
        }

        .langs_head, .lang, .contents_head, .content {
            display: flex;
            width: 600px;
            border: 1px solid #333;
            border-left: none;
        }

        .lang, .content {
            border-top: none;
        }

        .contents_head, .content {
            width: 90%;
            align-items: center;
        }

        .langs_head > span, .lang > span, .contents_head > span, .content > span {
            flex: 1;
            text-align: center;
            border-left: 1px solid #333;
            font-size: 14px;
            padding: 8px 5px;
        }

        .langs_head > span, .contents_head > span {
            font-weight: bold;
            font-size: 16px;
        }

        .contents_head > .key, .content > .key {
            flex: 12;
        }

        .contents_head > .text, .content > .text {
            flex: 12;
            text-align: left;
            padding: 10px 15px;
        }

    </style>
</head>
<body>

<div>
    <h3>HTTP_ACCEPT_LANGUAGE:</h3>

    <div>
        <?php echo($_SERVER['HTTP_ACCEPT_LANGUAGE']); ?>
    </div>

    <h3>COOKIE DATA:</h3>

    <div>
        <?php
        if (isset($_COOKIE["bitcoinz_selected_language"])) {
            echo($_COOKIE["bitcoinz_selected_language"]);
        } else {
            echo("Cookie Not Set!");
        }
        ?>
    </div>

    <h3>Current Language:</h3>

    <div class="langs_head">
        <span class="native">Native</span>
        <span class="in_english">In English</span>
        <span class="short">Short</span>
        <span class="icon">Icon</span>
    </div>

    <div class="lang">
        <span class="native"><?php L::MW("native"); ?></span>
        <span class="in_english"><?php L::MW("in_english"); ?></span>
        <span class="short"><?php L::MW("short"); ?></span>
        <span class="icon"><?php L::MW("icon"); ?></span>
    </div>

</div>

<div>
    <h3>Available Languages:</h3>

    <div class="langs_head">
        <span class="native">Native</span>
        <span class="in_english">In English</span>
        <span class="short">Short</span>
        <span class="icon">Icon</span>
        <span class="actions">Action</span>
    </div>

    <?php
    foreach (L::GetAvailableLanguages() as $langMeta) {
        ?>
        <div class="lang">
            <span class="native"><?php echo($langMeta["native"]); ?></span>
            <span class="in_english"><?php echo($langMeta["in_english"]); ?></span>
            <span class="short"><?php echo($langMeta["short"]); ?></span>
            <span class="icon"><?php echo($langMeta["icon"]); ?></span>
            <span class="icon"><a href="<?php siteUrl(); ?>tests/language.php?lang=<?php echo($langMeta["short"]); ?>">Change To</a></span>
        </div>
        <?php
    }
    ?>
</div>

<div>
    <h3>Current Language Contents:</h3>

    <div class="contents_head">
        <span class="id">ID</span>
        <span class="key">Key</span>
        <span class="text">Text</span>
    </div>

    <?php
    $x = 1;
    foreach (L::$_CONTENT as $key => $content) {
        ?>
        <div class="content">
            <span class="id"><?php echo($x++); ?></span>
            <span class="key"><?php echo htmlspecialchars($key); ?></span>
            <span class="text"><?php echo htmlspecialchars($content); ?></span>
        </div>
        <?php
    }
    ?>
</div>
</body>
</html>
