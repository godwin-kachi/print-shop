<?php

class db {
    public function __construct()
    {
        $this->username='root';
        $this->password='';
        $this->database='dezzy';
        $this->host='localhost';
        try {
            $this->dbh = new PDO('mysql:host=localhost;dbname=dezzy', 'root', '', array(
                PDO::ATTR_PERSISTENT => true
            ));

            return $this->dbh;
                     
         } catch (PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
       
    }
}

