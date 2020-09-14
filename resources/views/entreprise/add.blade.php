@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header  text-center"> Formulaire d'enregistrement Entreprises</div>
                    <div class="card-body card-body1" >
                        @if (isset($confirmation))
                            @if($confirmation==1)
                            <div class="alert alert-success">Entreprise ajoutée</div>
                            @else
                            <div class="alert alert-danger">Entreprise non ajoutée</div>
                            @endif 
                        @endif
                        <form method="POST" action= "/entreprise/persist">
                      <!--  <form method="POST" action= "{{ route ('persistentreprise') }}"> -->
                        @csrf
                            <div class="form-group"> 
                                <label class="control-label" for="nom_entreprise">Nom Entreprise* :</label>
                                <input class="form-control" name="nom_entreprise" id="nom_entreprise" type="text" required="required"/> 
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="adresse">Adresse * :</label>
                                <input class="form-control" name="adresse" id="adresse" type="text"required="required"/>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="email">Email :</label>
                                <input class="form-control" name="email" id="email" type="email" />
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="tel">Telephone * :</label>
                                <input class="form-control" name="telephone" id="telephone" type="telephone" required="required"  /> 
                            </div>
                            <div class="form-group">
                                    <select id="compte" name="compte" required="required">
                                    <option>Choisissez un type de compte *</option>
                                    <option>Compte épargne simple et xeewel</option>
                                    <option>Compte courant</option>
                                    <option>Compte bloque</option>
                                    </select >
                            </div>
                            <div class="form-group">
                                <label  class="control-label" for="salaire">NINEA * :</label>
                                <input class="form-control" name="ninea" id="ninea" type="number" required="required"/> 
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="numero">Numero compte* :</label>
                                <input class="form-control" name="numero_compte" id="numero_compte" type="number" required="required" /> 
                            </div>
                            <div class="form-group">
                                <input class="btn btn-success" name="envoyer" id="envoyer" value="envoyer" type="submit"/> 
                                <a  class="btn btn-danger" href="{{route('home')}}"> Annuler </a>

                              <!--  <input  class="btn btn-danger" name="annuler" id="annuler" value="annuler" type="reset"/> -->
                            </div>
                        <form>    
                     </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
