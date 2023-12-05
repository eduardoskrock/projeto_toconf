<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário Autoconf</title>
    <link rel="stylesheet" href="assets/style/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="shortcut icon" href="/assets/photos/logo-favicon.png" type="image/x-icon">
</head>
<body>
    <!-- Página de login que validará os dados do usuário (colaborador) que irá acessar os dados dos formulários respondidos -->
    <header>
        <div class="logo-header">
            <a href="#">
                <img src="assets/photos/logo-autoconf.png" alt="" class="logo-desktop">
                <img src="assets/photos/logo-mobile.png" alt="" class="logo-mobile">
            </a>
        </div>
    </header>
    <form action="entradas_formularios/recebeLogin.php" method="POST">
        <fieldset>
            <section class="card-login">
                <input type="hidden" name="id">
                <div class="form _login">
                    <p class="information">Acesso exclusivo para funcionários Autoconf</p>
                    <div class="col">
                        <label class="form-texto"for="Login">LOGIN</label>
                        <input type="email" class="form-control" placeholder="Login" name="loginUsuario" id="loginUsuario">
                    </div> 
                    <div class="col">
                        <div class="col">
                            <label class="form-texto" for="senhaUsuario">SENHA</label>
                            <input type="password" class="form-control" placeholder="Sua Senha" aria-label="Last name" name="senhaUsuario" id="senhaUsuario">
                        </div> 
                    </div>
                    <div class="col _submit">
                        <div class="col">
                            <input type="submit" class="form-control _submit" value="Entrar" aria-label="Last name">
                        </div> 
                        <?php
                            if (isset($_GET['erro'])) {
                                $mensagemErro = urldecode($_GET['erro']);
                                // Exibe o parágrafo de erro
                                echo "<p style='color: red;'>{$mensagemErro}</p>";  
                            }
                        ?>
                        <!--se necessário, mudar o tipo de validação para POST. -->
                    </div>
                </div>
            </section>
        </fieldset>
    </form>
</body>
</html>
