@extends('layouts.admin')

@section('content')
    <h1>Dettagli del Progetto: {{ $project->title }}</h1>

    <p>{{ $project->description }}</p>

    @if ($project->image)
        <div>
            <img src="{{ asset('storage/' . $project->image) }}" alt="{{ $project->title }}">
        </div>
    @endif

    <a href="{{ route('admin.projects.index') }}">Torna all'elenco progetti</a>
@endsection
