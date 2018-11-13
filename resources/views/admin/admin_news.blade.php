@extends('layouts.admin_layout')

@section('content')
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-5">
                    <h2><b>Новости</b></h2>
                </div>
                <div class="col-sm-7">
                    <a href="{{ route('news.create') }}" class="btn btn-primary"><i class="material-icons">&#xE147;</i> <span>Добавить новость</span></a>
                </div>
            </div>
        </div>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Заголовок</th>
                    <th>Краткий текст</th>
                    <th>Статья</th>
                    <th>Категория</th>
                    <th>Изображение</th>
                    <th>Действия</th>
                </tr>
            </thead>
            <tbody id="main-table">
                @foreach($news as $news_item)
                    <tr>
                        <td>{{ $news_item->id }}</td>
                        <td><a href="{{ route('news.show', ['id'=>$news_item->id]) }}">{{ $news_item->news_title }}</a></td>
                        <td>{{ $news_item->news_short_content }}</td>
                        <td>{{ $news_item->news_content }}</td>
                        <td>{{ $news_item->category->category_name }}</td>
                        <td><img class="news_preview" src="{{ $news_item->news_preview }}" alt="Обложка"></td>
                        <td>
                            <a href="{{ route('news.edit', ['id'=>$news_item->id]) }}" class="settings" title="Редактировать" data-toggle="tooltip"><i class="material-icons">&#xE8B8;</i></a>
                            <a href="" class="delete"><i class="material-icons">&#xE5C9;</i>
                                <form class="form-delete" action="{{ route('news.destroy', ['id'=>$news_item->id]) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                </form>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div id="paginator-block" class="clearfix">
            <div class="hint-text">Показано <b>5</b> из <b>{{ $news->total() }}</b> новостей</div>
            <div class="pagination">
                {{ $news->fragment('main-table')->links() }}
            </div>
        </div>
    </div>
@endsection