<?php 

class path {

    public static $uri;

    public static function request ($paths) {

        $uri = $_SERVER['REQUEST_URI'];
        $new_uri = explode("/PHPLibrary", $uri);

        foreach ($paths as $path) {

            if ($uri === $path['path']) {
                require 'views/' . $path['name'] . '.php';
                return;
            }   

            //  if ($new_uri[1] === $path['path']) {
            //      require 'views/' . $path['name'] . '.php';
            //      return;
            //  }      

        }

        require 'views/error.php';

    }
}

?>