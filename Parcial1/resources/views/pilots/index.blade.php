@extends('layouts.app')

@section('title', $viewData['title'])

@section('content')
    <h1>Pilots List</h1>

    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Origin City</th>
                <th>Nitro Level</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($viewData['pilots'] as $pilot)
                <tr>
                    <td>{{ $pilot->getId() }}</td>
                    <td>
                        @if ($pilot->getOriginCity() == 'Tokio')
                            {{ $pilot->getName() }} (Reto Tokio)
                        @else
                            <span style="color: blue;">{{ $pilot->getName() }}</span>
                        @endif
                    </td>
                    <td>{{ $pilot->getOriginCity() }}</td>
                    <td>{{ $pilot->getNitroLevel() }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
