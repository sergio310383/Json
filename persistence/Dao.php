<?php

namespace persistence;

class Dao {

    /**
     * @var \PDO
     */
    protected $con;

    public function open() {
        $this->con = new \PDO("mysql:host=mysql.lvcsistemas.com;dbname=lvcsistemas02", "lvcsistemas02", "kern09nti", [
            \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION]
        );
    }

    public function close() {
        $this->con = null;
    }

}
