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
                                                Processing time
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
                                                    <a class="text-blue-500 hover:underline" href="{{ route('departements.show', $queue->departement->id) }}">{{ $queue->departement->name }}</a>
                                                </td>
                                                <td class="px-6 py-4">
                                                    {{ $queue->created_at->format('d-m-Y | H:i') }}
                                                </td>
                                                <td class="px-6 py-4">
                                                    {{ $queue->updated_at->format('d-m-Y | H:i') }}
                                                </td>
                                                <td class="px-6 py-4">
                                                    {{-- waktu pekerjaan selesai dari created at sampai updated at --}}
                                                    @php
                                                        $time = $queue->updated_at->diffInSeconds($queue->created_at);
                                                        $hours = floor($time / 3600);
                                                        $minutes = floor(($time / 60) % 60);
                                                    @endphp

                                                    @if ($hours > 0)
                                                        <span class="px-3 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">
                                                            {{ $hours }} j {{ $minutes }} m
                                                        </span>
                                                    @else
                                                        <span class="px-3 inline-flex text-xs leading-5 font-semibold rounded-full bg-blue-100 text-blue-800">
                                                            {{ $minutes }} m
                                                        </span>
                                                    @endif
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