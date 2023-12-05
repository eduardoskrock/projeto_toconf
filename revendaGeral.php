<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/style/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="shortcut icon" href="/assets/photos/logo-favicon.png" type="image/x-icon">
</head>
<body>

    <!-- Página que será utilizada para ter um acesso geral dos dados das revendas que enviaram os 
    formulários de site e  -->
    <?php
        include "include/header.php";
    ?>
    <article class="tabela-usuarios">
            <table class="table _usuarios">
                <thead>
                    <tr>
                        <th scope="col">Código</th>
                        <th scope="col">Nome Revenda</th>
                        <th scope="col">CNPJ</th>
                    </tr>
                </thead>
                    <?php
                        $conn = mysqli_connect("localhost", "root", "", "formularios");
                        if($conn == false){
                            die("ERRO: não conectou ao Banco de Dados");
                        }
                        $sql = "SELECT id, nomerevenda, cnpjrevenda FROM dadosrevenda";
                        $res = mysqli_query($conn, $sql);
                        if($res){

                            while($row = mysqli_fetch_assoc($res)){
                                echo "<tbody>
                                        <tr>
                                            <th>" . $row['id'] . "</td>
                                            <td>" . $row['nomerevenda'] . "</td>
                                            <td>" . $row['cnpjrevenda'] . "</td>
                                        </tr>
                                    </tbody>";
                            }
                        }
                    ?>
            </table>
        </article>


    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>
</html>