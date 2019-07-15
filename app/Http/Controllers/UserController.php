<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Http\Requests\UserRequest;
use App\Http\Requests\UserUpdateRequest;
use Yajra\Datatables\Datatables;
use Illuminate\Support\Facades\Hash;
use Caffeinated\Shinobi\Models\Role;

class UserController extends Controller
{   
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        return view('users.index');
    }

    public function datatable()
    {
        $users = User::select(['id','name','phone','email', 'created_at', 'updated_at']);
        return Datatables::of($users)->make(true);
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(UserRequest $request)
    {       
    	/*No se envia directo a request->all porque hay q hacer hash de la contraseña*/
        $user = User::create([
            'name'      => $request['name'],
            'email'     => $request['email'],
            'phone'    	=> $request['phone'],
            'password'  => Hash::make($request['password']),
        ]);

        return redirect()->route('users.index')
            ->with('success', 'Se ha agregado la información correspondiente a '. $user->name);
    }

    public function show(User $user)
    {
        $user = User::find($user->id);
        return view('users.show', ['user' => $user]);
    }

    public function edit(User $user)
    {
        $user = User::find($user->id);
        $roles = Role::get();

        return view('users.edit', compact('user', 'roles'));
    }

    public function update(UserUpdateRequest $request, User $user)
    {
        $user = User::find($user->id);
        if ($user->id != 1) {
            $user->update($request->all());
            $user->roles()->sync($request->get('roles'));

            return redirect()->route('users.index', $user->id)->with('info','Información de ' . $user->name . ', actualizada con éxito');
        }else{
            return back()->with('error', 'No se puede modificar este usuario.');
        }
    }

    public function delete($id)
    {
        $user = User::find($id);
        return view('users.delete', compact('user'));
    }

    public function destroy(User $user)
    {
        if ($user->id != 1) {
            $user = User::find($user->id);
            $user->delete();
            //return view('users.index')->with('success', 'Se han eliminado los datos de '.$user->name.'.');
            return redirect()->route('users.index')->with('success', 'Usuario eliminado con éxito.');
        }else{
            return back()->with('error', 'No se ha podido eliminar a este usuario.');
        }
    }
}
