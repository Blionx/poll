<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Preguntas extends Model {

	protected $table = 'preguntas';

	public function type()
    {
        return $this->hasOne('App\TipOpciones','id','tipo_opciones_id');
    }

}