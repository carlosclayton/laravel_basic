@extends('templates.layout')

@section('title', 'Projeto layout')


@section('container')
    @parent
    <br />
    <br />
    <br />
    <br />
    <p>Conteudo da pagina principal do  usuario: {{ $nome }}</p>
@endsection