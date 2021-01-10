<?php 
require_once 'Conexion.php';

class LoginUser extends Conexion{
    private $conn;
    function __construct(){
        parent::__construct();
        $this->conn = parent::conectar();
    }

    //Obtiene fila donde coincide el email y contraseña ingresadoe en la vista login
    function obtenerUsuario($email, $pass)
    {
        try {

            $sql = 'CALL sp_obtenerUsuario(?, ?)';
            $stm = $this->conn->prepare($sql);
            $stm->bindParam(1, $email, PDO::PARAM_STR, 30);
            $stm->bindParam(2, $pass, PDO::PARAM_STR, 30);
            $stm->execute();
            $rs = $stm->fetch(pdo::FETCH_OBJ);

            //vuelve a comprobar aunque podria no ser necesario, La base de datos ya lo hizo.
            //verifica si el usuario y contrase con iguales a los ingresados. esto ya lo hizo la base de datos

            if($rs){
                if ($rs->email_usuario == $email && $rs->contrasena == $pass) {
                    //le cambiamos el valor a la contraseña del objeto anonimo a "" string vacio, antes de retornarlo
                    $rs->contrasena = "";
                    return $rs;
    
                } 
            }else {
                //si no hay nada y no coinciden retornamos false

                return false;
            }


            //Archivo checkLogin.php

        } catch (PDOException $e) {
            //echo $e->getMessage();
        }

    }

}