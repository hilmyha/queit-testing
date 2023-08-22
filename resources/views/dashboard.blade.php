<x-app-layout title="Dashboard">
    <main class="p-4 lg:ml-64 h-auto pt-5">

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 xl:grid-cols-4 gap-4 mb-4">
            <div
            class="p-2 border-2 border-dashed rounded-lg border-gray-300 h-32 md:h-52">
                <div class="bg-white w-full h-full flex justify-center items-center rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-9 h-9 text-orange-500">
                    <path fill-rule="evenodd" d="M8.25 6.75a3.75 3.75 0 117.5 0 3.75 3.75 0 01-7.5 0zM15.75 9.75a3 3 0 116 0 3 3 0 01-6 0zM2.25 9.75a3 3 0 116 0 3 3 0 01-6 0zM6.31 15.117A6.745 6.745 0 0112 12a6.745 6.745 0 016.709 7.498.75.75 0 01-.372.568A12.696 12.696 0 0112 21.75c-2.305 0-4.47-.612-6.337-1.684a.75.75 0 01-.372-.568 6.787 6.787 0 011.019-4.38z" clip-rule="evenodd" />
                    <path d="M5.082 14.254a8.287 8.287 0 00-1.308 5.135 9.687 9.687 0 01-1.764-.44l-.115-.04a.563.563 0 01-.373-.487l-.01-.121a3.75 3.75 0 013.57-4.047zM20.226 19.389a8.287 8.287 0 00-1.308-5.135 3.75 3.75 0 013.57 4.047l-.01.121a.563.563 0 01-.373.486l-.115.04c-.567.2-1.156.349-1.764.441z" />
                    </svg>

                    <div class="ml-4">
                        <p class="text-gray-500 font-semibold text-lg">Queue</p>
                        <p class="text-gray-500 font-bold text-xl">10</p>
                    </div>

                </div>
            </div>
            <div
            class="p-2 border-2 border-dashed rounded-lg border-gray-300 h-32 md:h-52">
                <div class="bg-white w-full h-full flex justify-center items-center rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-9 h-9 text-purple-500">
                    <path d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-8.4 8.4a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32l8.4-8.4z" />
                    <path d="M5.25 5.25a3 3 0 00-3 3v10.5a3 3 0 003 3h10.5a3 3 0 003-3V13.5a.75.75 0 00-1.5 0v5.25a1.5 1.5 0 01-1.5 1.5H5.25a1.5 1.5 0 01-1.5-1.5V8.25a1.5 1.5 0 011.5-1.5h5.25a.75.75 0 000-1.5H5.25z" />
                    </svg>

                    <div class="ml-4">
                        <p class="text-gray-500 font-semibold text-lg">Complete today</p>
                        <p class="text-gray-500 font-bold text-xl">10</p>
                    </div>
                    
                </div>
            </div>
            <div
            class="p-2 border-2 border-dashed rounded-lg border-gray-300 h-32 md:h-52">
                <div class="bg-white w-full h-full flex justify-center items-center rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-10 h-10 text-green-500">
                    <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd" />
                    </svg>

                    <div class="ml-4">
                        <p class="text-gray-500 font-semibold text-lg">Total task complete</p>
                        <p class="text-gray-500 font-bold text-xl">10</p>
                    </div>

                </div>
            </div>
            <div
            class="p-2 border-2 border-dashed rounded-lg border-gray-300 h-32 md:h-52">
                <div class="bg-white w-full h-full flex justify-center items-center rounded-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-9 h-9 text-blue-500">
                    <path fill-rule="evenodd" d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm8.25 5.25a.75.75 0 01.75-.75h8.25a.75.75 0 010 1.5H12a.75.75 0 01-.75-.75z" clip-rule="evenodd" />
                    </svg>

                    <div class="ml-4">
                        <p class="text-gray-500 font-semibold text-lg">Reviewing</p>
                        <p class="text-gray-500 font-bold text-xl">10</p>
                    </div>

                </div>
            </div>
        </div>
        <div class="p-2 border-2 border-dashed rounded-lg border-gray-300 h-96 mb-4">
            <div class="bg-white w-full h-full flex justify-center items-center rounded-lg">
                
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