<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


///agregamos////
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Iluminate\Support\Facades\DB;


class RolController extends Controller
{
    function __contruct()
    {
        $this->middleware('auth');
    $this->middleware('permission:ver-rol|crear-rol|editar-rol|borrar-rol',['only'=>['index']]); 
    $this->middleware('permission:crear-rol',['only'=>['create','store']]); 
    $this->middleware('permission:editar-rol',['only'=>['edit','update']]);     
    $this->middleware('permission:borrar-rol',['only'=>['destroy']]);     
}

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
     $roles = Role::paginate(10);
     return view('roles.index',compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $permission = Permission::get();
        return view('roles.crear', compact('permission'));
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,['name' => 'required','permission'=>'required']);
        $role = Role::create(['name'=> $request->input('name')]);
        $role->syncPermissions($request->input('permission'));
        

        return redirect()->route('roles.index');
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $role = Role::find($id);
        $permission = Permission::get();
        $rolePermissions = DB::table('role_has_permissions')->where('roles_has_permissions.role_id',$id)
        ->pluck('roles_has_permissions.permission_id','roles_has_permissions_id')
        ->all();
        
        return view('roles.editar', compact('role','permission','rolePermissions'));

        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,['name' => 'required', 'permission'=>'required']); 
        
        $role = Role::find($id);

        $role->name = $request->input('name');
        $role->save();

        $role->syncPermissions($request->input('permission'));
        return redirect()->route('roles.index'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('roles')->where('id', $id)->delete();
        return redirect()->route('roles.index'); 
    }
}