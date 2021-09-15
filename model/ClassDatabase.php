<?php


class ClassDatabase
{
    private $db_host = "localhost";
    private $db_dbname = "annonces";
    private $db_user = "root";
    private $db_pass = "";

    protected $isConnected;

    public function getPDO(){
        $this->isConnected = null;
        if($this->isConnected == null){
            try{
                $this->isConnected = new PDO("mysql:host=".$this->db_host.";dbname=".$this->db_dbname.";charset=utf8", $this->db_user, $this->db_pass);
                //DEBUG DE PDO
                $this->isConnected->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                return $this->isConnected;

            }catch (PDOException $exception){
                echo "Erreur de connexion à PDO";
                die();
            }
        }
    }
}
