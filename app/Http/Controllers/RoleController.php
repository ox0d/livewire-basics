<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRoleRequest;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('roles.index', [
            'roles' => Role::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('roles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreRoleRequest $request)
    {
        Role::create($request->all());

        return redirect()->route('roles.index')->with('success', 'Role created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Role $role)
    {
        return view('roles.show', [
            'role' => $role
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Role $role)
    {
        return view('roles.edit', [
            'role' => $role
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(StoreRoleRequest $request, Role $role)
    {
        $role->update($request->all());

        return redirect()->route('roles.index')->with('success', 'Role updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Role $role)
    {
        $role->delete();

        return redirect()->route('roles.index')->with('success', 'Role deleted successfully');
    }
}
