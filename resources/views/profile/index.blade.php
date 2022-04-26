@extends('layout.main')
@section('content')
    <div class="container add-profile">
        <a class="btn btn-outline-primary" href="{{route('profile.create')}}">Добавить профиль</a>
    </div>
    <div class="container px-3">
        <table class="table w-50">
            <thead>
            <tr>
                <th>ID</th>
                <th>Профиль</th>
                <th>Действия</th>
            </tr>
            </thead>
            <tbody>
            @foreach($profiles as $profile)
                <tr>
                    <th>{{$profile->id}}</th>
                    <td>{{$profile->title}}</td>
                    <td class="d-flex">
                        <a class="btn btn-outline-primary" href="{{ route('profile.show', $profile->id) }}">
                            &#128065;
                        </a>
                        <a class="btn btn-outline-success mx-1" href="{{ route('profile.edit', $profile->id) }}">
                            &Gt;
                        </a>
                        <form action="{{ route('profile.delete', $profile->id) }}" method="post">
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
