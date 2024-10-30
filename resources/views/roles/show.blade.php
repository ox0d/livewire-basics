<x-layout>
    <div class="w-full max-w-2xl p-6 bg-slate-700 rounded-lg shadow-lg">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-xl font-bold">Role Details</h1>
            <a href="{{ route('roles.index') }}"
                class="px-4 py-2 bg-slate-600 hover:bg-slate-500 rounded-md text-sm transition-colors">
                Back to Roles
            </a>
        </div>

        <div class="space-y-4">
            <div class="p-4 bg-slate-800 rounded-lg">
                <h3 class="text-sm text-slate-400 mb-1">Role Name</h3>
                <p class="text-lg">{{ $role->name }}</p>
            </div>

            <div class="p-4 bg-slate-800 rounded-lg">
                <h3 class="text-sm text-slate-400 mb-1">Guard Name</h3>
                <p class="text-lg">{{ $role->guard_name }}</p>
            </div>
        </div>

        <div class="mt-6 flex space-x-3">
            <a href="{{ route('roles.edit', $role) }}"
                class="px-4 py-2 bg-blue-600 hover:bg-blue-700 rounded-md text-sm transition-colors">
                Edit Role
            </a>

            <form action="{{ route('roles.destroy', $role) }}" method="POST" class="inline">
                @csrf
                @method('DELETE')
                <button type="submit" class="px-4 py-2 bg-red-600 hover:bg-red-700 rounded-md text-sm transition-colors"
                    onclick="return confirm('Are you sure you want to delete this role?')">
                    Delete Role
                </button>
            </form>
        </div>
    </div>
</x-layout>