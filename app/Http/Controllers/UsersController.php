<?php namespace App\Http\Controllers;
use App\User;
use App\Company;
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
class UsersController extends Controller {
	public function __construct()
{
    $this->middleware('auth');
}
	public function index(){
		$users = User::where('status','=',1)->get();
		return view('usuarios',array('users'=>$users));
	}
	public function delete($id){
		$usuario = User::find($id);
		$usuario->status=0;
		$usuario->save();
		return Redirect::to('usuarios');
	}
	public function new(){
		$company = Company::where('status','=','1')->get();
		return view('newuser',array('company'=>$company));
	}
	public function create(){
		$newu = new User;
		$newu->name = Request::Input('name');
		$newu->email = Request::Input('email');
		$newu->type = Request::Input('type');
		$newu->password= Hash::make(Request::Input('password'));
		$newu->status = 1;
		$newu->save();
		return Redirect::to('/usuarios');
	}
	public function edit($id){
		$users = User::find($id);
		$comp = $users->company()->get();
		$enter = Company::where('status','=',1)->get();
		return view('edituser', array('u'=>$users,'company'=>$comp,'enter'=>$enter));
	}
	public function editor($id){
		$editu = User::find($id);
		$editu->name = Request::Input('name');
		$editu->email = Request::Input('email');
		$editu->type = Request::Input('type');
		$editu->save();
		return Redirect::to('/usuarios');
	}
	public function elimcompany($id){
		$c = UserCompany::find($id);
		$c->delete();
		return Redirect::back();
	}
	

}