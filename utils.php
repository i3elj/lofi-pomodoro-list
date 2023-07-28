<?php

/**
 * Creates a router, pretty self-explanatory.
 */
function create_router(array $routes, string $real_path)
{
    foreach ($routes as $route) {
        if (preg_match($route['path'], $real_path, $matches)) {
            if ($real_path != $matches[0])
                notfound();

            /* only useful with a router script
               e.g php -S localhost:8080 router.php */
            if ($route['dependencies'] != NULL)
                include_sub_dir($route['dependencies']);

            echo "<link rel='stylesheet' type='text/css' href='public/global.css'>";

            require $route['view'];
            exit(1);
        }
    }
}

/**
 * Dump and die, it accepts arrays.
 */
function dd(mixed $var)
{
    echo "<pre>";

    if (is_array($var)) {
        foreach ($var as $value) var_dump($value);
        echo "</pre>";
        die();
    }

    var_dump($var);
    echo "</pre>";
    die();
}

/**
 * Include sub directories that are required by a view.
 *
 * Obs: 'dependencies' => [
 *          'js' => ['views/home/main.js'],
 *          'css' => ['views/home/style.css']
 *      ]
 */
function include_sub_dir(array $dependencies)
{
    trigger_error(
        "Deprecated! There's no use outside a router scripts. PHP built-in server takes care of any required js or css file",
        E_USER_WARNING
    );

    foreach ($dependencies as $type => $files) {
        $is_js = $type == 'js';
        $tag = $is_js ? "<script type='module'>" : "<style>";
        $endtag = $is_js ? "</script>" : "</style>";

        foreach ($files as $file) {
            echo $tag;
            include $file;
            echo $endtag;
        }
    }
}
