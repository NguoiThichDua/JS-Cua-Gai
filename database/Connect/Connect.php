<?php
    class database {
        public  $connect;
        public function database(){
            try {
                $this->connect = new PDO("mysql:host=localhost;dbname=love;charset=utf8","root","");
                $this->connect->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $exc) {
                echo "Lỗi kết nối cơ sở dữ liệu";
                $this->connect=NULL;
            }
        }
        public function __destruct() {
            $this->connect=NULL;
        }
    }
?>