<?php 

require('urls/Paths.php');

path::request([
    ["path" => "/", "name" => "index"],
    ["path" => "/home", "name" => "home"],
    ["path" => "/about", "name" => "about"]
]);

?>