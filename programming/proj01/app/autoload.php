<?php

$CONTROLLER_PATH = "./Controllers";
$MODELS_PATH = "./Models";
$VIEWS_PATH = "./Views";

$ROOT_PATHS = array($CONTROLLER_PATH, $MODELS_PATH);

foreach ($ROOT_PATHS as $path) {
    $files = scandir($path);

    foreach ($files as $file) {
        if ($file == "." || $file == "..") {
            continue;
        }

        $library = $path.'/'.$file;

        require_once $library;
    }
}

?>