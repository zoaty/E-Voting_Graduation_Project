<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Role;
use App\Models\Permission;

class PermissionController extends Controller
{
    public function index(){

        return view('admin.permissions.index', [
            'permissions'=> Permission::all()
        ]);
    }

    public function store(){

        request()->validate(['name'=>['required']]);

        Permission::create([
            'name'=>Str::ucfirst(request('name')),
            'slug'=>Str::of(Str::lower(request('name')))->slug('-'),
        ]);
        return back();
    }

    public function destroy(Permission $permission){
        $permission->delete();

        session()->flash('permission-deleted', $permission->name . ' is deleted!');

        return back();
    }

    public function edit(Permission $permission){
        return view('admin.permissions.edit', ['permission'=>$permission]);
    }

    public function update(Permission $permission){
        $permission->name = Str::ucfirst(request('name'));
        $permission->slug = Str::of(request('name'))->slug('-');
        
        if($permission->isDirty('name')){
            session()->flash('permission-updated', request('name') . ' is updated!');
            $permission->save();
        }

        else{
            session()->flash('role-updated', 'Nothing to update!');
        }

        return redirect()->route('permissions.index'); 
    }
}
