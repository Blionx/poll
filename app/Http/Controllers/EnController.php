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
use Response;
use Illuminate\Auth\Authenticable;
use Hash;
use Input;
class EnController extends Controller {
	
}