<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entreprise extends Model
{
    
    protected $fillable = array('numeroCompte','nom_entreprise', 'adresse', 'email', 'telephone', 'ninea', 'typecompte');
    public static $rules = array('numeroCompte'=>'required|min 3',
                                'nom_entreprise'=>'required|min 1',
                                'adresse'=>'required|min 2',
                                'email'=>'required|min 5',
                                'telephone'=>'required|min 9',
                                'ninea'=>'required|min 4',
                                'typecompte'=>'required|min 3',
                                );
    public function compte()
    {
        return $this->hasMany('App\Operation');
    }                          
}
