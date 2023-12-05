<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $conn = mysqli_connect("localhost", "root", "", "formularios");

        if($conn == false){
            die("ERRO: não conectou ao Banco de Dados");
        }

        $loginUsuario = mysqli_real_escape_string($conn, $_POST['loginUsuario']);
        $senhaUsuario = mysqli_real_escape_string($conn, $_POST['senhaUsuario']);

        $sql = "SELECT * FROM usuarios WHERE loginUsuario = '$loginUsuario' AND senhaUsuario = '$senhaUsuario'";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            $row = mysqli_fetch_assoc($result);

            if ($row) {
                // Usuário autenticado, redireciona para a página desejada
                header("Location: ../formularios.php");
                exit();
            } else {
                // Usuário não encontrado, redireciona para a página inicial com a mensagem de erro
                $erro = "Login incorreto. Verifique seu login e senha.";
                header("Location: ../index.php?erro=" . urlencode($erro));
                exit();
            }
        
            mysqli_free_result($result);
        } else {
            die("Erro na consulta: " . mysqli_error($conn));
        }
    }
        mysqli_close($conn);
?>