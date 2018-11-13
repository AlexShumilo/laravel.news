@extends('layouts.admin_layout')

@section('content')
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-5">
                    <h2><b>Входящие сообщения</b></h2>
                </div>
            </div>
        </div>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Имя</th>
                    <th>E-mail</th>
                    <th>Телефон</th>
                    <th>Сообщение</th>
                    <th>Получено</th>
                    <th>Действия</th>
                </tr>
            </thead>
            <tbody id="main-table">
            @foreach($contacts as $contact)
                <tr>
                    <td>{{ $contact->id }}</td>
                    <td>{{ $contact->cont_name }}</td>
                    <td>{{ $contact->cont_email }}</td>
                    <td>{{ $contact->cont_phone }}</td>
                    <td>{{ $contact->cont_message }}</td>
                    <td>{{ $contact->created_at }}</td>
                    <td>
                        <a href="" class="delete"><i class="material-icons">&#xE5C9;</i>
                            <form class="form-delete" action="{{ route('mails.destroy', ['id'=>$contact->id]) }}" method="post">
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
            <div class="hint-text">Показано <b>{{ $contacts->count() }}</b> из <b>{{ $contacts->total() }}</b> сообщений</div>
            <div class="pagination">
                {{ $contacts->fragment('main-table')->links() }}
            </div>
        </div>
    </div>
@endsection