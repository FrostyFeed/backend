<?php

    function autoload($class) {
        $file = '';
        if (strpos($class, 'Model')) {
            $file = __DIR__ . '\\Models\\' . $class . '.php';
        } elseif (strpos($class, 'View')) {
            $file = __DIR__ . '\\Views\\' . $class . '.php';
        } elseif (strpos($class, 'Controller')) {
            $file = __DIR__ . '\\Controllers\\' . $class . '.php';
        }
        if (file_exists($file)) {
            include $file;
        }
    }

    // Register the autoload function
    spl_autoload_register('autoload');

    $model = new UserModel();
    $model->msg();
    $view = new UserView();
    $view->msg();
?>