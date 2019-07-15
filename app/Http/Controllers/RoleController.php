<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Caffeinated\Shinobi\Models\Role;
use Caffeinated\Shinobi\Models\Permission;
use Yajra\Datatables\Datatables;

class RoleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('roles.index');
    }
    
    public function datatable()
    {
        $roles = Role::select(['id','name','slug','description', 'created_at', 'updated_at']);
        
        return Datatables::of($roles)->make(true);
    }

    public function create()
    {
        $permissions = Permission::get();
        return view('roles.create', compact('permissions'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name'          => 'required',
            'slug'          => 'required',
            'description'   => 'required',
        ]);        

        $role = Role::create([
            'name'          => $request->name,
            'slug'          => $request->slug,
            'description'   => $request->description
        ]);

        $role->permissions()->sync($request->get('permissions'));

        return back()->with('success', 'Se ha registrado la información del Rol '.$request->name.'.');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $role = Role::find($id);
        $permissions = Permission::get();
        return view('roles.edit', compact('role', 'permissions'));
    }

    public function delete($id)
    {
        $role = Role::find($id);
        return view('roles.delete', compact('role'));
    }

    public function update(Request $request, $id)
    {
        $role = Role::find($id);
        $role->update($request->all());

        //Actualiza los permisos relacionados
        $role->permissions()->sync($request->get('permissions'));

        return redirect()->route('roles.edit', $role->id)->with('info', 'Información del Rol actualizada con éxito.');
    }

    public function destroy($id)
    {
        if ($id != 1) {
            $role = Role::find($id);
            $role->delete();
            /*return redirect()->route('roles.index');*/
            return redirect()->route('roles.index')->with('success', 'Rol eliminado con éxito.');
        }else{
            return back()->with('error', 'No se puede eliminar este rol.');
        } 
    }

}
