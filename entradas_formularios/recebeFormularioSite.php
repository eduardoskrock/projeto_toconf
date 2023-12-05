<?php
    $conn = mysqli_connect("localhost", "root", "", "formularios");

    if($conn == false){
        die("ERRO: não conectou ao Banco de Dados");
    }

    $id = $_POST['id'];
    $nomerevenda = $_POST['nomerevenda'];
    $cnpjrevenda = $_POST['cnpjrevenda'];
    $telprincipal = $_POST['telprincipal'];
    $hratendimento = $_POST['hratendimento'];
    $wpprevenda = $_POST['wpprevenda'];
    $ceploja = $_POST['ceploja'];
    $enderecoloja = $_POST['enderecoloja'];
    $exampleRadios = $_POST['exampleRadios'];

    $sql = "INSERT INTO dadosrevenda (nomerevenda, cnpjrevenda, telprincipal,
    hratendimento, wpprevenda, ceploja, enderecoloja, exampleRadios) VALUES
        ('$nomerevenda', '$cnpjrevenda', '$telprincipal', '$hratendimento', '$wpprevenda', '$ceploja',
        '$enderecoloja', '$exampleRadios')";

    $res = mysqli_query($conn, $sql);
    
    if($res){
       header("location: ../telaFinalCadastro.php");         
    }
    else{
        echo  "erro";
    }
?>