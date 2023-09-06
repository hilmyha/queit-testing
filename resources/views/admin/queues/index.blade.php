<x-app-layout title="Queues">
    <main class="p-4 lg:ml-64 h-auto pt-5">

        <div class="p-2 border-2 border-dashed rounded-lg border-gray-300 mb-4">
            <div class="bg-white w-full h-full flex flex-col rounded-lg">
                <div class="w-full">
                    <!-- Start coding here -->
                    <div class="relative overflow-hidden bg-white">
                        
                        <div class="flex-row items-center justify-between p-4 space-y-3 lg:flex lg:space-y-0 lg:space-x-4">
                            <div>
                                <h5 class="mr-3 font-semibold text-xl hidden lg:block">Queues</h5>
                                <p class="text-gray-500 hidden lg:block">Manage all your existing Queues or add a new one</p>
                            </div>
                            <a href="{{ route('queues.create') }}" class="flex items-center justify-center px-4 py-2 text-sm font-medium text-white rounded-lg bg-primary hover:bg-secondary focus:ring-4 focus:ring-primary focus:outline-none">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-3.5 w-3.5 mr-2 -ml-1" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                    <path d="M8 9a3 3 0 100-6 3 3 0 000 6zM8 11a6 6 0 016 6H2a6 6 0 016-6zM16 7a1 1 0 10-2 0v1h-1a1 1 0 100 2h1v1a1 1 0 102 0v-1h1a1 1 0 100-2h-1V7z"/>
                                </svg>
                                Add new queue
                            </a>
                        </div>

                        @if ($queues->count())
                            <div class="relative overflow-x-auto px-4 pb-4">
                                <table class="w-full text-sm text-left text-gray-500">
                                    <thead class="text-sm text-gray-700 uppercase bg-gray-50">
                                        <tr>
                                            <th scope="col" class="px-6 py-3 font-bold">
                                                Label
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Name
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Status
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Departement
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Created at
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                Updated at
                                            </th>
                                            <th scope="col" class="px-6 py-3">
                                                
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($queues as $queue)
                                            <tr class="bg-white border-b">
                                                <td class="px-6 py-4 capitalize whitespace-nowrap">
                                                    {{ $queue->queue_number }}
                                                </td>
                                                <td class="px-6 py-4">
                                                    {{ $queue->subject }}
                                                </td>
                                                <td class="px-6 py-4">
                                                    @if ($queue->status->name == 'Pending')
                                                        <span class="px-3 inline-flex text-xs leading-5 font-semibold rounded-full bg-slate-100 text-slate-800">
                                                            {{ $queue->status->name }}
                                                        </span>
                                                    @elseif ($queue->status->name == 'On Progress')
                                                        <span class="px-3 inline-flex text-xs leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800">
                                                            {{ $queue->status->name }}
                                                        </span>
                                                    @else
                                                        <span class="px-3 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                                                            {{ $queue->status->name }}
                                                        </span>
                                                    @endif
                                                </td>
                                                <td class="px-6 py-4">
                                                    {{ $queue->departement->name }}
                                                </td>
                                                <td class="px-6 py-4">
                                                    {{ $queue->created_at->format('d-m-Y | H:i') }}
                                                </td>
                                                <td class="px-6 py-4">
                                                    {{ $queue->updated_at->format('d-m-Y | H:i') }}
                                                </td>
                                                <td class="px-6 py-2 text-end flex justify-end gap-2">
                                                    <a href="{{ route('queues.edit', $queue->id) }}" class="font-medium text-white px-4 py-2 rounded-lg bg-blue-500 hover:bg-blue-700 transition">Edit</a>
                                                    <form action="{{ route('queues.destroy', $queue->id) }}" method="post">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="font-medium text-white px-4 py-2 rounded-lg bg-red-500 hover:bg-red-700 transition">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        @else
                            <div class="px-4 pb-4">
                                <p class="text-red-500">Your queues list is empty</p>
                            </div>
                        @endif

                    </div>
                </div>
            </div>
        </div>
        <div class="grid grid-cols-2 gap-4 mb-4">
            <div class="p-2 border-2 border-dashed rounded-lg border-gray-300 h-48 md:h-72">
                <div class="bg-white w-full h-full flex justify-center items-center rounded-lg">
                
                </div>
            </div>
            <div class="p-2 border-2 border-dashed rounded-lg border-gray-300 h-48 md:h-72">
                <div class="bg-white w-full h-full flex justify-center items-center rounded-lg">
                
                </div>
            </div>
            <div class="p-2 border-2 border-dashed rounded-lg border-gray-300 h-48 md:h-72">
                <div class="bg-white w-full h-full flex justify-center items-center rounded-lg">
                
                </div>
            </div>
            <div class="p-2 border-2 border-dashed rounded-lg border-gray-300 h-48 md:h-72">
                <div class="bg-white w-full h-full flex justify-center items-center rounded-lg">
                
                </div>
            </div>
        </div>
        
    </main>
</x-app-layout>