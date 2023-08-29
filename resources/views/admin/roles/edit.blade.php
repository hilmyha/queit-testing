<x-app-layout title="Roles">
    <main class="p-4 lg:ml-64 h-auto pt-5">

        <div class="p-2 border-2 border-dashed rounded-lg border-gray-300 mb-4">
            <div class="bg-white w-full h-full flex flex-col rounded-lg">
                <form action="{{ route('admin.roles.update', $role->id) }}" method="post" class="p-4">
                    @csrf
                    @method('PUT')
                    <div class="grid gap-4">
                        <div class="w-full">
                            <x-input-label for="name" value="Role Name" />
                            <x-text-input id="name" name="name" type="text" value="{{ old('name', $role->name) }}" placeholder="Role name" />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>
                    </div>

                    <x-primary-button type="submit" class="mt-4 transition">Update</x-primary-button>
                </form>
            </div>
        </div>
        <div class="p-2 border-2 border-dashed rounded-lg border-gray-300 mb-4">
            <div class="bg-white w-full h-full flex flex-col rounded-lg">
                <h3 class="px-4 pt-4 text-lg font-semibold">Role Permissions</h3>
                <p class="px-4 pb-4 text-gray-500 hidden lg:block">Click the permission below to revoke</p>
                
                @if ($role->permissions)
                <div class="flex gap-2 px-4">
                    @foreach ($role->permissions as $role_permission)
                            <form action="{{ route('admin.roles.permissions.revoke', [$role->id, $role_permission->id]) }}" method="post" class="flex gap-2 mb-4">
                                @csrf
                                @method('DELETE')
                                <x-secondary-button onclick="alert('are you sure?')" type="submit" class="transition hover:bg-red-500 hover:text-white focus:border-red-500">{{ $role_permission->name }}</x-secondary-button>
                            </form>
                    @endforeach
                </div>
                @endif
                
                <form action="{{ route('admin.roles.permissions', $role->id) }}" method="post" class="px-4 pb-4">
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