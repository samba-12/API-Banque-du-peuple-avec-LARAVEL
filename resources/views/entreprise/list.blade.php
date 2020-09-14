@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div>
            <div class="card">
                <div class="card-header  text-center"> liste des Entreprises</div>
                    <div class="card-body">
                       <table class="table table-bordered table-striped">
                            <tr>
                                <th>Identifiant</th>
                                <th>Nom entreprise</th>
                                <th>Adresse</th>
                                <th>Email</th>
                                <th>Telephone</th>
                                <th>Type de compte</th>
                                <th>Ninea</th>
                                <th>Numero compte</th>
                                <th>Editer</th>
                                <th>Supprimer</th>

                            </tr>
                            @foreach($liste_entreprise as $entreprise)
                              <tr>
                                <td>{{$entreprise->id}}</td>
                                <td>{{$entreprise->nom_entreprise}}</td>
                                <td>{{$entreprise->adresse}}</td>
                                <td>{{$entreprise->email}}</td>
                                <td>{{$entreprise->telephone}}</td>
                                <td>{{$entreprise->compte}}</td>
                                <td>{{$entreprise->ninea}}</td>
                                <td>{{$entreprise->numero_compte }}</td>
                                <td><a href="{{route('editentreprise', ['id'=>$entreprise->id])}}">Editer</a></td>
                                <td><a href="{{route('deleteentreprise', ['id'=>$entreprise->id])}}" onclick="return confirm('Voulez-vous supprimer ?');">Supprimer</a></td>
                            </tr>  
                            @endforeach
                       </table>  
                       {{$liste_entreprise->links()}}
                     </div>                     
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
