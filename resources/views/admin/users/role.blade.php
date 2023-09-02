<x-app-layout title="Roles">
    <main class="p-4 lg:ml-64 h-auto pt-5">

        <div class="p-2 border-2 border-dashed rounded-lg border-gray-300 mb-4">
            <div class="bg-white w-full h-full flex flex-col rounded-lg p-4">
                <h3 class="text-lg font-semibold">Users</h3>
                <p class="text-gray-500 hidden lg:block">Now you're editing user with</p>
                
                
                <div class="relative overflow-x-auto mt-4">
                    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Username
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Name
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Email
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                    {{ $user->username }}
                                </th>
                                <td class="px-6 py-4">
                                    {{ $user->name }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $user->email }}
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
        <div class="p-2 border-2 border-dashed rounded-lg border-gray-300 mb-4">
            <div class="bg-white w-full h-full flex flex-col rounded-lg">
                <h3 class="px-4 pt-4 text-lg font-semibold">Roles</h3>
                <p class="px-4 pb-4 text-gray-500 hidden lg:block">Click the role below to revoke</p>
                
                @if ($user->roles)
                <div class="flex gap-2 px-4">
                    @foreach ($user->roles as $user_role)
                            <form action="{{ route('admin.users.roles.revoke', [$user->id, $user_role->id]) }}" method="post" class="flex gap-2 mb-4">
                                @csrf
                                @method('DELETE')
                                <x-secondary-button onclick="alert('are you sure?')" type="submit" class=" transition hover:bg-red-500 hover:text-white focus:border-red-500">{{ $user_role->name }}</x-secondary-button>
                            </form>
                    @endforeach
                </div>
                @endif
                
                <form action="{{ route('admin.users.roles', $user->id) }}" method="post" class="px-4 pb-4">
                    @csrf
                    <div class="grid gap-4">
                        <div class="w-full">
                            <x-input-label for="role" value="Roles" />
                            <select name="role" id="role" class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                                @foreach ($roles as $role)
                                    <option value="{{ $role->name }}">{{ $role->name }}</option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('role')" class="mt-2" />
                        </div>
                    </div>

                    <x-primary-button type="submit" class="mt-4 transition">Assign</x-primary-button>
                </form>
            </div>
        </div>
        {{-- <div class="p-2 border-2 border-dashed rounded-lg border-gray-300 mb-4">
            <div class="bg-white w-full h-full flex flex-col rounded-lg">
                <h3 class="px-4 pt-4 text-lg font-semibold">Permissions</h3>
                <p class="px-4 pb-4 text-gray-500 hidden lg:block">Click the permission below to revoke</p>
                
                @if ($user->permissions)
                <div class="flex gap-2 px-4">
                    @foreach ($user->permissions as $user_permission)
                            <form action="{{ route('admin.users.permissions.revoke', [$user->id, $user_permission->id]) }}" method="post" class="flex gap-2 mb-4">
                                @csrf
                                @method('DELETE')
                                <x-secondary-button onclick="alert('are you sure?')" type="submit" class="transition hover:bg-red-500 hover:text-white focus:border-red-500">{{ $user_permission->name }}</x-secondary-button>
                            </form>
                    @endforeach
                </div>
                @endif
                
                <form action="{{ route('admin.users.permissions', $user->id) }}" method="post" class="px-4 pb-4">
                    @csrf
                    <div class="grid gap-4">
                        <div class="w-full">
                            <x-input-label for="permission" value="Permission" />
                            <select name="permission" id="permission" class="w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                                @foreach ($permissions as $permission)
                                    <option value="{{ $permission->name }}">{{ $permission->name }}</option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('permission')" class="mt-2" />
                        </div>
                    </div>

                    <x-primary-button type="submit" class="mt-4 transition">Assign</x-primary-button>
                </form>
            </div>
        </div> --}}

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