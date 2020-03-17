<?php
class MyConnection extends mysqli {
    public function __construct() {
        $conn = parent::__construct('127.0.0.1','demo','123','demo',3306);
        if ($conn->connect_error) {
            die('Error de conexión ('.$conn->connect_errno.') '.$conn->connect_error);
        }
        return $conn;
    }
}