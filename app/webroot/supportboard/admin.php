<?php

/*
 * ==========================================================
 * ADMINISTRATION PAGE
 * ==========================================================
 *
 * Administration page to manage the settings and reply to the users.
 *
 */

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
global $SB_CONNECTION;
define('SB_PATH', getcwd());
if (!file_exists('config.php')) {
    $raw = str_replace(['[url]', '[name]', '[user]', '[password]', '[host]', '[port]'], '', file_get_contents('resources/config-source.php'));
    $file = fopen('config.php', 'w');
    fwrite($file, $raw);
    fclose($file);
}
require('config.php');
require('include/functions.php');
require('include/components.php');
$connection_check = sb_db_check_connection();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#566069" />
    <title>Support Board</title>
    <script src="js/min/jquery.min.js"></script>
    <script src="js/main.js?v=<?php echo SB_VERSION ?>"></script>
    <script src="js/admin.js?v=<?php echo SB_VERSION ?>"></script>
    <link rel="stylesheet" type="text/css" href="css/min/admin.min.css?v=<?php echo SB_VERSION ?>" media="all" />
    <link rel="shortcut icon" type="image/png" href="media/icon.png" />
    <link rel="apple-touch-icon" href="resources/pwa/icons/icon-192x192.png" />
    <link rel="manifest" href="resources/pwa/manifest.json" />
    <script>
        if ('serviceWorker' in navigator) {
            window.addEventListener('load', function () {
                navigator.serviceWorker.register('sw.js').then(function (registration) {
                    registration.update();
                }).catch(function (error) {
                    console.log('Registration failed with ' + error);
                });
            });
        }
    </script>
    <?php
    if ($connection_check === true) {
        sb_js_global();
        sb_js_admin();
    }
    ?>
</head>
<body>
    <?php
    if ($connection_check !== true) {
        sb_installation_box($connection_check);
        die();
    }
    sb_component_admin();
    ?>
</body>
</html>