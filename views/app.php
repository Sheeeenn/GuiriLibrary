<?php 
include("libraries\GLIB.php");
include("libraries\debug.php");

use glib\database;


//$data = new database ("localhost", "root", "", "testlib", "3306");
//$data->data_create("users", "username, password", "'justin josh', 'guiriba2'");
//$data->data_end();

?>

<html>
    <head>
        <title>
            TEST LIBRARY
        </title>
        <link rel="stylesheet" type="text/css" href="views\css\home.css">
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