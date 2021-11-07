<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth']);
    }

    //
    public function create(Request $request)
    {
        Role::create($request->only('name'));
        return response()->json([$request->all()]);
    }

    public function updateRole(Request $request, Role $role)
    {
        $role->update($request->only('name'));
        return response()->json($role);
    }

    public function index()
    {
        return Role::get();
    }

    public function show(Role $role)
    {
        return response()->json(['data' => $role]);
    }

    public function users(Role $role)
    {

        return $role->users->first()->role;
    }
}
