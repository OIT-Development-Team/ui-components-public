<div>
    <div class="px-4 sm:px-6 lg:px-8">
        <div class="sm:flex sm:items-center">
            <div class="sm:flex-auto">
                <h1 class="text-base font-semibold text-gray-900">Users</h1>
                <p class="mt-2 text-sm text-gray-700">A list of all the users in your account including their name, title, email and role.</p>
            </div>
            <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
                <button class="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
                        type="button">Add user</button>
            </div>
        </div>
        <div class="mt-8 flow-root">
            <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                    <table class="min-w-full divide-y divide-gray-300">
                        <thead>
                            <tr>
                                <th class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-0"
                                    scope="col">
                                    <button class="group inline-flex"
                                            wire:click="setSortField('name')">
                                        Name
                                        <x-table-sort-indicator :active="'name' == $sortField"
                                                                :sortAsc="$sortAsc"
                                                                class="ml-1"></x-table-sort-indicator>
                                    </button>
                                </th>
                                <th class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900"
                                    scope="col">
                                    <button class="group inline-flex"
                                            wire:click="setSortField('email')">
                                        Email
                                        <x-table-sort-indicator :active="'email' == $sortField"
                                                                :sortAsc="$sortAsc"
                                                                class="ml-1"></x-table-sort-indicator>
                                    </button>
                                </th>

                                <th class="relative py-3.5 pl-3 pr-0"
                                    scope="col">
                                    <span class="sr-only">Edit</span>
                                </th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-gray-200 bg-white">
                            @foreach ($users as $user)
                                <tr>
                                    <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-0">{{ $user->name }}</td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500"> {{ $user->email }}</td>
                                    <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm sm:pr-0">
                                        <a class="text-indigo-600 hover:text-indigo-900"
                                           href="#">Edit<span class="sr-only">, Lindsay Walton</span></a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


</div>
