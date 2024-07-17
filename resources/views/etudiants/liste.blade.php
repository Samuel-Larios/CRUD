@extends('base')

@section('title')
    Liste des étuditans
@endsection

@section('content')
    <div class="row">

        <div class="d-grid gap-2 d-md-block">
            <h1>Liste des étudiants</h1>
            <a href="/ajouter" type="button" class="btn btn-primary">Ajouter</a>
        </div>

        {{-- Status --}}
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
        @endif

        {{-- table  --}}

        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nom</th>
                <th scope="col">Prénom</th>
                <th scope="col">Classe</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              
                @foreach ($etudiants as $etudiant)
                    <tr>
                        <td scope="row">{{ $etudiant->id }}</td>
                        <td>{{ $etudiant->nom }}</td>
                        <td>{{ $etudiant->prenom }}</td>
                        <td>{{ $etudiant->classe }}</td>
                        <td>
                            <a href="{{ route('modifier', [$etudiant->id]) }}"  class="btn btn-secondary">Modifier</a>
                            <a href="{{ route('suprimer', [$etudiant->id]) }}" class="btn btn-danger">Supprimer</a>
                        </td>
                    </tr>
                @endforeach
              
             
            </tbody>
          </table>
    </div>

@endsection 

