<?php
session_start();

include('../../config.php');
 $usuario =$_POST['usuario'];
 $clave =$_POST['clave'];

 $_SESSION['usuario'] = $usuario;

 $sql = "SELECT * FROM `usuario` WHERE email = '$usuario' AND password= '$clave'";
 $query = $pdo ->prepare($sql);
 $query->execute();
 $usuarios = $query->fetchAll(PDO:: FETCH_ASSOC);
 $contador = 0;
 foreach($usuarios as $usuario){
    $contador = $contador + 1;
 }

 if($contador > 0){
    echo "datos encomtrados";
    header('Location:'.$URL.'/admin/principal.php');
 }else{
    header('Location:'.$URL);
 }
?> 