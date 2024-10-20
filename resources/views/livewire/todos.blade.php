<div class="max-w-4xl mx-auto p-6 space-y-4">
    <!-- Header -->
    <h1 class="text-3xl font-bold text-gray-800 mb-6">My Tasks</h1>

    <div class="flex flex-col-2 gap-4 items-center justify-center">
        <!-- Todo List -->
        <div class="flex flex-col gap-4">
            @foreach ($todos as $todo)
                <div wire:key="todo-{{ $todo['id'] }}"
                    class="bg-white rounded-lg shadow-md p-4 hover:shadow-lg transition-shadow duration-200">
                    <div class="flex items-center justify-between">
                        <!-- Left side: Todo info -->
                        <div class="flex-1 space-y-2">
                            <div class="flex items-center gap-3">
                                <h3 class="text-lg font-semibold text-gray-800">{{ $todo['todo'] }}</h3>
                                <span
                                    class="px-2 py-1 text-sm rounded-full {{ $todo['status'] === 'completed' ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800' }}">
                                    {{ $todo['status'] }}
                                </span>
                            </div>

                            <p class="text-gray-600">{{ $todo['description'] }}</p>

                            <div class="flex items-center text-sm text-gray-500">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                </svg>
                                <span>Due: {{ $todo['due_date'] }}</span>
                            </div>
                        </div>

                        <!-- Right side: Actions -->
                        <div wire:click="retriveTodo({{ $todo['id'] }})" class="flex items-center gap-2">
                            <button class="p-2 text-blue-600 hover:bg-blue-50 rounded-full transition-colors duration-200">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                </svg>
                            </button>
                            <button wire:click="deleteTodo({{ $todo['id'] }})"
                                class="p-2 text-red-600 hover:bg-red-50 rounded-full transition-colors duration-200">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                                    stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Placeholder for future implementation -->
        <div class="h-full bg-white rounded-lg shadow-md p-6">
            <h2 class="text-xl font-semibold text-gray-800 mb-4">{{ $isUpdating ? 'Update Task' : 'Create Task' }}</h2>
            <form wire:submit.prevent={{ $isUpdating ? 'updateTodo' : 'createTodo' }} class="space-y-5 text-slate-800">
                <div>
                    <label for="todo" class="block text-sm font-medium text-gray-700 mb-1">Task Title</label>
                    <input type="text" id="todo" wire:model="todo"
                        class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                        placeholder="Enter task title">
                </div>

                <div>
                    <label for="description" class="block text-sm font-medium text-gray-700 mb-1">Description</label>
                    <textarea id="description" wire:model="description" rows="3"
                        class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500"
                        placeholder="Enter task description"></textarea>
                </div>

                <div>
                    <label for="due_date" class="block text-sm font-medium text-gray-700 mb-1">Due Date</label>
                    <input type="datetime-local" id="due_date" wire:model="due_date"
                        class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                </div>

                <div>
                    <label for="status" class="block text-sm font-medium text-gray-700 mb-1">Status</label>
                    <select id="status" wire:model="status"
                        class="w-full rounded-md border-gray-300 shadow-sm focus:border-blue-500 focus:ring-blue-500">
                        <option value="pending">Pending</option>
                        <option value="in_progress">In Progress</option>
                        <option value="completed">Completed</option>
                    </select>
                </div>

                <div class="flex justify-end gap-3">
                    <button type="button" wire:click="resetForm"
                        class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        Reset
                    </button>
                    <button type="submit"
                        class="px-4 py-2 text-sm font-medium text-white bg-blue-600 border border-transparent rounded-md shadow-sm hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        {{ $isUpdating ? 'Update Task' : 'Create Task' }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>