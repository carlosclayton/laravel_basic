@extends('templates.layout')

@section('title', 'Projeto layout')


@section('container')
    @parent
    <br />
    <br />
    <br />
    <br />
    <h1>Pagina do Usuario</h1>
    <p>Ola usuario ID: {{ $id }}</p>
@endsection

