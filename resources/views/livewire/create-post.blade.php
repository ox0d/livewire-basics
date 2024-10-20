<div class="max-w-2xl mx-auto p-4 text-slate-900">
    <h1 class="text-xl font-semibold text-gray-800 mb-4">Create Post</h1>

    <form wire:submit.prevent="createPost" class="space-y-4">
        <div>
            <input type="text" wire:model="title" class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500
                    {{ $errors->has('title') ? 'border-red-500' : 'border-gray-300' }}" placeholder="Post title">
            @error('title')
                <span class="text-xs text-red-500">{{ $message }}</span>
            @enderror
        </div>

        <div>
            <textarea wire:model="content" rows="3" class="w-full p-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-500
                    {{ $errors->has('content') ? 'border-red-500' : 'border-gray-300' }}"
                placeholder="Post content"></textarea>
            @error('content')
                <span class="text-xs text-red-500">{{ $message }}</span>
            @enderror
        </div>

        <div class="flex justify-end">
            <button type="submit"
                class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2">
                Create Post
            </button>
        </div>
    </form>
</div>