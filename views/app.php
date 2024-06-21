<?php 
include("libraries\GLIB.php");
//include("libraries\debug.php");

use glib\database;

/* ADD INSTANCE ( OOP ) */
$data = new database ("localhost", "root", "", "testlib", "3306");

/* DATA CREATE */
//$data->data_create("users", "username, password", "'justin josh', 'guiriba2'");

/* DATA READ */
// $test =  $data->data_read("*", "users");
// foreach($test as $player){
//     echo $player['username']."<br>";
// }

/* DATA UPDATE */
//$data->data_update("users", "username = 'YSheen'", "id = 15");

/* DATA UPDATE */
//$data->data_delete("users", "id = 11");

/* DATA END */
//$data->data_end();

?>

<html>
    <head>
        <title>
            TEST LIBRARY
            
        </title>
        <link rel="stylesheet" type="text/css" href="views/bootstrap/css/bootstrap.min.css">
        <script src="views/bootstrap/js/bootstrap.bundle.min.js"></script>
    </head>
    <body>
        
        <section>
            <div class="loginform-container">
                <h3 class="login-text">Login</h3>
                <hr>
                <form class="semi-cont" method="post">
                    <div class="labels">
                        <label>Username:</label><br>
                        <input type="text">
                    </div>

                    <div class="labels">
                        <label>Password:</label><br>
                        <input type="password">
                    </div>
                    <input type="submit">
                    <a href="/home">home</a>
                </form>
            </div>
        </section>
        
    </body>
</html>