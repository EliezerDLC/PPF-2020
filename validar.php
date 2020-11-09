<?php

$usuario =  $_POST['usuario'];
$clave = $_POST['clave'];

//consulta para  validación de usuario
$conex = mysqli_connect("https://github.com/EliezerDLC/bdppf.git","EliezerDLC","Darius9818","proyecto");
$consulta="SELECT * FROM `usuarios` WHERE nombres='$usuario' and contraseña='$clave'";
$resultado=mysqli_query($conex,$consulta);
$filas=mysqli_num_rows($resultado);

//consulta para validación del tipo usuario
$reconsulta="SELECT tpusuarioid FROM `usuarios` WHERE nombres='$usuario' and contraseña='$clave'";
$recuperación=mysqli_query($conex, $reconsulta);
$row=$recuperación->fetch_assoc();

if ($filas>0){
    if ($row['tpusuarioid']==1){
        header("location:inicioadmin.html");
    
    }else {
        if($row['tpusuarioid']==2){
            header("location:profinicio.html");        
        }else{
            if($row['tpusuarioid']==3){
                header("location:esterror.html");        
            }
        }
    } 
}else{
    header("location:error.html");
}


  
?>