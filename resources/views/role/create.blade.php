@extends('layout.app')
@section('title')
    Ajouter un rôle
@endsection
@section('content')


    <div class="row">
        <h1>Ajout d'un rôle</h1>
        <div class="col-5">
            <form action="{{route('role.store')}}" method="POST">
                @method('post')
                @csrf

                <label for="intitule" class="form-label">Entrez l'intitulé du rôle</label>
                <input type="text" class="form-control" id="intitule" name="intitule" placeholder="Intitulé" value="{{old('intitule')}}">

                <button type="submit" class="btn btn-warning">Soumettre</button>
            </form>
        </div>
    </div>



@endsection