@extends('layout.main')
@section('content')
    <div class="container px-3">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Имя</th>
                <th scope="col">Фамилия</th>
                <th scope="col">Отчество</th>
                <th scope="col">Возраст</th>
                <th scope="col">Видимость</th>
                <th scope="col">Действия</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th>{{$doc->id}}</th>
                <td>{{$doc->name}}</td>
                <td>{{$doc->surname}}</td>
                <td>{{$doc->patrname}}</td>
                <td>{{$doc->age}}</td>
                <td>{{$doc->is_visible}}</td>
                <td>
                    <a class="btn btn-outline-primary" href="{{ route('doctor.index') }}">
                        &#8617;
                    </a>
                    <a class="btn btn-outline-success" href="{{ route('doctor.edit', $doc->id) }}">
                        &Gt;
                    </a>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection
