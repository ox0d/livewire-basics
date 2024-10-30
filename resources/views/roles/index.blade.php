<x-layout>
    <div class="w-full max-w-6xl p-6">
        <!-- Header -->
        <div class="flex justify-between items-center mb-6">
            <div>
                <h1 class="text-xl font-bold">Roles</h1>
                <p class="text-sm text-slate-400">A list of all roles in the system.</p>
            </div>
            <a href="{{ route('roles.create') }}"
                class="px-4 py-2 bg-blue-600 hover:bg-blue-700 rounded-md text-sm transition-colors">
                Add Role
            </a>
        </div>

        <!-- Table -->
        <div class="overflow-x-auto rounded-lg border border-slate-600">
            <table class="w-full">
                <thead class="bg-slate-700">
                    <tr>
                        <th class="px-4 py-3 text-left text-sm font-semibold">Name</th>
                        <th class="px-4 py-3 text-left text-sm font-semibold">Guard name</th>
                        <th class="px-4 py-3 text-right text-sm font-semibold">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-slate-800 divide-y divide-slate-700">
                    @foreach ($roles as $role)
                        <tr class="hover:bg-slate-700">
                            <td class="px-4 py-3 text-sm">
                                {{ $role->name }}
                            </td>
                            <td class="px-4 py-3 text-sm">
                                {{ $role->guard_name }}
                            </td>
                            <td class="px-4 py-3 text-sm text-right space-x-2 flex flex-row justify-end">
                                <a href="{{ route('roles.edit', $role) }}"
                                    class="text-blue-400 hover:text-blue-300">Edit</a>
                                <a href="{{ route('roles.show', $role) }}"
                                    class="text-slate-400 hover:text-slate-300">View</a>
                                <form action="{{ route('roles.destroy', $role) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-400 hover:text-red-300"
                                        onclick="return confirm('Are you sure you want to delete this role?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-layout>