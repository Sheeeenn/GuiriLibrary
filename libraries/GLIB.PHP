<?php 

    namespace glib;

    class database {
        public $dbhost;
        public $dbuser;
        public $dbpassword;
        public $dbname;
        public $dbport;
        public $con;

        //THIS WILL CREATE AN INSTANCE OF DATABASE
        public function __construct($dbhost, $dbuser, $dbpassword, $dbname, $dbport = 3306) {
            $this->dbhost = $dbhost;
            $this->dbuser = $dbuser;
            $this->dbpassword = $dbpassword;
            $this->dbname = $dbname;
            $this->dbport = $dbport;

            $this->con = new \mysqli($this->dbhost, $this->dbuser, $this->dbpassword, $this->dbname, $this->dbport);

            if ($this->con->connect_error) {
                die("Connection failed: " . $this->con->connect_error);
            }
        }

        //ADD A ROW IN THE SPECIFIC DATABASE
        public function data_create ($tablename, $key, $value) {
            //$str = $this->addslash($value);
            $query = "INSERT INTO $tablename ($key) VALUES ($value)";
            $this->con->query($query);
        }

        //READ SPECIFIC DATA BASE ON USERS CHOICE
        public function data_read ($select, $tablename, $condition = "1=1") {
            //$str = $this->addslash($value);
            $query = "SELECT $select FROM $tablename WHERE $condition";
            $result = $this->con->query($query);
            $test = [];
            while($row = $result->fetch_assoc()){
                $test [] = $row;
            }
            $result->free();
            return $test;
        }

        //UPDATE SPECIFIC USER DATA
        public function data_update () {

        }

        //DROP OR DELETE A ROW IN A SPECIFIC TABLE
        public function data_delete () {
            
        }

        //END OR CLOSE THE DATABASE
        public function data_end () {
            $this->con->close();
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

        //TEST FUNCTION - TO ECHO SOMETHING
        public function show2 ($show) {
            echo $show;
        }

    }

?>