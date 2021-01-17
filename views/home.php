<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/main_login.css">

    <title>App contact</title>
</head>

<body>

<?php

session_start();


if (isset($_SESSION['current_usuer'])) {
    echo "";
} else {
    header('Location: http://127.0.0.1/web/practica/media');
}
?>

<main class="main">
    <div class="header__top__title">
        <div class="titulo">
            <h1>App Contactos</h1>
        </div>
        <div class="lista">
            <p class="lista__p">Lista de contactos</p>
        </div>
    </div>
    <a class="cerrar_session" href="http://localhost/web/practica/media/views/cerrarSession.php"><img src="../assets/img/cancel.svg" alt="" srcset=""></a>
    <div class="content">
        <aside class="header">
            <div class="header__top">
                <div class="header__top__img">
                    <img src="" alt="">
                </div>
            </div>
            <form class="form__container" action="">
                <div class="form__container__item">
                    <label  for="in_nombre_c">Nombre:</label><input class="form-control" type="text" name="nombre" id="in_nombre_c">
                </div>
                <div class="form__container__item">
                    <label for="in_email_c">Email:</label><input class="form-control" type="text" name="email" id="in_email_c">
                </div>
                <div class="form__container__item">
                    <label for="in_telefono_c">Telefono:</label><input class="form-control" type="text" name="telefono" id="in_telefono_c">
                </div>
                <div class="form__container__item--btn">
                    <input class="btn btn-success" type="submit" value="Guardar">
                </div>
            </form>
        </aside>
        <div id="contact" class="padre">

        </div>
    </div>

</main>




<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
<?php
echo '<script src="../assets/js/home.js"></script>';
?>
</body>

</html>