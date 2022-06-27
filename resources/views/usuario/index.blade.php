<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Desafio Técnico · KIRC Digital</title>

    <!-- Include CSS -->
    <link rel="stylesheet" href="{{ asset('themes/css/main.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.0/css/jquery.dataTables.min.css">
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('themes/css/layout.css') }}">

    <style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
    }

    @media (min-width: 768px) {
        .bd-placeholder-img-lg {
            font-size: 3.5rem;
        }
    }
    </style>

</head>

<body>

    @include('layouts.nav')

    <main class="container">
        <div class="modal-body">
            <form>
                <label class="my-2 mr-2" for="inlineFormCustomSelectPref">Digite o nome do Usuário:</label>
                <div class="form-row align-items-center">
                    <div class="col-sm-10 my-1">
                        <div class="input-group md-form form-sm form-2 pl-0">
                            <input class="form-control my-0 py-1 lime-border" id="nome_pesquisar" name="nome_pesquisar"
                                type="text" placeholder="Pesquisar" aria-label="Pesquisar">
                            <div class="input-group-append">
                                <button class="input-group-text lime lighten-2" id="basic-text1"><i
                                        class="fas fa-search text-grey" aria-hidden="true"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-2 my-1">
                        <button type="button" data-toggle="modal" data-target="#cadastrarUsuario"
                            class="btn btn-primary">Adicionar Usuário </button>
                    </div>
                </div>
            </form>
        </div>
        <br>
        <div class="faixa modal-body">
            <table id="tabela_usuario" class="display">
                <thead>
                    <tr style="font-family: Arial, Helvetica, sans-serif">
                        <td></td>
                        <td style='text-align:center'>Nome</td>
                        <td style='text-align:center'>CPF</td>
                        <td style='text-align:center'>Status Pagamento</td>
                        <td style='text-align:center'>Status Usuário</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach($usuarios as $usuario)
                    <tr>
                        <td width="10%">

                            <a type="button" id="{{$usuario->id}}" class="edit_usuario btn btn-emergency btn-sm">
                                <i class="fas fa-pencil-alt"></i>
                            </a>

                            <a type="button" id="{{$usuario->id}}" class="del_usuario btn btn-emergency btn-sm">
                                <i class="fas fa-trash"></i>
                            </a>
                        </td>
                        <td style='text-align:center'>{{ $usuario->nome }}</td>
                        <td style='text-align:center'> {{ $usuario->cpf }}</td>
                        <td style='text-align:center'>
                            <input data-id="{{$usuario->id}}" class="toggle-class-servicos" type="checkbox"
                                data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Pago"
                                data-off="Não Pago" {{ $usuario->servicos ? 'checked' : '' }}>
                        </td>
                        <td style='text-align:center'>
                            <input data-id="{{$usuario->id}}" class="toggle-class" type="checkbox"
                                data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Ativo"
                                data-off="Inativo" {{ $usuario->status ? 'checked' : '' }}>
                        </td>

                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        @include('usuario.modal.create')
        @include('usuario.modal.edit')

    </main>

    <!-- Include Js -->
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
    <script type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.js">
    </script>
    <script src="{{ asset('themes/js/usuario.js') }}" type="text/javascript" async="true" defer></script>
    </script>

</body>

</html>