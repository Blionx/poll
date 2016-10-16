<?php namespace App\Http\Controllers;
use App\Encuestas;
use App\Preguntas;
use App\Opciones;
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
class OpcionesController extends Controller {

	public function index($id){
		$preguntas = TipOpciones::find($id)->preguntas;
		$type = TipOpciones::find($id);
		return view('opciones.index',array('preg'=>$preguntas,'ty'=>$type));
	}
	public function delete($id){
		$doomed = Opciones::find($id);
		$doomed->delete();
		$message = 'toastr.warning("Pregunta Eliminada con éxito", "Atención");';
		return Redirect::back()->with('message',$message);
	}
	public function newer($id){
		$type= TipOpciones::find($id);
		return view('opciones.new',array('ty'=>$type));
	}
	public function edit($tid,$id){
		$type = TipOpciones::find($tid);
		$cursed = Opciones::find($id);
		return view('opciones.edit',array('p'=>$cursed,'ty'=>$type));
	}
	public function create($id){
		$newitem = new Opciones;
		$newitem->name = Request::Input('name');
		$newitem->tipo_opciones_id = $id;
		$newitem->save();
		$message = 'toastr.success("Pregunta Creada con éxito", "Éxito");';
		return Redirect::to('/opciones/'.$id)->with('message',$message);
	}
	public function editor($tid,$id){
		$cursed = Opciones::find($id);
		$cursed->name = Request::Input('name');
		$cursed->save();
		$message = 'toastr.info("Pregunta Actualizada con éxito", "Éxito");';
		return Redirect::to('/opciones/'.$tid)->with('message',$message);
	}
	
}