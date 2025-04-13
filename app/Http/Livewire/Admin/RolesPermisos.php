<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolesPermisos extends Component
{
    public $activeTab = 'roles';

    public $roles, $permissions;
    public $newRole = '';
    public $newPermission = '';
    public $selectedRole;
    public $rolePermissions = [];

    public function mount()
    {
        $this->loadData();
    }

    public function loadData()
    {
        $this->roles = Role::with('permissions')->get();
        $this->permissions = Permission::all();
    }

    public function setTab($tab)
    {
        $this->activeTab = $tab;
        $this->selectedRole = null;
    }

    public function createRole()
    {
        $this->validate(['newRole' => 'required|string|unique:roles,name']);
        Role::create(['name' => $this->newRole]);
        $this->newRole = '';
        $this->loadData();
    }

    public function createPermission()
    {
        $this->validate(['newPermission' => 'required|string|unique:permissions,name']);
        Permission::create(['name' => $this->newPermission]);
        $this->newPermission = '';
        $this->loadData();
    }

    public function editPermissions($roleId)
    {
        $this->selectedRole = Role::find($roleId);
        $this->rolePermissions = $this->selectedRole->permissions->pluck('name')->toArray();
    }

    public function updatePermissions()
    {
        $this->selectedRole->syncPermissions($this->rolePermissions);
        session()->flash('message', 'Permisos actualizados');
        $this->loadData();
    }

    public function deleteRole($id)
    {
        Role::findOrFail($id)->delete();
        $this->selectedRole = null;
        $this->loadData();
    }

    public function deletePermission($id)
    {
        Permission::findOrFail($id)->delete();
        $this->loadData();
    }

    public function render()
    {
        return view('livewire.admin.roles-permisos');
    }
}
