<?php 

class path {

    public static $uri;

    public static function request ($paths) {

        $uri = $_SERVER['REQUEST_URI'];
        $new_uri = explode("/GuiriLibrary", $uri);

        foreach ($paths as $path) {

            if (isset($new_uri[1]) && $new_uri[1] === $path['path'] || $uri === $path['path']) {
                require 'views/' . $path['name'] . '.php';
                return;
            }   

            //$uri === $path['path'] ||  
            //  if ($new_uri[1] === $path['path']) {
            //      require 'views/' . $path['name'] . '.php';
            //      return;
            //  }      

        }

        require 'views/error.php';

    }
}

?>