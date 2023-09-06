<x-app-layout title="Reviews">
    <main class="p-4 lg:ml-64 h-auto pt-5">

        <div class="p-2 border-2 border-dashed rounded-lg border-gray-300 mb-4">
            <div class="bg-white w-full h-full flex flex-col rounded-lg">
                <div class="p-4">
                    <h5 class="mr-3 font-semibold text-xl">Reviewing queue</h5>
                    <p class="text-gray-500 mb-4">Reviewing queue</p>

                    <p class="mb-1 font-medium text-sm text-gray-700">Queue no</p>
                    <p class="text-gray-500 p-2 w-full border rounded-md mb-2">{{ $queue->queue_number }}</p>
                    <p class="mb-1 font-medium text-sm text-gray-700">Subject</p>
                    <p class="text-gray-500 p-2 w-full border rounded-md mb-2">{{ $queue->subject }}</p>
                    <p class="mb-1 font-medium text-sm text-gray-700">Departement assign</p>
                    <p class="text-gray-500 p-2 w-full border rounded-md mb-2">{{ $queue->departement->name }}</p>
                    <p class="mb-1 font-medium text-sm text-gray-700">Body</p>
                    <div class="text-gray-500 p-2 w-full border rounded-md mb-2">
                        <p>{!! $queue->body !!}</p>
                    </div>
                    <form action="{{ route('queues.updateStatus', $queue) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="grid gap-4">
                            <div class="w-full">
                                <x-input-label for="status" value="Status" />
                                <select name="status_id" id="status" class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                                    @foreach ($statuses as $status)
                                        @if (old('status_id', $queue->status_id) == $status->id)
                                            <option value="{{ $status->id }}" selected>{{ $status->name }}</option>
                                        @else
                                            <option value="{{ $status->id }}">{{ $status->name }}</option>
                                        @endif
                                    @endforeach
                                </select>
                                <x-input-error :messages="$errors->get('status')" class="mt-2" />
                            </div>
                            <div class="w-full">
                                <x-input-label for="body" value="Queue body" />
                                <input id="body" type="hidden" name="body" value="{{ old('body', $queue->body) }}">
                                <trix-editor input="body"></trix-editor>
                                <x-input-error :messages="$errors->get('body')" class="mt-2" />
                            </div>
                            
                        </div>
    
                        <x-primary-button type="submit" class="mt-4 transition">Submit</x-primary-button>
                    </form>
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