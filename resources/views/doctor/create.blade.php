@extends('layout.main')
@section('content')

    <div class="container px-3">
        <form action="{{route('doctor.store')}}" method="post">
            @csrf
            <div class="mb-3">
                <label for="formGroupExampleInput" class="form-label">Имя</label>
                <input name="name" type="text" class="form-control" id="formGroupExampleInput" placeholder="Имя" value="{{ old('name') }}">
                @error('name')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Фамилия</label>
                <input name="surname" type="text" class="form-control" id="formGroupExampleInput2"
                       placeholder="Фамилия"  value="{{ old('surname') }}">
                @error('surname')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Отчество</label>
                <input name="patrname" type="text" class="form-control" id="formGroupExampleInput2"
                       placeholder="Отчество"  value="{{ old('patrname') }}">
                @error('patrname')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Возраст</label>
                <input name="age" type="text" class="form-control" id="formGroupExampleInput2"
                       placeholder="Возраст (число)"  value="{{ old('age') }}">
                @error('age')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3">
                <label for="formGroupExampleInput2" class="form-label">Видимость</label>
                <input name="is_visible" type="text" class="form-control" id="formGroupExampleInput2"
                       placeholder="0 или 1" value="0">
                @error('is_visible')
                <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            <div class="mb-3 container-fluid row">
                @foreach($profiles as $profile)
                    <div class="form-check col-md-2">
                        <input name="profiles[]" class="form-check-input" type="checkbox" value="{{ $profile->id}}"
                               id="profiles">
                        <label class="form-check-label" for="profiles">
                            {{ $profile->title}}
                        </label>
                    </div>
                @endforeach
            </div>
            <button type="submit" class="btn btn-primary">Создать</button>
        </form>
    </div>
@endsection
