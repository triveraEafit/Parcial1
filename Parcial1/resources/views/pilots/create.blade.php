@extends('layouts.app')

@section('title', $viewData['title'])

@section('content')
    <h1>Register Pilot</h1>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('pilots.store') }}" method="POST">
        @csrf

        <label for="name">Name</label>
        <input type="text" id="name" name="name" value="{{ old('name') }}">
        <br>

        <label for="origin_city">Origin City</label>
        <select id="origin_city" name="origin_city">
            <option value="LA" {{ old('origin_city') == 'LA' ? 'selected' : '' }}>LA</option>
            <option value="Tokio" {{ old('origin_city') == 'Tokio' ? 'selected' : '' }}>Tokio</option>
        </select>
        <br>

        <label for="nitro_level">Nitro Level</label>
        <input type="number" id="nitro_level" name="nitro_level" value="{{ old('nitro_level') }}">
        <br>

        <button type="submit">Register</button>
    </form>
@endsection
