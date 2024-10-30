<x-layout>
    <div class="w-full max-w-md p-6 bg-slate-700 rounded-lg shadow-lg">
        <div class="flex justify-between items-center mb-6">
            <h1 class="text-xl font-bold">Add New Role</h1>
            <a href="{{ route('roles.index') }}"
                class="px-4 py-2 bg-slate-600 hover:bg-slate-500 rounded-md text-sm transition-colors">
                Back to Roles
            </a>
        </div>

        <form action="{{ route('roles.store') }}" method="POST">
            @csrf
            <div class="space-y-4">
                <div>
                    <label for="name" class="block text-sm mb-1">Role Name</label>
                    <input type="text" name="name" id="name" value="{{ old('name') }}" class="w-full px-3 py-2 bg-slate-600 border rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500
                               @error('name') border-red-500 @else border-slate-500 @enderror"
                        placeholder="Enter role name">
                    @error('name')
                        <p class="mt-1 text-sm text-red-400">{{ $message }}</p>
                    @enderror
                </div>

                <button type="submit"
                    class="w-full py-2 px-4 bg-blue-600 hover:bg-blue-700 rounded-md transition-colors">
                    Create Role
                </button>
            </div>
        </form>
    </div>
</x-layout>