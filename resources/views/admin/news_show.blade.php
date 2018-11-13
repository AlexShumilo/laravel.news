@extends('layouts.admin_layout')

@section('content')
    <div>
        <h2>Детальный просмотр новости</h2>
        <hr>
        <h4><span class="attribute">Заголовок: </span>{{ $news->news_title }}</h4>
        <div class="news-image">
            <img src="{{ $news->news_preview }}" alt="Обложка">
        </div>
        <p><span class="attribute">Краткое описание: </span>{{ $news->news_short_content }}</p>
        <div><span class="attribute">Основной текст: </span>{!! $news->news_content !!}</div>
        <p><span class="attribute">ЧПУ-код: </span>{{ $news->news_code }}</p>
        <p><span class="attribute">Категория: </span>{{ $news->category->category_name }}</p>
        <p><span class="attribute">Дата создания: </span>{{ $news->created_at }}</p>
        <a href="{{ route('news.edit', ['id'=>$news->id]) }}" class="btn btn-primary">Редактировать</a>
    </div>
@endsection