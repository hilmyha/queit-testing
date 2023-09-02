<x-app-layout title="departements">
    <main class="p-4 lg:ml-64 h-auto pt-5">

        <div class="p-2 border-2 border-dashed rounded-lg border-gray-300 mb-4">
            <div class="bg-white w-full h-full flex flex-col rounded-lg">
                <form action="{{ route('departements.store') }}" method="post" class="p-4">
                    @csrf
                    <div class="grid gap-4">
                        <div class="w-full">
                            <x-input-label for="name" value="Departement Name" />
                            <x-text-input id="name" name="name" type="text" value="{{ old('name') }}" placeholder="departement name" />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>
                        <div class="w-full">
                            <x-input-label for="description" value="Description" />
                            <x-text-input id="description" name="description" type="text" value="{{ old('descrption') }}" placeholder="description" />
                            <x-input-error :messages="$errors->get('description')" class="mt-2" />
                        </div>
                        {{-- status checkbox without blade component --}}
                        <div class="w-full">
                            <label class="relative inline-flex items-center mb-4 cursor-pointer">
                                <input type="checkbox" name="status" class="sr-only peer">
                                <div class="w-11 h-6 bg-gray-200 rounded-full peer peer-focus:ring-4 peer-focus:ring-blue-300 dark:peer-focus:ring-blue-800 dark:bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-blue-600"></div>
                                <span class="ml-3 text-sm font-medium text-gray-900 dark:text-gray-300">Toggle me</span>
                            </label>
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