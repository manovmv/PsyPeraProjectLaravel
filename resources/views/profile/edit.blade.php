@extends('layout.main')
@section('content')

    <div class="container px-3">
        <form action="{{route('profile.update', $profile->id)}}" method="post">
            @csrf
            @method('patch')
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Профиль</label>
                <input name="title" type="text" class="form-control" id="formGroupExampleInput" placeholder="Профиль"
                       value="{{ $profile->title }}">
            </div>
            <button type="submit" class="btn btn-primary">Обновить</button>
        </form>
    </div>
@endsection
