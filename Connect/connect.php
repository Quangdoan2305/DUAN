<?php

class connect{
    public function connect()
    {
        $serverName = 'localhost';
        $userName = 'root';
        $password = '';
        $myDB = 'duan1';
        try {
            $conn= new PDO("mysql:host=$serverName;dbname=$myDB", username: $userName, password: $password);
            $conn->setAttribute(attribute: PDO::ATTR_ERRMODE, value: PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (\Throwable $th) {
            echo 'ket noi that bai' . $th->getMessage();
            return null;
            //throw $th;
        }
    }
}