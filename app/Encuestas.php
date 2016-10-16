<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Encuestas extends Model {

	protected $table = 'encuestas';

	public function preguntas()
    {
        return $this->hasMany('App\Preguntas');
    }
    public function empresa()
    {
    	return $this->hasOne('App\Company', 'id', 'company_id');
    }

}