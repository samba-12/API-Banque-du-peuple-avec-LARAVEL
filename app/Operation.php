<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
 
class Operation extends Model
{

    protected $table = "Operations";
    protected $fillable = array('numeroCompte','Nomentreprise','typeoperation', 'montant', 'solde', 'dateoperation');
    public static $rules = array('numeroCompte'=>'required|min 2',
                                'Nomentreprise'=>'required|min 2',
                                'typeoperation'=>'required|min 2',
                                'montant'=>'required|min 2',
                                'solde'=>'required|min 1',
                                'dateoperation'=>'required|min 4',
                                );
    public function compte()
    {
        return $this->belongsTo('App\Entreprise');
    }     

}
