<?php
/**
 * Created by PhpStorm.
 * User: waeel
 * Date: 05/12/2018
 * Time: 00:33
 */

class connexionBDD
{ private const BDNAME = "select_test";
    private const ROOT = "root";
    private const PDW = "";
    private const HOST = "localhost";
    private $cnnxBD;
    public function __construct()
    {
        try {
            $this->cnnxBD =  new PDO("mysql:host=" . self::HOST . ";dbname=" . self::BDNAME  , self::ROOT, self::PDW );
        } catch (PDOException $e) {
            die('Erreur : ' . $e->getMessage());
        }
    }
    public function getConnxBD(){
        return $this->cnnxBD;
    }

}