<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use Session;

class UsersController extends Controller
{

    public function __construct()
    {
        $this->middleware('admin_permission');
    }

    public function index()
    {
        $users = User::where('role_id', '=', '1')->orWhere('role_id', '=', '2')->orderBy('id', 'desc')->get();
        return view('cms.users', compact('users'));
    }

    public function add()
    {
        return view('cms.add-user');
    }

    public function addUser(Request $request)
    {

        $this->validate($request, [
            'name' => 'max:120|required',
            'email' => 'email|unique:users|required',
            'password' => 'required|string|min:6|confirmed'], [ 
            'required' => 'To pole jest wymagane',
            'email' => 'Podaj poprawny adres e-mail',
            'confirmed' => 'Powtórz hasło',
            'unique' => 'Ten e-mail już istnieje w bazie'
            ]
        );

        $name = $request['name'];
        $email = $request['email'];
        $password = bcrypt($request['password']);
        $role_id = 2;

        // dd($password);

        $user = new User();
        $user->email = $email;
        $user->name = $name;
        $user->role_id = $role_id;
        $user->password = $password;
        $user->save(); 

        Session::flash('created_user', 'Poprawnie dodałeś użytkownika');
        return redirect('users');

    }

    public function destroy($id)
    {
        $post = User::find($id);
        $post->delete();

        Session::flash('user_destroy', 'Użytkownik usunięty poprawnie');
        return redirect('users');
    }
}
