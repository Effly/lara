@extends("layouts.app")
@section('content')

@section('title')
    Главная страница
@endsection

<h1>Home page</h1>

@endsection

@section('aside')
    @parent
    <p>Доп текст</p>
@endsection