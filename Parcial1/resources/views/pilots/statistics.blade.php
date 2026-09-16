@extends('layouts.app')

@section('title', $viewData['title'])

@section('content')
    <h1>Pilots Statistics</h1>

    <ul>
        <li>LA: {{ $viewData['laCount'] }}</li>
        <li>Tokio: {{ $viewData['tokioCount'] }}</li>
    </ul>

    <p>Average Nitro Level: {{ $viewData['averageNitroLevel'] }}</p>
@endsection
