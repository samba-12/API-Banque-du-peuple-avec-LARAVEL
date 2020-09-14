@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> Formulaire d'enregistrement Entreprises</div>
                    <div class="card-body">
                        @if (isset($confirmation))
                            @if($confirmation==1)
                            <div class="alert alert-success">Entreprise ajoutée</div>
                            @else
                            <div class="alert alert-danger">Entreprise non ajoutée</div>
                            @endif 
                        @endif
                        <form method="POST" action= "/entreprise/update">
                      <!--  <form method="POST" action= "{{ route ('persistentreprise') }}"> -->
                        @csrf

                            <div class="form-group"> 
                                <label class="control-label" for="nom_entreprise">Identifiant entreprise :</label>
                                <input class="form-control" readonly="true" name="id" id="id" type="text" value="{{ $entreprise->id}}" /> 
                            </div>
                            <div class="form-group"> 
                                <label class="control-label" for="nom_entreprise">Nom Entreprise* :</label>
                                <input class="form-control" name="nom_entreprise" id="nom_entreprise" type="text" value="{{ $entreprise->nom_entreprise}}" required="required" /> 
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="adresse">Adresse * :</label>
                                <input class="form-control" name="adresse" id="adresse" type="text"required="required" value="{{ $entreprise->adresse}}"/>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="email">Email :</label>
                                <input class="form-control" name="email" id="email" type="email" value="{{ $entreprise->email}}" />
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="tel">Telephone * :</label>
                                <input class="form-control" name="telephone" id="telephone" type="telephone" required="required" value="{{ $entreprise->telephone}}"  /> 
                            </div>
                            <div class="form-group">
                                    <select id="compte" name="compte" required="required" value="{{ $entreprise->compte}}">
                                    <option>Choisissez un type de compte *</option>
                                    <option>Compte épargne simple et xeewel</option>
                                    <option>Compte courant</option>
                                    <option>Compte bloque</option>
                                    </select >
                            </div>
                            <div class="form-group">
                                <label  class="control-label" for="salaire">NINEA * :</label>
                                <input class="form-control" name="ninea" id="ninea" type="number" required="required" value="{{ $entreprise->ninea}}"/> 
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="numero">Numero compte* :</label>
                                <input class="form-control" name="numero_compte" id="numero_compte" type="number" required="required"  value="{{ $entreprise->numero_compte}}"/> 
                            </div>
                            <div class="form-group">
                                <input class="btn btn-success" name="envoyer" id="envoyer" value="Mettre à jour" type="submit"/> 
                                <a  class="btn btn-danger" href="{{route('getAllentreprise')}}"> Annuler </a>
                             <!--   <input  class="btn btn-danger" name="annuler" id="annuler" value="annuler" type="reset"/> -->
                            </div>
                        <form>    
                     </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
 