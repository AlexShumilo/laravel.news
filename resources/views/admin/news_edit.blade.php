@extends('layouts.admin_layout')

@section('content')
    <h2>Редактировать новость</h2>
    <hr>
    @if(count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error}}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form method="post" action="{{ route('news.update', ['id'=>$news->id]) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="title">Заголовок новости</label>
                <input type="text" name="title" class="form-control" id="title" value="{{ $news->news_title }}" aria-describedby="titleHelp" placeholder="Ведите заголовок новости" required>
                <small id="titleHelp" class="form-text text-muted"><b>Заголовок новости должен содержать не более 50 символов</b></small>
            </div>
            <div class="form-group col-md-6">
                <label for="short_content">Краткое описание</label>
                <input type="text" name="short_content" class="form-control" id="short_content" value="{{ $news->news_short_content }}" aria-describedby="shortHelp" placeholder="Ведите краткое описание новости" required>
                <small id="shortHelp" class="form-text text-muted"><b>Краткое описание новости должно содержать не более 100 символов</b></small>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="code">ЧПУ-код новости</label>
                <input type="text" name="news_code" class="form-control" id="code" value="{{ $news->news_code }}" aria-describedby="codeHelp" placeholder="Ведите ЧПУ-код новости" required>
                <small id="codeHelp" class="form-text text-muted"><b>ЧПУ-код новости должен быть уникальным</b></small>
            </div>
            <div class="form-group col-md-6">
                <label for="category">Категория</label>
                <select id="category" name="category" class="form-control" required>
                    <option selected value="{{ $news->category->id }}">{{ $news->category->category_name }}</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="form-group">
            <label for="text">Текст новости</label>
            <textarea class="form-control" name="text" id="text" aria-describedby="textHelp" rows="10" placeholder="Введите текст новости" required>{{ $news->news_content }}</textarea>
        </div>
        <div class="form-group col-md-5">
            <p>Изображение новости</p>
            <img class="news-image-edit" src="{{ $news->news_preview }}">
            <label>Изменить изображение</label>
            <input type="file" name="image" class="form-control-file">
            <small id="fileHelp" class="form-text text-muted"><b>Допускаются файлы с одним из следующих расширений: jpeg, png, bmp, gif, svg</b></small>
        </div>
        <button type="submit" class="btn btn-primary">Изменить</button>
        <a href="{{ URL::previous() }}" class="btn btn-primary">Отменить</a>
    </form>
@endsection