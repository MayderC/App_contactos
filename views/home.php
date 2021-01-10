<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
    

    <link rel="stylesheet" href="./assets/css/main.css">


    <title>App contact</title>
</head>

<body>


    <main class="main_p">
        <h1 class="main__title">Contact App</h1>
        <div class="main">

    
            <?php

            session_start();

            if(isset($_SESSION['current_usuer'])){
                echo "<h1>Tengo</h1> ";
                echo $_SESSION['current_usuer']['fecha'];
            }else{
                echo "<h1>No tengo</h1> ";
            }


            $cont = 0;
            $id_contact_html = "id__contacto_". $cont;
    
            for ($i = 0; $i < 2; $i++) {
            ?>
            <div class="main__cont">
    
                <div class="content">
                    <div class="cntent__perfil">
                    </div>
        
                    <div class="content__contact">
        
                        <div class="content__contact__name">
                            <h2>Usuario <?php echo $i ?></h2>
                        </div>
        
                        <div class="content__contact__info">
                            <p>Mail: example@mail.com</p>
                            <p>Telefono: 000 000 000</p>
                        </div>
        
                        <div class="content__contact__btn">
                            <p class="contact__btn-d">
                                Eliminar
                            </p>
                            <p class="contact__btn-i">
                                Editar
                            </p>
                        </div>
        
                    </div>
        
                </div>
    
            </div>
            
    
            <?php } ?>

            <?php
        session_destroy();

        session_start();
        
        if (isset($_SESSION['current_usuer'])) {
            echo "<h1>Tengo</h1> ";
        } else {
            echo "<h1>No tengo</h1> ";
        }

        echo "<h1>Hola</h1> "

        ?>
            </div>



    </main>



    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="../assets/js/home.js"></script>
</body>

</html>