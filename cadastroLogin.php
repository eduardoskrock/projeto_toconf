
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro Autoconf</title>
    <link rel="stylesheet" href="assets/style/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="shortcut icon" href="/assets/photos/logo-favicon.png" type="image/x-icon">
</head>
<body>
    <header>
        <div class="logo-header">
            <a href="#">
                <img src="assets/photos/logo-autoconf.png" alt="" class="logo-desktop">
                <img src="assets/photos/logo-mobile.png" alt="" class="logo-mobile">
            </a>
        </div>
        <button class="login-header">
            <a href="./index.php">Voltar</a>
        </button>
    </header>
    <form action="entradas_formularios/recebeNovoLogin.php" method="POST">
        <fieldset>
            <section class="card-login">
                <input type="hidden" id="id" name="id">
                <div class="form _login">
                <p class="information">Acesso exclusivo para funcionários Autoconf</p>
                    <div class="col">
                        <label class="form-texto" for="nomeUsuario">NOME</label>
                        <input type="text" class="form-control" placeholder="Login" name="nomeUsuario" id="nomeUsuario" required>
                    </div> 
                    <div class="col">
                        <label class="form-texto"for="loginUsuario">LOGIN</label>
                        <input type="email" class="form-control" placeholder="Login" name="loginUsuario" id="loginUsuario" required>
                    </div> 
                    <div class="col">
                        <div class="col">
                            <label class="form-texto"for="senhaUsuario" >SENHA</label>
                            <input type="password" class="form-control" placeholder="Sua Senha" aria-label="Last name" name="senhaUsuario" id="senhaUsuario" required>
                        </div> 
                    </div>
                    <div class="col _submit">
                        <div class="col">
                            <input type="submit" class="form-control _submit" value="Cadastrar" aria-label="Last name">
                        </div> 
                    </div>
                </div>
            </section>
        </fieldset>
    </form>
</body>
</html>
