@extends('layouts.admin_layout')

@section('content')
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-5">
                    <h2><b>Комментарии к новостям</b></h2>
                </div>
            </div>
        </div>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Пользователь</th>
                    <th>Комментарий</th>
                    <th>Статья</th>
                    <th>Создано</th>
                    <th>Видимость</th>
                    <th>Действия</th>
                </tr>
            </thead>
            <tbody id="main-table">
            @foreach($comments as $comment)
                <tr>
                    <td>{{ $comment->id }}</td>
                    <td>{{ $comment->user_name }}</td>
                    <td>{{ $comment->comment_text }}</td>
                    <td><a href="{{ route('news.show', ['id'=>$comment->news->id]) }}">{{ $comment->news->news_title }}</a></td>
                    <td>{{ $comment->created_at }}</td>
                    <td class="comment-active">@if($comment->checked == 1)
                            <a href="" class="checked" title="Отображено"><span id="comment-status" class="status text-success">&bull;</span></a>
                        @else
                            <a href="" class="checked" title="Неотображено"><span id="comment-status" class="status text-danger">&bull;</span></a>
                        @endif
                        <form class="form-check" action="{{ route('comments.update', ['id'=>$comment->id]) }}" method="post">
                            @csrf
                            @method('PUT')
                        </form>
                    </td>
                    <td>
                        <a href="" class="delete"><i class="material-icons" title="Удалить">&#xE5C9;</i>
                            <form class="form-delete" action="{{ route('comments.destroy', ['id'=>$comment->id]) }}" method="post">
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
            <div class="hint-text">Показано <b>{{ $comments->count() }}</b> из <b>{{ $comments->total() }}</b> комментариев</div>
            <div class="pagination">
                {{ $comments->fragment('main-table')->onEachSide(1)->links() }}
            </div>
        </div>
    </div>
@endsection