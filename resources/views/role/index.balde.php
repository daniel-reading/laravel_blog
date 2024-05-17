@extends('layout.app')

@section('title')
    Ajout de rôle
@endsection

@section('content')
    <div>
        <table class="table table-stripped">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Intitulé</th>
                </tr>
            </thead>
            <tbody>
                @forelse($roles as $role)
                <tr>
                    <td> {{$role->id}} </td>
                    <td> {{$role->intitule}} </td>
                    <td> 
                        <form action="{{ route('role.delete', $role->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Supprimer</button>
                        </form>
                    </td>
                    <td> 
                        <form action="{{ route('role.update.page', $role->id) }}" method="POST">
                            @csrf
                            @method('GET')
                            <button type="submit" class="btn btn-info">Mettre à jour</button>
                        </form>
                    </td>

                </tr>

                @empty
                    <p>Désolé il y a aucun role à afficher</p>
                @endforelse
            </tbody>
        </table>
        <a href="{{route('role.create')}}" class="btn btn-success">Ajouter un rôle</a>

        
    </div>
@endsection