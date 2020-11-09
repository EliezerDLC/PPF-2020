<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <script src="https://kit.fontawesome.com/e96f1cacd9.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="Estilos.css">
</head>
<body>
    <form class="formulario">
        <h1>Registro</h1>
        <?php
    include("con_db.php");

    if ($_POST['tipo'] == "Ad"){
        $tip=1;
    }else{
        if ($_POST['tipo']=="Pro"){
            $tip=2;
        }else{
            if ($_POST['tipo']=="Al"){
                $tip=3;
            }
        }
    }    

    $con=$_POST['contra'];
    $nom=$_POST['nombres'];
    $ape=$_POST['apellidos'];
    $cor=$_POST['correos'];
    $tel=$_POST['telefonos'];
    $nac=$_POST['nacimientos'];
  
    if (isset($_POST['iniciar'])){
        if (strlen($tip) >= 1 && strlen($con) >= 1 && strlen($nom) >= 1 && strlen($ape) >= 1 && strlen($cor) >= 1 && strlen($tel) >= 1 &&  strlen($nac) >= 1){
            $contra=$_POST['contra'];
            $nombres = trim($_POST['nombres']);
            $apellidos = trim($_POST['apellidos']);
            $correos = trim($_POST['correos']);
            $telefonos = trim($_POST['telefonos']);
            $nacimientos = trim($_POST['nacimientos']);
            $consulta = "INSERT INTO usuarios(tpusuarioid, contraseña, nombres, apellidos, correos, telefonos, nacimientos) VALUES ('$tip', '$contra', '$nombres', '$apellidos', '$correos', '$telefonos', '$nacimientos')";
            $resultado = mysqli_query($conex,$consulta);
            if ($resultado){
                ?>
                    <h2 class="ok">¡Registrado exitosamente!</h2>
                <?php                 
                                
            } else{
                ?>
                <h2 class="bad">¡ERROR!</h2>
                <?php
                }                   
        } else{
            ?>
                <h2 class="bad">Por favor complete todos los campos</h2>
                <?php
        }
    }

?>
            <br>
            <a href="profregistro.html" class="buttotro">Registrar otro usuario</a>
            <br>
            <br>
            <br>
            <a href="inicioadmin.html" class="buttotro2">Salir a escritorio</a>
            <p><font color=white>a</font></p>
            <!--<p><a class="linktw" margin-top=10px href="loginvista.html">¿Olvideste tu contraseña?</a></p>-->
        </div>
    </form>
</body>
</html>
