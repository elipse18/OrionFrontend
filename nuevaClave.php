<?php

if($_REQUEST['tokenUser'] !="" && $_REQUEST['id'] !=""){ ?>

<!DOCTYPE html>
<html>

<head>

    <title>Autocaress Orion - Registro</title>
    <link rel="icon" href="./img/navicon.png">

    <meta charset="UTF-8">
    <meta name="author" content="Autocaress Orion" />
    <meta name="keywords" content="Orion S4, Orion Autocaress" />

    <meta name="copyright" content="Propietario del copyright" />
    <meta name="robots" content="index" />
    <meta name="robots" content="noindex" />
    <meta name="robots" content="follow" />
    <meta http-equiv="cache-control" content="no-cache" />

    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="stylesheet" href="./css/index.css" />
    <link rel="stylesheet" href="./css/recuparar-pass.css" />

    <script src="./js/script1.1.js"></script>
    <script src="./js/jquery-3.2.1.js"></script>

    <link rel='stylesheet'
        href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-beta/css/bootstrap.min.css'>

    <script src="https://kit.fontawesome.com/c56cdedc82.js" crossorigin="anonymous"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>

    <nav class="nav-registro">
        <div class="content-footer">
            <a class="navbar-brand" href="#"><img class="navbar-logo" src="./img/logo-white.png" alt="Orion S4"></a>
        </div>
    </nav>

    <form class="form_contact" action="updateClave.php" method="POST">

        <h1 class="title-form">Recuperar contraseña</h1>

        <div class="user_info">

            <label for="pass"><i class="fas fa-key"></i>Contraseña</label>
            <input type="password" id="pass" name="pass" required>

            <label for="pass"><i class="fas fa-key"></i>Confirmar contraseña</label>
            <input type="password" id="pass-confi" name="passconfi" required>

            <input type="text" name="id" value="<?php echo $_REQUEST['id']; ?>"hidden="true" >
            <input type="text" name="tokenUser" value="<?php echo $_REQUEST['tokenUser']; ?> " hidden="true">

            <div class="roundedTwo">
                <input type="checkbox" onclick="Toggle()" value="None" id="roundedTwo" name="mostrar contraseña" checked />
                <label for="roundedTwo"></label>
            </div>

            <a href="#" class="cambio-de-pagina">Iniciar sesion?</a>

            <input type="submit" class="btnSend" value="Confirmar" id="btnSend">

        </div>
    </form>




    <script>
        function Toggle() {
            var temp = document.getElementById("pass");
            if (temp.type === "password") {
                temp.type = "text";
            }
            else {
                temp.type = "password";
            }
        }
    </script>

    <script src="./js/script1.1.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta/js/bootstrap.min.js'></script>
    <script src="./js/index.js"></script>
    <script src="./js/slider.js"></script>
</body>

</html>

<?php 
}else{ ?>
    <meta http-equiv="refresh" content="0;url=index.html"/>
<?php } ?>