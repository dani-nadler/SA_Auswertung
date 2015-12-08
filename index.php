<!doctype html>
<?php
include_once 'config/config.php';
?>

<html lang="de">
    <head>
        <title>TicSys</title>
        <meta name="description" content="TicSys ist eine Applikation zum Vertrieb von Event-Eintrittskarten.">
        <meta name="author" content="Dani Nadler">
        <link rel="stylesheet" type="text/css" href="/SA_Auswertung/css/normalize.css">
        <link rel="stylesheet" type="text/css" href="/SA_Auswertung/css/application.css">
    </head>
    <body>
        <div id="ribbon">
            <a href="/home"><img src="/SA_Auswertung/images/feedback.png" alt=URI_KONTAKT width="80" height="80" /></a>
        </div>

        <div id="wrap">
            <div id="header">
                <div id="logo">
                    <a href="/home"><img src="/SA_Auswertung/images/logo-white.png" alt="TicSys Logo" width="295" height="70" /></a>
                </div>
            </div>

            <div id="menu">
                <ul>
                    <?php
                    $currentUri = getCurrentURI();
                    foreach (getMenu() as $href => $title) {
                        $liContent = $title;
                        if ($href != $currentUri) {
                            $liContent = "<a href=\"$href\">$title</a>";
                        }
                        echo "<li>$liContent</li>\n";
                    }
                    ?>
                </ul>
            </div>

            <div id="content">
                <?php
                switch (getCurrentURI()) {
                    case URI_EVENTS:
                        include_once 'controller/eventscontroller.php';
                        break;
                    case URI_KONTAKT:
                        include_once 'controller/contactcontroller.php';
                        break;
                }
                ?>
            </div>

            <div id="footer">
                <p>Copyright &copy; 2012 TicSys, <?php echo gmdate("d.m.Y H:i:s"); ?></p>
            </div>
        </div>
    </body>
</html>
<?php

/**
 * @return array containing all menu items in format [base href] => [title]
 */
function getMenu() {
    return array(
        URI_HOME => 'Home',
        URI_EVENTS => 'Events',
        URI_FAQ => 'FAQ',
        URI_KONTAKT => 'Kontakt',
        URI_DUMMY => 'dummy'
    );
}

/**
 * @return string the requested menu item URI
 */
function getCurrentURI() {
    $menu = getMenu();
    if (array_key_exists($_SERVER['REQUEST_URI'], $menu)) {
        return $_SERVER['REQUEST_URI'];
    } else {
        foreach (array_keys(getMenu()) as $href) {
            if(preg_match("@^$href@", $_SERVER['REQUEST_URI'])) {
                return $href;
            }
        }
    }
    return key($menu);
}
?>