<?php namespace App\Http\Controllers;
use App\Encuestas;
use App\Company;
use App\User;
use App\Preguntas;
use App\TipOpciones;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Exception\ClientException;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use GuzzleHttp\Client;
use Request;
use Route;
use Illuminate\Support\Facades\Redirect;
use Auth;
use Illuminate\Auth\Authenticable;
use Response;
use Hash;
use Input;
class Preguntas2Controller extends Controller {
	public function index($id){
		$preguntas = Encuestas::find($id)->preguntas;
		$enc = Encuestas::find($id);
		return view('preguntas.index',array('preguntas'=>$preguntas,'enc'=>$enc));
	}
	public function newer($id){
		$enc = Encuestas::find($id);
		$type = TipOpciones::get();
		return view('preguntas.new',array('enc'=>$enc,'tipos'=>$type));
	}
	public function create($id){
		$newitem = new Preguntas;
		$newitem->name = Request::Input('name');
		$newitem->tipo_opciones_id= Request::Input('type');
		$newitem->encuestas_id = $id;
		$newitem->status =1 ;
		$newitem->save();
		$message = 'toastr.success("Pregunta Creada con éxito", "Éxito");';
		return Redirect::to('/preguntas/'.$id)->with('message',$message);
	}
	public function delete($id){
		$doomed = Preguntas::find($id);
		$doomed->delete();
		$message = 'toastr.warning("Pregunta Eliminada con éxito", "Atención");';
		return Redirect::back()->with('message',$message);
	}
	public function edit($eid, $id){
		$cursed = Preguntas::find($id);
		$enc = Encuestas::find($eid);
		$type = TipOpciones::get();
		return view('preguntas.edit',array('enc'=>$enc,'p'=>$cursed,'tipos'=>$type));
	}
	public function editor($eid, $id){
		$cursed = Preguntas::find($id);
		$cursed->name= Request::Input('name');
		$cursed->tipo_opciones_id = Request::Input('type');
		$cursed->save();
		$message = 'toastr.info("Pregunta Actualizada con éxito", "Éxito");';
		return Redirect::to('/preguntas/'.$eid)->with('message',$message);
	}
}