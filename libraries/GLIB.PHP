<?php 

    namespace glib;

    class database {
        public $dbhost;
        public $dbuser;
        public $dbpassword;
        public $dbname;
        public $con;

        //THIS WILL CREATE AN INSTANCE OF DATABASE
        public function __construct($dbhost, $dbuser, $dbpassword, $dbname) {
            $this->dbhost = $dbhost;
            $this->dbuser = $dbuser;
            $this->dbpassword = $dbpassword;
            $this->dbname = $dbname;

            $this->con = new \mysqli($this->dbhost, $this->dbuser, $this->dbpassword, $this->dbname);
        }

        //ADD A ROW IN THE SPECIFIC DATABASE
        public function data_create ($tablename, $key, $value) {
            $str = $this->addslash($value);
            $query = "INSERT INTO $tablename ($key) VALUES ($value)";
            $this->con->query($query);
        }

        //READ SPECIFIC DATA BASE ON USERS CHOICE
        public function data_read () {
            
        }

        //UPDATE SPECIFIC USER DATA
        public function data_update () {

        }

        //DROP OR DELETE A ROW IN A SPECIFIC TABLE
        public function data_delete () {
            
        }

        //TO CONVERT STRING WITH SLASHES INTO A NORMAL STRING
        public function addslash ($val){
            $str = $val;
            return addslashes($str);
        }

        //TEST FUNCTION - TO ECHO SOMETHING
        public static function show ($show) {
            echo $show;
        }

    }

?>