<?php

namespace App\Config;

class Config
{
    private $DB_Connect;
    private $CONNECTION;
    private $SYS_NAME;
    public  $key_Captcha_Public = "";
    public  $key_Captcha_Private = "";

    function __construct()
    {
        $this->DB_Connect = array(
            'host' => 'localhost',
            'database' => 'mibarbershop',
            'username' => 'mibarber5h0p_admin',
            'password' => 'm1b4rb3r_sho0p.c0m.mxX'
        );

        $this->key_Captcha_Public = "";
        $this->key_Captcha_Private = "";
        $this->SYS_NAME = "mibarbershop";
    }

    public function get_Route()
    {
        return 'mibarbershop/';
    }

    public function get_Session_Name()
    {
        return $this->SYS_NAME;
    }

    public function get_DB_Connect()
    {
        return $this->DB_Connect;
    }

    public function set_DB_Connect($connect)
    {
        $this->DB_Connect = $connect;
    }

    public function get_Connection($DB_Credentials = false)
    {
        $db_Connect = $this->get_DB_Connect();
        $DB_Credentials = ($DB_Credentials) ? $DB_Credentials : $db_Connect['database'];
        $connection = new \mysqli($db_Connect['host'], $db_Connect['username'], $db_Connect['password'], $DB_Credentials);
        $connection->set_charset('utf8');
        $this->CONNECTION = $connection;
        return $this->CONNECTION;
    }

    public function set_Connection($connect){
        $this->CONNECTION = $connect;
    }

    function ROUTE(){
        $route = $_SERVER['HTTP_HOST'];
        return 'http://'.$route.'/'.$this->get_Route();
    }
}
