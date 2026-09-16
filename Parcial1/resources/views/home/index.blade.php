@extends('layouts.app')

@section('title', $viewData['title'])

@section('content')
    <h1>Street Racing Pilots</h1>
    <ul>
        <li><a href="{{ route('pilots.create') }}">Register Pilots</a></li>
        <li><a href="{{ route('pilots.index') }}">List Pilots</a></li>
        <li><a href="{{ route('pilots.statistics') }}">Pilots Statistics</a></li>
    </ul>
@endsection
