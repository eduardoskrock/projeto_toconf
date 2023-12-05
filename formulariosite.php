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
    <!-- Página de login que receberá os dados da revenda.
    * Precisa adicionar camada de segurança contra injeção de SQL
    * incluir validação do usuário (cliente ou demais pessoas autenticadas previamente), para que nao consigam
     acessar demais arquivos do sistema ( pastas que recebem
    os dados dos formulários e enviam para o BD, por exemplo) -->
    <header>
        <div class="logo-header">
            <a href="#">
                <img src="assets/photos/logo-autoconf.png" alt="" class="logo-desktop">
                <img src="assets/photos/logo-mobile.png" alt="" class="logo-mobile">
            </a>
        </div>
    
        <button class="login-header">
            <a href="login.html">Login</a>
        </button>
    </header>

    <form action="entradas_formularios/recebeFormularioSite.php" method="POST">
        <section class="section-forms">
            <h1 class="title-section">Materiais de site e integradores</h1>
            <h2 class="subtitle">Dados da revenda</h2>
            <div class="card-forms">
                <div class="row">
                    <div class="form">
                        <div class="col">
                            <label for="nomerevenda">Nome da Revenda</label>
                            <input type="text" class="form-control" placeholder="Sua Loja Multimarcas" name="nomerevenda" id="nomerevenda" required>
                        </div> 
                        <div class="small-input">
                            <div class="col _small">
                                <label for="cnpjrevenda">CNPJ</label>
                                <input type="number" class="form-control" placeholder="01123123000101" aria-label="Last name" name="cnpjrevenda" id="cnpjrevenda">
                            </div> 
                            <div class="col _small">
                                <label for="telprincipal">Telefone principal</label>
                                <input type="number" class="form-control" placeholder="11987787878" aria-label="Last name" name="telprincipal" id="telprincipal">
                            </div> 
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form ">
                        <input type="hidden" name="id">
                        <div class="col">
                            <label for="hratendimento">Horário de atendimento</label>
                            <input type="text" class="form-control" placeholder="Seg a Sex - 8h às 18h | Sab - 8h - 12h" aria-label="Last name" name="hratendimento" id="hratendimento">
                        </div> 
                        <div class="small-input">
                            <div class="col _small">
                                <label for="wpprevenda">WhatsApp</label>
                                <input type="number" class="form-control" placeholder="11987744545" aria-label="Last name" name="wpprevenda" id="wpprevenda">
                            </div> 
                            <div class="col _small">
                                <label for="telsecundario">Telefone secundário</label>
                                <input type="number" class="form-control" placeholder="11987744545" aria-label="Last name" name="telsecundario" id="telsecundario">
                            </div> 
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form">
                        <div class="col">
                            <label for="enderecoloja">Endereço completo</label>
                            <input type="text   " class="form-control" placeholder="Av. das Araucárias, 123, Bairro, Cidade, Estado" aria-label="Last name" name="enderecoloja" id="enderecoloja">
                        </div> 
                        <div class="small-input">
                            <div class="col _small">
                                <label for="ceploja">CEP</label>
                                <input type="number" class="form-control" placeholder="01234-567" aria-label="Last name" name="ceploja" id="ceploja">
                            </div> 
                            <div class="row _input-radio">
                                <label for="">Cadastrar filial?</label>
                                <div class="input-radio">
                                    <div class="form-check sim">
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                                        <label class="form-check-label _1" for="exampleRadios1">NÃO</label>
                                    </div>
                                    <div class="form-check sim">
                                        <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                                        <label class="form-check-label _2" for="exampleRadios2">SIM</label>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            
            <section class="section-forms filial">
                <h2 class="subtitle">Dados da filial</h1>
                <div class="card-forms">

                    <div class="row">
                        <div class="form">
                            <div class="col">
                                <label for="cep-da-loja">Nome da filial</label>
                                <input type="number" class="form-control" placeholder="Sua Loja Multimarcas">
                            </div> 
                            <div class="small-input">
                                <div class="col _small">
                                    <label for="cep-da-loja">CNPJ</label>
                                    <input type="number" class="form-control" placeholder="01123123000101" aria-label="Last name" id="cep-da-loja">
                                </div> 
                                <div class="col _small">
                                    <label for="cep-da-loja">Telefone principal</label>
                                    <input type="number" class="form-control" placeholder="11987787878" aria-label="Last name" id="cep-da-loja">
                                </div> 
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form _reverse">
                            <div class="col">
                                <label for="cep-da-loja">Horário de atendimento</label>
                                <input type="number" class="form-control" placeholder="Seg a Sex - 8h às 18h | Sab - 8h - 12h" aria-label="Last name" id="cep-da-loja">
                            </div> 
                            <div class="small-input">
                                <div class="col _small">
                                    <label for="whatsapp">WhatsApp</label>
                                    <input type="number" class="form-control" placeholder="11987744545" name="whatsapp" aria-label="Last name" id="whatsapp">
                                </div> 
                                <div class="col _small">
                                    <label for="cep-da-loja">Telefone secundário</label>
                                    <input type="number" class="form-control" placeholder="11987744545" aria-label="Last name" id="cep-da-loja">
                                </div> 
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form">
                            <div class="col">
                                <label for="cep-da-loja">Endereço</label>
                                <input type="number" class="form-control" placeholder="Av. das Araucárias, 123, Bairro, Cidade, Estado" aria-label="Last name" id="cep-da-loja">
                            </div> 
                            <div class="small-input">
                                <div class="col _small">
                                    <label for="cep-da-loja">CEP</label>
                                    <input type="number" class="form-control" placeholder="01234-567" aria-label="Last name" id="cep-da-loja">
                                </div> 
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>
        <section class="section-forms redes_sociais">
            <h2 class="subtitle">Mídias digitais</h1>
            <div class="card-forms">
                <div class="col">
                    <label for="linksite">Link do site atual</label>
                    <input type="text" class="form-control" placeholder="https://wwww.seusite.com.br" name="linksite" id="linksite">
                </div>
                <div class="col">
                    <label for="linkinsta">Link do Instagram</label>
                    <input type="text" class="form-control" placeholder="www.instagram.com/@sualoja" name="linkinsta" id="linkinsta">
                </div>
                <div class="col">
                    <label for="linkface">Link do Facebook</label>
                    <input type="text" class="form-control" placeholder="www.facebook.com/suapagina" name="linkface" id="linkface">
                </div>
                <div class="col">
                    <label for="linkyt">Link do YouTube</label>
                    <input type="text" class="form-control" placeholder="www.youtube.com/seucanal" name="linkyt" id="linkyt">
                </div>
            </div>
        </section>
        <section class="section-forms gerais">
            <h2 class="subtitle">Informações gerais</h1>
            <div class="card-forms">
                <div class="col">
                    <label for="cep-da-loja">Link do Instagram</label>
                    <input type="number" class="form-control" placeholder="Sua Loja Multimarcas">
                </div>
                <div class="col">
                    <label for="cep-da-loja">Link do Facebook</label>
                    <input type="number" class="form-control" placeholder="Sua Loja Multimarcas">
                </div>
                <div class="col">
                    <label for="cep-da-loja">Link do Instagram</label>
                    <input type="number" class="form-control" placeholder="Sua Loja Multimarcas">
                </div>
            </div>
        </section>
        <div class="col">
                    <input type="submit" class="form-control" placeholder="Sua Loja Multimarcas" name="submit">
        </div>
    </form>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
    <script src="script.js"></script>
</body>
</html>