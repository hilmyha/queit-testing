<x-app-layout title="Queues">
    <main class="p-4 lg:ml-64 h-auto pt-5">

        <div class="p-2 border-2 border-dashed rounded-lg border-gray-300 mb-4">
            <div class="bg-white w-full h-full flex flex-col rounded-lg">
                <form action="{{ route('queues.store') }}" method="post" class="p-4">
                    @csrf
                    <div class="grid gap-4">
                        <div class="w-full">
                            <x-input-label for="subject" value="Subject" />
                            <x-text-input id="subject" name="subject" type="text" value="{{ old('subject') }}" placeholder="subject" />
                            <x-input-error :messages="$errors->get('subject')" class="mt-2" />
                        </div>
                        <div class="w-full">
                            <x-input-label for="departement" value="Departement" />
                            <select name="departement_id" id="departement" class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                                {{-- active departement --}}

                                @foreach ($departements as $departement)
                                    @if ($departement->status == 1)
                                        @if (old('departement_id') == $departement->id)
                                            <option value="{{ $departement->id }}" selected>{{ $departement->name }}</option>
                                        @else
                                            <option value="{{ $departement->id }}">{{ $departement->name }}</option>
                                        @endif
                                    @endif
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('departement')" class="mt-2" />
                        </div>
                        {{-- <div class="w-full">
                            <x-input-label for="status" value="Status" />
                            <select name="status_id" id="status" class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                                @foreach ($statuses as $status)
                                    @if (old('status_id') == $status->id)
                                        <option value="{{ $status->id }}" selected>{{ $status->name }}</option>
                                    @else
                                        <option value="{{ $status->id }}">{{ $status->name }}</option>
                                    @endif
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('status')" class="mt-2" />
                        </div> --}}
                        <div class="w-full">
                            <x-input-label for="body" value="Queue body" />
                            <input id="body" type="hidden" name="body" value="{{ old('body') }}">
                            <trix-editor input="body"></trix-editor>
                            <x-input-error :messages="$errors->get('body')" class="mt-2" />
                        </div>
                        
                    </div>

                    <x-primary-button type="submit" class="mt-4 transition">Submit</x-primary-button>
                </form>
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