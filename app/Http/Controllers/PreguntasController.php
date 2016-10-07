<?php namespace App\Http\Controllers;
use App\Encuestas;
use App\Preguntas;
use App\Opciones;
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
class PreguntasController extends Controller {
	public function index($id){
		$preguntas = Encuestas::find($id)->preguntas;
		return response::json($preguntas)->header("Access-Control-Allow-Origin", "*");
	}
	public function save($id){
		$info = Request::Json()->all();
		$newp = new Preguntas;
		$newp->name = $info['nombre'];
		$newp->status = '10';
		$newp->encuestas_id = $id;
		$newp->type = $info['type'];
		$newp->save();
		$resp="ok";
		return response::json($resp)->header("Access-Control-Allow-Origin","*");
	}
	
}