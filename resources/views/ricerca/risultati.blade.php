@extends('layouts.app')

@section('title', 'Risultati Ricerca Prestazioni')

@section('content')
    <div class="container mt-4">
        <h2>Risultati Ricerca Prestazioni</h2>

        <form class="d-flex mb-3" method="GET" action="{{ route('ricerca.index') }}">
            <input class="form-control me-2" type="search" placeholder="Cerca prestazioni o dipartimento" aria-label="Cerca" name="q" value="{{ request('q') }}">
            <button class="btn btn-outline-primary" type="submit">Cerca</button>
        </form>

        @if($risultati->count() === 0)
            <div class="alert alert-warning">Nessuna prestazione trovata.</div>
        @else
            <table class="table table-striped">
                <thead>
                <tr>
                    <th>Nome Prestazione</th>
                    <th>Dipartimento</th>
                    <th>Descrizione</th>
                </tr>
                </thead>
                <tbody>
                @foreach($risultati as $prestazione)
                    <tr>
                        <td>{{ $prestazione->nome }}</td>
                        <td>{{ $prestazione->dipartimento->nome ?? 'N/D' }}</td>
                        <td>{{ $prestazione->descrizione ?? '-' }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection
