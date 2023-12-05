<!-- Arquivo que será incluído nas páginas, que tem acesso ao BD -->

<?php
    $conn = mysqli_connect("localhost", "root", "", "formularios");

    if($conn == false){
        die("ERRO: não conectou ao Banco de Dados");
    }
?>