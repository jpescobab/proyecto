<div class="p-4">
    @if (session()->has('message'))
        <div class="mb-4 text-green-600 font-semibold">
            {{ session('message') }}
        </div>
    @endif

    <table class="w-full border-collapse">
        <thead>
            <tr class="bg-gray-200 text-left">
                <th class="p-2">#</th>
                <th class="p-2">Nombre</th>
                <th class="p-2">Email</th>
                <th class="p-2">Rol actual</th>
                <th class="p-2">Asignar nuevo rol</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr class="border-b">
                    <td class="p-2">{{ $user->id }}</td>
                    <td class="p-2">{{ $user->name }}</td>
                    <td class="p-2">{{ $user->email }}</td>
                    <td class="p-2">
                        {{ $user->roles->pluck('name')->join(', ') ?: 'Sin rol' }}
                    </td>
                    <td class="p-2">
                        <select wire:change="assignRole({{ $user->id }}, $event.target.value)" class="rounded border-gray-300">
                            <option value="">-- Elegir rol --</option>
                            @foreach ($roles as $role)
                                <option value="{{ $role->name }}">{{ $role->name }}</option>
                            @endforeach
                        </select>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
