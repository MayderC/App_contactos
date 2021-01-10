<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/main_login.css">
    <title>Login</title>
</head>

<body>
    <div class="window">
        <main class="main">
            <h2 class="titulo__login">Login</h2>
            <div class="form">
                <form action="" method="post">

                    <div class="input">
                        <label for="id_login_email">Usuario</label>
                        <input id="id_login_email" type="text" name="">
                    </div>
                    
                    <div class="input">
                        <label for="id_login_pass">Contraseña</label>
                        <input id="id_login_pass" type="text" name="">
                    </div>
               

                    <div class="btn__send">
                        <input class="btn btn-primary" id="btn__login" type="submit" value="LOGIN">

                        <a class="registro" href="http://">Registrarme</a>
                        
                    </div>

                </form>
            </div>

        </main>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="../assets/js/login_register.js"></script>
</body>

</html>
