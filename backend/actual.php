<?php
header('Access-Control-Allow-Origin: *');
session_start();



if(session_status() === PHP_SESSION_ACTIVE){
    echo json_encode($_SESSION);
}