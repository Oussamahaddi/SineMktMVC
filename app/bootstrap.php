
<?php

    // Load config
    require_once 'config/Config.php';

    // autoload core liberaries
    spl_autoload_register(function ($className) {
        require_once 'libraries/' . $className . '.php';
    });
