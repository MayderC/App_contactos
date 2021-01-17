<?php

include_once('./Conexion.php');

class Usuario extends Conexion{

    private string $email_usuario;
    private string $nombre_usuario;
    private string $contrasena;
    private PDO $conn;

    /**
     * Constructor de objeto Usuario. Crud de usuario
     *
     */
    function __construct(){

        parent::__construct();
        $this->email_usuario = "";
        $this->nombre_usuario = "";
        $this->contrasena = "";
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

    function obtenerContactos($idusuario){
        try{

            $sql = 'CALL sp_listar_contactos(?)';
            $stm = $this->conn->prepare($sql);
            $stm->bindParam(1, $idusuario, PDO::PARAM_STR, 30);
            $stm->execute();

            $rs = $stm->fetchall(PDO::FETCH_ASSOC);

            return $rs;
        }catch(Exception $e){
            echo $e->getMessage();
        }


    }


    function __destruct()
    {
    // TODO: Implement __destruct() method.
    }


}
