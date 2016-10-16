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
		$uid =[];
		$users =[];
		$pcomp = [];
		$i = 0;
		$denied=false;
		if(Auth::user()->type == 0){

			$users = User::where('status','=',1)->get();
			return view('usuarios',array('users'=>$users));

		}elseif (Auth::user()->type == 1) {

			$id = Auth::user()->id;

			$companies = User::find($id)->company;

			foreach ($companies as $c) {

				$p = UserCompany::where('company_id','=',$c->company_id)->get();

				foreach ($p as $c) {

					if($i<1){

						array_push($uid, $c->user_id);
					}else{

						foreach ($uid as $ll) {

							if($ll == $c->user_id){

								$denied = true;
							}
						}
						if(!$denied){
							array_push($uid, $c->user_id);
						}
					}
					$i++;
					$denied = false;
				}
			}
			
			foreach ($uid as $ff) {
				array_push($users, User::find($ff));
			}
			return view('usuarios',array('users'=>$users));

		}else{

			return Redirect::to('/dashboard');
		}
	}
	public function delete($id){
		$usuario = User::find($id);
		$usuario->status=0;
		$usuario->save();
		$message = 'toastr.warning("Usuario Eliminado con éxito", "Atención");';
		return Redirect::to('usuarios')->with('message',$message);
	}
	public function newer(){
		$company = Company::where('status','=','1')->get();
		return view('newuser',array('company',$company));
	}
	public function create(){
		$newu = new User;
		$newu->name = Request::Input('name');
		$newu->email = Request::Input('email');
		$newu->type = Request::Input('type');
		$newu->password= Hash::make(Request::Input('password'));
		$newu->status = 1;
		$newu->save();
		$message = 'toastr.success("Usuario Creado con éxito", "Éxito");';
		return Redirect::to('/usuarios')->with('message',$message);
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
		$message = 'toastr.info("Informacion de suario Actualizada con éxito", "Éxito");';
		return Redirect::to('/usuarios')->with('message',$message);
	}
	public function elimcompany($id){
		$c = UserCompany::find($id);
		$c->delete();
		$previousUrl = app('url')->previous();
		$message = 'toastr.warning("Empresa Eliminada con éxito", "Atención");';
  		return redirect()->to($previousUrl.'?param=1')->with('message',$message);
		
	}
	public function saveemp($uid, $eid){
		$c = new UserCompany;
		$c->user_id= $uid;
		$c->company_id = $eid;
		$c->save();


		return"ok";
	}

}