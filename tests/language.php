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

        table {
            border: 1px solid #000;
        }

        td {
            padding: 8px;
            text-align: left;
            border: 1px solid #ccc;
        }
    </style>
</head>
<body>

<div>
    <h3>HTTP_ACCEPT_LANGUAGE:</h3>
    <div><?php echo $_SERVER['HTTP_ACCEPT_LANGUAGE']; ?></div>

    <h3>COOKIE DATA:</h3>
    <div><?php echo isset($_COOKIE["bitcoinz_selected_language"]) ? $_COOKIE["bitcoinz_selected_language"] : 'Cookie not set!'; ?></div>

    <h3>Current Language:</h3>
    <table>
        <thead>
            <tr>
                <th>Native</th>
                <th>In English</th>
                <th>Short</th>
                <th>Icon</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php L::MW("native"); ?></td>
                <td><?php L::MW("in_english"); ?></td>
                <td><?php L::MW("short"); ?></td>
                <td><?php L::MW("icon"); ?></td>
            </tr>
        </tbody>
    </table>
</div>

<div>
    <h3>Available Languages:</h3>
    <table>
        <thead>
            <tr>
                <th>Native</th>
                <th>In English</th>
                <th>Short</th>
                <th>Icon</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach (L::GetAvailableLanguages() as $langMeta) : ?>
                <tr>
                    <td><?php echo $langMeta['native']; ?></td>
                    <td><?php echo $langMeta['in_english']; ?></td>
                    <td><?php echo $langMeta['short']; ?></td>
                    <td><?php echo $langMeta['icon']; ?></td>
                    <td><a href="<?php siteUrl(); ?>tests/language.php?lang=<?php echo($langMeta["short"]); ?>">Change To</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<div>
    <h3>Current Language Contents:</h3>
    <table>
        <thead>
            <tr>
                <th>English</th>
                <th><?php echo $langMeta['native']; ?></th>
            </tr>
        </thead>

        <tbody>
            <?php foreach (L::$_CONTENT as $key => $content) : ?>
                <tr>
                    <td><?php echo htmlspecialchars($key); ?></td>
                    <td><?php echo htmlspecialchars($content); ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

</body>
</html>
