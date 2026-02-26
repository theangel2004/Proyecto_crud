<?php

$mensaje = "";
$error = "";
$editarData = null;

/* ===== CREAR ===== */
if(isset($_POST['crear'])){
    $nombre = trim($_POST['nombre']);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $telefono = trim($_POST['telefono']);

    if(!solo_letras($nombre)){
        $error = "El nombre solo puede contener letras";
    }
    elseif($telefono == ""){
        $error = "El teléfono es obligatorio";
    }
    else{
        $telefono = preg_replace("/[^0-9]/", "", $telefono);
        $sql = "INSERT INTO perfiles (nombre,email,telefono) VALUES (?,?,?)";
        $stmt = $conexion->prepare($sql);
        $stmt->execute([$nombre,$email,$telefono]);
        $mensaje = "Perfil creado correctamente";
    }
}

/* ===== ELIMINAR ===== */
if(isset($_GET['eliminar'])){
    $stmt = $conexion->prepare("DELETE FROM perfiles WHERE id=?");
    $stmt->execute([$_GET['eliminar']]);
    $mensaje = "Registro eliminado";
}

/* ===== OBTENER PARA EDITAR ===== */
if(isset($_GET['editar'])){
    $stmt = $conexion->prepare("SELECT * FROM perfiles WHERE id=?");
    $stmt->execute([$_GET['editar']]);
    $editarData = $stmt->fetch();
}

/* ===== ACTUALIZAR ===== */
if(isset($_POST['actualizar'])){
    $nombre = trim($_POST['nombre']);
    $telefono = trim($_POST['telefono']);

    if(!solo_letras($nombre)){
        $error = "El nombre solo puede contener letras";
    }
    elseif($telefono == ""){
        $error = "El teléfono es obligatorio";
    }
    else{
        $telefono = preg_replace("/[^0-9]/", "", $telefono);
        $sql = "UPDATE perfiles SET nombre=?, email=?, telefono=? WHERE id=?";
        $stmt = $conexion->prepare($sql);
        $stmt->execute([
            $nombre,
            $_POST['email'],
            $telefono,
            $_POST['id']
        ]);
        $mensaje = "Registro actualizado";
        $editarData = null;
    }
}