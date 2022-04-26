@extends('layout.main')
@section('content')
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
            <tr>
                <th>{{$profile->id}}</th>
                <td>{{$profile->title}}</td>
            <td>
                    <a class="btn btn-outline-primary" href="{{ route('profile.index') }}">
                        &#8617;
                    </a>
                    <a class="btn btn-outline-success" href="{{ route('profile.edit', $profile->id) }}">
                        &Gt;
                    </a>
                </td>
            </tr>
            </tbody>
        </table>
    </div>
@endsection
