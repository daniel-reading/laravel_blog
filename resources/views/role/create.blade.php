@extends('layout.app')
@section('content')

<main class="mt-2 pt-4">

<h1>Formulaire d'ajout de role</h1>
    <form method="post" action="{{route('role_store')}}">
        @csrf
    <!-- 2 column grid layout with text inputs for the first and last names -->
    <div class="row mb-4">
        <div class="col">
        <div data-mdb-input-init class="form-outline">
            <input type="text" name="intitule" id="form6Example1" class="form-control" />
            <label class="form-label" for="form6Example1">First name</label>
        </div>
        </div>

    <!-- Submit button -->
    <button data-mdb-ripple-init type="submit" class="btn btn-primary btn-block mb-4">Enregistrer</button>
    </form>

</main>
    
@endsection
