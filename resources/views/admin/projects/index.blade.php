@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Gestione Progetti</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nome Progetto</th>
                    <th>Descrizione</th>
                    <th>Azione</th>
                </tr>
            </thead>
            <tbody>
                @forelse($projects as $project)
                    <tr>
                        <td>{{ $project->id }}</td>
                        <td>{{ $project->name }}</td>
                        <td>{{ $project->description }}</td>
                        <td>
                            <a href="{{ route('admin.projects.show', $project->id) }}">Mostra</a>
                            <a href="{{ route('admin.projects.edit', $project->id) }}">Modifica</a>
                            <form action="{{ route('admin.projects.destroy', $project->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('Sei sicuro di voler eliminare questo progetto?')">Elimina</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="4">Nessun progetto trovato.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection
