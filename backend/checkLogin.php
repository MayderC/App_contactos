<?php

require_once('./LoginUser.php');


// datos que vienen desde el frontend con axios. post
$data = json_decode(file_get_contents("php://input"), true);

//Verificar que no hayan parametros vacios.
if(!empty($data['email']) && !empty($data['pass'])){
    //validar datos
    $email = $data['email'];
    $pass = $data['pass'];

    /**
     * Aqui se crea una instancia de LoginUser, que es quien comprueba si existe 
     * el email y contrase dentro de la base de datos.
     */

     //objeto de la clase loginuser
    $log_obj = new LoginUser();

    /**
     * este metodo 'obtenerUsuario' recibe el email y contraseña, y hace la conexion a la base de datos
     * retorna un objeto  con los datos del usuario si lo encuentra 
     * si no, retorna false.
     * $rs guarda los datos que retorna el metodo.
     * 
     */
    $rs = $log_obj->obtenerUsuario($email, $pass);


    //si el objeto existe retornamos con echo en formato json. si no existe se imprime que no hay datos.
    if($rs != false){
       
        //se crea un array asociativo para retornarlo.

        $datos = array(
            'id'    =>  $rs->id_usuario,
            'email' =>  $rs->email_usuario,
            'user'  =>  $rs->nombre_usuario,
            'fecha' =>  $rs->fecha_creacion,
            'tipo'  =>  $rs->tipo_usuario,
        );

         echo json_encode($datos);
        

        
    }elseif($rs == false){
        
        $no_data['data'] = false;
        echo json_encode($no_data);
        
    }
}else{
    echo "No hay datos";
}


function crearSesion($usuario){
    session_start();
    $_SESSION['current_usuer']['id']    = $usuario->id_usuario;
    $_SESSION['current_usuer']['email'] = $usuario->email_usuario;
    $_SESSION['current_usuer']['user']  = $usuario->nombre_usuario;
    $_SESSION['current_usuer']['fecha'] = $usuario->fecha_creacion;
    $_SESSION['current_usuer']['tipo']  = $usuario->tipo_usuario;

}



?>