<?php
session_start();
if(session_status() === PHP_SESSION_ACTIVE && isset($_SESSION['current_usuer'])){

    session_destroy();
    header('Location: http://127.0.0.1/web/practica/media' );
}
header('Location: http://127.0.0.1/web/practica/media' );