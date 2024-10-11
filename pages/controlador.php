<?php
if(isset($_POST["btningresar"])){
    $correo = $_POST["correo"];
    $password = $_POST["password"];

    if(empty($correo) || empty($password)){
        echo "<script>alert('Los campos están vacíos');</script>";
    } else{
        $correo=$_POST["correo"];
        $password=$_POST["password"];
        $sql=$conexion->query("select * from administradores WHERE Correo='$correo' and password='$password'");
        if($datos=$sql->fetch_object()){
            header("location:admin.php");
        }else{
            echo "<script>alert('ACCESO DENEGADO');</script>";
        }
    }
}
?>