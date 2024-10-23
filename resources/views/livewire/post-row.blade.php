<tr class="hover:bg-gray-50 {{ $post->is_archived ? 'hidden' : '' }}">
    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
        {{ $post->id }}
    </td>
    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
        {{ str($post->title)->words(3) }}
    </td>
    <td class="px-6 py-4 text-sm text-gray-500 max-w-md">
        {{ str($post->content)->words(10) }}
    </td>
    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
        @unless($post->is_archived)
            <button wire:click="archive()" wire:confirm="Are you sure?"
                class="inline-flex items-center px-3 py-1 border border-transparent text-sm leading-4 font-medium rounded-md text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 transition-colors duration-150">
                Archive
            </button>
        @endunless
        <button wire:click="$parent.destroy({{ $post->id }})" wire:confirm="Are you sure?"
            class="inline-flex items-center px-3 py-1 border border-transparent text-sm leading-4 font-medium rounded-md text-white bg-red-600 hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 transition-colors duration-150">
            Delete
        </button>
    </td>
</tr>