<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />


    <title>Cover Template for Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/cover/">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{ asset('themes/css/bootstrap.css') }}">

    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="{{ asset('themes/css/cover.css') }}">
</head>

<body class="text-center">

    @include('layouts.nav')

    <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
        <header class="masthead mb-auto">
            <div class="inner">
                <h3 class="masthead-brand">Teste</h3>
                <nav class="nav nav-masthead justify-content-center">
                </nav>
            </div>
        </header>

        <main role="main" class="inner cover">
            <img class="mb-4" src="https://kirc.com.br/images/kirc_rgb_fundo_escuro.png" alt="" width="180" height="70">

            <h2 class="cover-heading">Pontos Solicitados e Concluídos no Teste</h2>
            <p class="lead"> 1) Cadastrar e editar um usuário</p>
            <p class="lead">2) Listagem de usuários cadastrados</p>
            <p class="lead">3) Botão com a função de modificar <br>o status do usuário para "pago" ou "não pago"</p>
            <p class="lead">4) Botão com a função de modificar <br>o usuário para "inativo " ou "ativo"</p>
            <p class="lead">5) Botão para excluir um usuário</p>


            <h2 class="cover-heading">Pontos Concluídos e Acrescidos ao Teste</h2>
            <p class="lead">1) Pesquisa por usuário</p>
            <p class="lead">2) Consumo de api via cep para preenchimento <br>dos campos de acordo com o CEP</p>
            <p class="lead">3) Máscaras de CEP e de CPF</p>
            </br>

            <p class="lead">Projeto feito em Laravel 8, JS, MariaDB e Bootstrap como solicitado</p>

            <p class="lead">Para Acessar o Teste clique no botão logo abaixo</p>

            <p class="lead">
                <a href="usuario" class="btn btn-lg btn-secondary">Sistema Teste - KIRC</a>
            </p>
        </main>

        <footer class="mastfoot mt-auto">
            <div class="inner">
                <p>Desenvolvido por: <a href="https://www.linkedin.com/in/pedro-teixeira-530ab089/">Pedro Ivo
                        Teixeira</a>
                </p>
            </div>
        </footer>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script>
    window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')
    </script>
</body>

</html>