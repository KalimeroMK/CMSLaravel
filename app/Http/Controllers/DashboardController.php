<?php

namespace App\Http\Controllers;

use App\User as User;

use Hash;
use LaravelAnalytics;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Input;
use Intervention\Image\ImageManagerStatic as Image;
use Session;
use Validator;
use Date;




class DashboardController extends Controller {

	use RegistersUsers;

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct() {
		$this->middleware('auth');
	}

	/**
	 * Show the application dashboard.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index() {
		return view('admin.regular');
	}

	public function listusers() {
		$users = User::orderBy('created_at', 'asc')->paginate(10);
		$data  = ['status' => 'all', 'users' => $users];
		return view('admin.user.users')->with($data);
	}

	public function listuser($id) {
		$user = User::find($id);

		$data = ['status' => 'single', 'user' => $user];

		return view('admin.user.users')->with($data);
	}

	public function create() {
		return view('admin.user.adduser');
	}

	public function edituser($id) {
		$user = User::find($id);
		$data = ['status' => 'edit', 'user' => $user];
		return view('admin.user.edituser')->with($data);
	}

	protected function register(Request $data) {

		$errors = Validator::make($data->all(), [
				'name'     => 'required|max:255',
				'email'    => 'required|email|max:255|unique:users',
				'password' => 'required|confirmed|min:6',
				'role'     => 'required',
			]);

		if ($errors->fails()) {
			return redirect('/admin/users/create')
			->withErrors($errors)
			->withInput();
		}
		$create = User::create([
				'name'     => $data['name'],
				'email'    => $data['email'],
				'role'     => $data['role'],
				'password' => bcrypt($data['password']),
			]);
		return redirect('/admin/users');
	}

	protected function updateuser(Request $data) {

		$id   = $data['id'];
		$user = User::findOrFail($id);

		$errors = Validator::make($data->all(), [
				'name'     => 'required|max:255',
				'email'    => 'required|email|max:255|',
				'role'     => 'required',
				'password' => 'confirmed|min:6',
			]);

		if ($errors->fails()) {
			return redirect('/admin/users/'.$id.'/edit')
			->withErrors($errors)
			->withInput();
		}

		if (trim(Input::get('password')) == '') {
			$data = Input::except('password', 'password_confirmation');
		} else {
			$data             = Input::all();
			$data['password'] = Hash::make($data['password']);
		}

		$user->fill($data)->save();

		if (Input::hasFile('image')) {
			$image     = Input::file('image');
			$path      = public_path().'/assets/img/avatars';
			$pathThumb = public_path().'/assets/img/avatars/thumbnails/';
			$ext       = $image->getClientOriginalExtension();
			$imageName = (rand(11111, 99999).time()).'.'.$ext;

			$image->move($path, $imageName);

			$findimage = public_path().'/assets/img/avatars/'.$imageName;

			$imagethumb = Image::make($findimage)->resize(300, null, function ($constraint) {
					$constraint->aspectRatio();
				})->fit(200);

			$imagethumb->save($pathThumb.$imageName);

			$user->imagethumb = $imageName;
			$user->image      = $imageName;
			$user->save();
		}

		Session::flash('flash_message', 'User successfully edited!');

		return redirect()->back();
	}

	protected function delete($id) {
		$user = User::find($id);
		$user->delete();
		return redirect('/admin/users');
	}
    public function analytics() {
      
        return view('admin.analytics');
    }
   
}
