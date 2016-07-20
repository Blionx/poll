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
		$encuesta = Encuestas::get();
		return Response::json($encuesta)->header("Access-Control-Allow-Origin", "*");
	}

}