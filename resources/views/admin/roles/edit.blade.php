<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12" style="width: 90% !important;margin: 0 auto">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="flex justify-end p-2">
                    <a href="{{ route('admin.roles.index') }}"
                       class="px-4 py-2 bg-green-700 hover:bg-green-500 rounded-md">role index</a>
                </div>
                <div style="width: 90% !important;margin: 0 auto">
                    <form action="{{ route('admin.roles.update',$role) }}" method="POST" align="center">
                        @method('PUT')
                        @csrf

                        <div class="relative z-0 w-full mb-6 group">
                            <input type="text" name="name" id=""
                                   class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                                   placeholder=" "
                                   required
                                   value="{{ $role->name }}"
                            />
                            <label for="floating_password"
                                   class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">name</label>
                        </div>


                        <button type="submit"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            Submit
                        </button>
                    </form>
                </div>
                <div class="mt-10 p-2">
                    @if($role->permissions)
                        @foreach($role->permissions as $role_permission)
                            <span>{{ $role_permission->name }}</span>
                        @endforeach
                    @endif
                </div>
                <div style="width: 90% !important;margin: 0 auto">
                    <form action="{{ route('admin.roles.permissions',$role->id) }}" method="POST" align="center">

                        @csrf

                        <div class="relative z-0 w-full mb-6 group">
                            <select type="text" name="permission" id=""
                                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                                @foreach($permissions as $permission)
                                    <option value="{{ $permission->name }}">{{ $permission->name }}</option>
                                @endforeach

                            </select>
                            <label for="floating_password"
                                   class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">permission</label>
                        </div>


                        <button type="submit"
                                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            assign
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
