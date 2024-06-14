<?php 

class path {

    public static $uri;

    public static function request ($paths) {

        $uri = $_SERVER['REQUEST_URI'];

        foreach ($paths as $path) {

            if ($uri === $path['path']) {
                require 'views/' . $path['name'] . '.php';
                return;
            }            

        }

        require 'views/error.php';

    }
}

?>