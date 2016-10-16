<?php namespace App\Http\Controllers;
use App\Encuestas;
use App\Company;
use App\User;
use App\UserCompany;
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
class UsersViewController extends Controller {
	public function index(){
		if(Auth::user()->status !=0){
			$companies = User::find(Auth::user()->id)->company;
			foreach ($companies as $comp) {
				$comp->c = Company::find($comp->company_id);
				$comp->e = Encuestas::where('company_id','=',$comp->company_id)->get();
			}
			$message= 'toastr.error("Bienvenido:"'.Auth::user()->name.',"Error");';
			return view('Usersview.index',array('companies'=>$companies));
		}else{
			$message= 'toastr.error("Este Usuario Esta Inhabilitado temporalmente","Error");';
			return Redirect::to('/')->with('message',$message);
		}
	}
}