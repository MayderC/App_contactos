<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/main_login.css">
    <title>Login</title>
</head>

<body>

    <div class="window">
        <main class="main">
                <h2 class="titulo__login">Login</h2>
            <div class="form">
                <form action="" method="post">

                    <div>
                        <label for="id_form_user">Usuario</label>
                        <input id="id_form_user" type="text" name="usuario[name]">
                    </div>
                    <div class="pass">
                        <label for="id_form_pass">Contraseña</label>
                        <input id="id_form_pass" type="text"  name="usuario[contrasena]">
                    </div>

                    <div class="btn__send">
                        <input id="id_form_btn" type="submit" value="LOGIN">
                        
                        <a class="registro__link" href="http://">Registrarse</a>
                    </div>

                </form>
            </div>

        </main>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="./assets/js/main.js"></script>

</body>

</html>