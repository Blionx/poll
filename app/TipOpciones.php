<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class TipOpciones extends Model {

	protected $table = 'tipo_opciones';

	public function preguntas()
    {
        return $this->hasMany('App\Opciones','tipo_opciones_id');
    }

}