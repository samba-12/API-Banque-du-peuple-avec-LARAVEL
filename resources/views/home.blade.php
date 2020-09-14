@extends('layouts.app')

@section('content')
<div class="container">
    <div >
        <div >
            <div class="card">
                <div class="card-header  text-center">La Banque du Peuple vous souhaite la Bienvenue </div>

                       <!-- <div class="card-body">
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{ session('status') }}
                                </div>
                            @endif

                            Bienvenue
                                </div>    -->
                    <div class="card-body">
                        <div class="infosagent">
                            <strong> Informations agent</strong> 
                            <br>             
                            <strong>Prenom</strong>: Tidjane
                                <br>
                                    Nom : THIAM
                                <br>
                            <strong>Profil</strong> : Responsable de compte
                                <br>
                            <strong>ID_agent</strong>: RC283674
                                <br>
                            <strong>Agence </strong>: Petit Mbao
                        </div>
                            <div class="row align-items-center">
                                <div class="col">
                                </div>
                                <div class="col">
                                </div>
                                <div class="col">
                                <img src="{{ asset('img/Tidjane.png')}}" class="imgagent" >                                </div>
                            </div>
                        
                    </div>    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
