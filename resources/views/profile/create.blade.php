@extends('layout.main')
@section('content')

    <div class="container px-3">
        <form action="{{route('profile.store')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Профиль</label>
                <input name="title" type="text" class="form-control" id="formGroupExampleInput" placeholder="Профиль">
                @error('title')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Создать</button>
    </form>
    </div>
@endsection
