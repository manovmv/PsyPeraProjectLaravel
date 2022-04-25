@extends('layout.main')
@section('content')
    <div class="container add-doc">
        <a class="btn btn-outline-success" href="{{route('doctor.create')}}">Добавить доктора</a>
    </div>
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
            @foreach($docs as $doc)
                <tr>
                    <th>{{$doc->id}}</th>
                    <td>{{$doc->name}}</td>
                    <td>{{$doc->surname}}</td>
                    <td>{{$doc->patrname}}</td>
                    <td>{{$doc->age}}</td>
                    <td>{{$doc->is_visible}}</td>
                    <td class="d-flex">
                        <a class="btn btn-outline-primary" href="{{ route('doctor.show', $doc->id) }}">
                            &#128065;
                        </a>
                        <a class="btn btn-outline-success mx-1" href="{{ route('doctor.edit', $doc->id) }}">
                            &Gt;
                        </a>
                        <form action="{{ route('doctor.delete', $doc->id) }}" method="post">
                            @csrf
                            @method('delete')
                            <input class="btn btn-outline-danger" type="submit" value="&#10006;">
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
