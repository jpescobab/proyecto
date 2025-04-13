@extends('layouts.theme.app')

@section('title', 'Gestión de Roles y Permisos')

@section('content')
 
<div class="container py-4">

    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <!-- Navegación por Tabs -->
    <ul class="nav nav-tabs mb-3">
        <li class="nav-item">
            <a class="nav-link {{ $activeTab === 'roles' ? 'active' : '' }}" wire:click.prevent="setTab('roles')" href="#">Roles</a>
        </li>
        <li class="nav-item">
            <a class="nav-link {{ $activeTab === 'permissions' ? 'active' : '' }}" wire:click.prevent="setTab('permissions')" href="#">Permisos</a>
        </li>
    </ul>

    <!-- Sección Roles -->
    @if ($activeTab === 'roles')
        <div class="mb-3">
            <form wire:submit.prevent="createRole" class="d-flex gap-2">
                <input type="text" wire:model="newRole" class="form-control" placeholder="Nuevo rol">
                <button class="btn btn-primary">Crear</button>
            </form>
            @error('newRole') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Rol</th>
                    <th>Permisos</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($roles as $role)
                    <tr>
                        <td>{{ $role->name }}</td>
                        <td>{{ $role->permissions->pluck('name')->join(', ') }}</td>
                        <td>
                            <button class="btn btn-sm btn-info" wire:click="editPermissions({{ $role->id }})">Editar</button>
                            <button class="btn btn-sm btn-danger" wire:click="deleteRole({{ $role->id }})">Eliminar</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        @if ($selectedRole)
            <h5 class="mt-4">Editar permisos de: <strong>{{ $selectedRole->name }}</strong></h5>
            <div class="row">
                @foreach ($permissions as $perm)
                    <div class="col-md-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" wire:model="rolePermissions" value="{{ $perm->name }}" id="perm-{{ $perm->id }}">
                            <label class="form-check-label" for="perm-{{ $perm->id }}">{{ $perm->name }}</label>
                        </div>
                    </div>
                @endforeach
            </div>
            <button class="btn btn-success mt-3" wire:click="updatePermissions">Guardar</button>
        @endif
    @endif

    <!-- Sección Permisos -->
    @if ($activeTab === 'permissions')
        <div class="mb-3">
            <form wire:submit.prevent="createPermission" class="d-flex gap-2">
                <input type="text" wire:model="newPermission" class="form-control" placeholder="Nuevo permiso">
                <button class="btn btn-primary">Crear</button>
            </form>
            @error('newPermission') <small class="text-danger">{{ $message }}</small> @enderror
        </div>

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Permiso</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($permissions as $perm)
                    <tr>
                        <td>{{ $perm->name }}</td>
                        <td>
                            <button class="btn btn-sm btn-danger" wire:click="deletePermission({{ $perm->id }})">Eliminar</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif

</div>

@endsection
