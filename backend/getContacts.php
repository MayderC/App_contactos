<?php

header('Access-Control-Allow-Origin: *');
require_once('Usuario.php');

$data = json_decode(file_get_contents('php://input', true));
$user =new Usuario();
session_start();


if(isset($_SESSION['current_usuer'])){

    $id = $_SESSION['current_usuer']['id'];
    $contacts = $user->obtenerContactos($id);
    echo json_encode($contacts);

}else{
    echo "no estoy";
}