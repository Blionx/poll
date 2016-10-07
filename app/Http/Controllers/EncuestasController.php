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
class EncuestasController extends Controller {
	public function index(){
		$encuesta = Encuestas::where('status','=','1')->get();
		return Response::json($encuesta)->header("Access-Control-Allow-Origin", "*");
	}
	public function save(){
		$info = Request::Json()->all();
		$enc = new Encuestas;
		$enc->name=$info['nombre'];
		$enc->status="1";
		$enc->save();
		$resp="ok";
		return Response::json($resp)->header("Access-Control-Allow-Origin","*");
	}
	public function delete($id){
		$enc = Encuestas::find($id);
		$enc->status = '0';
		$enc->save();
		return Response::json('ok')->header("Access-Control-Allow-Origin","*");
	}

}