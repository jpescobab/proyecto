<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\User;
use Spatie\Permission\Models\Role;

class Users extends Component
{
    public $users;
    public $roles;

    public function mount()
    {
        $this->users = User::with('roles')->get();
        $this->roles = Role::all();
    }

    public function assignRole($userId, $roleName)
    {
        $user = User::findOrFail($userId);
        $user->syncRoles([$roleName]); // reemplaza el rol actual
        $this->users = User::with('roles')->get(); // refrescar lista
        session()->flash('message', 'Rol actualizado correctamente.');
    }

    public function render()
    {
        return view('livewire.admin.users');
    }
}
