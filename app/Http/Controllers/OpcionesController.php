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
class OpcionesController extends Controller {

	public function index($id){
		$opciones = Preguntas::find($id)->opciones;
		return response::json($opciones)->header("Access-Control-Allow-Origin", "*");
	}
	
}