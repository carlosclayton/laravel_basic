@extends('templates.layout')

@section('title', 'Projeto layout')


@section('container')
    @parent
    <br />
    <br />
    <h1 id="nav" class="page-header"></a>Usuario</h1>


    <div class="panel panel-default">
        <div class="panel-heading">Adicionar</div>
        <div class="panel-body">
            @if($errors)
            {{ var_dump($errors)  }}
            @endif
            <form action="/user/store" method="post">
                <div class="form-group">
                    <label for="exampleInputEmail1">Nome</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Nome">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">E-mail</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="E-mail">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Senha</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Senha">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Confirme a senha</label>
                    <input type="password" name="password_confirmation" class="form-control" id="exampleInputPassword1" placeholder="Senha">
                </div>

                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <button type="submit" class="btn btn-default">Enviar</button>

            </form>
        </div>
    </div>


@endsection

