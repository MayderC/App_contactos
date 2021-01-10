<?php

include_once('./Conexion.php');

class Usuario extends Conexion{

    private $email_usuario;
    private $nombre_usuario;
    private $contrasena;
    private $conn;

    /**
     * Constructor de objeto Usuario. Crud de usuario
     * 
     * @param string $email_usuario
     * @param string $nombre_usuario
     * @param string $contrasena
     */
    function __construct($email_usuario, $nombre_usuario, $contrasena){

        parent::__construct();
        $this->email_usuario = $email_usuario;
        $this->nombre_usuario = $nombre_usuario;
        $this->contrasena = $contrasena;
        $this->conn = parent::conectar();
    }

    //SETTERS AND GETHERS

    /**
     * @param string $email_usuario
     */
    public function setEmailUsuario(string $email_usuario): void
    {
        $this->email_usuario = $email_usuario;
    }

 

    /**
     * @param string $nombre_usuario
     */
    public function setNombreUsuario(string $nombre_usuario): void
    {
        $this->nombre_usuario = $nombre_usuario;
    }

    /**
     * @param string $contrasena
     */
    public function setContrasena(string $contrasena): void
    {
        $this->contrasena = $contrasena;
    }


    function registrarUsuario(){
        try{
            $sql = 'CALL sp_ingresar_usuario(?, ?)';
            $stm = $this->conn->prepare($sql);
            $stm->bindParam(1, $this->email_usuario, PDO::PARAM_STR, 30);
            $stm->bindParam(2, $this->nombre_usuario, PDO::PARAM_STR, 30);
            $stm->bindParam(3, $this->contrasena, PDO::PARAM_STR, 30);
            $stm->execute();
        }catch(Exception $ex){

        }
    }

    function eliminarUsuario($id){
       try{
           $sql = 'CALL sp_eliminar_usuario(?)';
           $stm= $this->conn->prepare($sql);
           $stm->bindParam(1, $id, PDO::PARAM_INT);
           $stm->execute();

           return true;
       }catch(PDOException $ex ){
           echo $ex->getMessage();
       }
    }


    function __destruct()
    {
    // TODO: Implement __destruct() method.
    }


}
