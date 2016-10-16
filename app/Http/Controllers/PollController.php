<?php namespace App\Http\Controllers;
use App\Encuestas;
use App\Company;
use App\User;
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
class PollController extends Controller {
	public function __construct()
{
    $this->middleware('auth');
}
	public function index(){
		$poll = Encuestas::where('status','=',1)->get();
		return view('poll.index',array('poll'=>$poll));
	}
	public function delete($id){
		$usuario = Encuestas::find($id);
		$usuario->status=0;
		$usuario->save();
		$message = 'toastr.warning("Encuesta Eliminada con éxito", "Atención");';
		return Redirect::to('encuestas')->with('message',$message);
	}
	public function newer(){
		$companylist = User::find(Auth::user()->id)->company;
		$final=[];
		foreach ($companylist as $c) {
			$midle = Company::find($c->company_id);
			array_push($final, $midle);
		}
		return view('poll.new', array('company'=>$final));
	}
	public function create(){
		$newu = new Encuestas;
		$newu->name = Request::Input('name');
		$newu->company_id = Request::Input('company');
		$newu->status = 1;
		$newu->save();
		$message = 'toastr.success("Encuesta Creada con éxito", "Éxito");';
		return Redirect::to('/encuestas')->with('message',$message);
	}
	public function edit($id){
		$users = encuestas::find($id);
		$companylist = User::find(Auth::user()->id)->company;
		$final=[];
		foreach ($companylist as $c) {
			$midle = Company::find($c->company_id);
			array_push($final, $midle);
		}
		return view('poll.edit', array('e'=>$users,'company'=>$final));
	}
	public function editor($id){
		$editu = encuestas::find($id);
		$editu->name = Request::Input('name');
		$editu->company_id = Request::Input('company');
		$editu->save();
		$message = 'toastr.info("Encuesta Actualizada con éxito", "Éxito");';
		return Redirect::to('/encuestas')->with('message',$message);
	}
	

}