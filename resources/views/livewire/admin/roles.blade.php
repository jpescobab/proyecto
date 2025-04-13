<div>
    <div class="p-4">
        @if (session()->has('message'))
            <div class="mb-4 text-green-600 font-semibold">
                {{ session('message') }}
            </div>
        @endif
    
        <h2 class="text-xl font-bold mb-4">Gestión de Roles</h2>
    
        <table class="table-auto w-full mb-6 border">
            <thead class="bg-gray-100">
                <tr>
                    <th class="p-2">Rol</th>
                    <th class="p-2">Permisos</th>
                    <th class="p-2">Acción</th>
                </tr>
            </thead>
            <tbody>
                @foreach($roles as $role)
                    <tr class="border-b">
                        <td class="p-2 font-semibold">{{ $role->name }}</td>
                        <td class="p-2 text-sm">
                            {{ $role->permissions->pluck('name')->join(', ') ?: 'Sin permisos' }}
                        </td>
                        <td class="p-2">
                            <button wire:click="editPermissions({{ $role->id }})" class="px-3 py-1 bg-blue-500 text-white rounded">Editar</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    
        @if ($selectedRole)
            <div class="bg-gray-100 p-4 rounded border">
                <h3 class="text-lg font-bold mb-2">Editar permisos para: {{ $selectedRole->name }}</h3>
                <div class="grid grid-cols-2 gap-2">
                    @foreach ($permissions as $perm)
                        <label class="flex items-center">
                            <input type="checkbox" wire:model="rolePermissions" value="{{ $perm->name }}" class="mr-2">
                            {{ $perm->name }}
                        </label>
                    @endforeach
                </div>
    
                <div class="mt-4">
                    <button wire:click="updatePermissions" class="px-4 py-2 bg-green-600 text-white rounded">Guardar</button>
                </div>
            </div>
        @endif
    </div>
    
</div>
