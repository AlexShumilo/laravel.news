@extends('layouts.layout')

@section('content')
    <div>
        <p>Ваш комментарий отправлен и будет проверен модератором</p>
        <a href="{{ URL::previous() }}">Назад</a>
    </div>
@endsection