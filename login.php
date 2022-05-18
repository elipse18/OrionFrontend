<?php 
 session_start();
 
 if(isset($_SESSION['usuario'])) {
    header('Location: index.html');
        
      
    }


    require_once  'php/conexion.php';
    require_once  'php/userlogin.php';
    require_once  'php/metodos.php';
?>

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
    <link rel="stylesheet" href="./css/login.css" />

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

    <form class="form_contact" action="php/userlogin.php" method="POST">

        <h1 class="title-form">Iniciar sesión</h1>

        <div class="user_info">

            <label for="email"><i class="fas fa-at"></i>Correo electronico</label>
            <input type="email" id="correo" name="correo" required>

            <label for="pass"><i class="fas fa-key"></i>Contraseña</label>
            <input type="password" id="pass" name="pass" required>

            <div class="roundedTwo">
                <input type="checkbox" onclick="Toggle()" value="None" id="roundedTwo" name="mostrar contraseña" checked />
                <label for="roundedTwo"></label>
            </div>

            <a href="registro.html" class="cambio-de-pagina">¿No estas registrado?</a>
            <br>
            <a href="recuperar.html" class="cambio-de-pagina">¿Olvidaste Tu Contraseña?</a>
<br>
            <input type="submit" name="submit" class="btnSend" value="Iniciar Sesion" id="btnSend">

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