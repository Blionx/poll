<?php namespace App\Http\Controllers;
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
class TOpcionesController extends Controller {
	public function index(){
		$t = TipOpciones::get();
		return view('TOpciones.index',array('ts'=>$t));
	}
	public function delete($id){
		$doomed = TipOpciones::find($id);
		$doomed->delete();
		$message = 'toastr.warning("Tipo de Pregunta eliminada con éxito", "Atención");';
		return Redirect::to('/Topciones')->with('message',$message);
	}
	public function newer(){
		return view('TOpciones.new');
	}
	public function create(){
		$newitem = new TipOpciones;
		$newitem->nombre = Request::Input('name');
		$newitem->save();
		$message = 'toastr.success("Tipo de Pregunta Creada con éxito", "Éxito");';
		return Redirect::to('/Topciones')->with('message',$message);
	}
	public function edit($id){
		$oldi = TipOpciones::find($id);
		return view('TOpciones.editar',array('t'=>$oldi));
	}
	public function editor($id){
		$cursed = TipOpciones::find($id);
		$cursed->nombre = Request::Input('name');
		$cursed->save();
		$message = 'toastr.info("Tipo de Pregunta Actualizada con éxito", "Éxito");';
		return Redirect::to('/Topciones')->with('message',$message);
	}
}