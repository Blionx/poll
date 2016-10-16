<?php namespace App\Http\Controllers;
use App\User;
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
class CompanyController extends Controller {
	public function __construct()
{
    $this->middleware('auth');
}
	public function index(){
		$company = Company::where('status','=',1)->get();

		return view('company.index',array('company'=>$company));
	}
	public function delete($id){
		$doomed = Company::find($id);
		$doomed->status = 0;
		$doomed->save();
		return Redirect::to('company');
	}
	public function newer(){
		return view('company.new');
	}
	public function create(){
		if (Request::hasFile('logo'))
{
$file = Request::file('logo');
   
}
		$destinationPath='images/company/';
		 $imageName = rand(0, 999999).Request::file('logo')->getClientOriginalName();
		Request::file('logo')->move($destinationPath,$imageName);
		$newcomp = new Company;
		$newcomp->name = Request::Input('name');
		$newcomp->email = Request::Input('email');
		$newcomp->status = 1;
		$newcomp->logo ="/images/company/".$imageName;
		$newcomp->save();
		return Redirect::to('/company');
	}
	public function edit($id){
		$company = Company::find($id);
		return view('company.edit', array('c'=>$company));
	}
	public function editor($id){
		
		$newcomp = company::find($id);
		$newcomp->name = Request::Input('name');
		$newcomp->email = Request::Input('email');
		if (Request::hasFile('logo')) {
			if (file_exists(public_path() .$newcomp->logo)) {
				unlink(public_path() .$newcomp->logo);
			}
			$destinationPath='images/company/';
			$imageName = rand(0, 999999).Request::file('logo')->getClientOriginalName();
			Request::file('logo')->move($destinationPath,$imageName);
			$newcomp->logo ="/images/company/".$imageName;
		}
		
		$newcomp->save();
		return Redirect::to('/company');
	}
	

}