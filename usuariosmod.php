<?php
    include("conusuario.php");
    $consulta="SELECT * FROM usuarios";
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios-modificación</title>
    <script src="https://kit.fontawesome.com/e96f1cacd9.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="Estilos.css">
</head>
<body>
    <!--Panel desplegable-->
    <input type="checkbox" class="checkbox" id="check">
    <label class="menu" for="check">|||</label>
    <div class="left-panel">
        <ul>            
            <a href="inicioadmin.html" class="buttonopcion">Escritorio</a>
            <br>
            <br>
            <br>
            <a href="materia.html" class="buttonopcion">Materias</a>
            <br>
            <br>
            <br>
            <a href="grados.html" class="buttonopcion">Grados</a>
            <br>
            <br>
            <br>
            <a href="pagos.html" class="buttonopcion">Pagos</a>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <a href="index.php" class="buttonopcion">Cerrar cesión</a>
        </ul>
    </div>

    <!--Imagen de encabezado-->
    <div class="encabezado">
        <img src="img/prof.jpg" width="100%" height="250">
    </div>

    <!--espacio de menú-->
    <form method="POST">
    <div class="info">
        <h2>Modificación de usuarios</h2>
        <table>
            <tr>
                <td class="ttabla">Nombre</td>
                <td class="ttabla">Apellido</td>
                <td class="ttabla">Correos</td>
                <td class="ttabla">Telefonos</td>
                <td class="ttabla">Modificar</td>
            </tr>
            <!--Finalizan los encabezados de la tabla-->
            <?php
                $s=0;
                $resultado=mysqli_query($conex,$consulta);
                while ($row=mysqli_fetch_assoc($resultado)) {                                                        
            ?>
            <tr>
                <td class="ctabla"><?php echo $row['nombres']; ?></td>
                <td class="ctabla"><?php echo $row['apellidos']; ?></td>
                <td class="ctabla"><?php echo $row['correos']; ?></td>
                <td class="ctabla"><?php echo $row['telefonos']; ?></td>
                <td class="ctabla">
                    <input type="submit" value="Modificar" class="btmod" name="bt1">
                </td>
            </tr>
            <?php 
            
            ?>

        <?php } mysqli_free_result($resultado)?>   
        </table>
        <br>
        <br>
        <br>
        <a href="inicioadmin.html" class="buttonopcion">Escritorio</a>
        <a href="profesores.html" class="buttonopcion">Regresar</a>
        <p><a class="name">Eliezer Josué De la Cruz Martinez</a></p>                    
    </div>
    </form>

    

    <!--Calendario de adorno
    <div class="calendario" style="float: left;">
        <div class="img">
            <h2>Domingo, 08</h2>
            <h3>Noviembre | 2020</h3>
        </div>
        <div class="fecha">
            <div class="dia">D</div>
            <div class="dia">L</div>
            <div class="dia">M</div>
            <div class="dia">M</div>
            <div class="dia">J</div>
            <div class="dia">V</div>
            <div class="dia">S</div>            
            <div class="numero">1</div>
            <div class="numero">2</div>
            <div class="numero">3</div>
            <div class="numero">4</div>
            <div class="numero">5</div>
            <div class="numero">6</div>
            <div class="numero">7</div>
            <div class="numero active">8</div>
            <div class="numero">9</div>
            <div class="numero">10</div>
            <div class="numero">11</div>
            <div class="numero">12</div>
            <div class="numero">13</div>
            <div class="numero">14</div>
            <div class="numero">15</div>
            <div class="numero">16</div>
            <div class="numero">17</div>
            <div class="numero">18</div>
            <div class="numero">19</div>
            <div class="numero">20</div>
            <div class="numero">21</div>
            <div class="numero">22</div>
            <div class="numero">23</div>
            <div class="numero">24</div>
            <div class="numero">25</div>
            <div class="numero">26</div>
            <div class="numero">27</div>
            <div class="numero">28</div>
            <div class="numero">29</div>
            <div class="numero">30</div>
        </div>
    </div>
    -->
</body>
</html>