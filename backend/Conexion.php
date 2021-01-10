<?php 

class Conexion{
    private $host;
    private $user;
    private $pass; 
    private $dbname;
    private $conn;


    public function __construct(){
        $this->host = "localhost";
        $this->user = "root";
        $this->pass = "";
        $this->dbname = "app_contactos";
    }

    protected function conectar(): PDO
    {
        
        $connection_string = "mysql:host={$this->host};dbname={$this->dbname};chartset-utf8";

        try {
    
            $this->conn = new PDO($connection_string, $this->user, $this->pass);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
           
        }catch(Exception $ex){
        
            echo "Error: ".$ex->getMessage();
        
        }
              
        return $this->conn;

    }
    
    protected function desconectar(){

        $this->conn = null;
    
    }

}



