@extends('base')

@section('title')
Modifier un etudiants    
@endsection

@section('content')
    <div class="d-grid gap-2 d-md-block">
        <h1>Modifier un étudiant</h1>
    </div>

    <div class="row my-5">
        <div class="col-md-2"></div>
        <div class="col-md-8 card shadow">
            {{-- les erreurs --}}
            @foreach ($errors->all() as $error )
                <span class="alert alert-danger mx-5 my-1">{{ $error }}</span>
            @endforeach
            
            <form class="my-3 mx-3" action="/modifier/traitement" method="post">
                @csrf
                <input type="text" name="id" style="display: none" value="{{ $etudiants->id }}">
                <div class="mb-3">
                    <label for="nom" class="form-label">Nom</label>
                    <input type="nom" class="form-control" id="nom" name="nom"  placeholder="votre nom" value="{{ $etudiants->nom }}">
                </div>
                <div class="mb-3">
                    <label for="prenom" class="form-label">Prénom</label>
                    <input type="prenom" class="form-control" id="prenom" name="prenom" placeholder="votre prenom" value="{{ $etudiants->prenom }}">
                </div>
                <div class="mb-3">
                    <label for="classe" class="form-label">Classe</label>
                    <input type="classe" class="form-control" id="classe" name="classe" placeholder="votre classe" value="{{ $etudiants->classe }}">
                </div>
                <div class="mb-3">
                    <a href="#" class="btn btn-outline-danger float-end mx-2">Revenir</a>
                    <button type="submit" class="btn btn-outline-success float-end mx-2">Modifier</button>
                </div>

                
        </form>
    </div>
    <div class="col-md-2 "></div>
    </div>
@endsection