<?php
function autoloadClass($class) {
    $loadControl = 'application/controllers/' . strtolower($class) . '.class.php';

    $loadModels = 'application/models/' . strtolower($class) . '.class.php';
    $path = 'application/'. strtolower($class) . '.class.php';
    if (file_exists($loadControl)) {
        require_once $loadControl;
    }

    elseif (file_exists($loadModels )) {
        require_once $loadModels ;
    }
    elseif (file_exists($path)) {
        require_once $path;
    }
}
spl_autoload_register('autoloadClass');
new Controller();
?>
