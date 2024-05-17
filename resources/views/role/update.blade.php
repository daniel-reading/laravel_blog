@extends('layout.app')

@section('title')
    Mettre à jour le role
@endsection

@section('content')

    <div class="row">
        <div class="col-5">
            <form action="{{route('role.update.handle', $role->id)}}" class="table table-stripped" method="post">
                @csrf
                @method('PUT')
        
                <label for="intitule" class="form-label">Entrer la nouvelle valeur</label>
                <input type="text" name="intitule" id="intitule" class="form-control " value="{{$role->intitule}}">

                <span class="text-danger">

                    @error('intitule')
                        {{$message}} 
                    @enderror

                </span>
                <button type="submit" class="btn btn-warning">Soumettre</button>
            </form>
        </div>
    </div>

@endsection