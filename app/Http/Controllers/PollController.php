<?php namespace App\Http\Controllers;
use App\Encuestas;
use App\Company;
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
		return Redirect::to('encuestas');
	}
	public function new(){
		return view('poll.new');
	}
	public function create(){
		$newu = new Encuestas;
		$newu->name = Request::Input('name');
		$newu->type = Request::Input('type');
		$newu->company_id = Request::Input('company_id');
		$newu->status = 1;
		$newu->save();
		return Redirect::to('/encuestas');
	}
	public function edit($id){
		$users = encuestas::find($id);
		return view('poll.edit', array('e'=>$users));
	}
	public function editor($id){
		$editu = encuestas::find($id);
		$editu->name = Request::Input('name');
		$editu->type = Request::Input('type');
		$editu->save();
		return Redirect::to('/encuestas');
	}
	

}