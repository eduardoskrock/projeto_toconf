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
                    <th scope="col">Telefone 1</th>
                    <th scope="col">Atendimento</th>
                    <th scope="col">WhatsApp</th>
                    <th scope="col">CEP</th>
                    <th scope="col">Endereco</th>
                    <th scope="col">Revenda</th>
                </tr>
            </thead>
                <?php
                    $conn = mysqli_connect("localhost", "root", "", "formularios");
                    if($conn == false){
                        die("ERRO: não conectou ao Banco de Dados");
                    }
                    $sql = "SELECT id, nomerevenda, cnpjrevenda, telprincipal,
                    hratendimento, wpprevenda, ceploja, enderecoloja, exampleRadios FROM dadosrevenda";
                    $res = mysqli_query($conn, $sql);
                    if($res){

                        while($row = mysqli_fetch_assoc($res)){
                            echo "<tbody>
                                    <tr>
                                        <th>" . $row['id'] . "</td>
                                        <td>" . $row['nomerevenda'] . "</td>
                                        <td>" . $row['cnpjrevenda'] . "</td>
                                        <td>" . $row['telprincipal'] . "</td>
                                        <td>" . $row['hratendimento'] . "</td>
                                        <td>" . $row['wpprevenda'] . "</td>
                                        <td>" . $row['ceploja'] . "</td>
                                        <td>" . $row['enderecoloja'] . "</td>
                                        <td>" . $row['exampleRadios'] . "</td>
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