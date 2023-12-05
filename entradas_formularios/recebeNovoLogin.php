<?php
    $conn = mysqli_connect("localhost", "root", "", "formularios");

    if($conn == false){
        die("ERRO: não conectou ao Banco de Dados");
    }

    
    $id = $_POST['id'];
    $nomeUsuario = $_POST['nomeUsuario'];
    $loginUsuario = $_POST['loginUsuario'];
    $senhaUsuario = $_POST['senhaUsuario'];

    $sql = "INSERT INTO usuarios (nomeUsuario, loginUsuario, senhaUsuario) VALUES
        ('$nomeUsuario', '$loginUsuario', '$senhaUsuario')";

    $res = mysqli_query($conn, $sql);
    
    if($res){
       header("location: formulariosite.php");
    }
    else{
        echo  "erro";
    }
?>