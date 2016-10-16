<?php namespace App\Http\Controllers;
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
class LoginController extends Controller {
	public function login(){
		if (Auth::attempt(['email' => Request::input('email'), 'password' => Request::input('password')])) {
            // Authentication passed...
            if(Auth::user()->type ==2){
                return redirect('/Vista_de_encuestas');
            }
            return redirect('/dashboard');
        }else{
        	return redirect('/');
        }
    }
    public function logout(){
    	Auth::logout();
    	return redirect('/');
    }
}