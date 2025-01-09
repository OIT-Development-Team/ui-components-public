<div class="items-center lg:flex">
    <a class="block px-4 py-6 font-bold text-gray-800 hover:bg-crimson hover:text-white lg:font-normal lg:text-white lg:hover:bg-crimson-600"
       href="#">Link 1</a>

    <x-dropdown :alignment="'right'"
                :type="$mobile ? 'simple' : 'default'">
        <x-slot:trigger
                class="block w-full px-4 py-6 font-bold text-gray-800 hover:bg-crimson hover:text-white lg:w-auto lg:font-normal lg:text-white lg:hover:bg-crimson-600 lg:group-has-[:hover]:bg-crimson-600">
            <span class="flex items-center">
                Dropdown 1
                <svg class="ml-1 size-5"
                     fill="currentColor"
                     viewBox="0 0 20 20"
                     xmlns="http://www.w3.org/2000/svg">
                    <path clip-rule="evenodd"
                          d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z"
                          fill-rule="evenodd" />
                </svg>

            </span>
        </x-slot>

        <span class="ml-6 lg:ml-0">

            <a class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
               href="#">Item 1</a>
            <a class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
               href="#">Item 2</a>
            <a class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
               href="#">Item 3</a>
        </span>
    </x-dropdown>

    <a class="block px-4 py-6 font-bold text-gray-800 hover:bg-crimson hover:text-white lg:font-normal lg:text-white lg:hover:bg-crimson-600"
       href="#">Link 2</a>

    <x-dropdown :alignment="'right'"
                :type="$mobile ? 'simple' : 'default'">
        <x-slot:trigger
                class="block w-full px-4 py-6 font-bold text-gray-800 hover:bg-crimson hover:text-white lg:w-auto lg:font-normal lg:text-white lg:hover:bg-crimson-600 lg:group-has-[:hover]:bg-crimson-600">
            <span class="flex items-center">
                Dropdown 2
                <svg class="ml-1 size-5"
                     fill="currentColor"
                     viewBox="0 0 20 20"
                     xmlns="http://www.w3.org/2000/svg">
                    <path clip-rule="evenodd"
                          d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z"
                          fill-rule="evenodd" />
                </svg>

            </span>
        </x-slot>

        <span class="ml-6 lg:ml-0">

            <a class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
               href="#">Item 4</a>
            <a class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
               href="#">Item 5</a>
            <a class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
               href="#">Item 6</a>
        </span>
    </x-dropdown>

    <x-dropdown :alignment="'right'"
                :type="$mobile ? 'simple' : 'default'">
        <x-slot:trigger
                class="block w-full px-4 py-6 font-bold text-gray-800 hover:bg-crimson hover:text-white lg:w-auto lg:font-normal lg:text-white lg:hover:bg-crimson-600 lg:group-has-[:hover]:bg-crimson-600">
            <span class="flex items-center">
                <svg class="mr-2 size-5"
                     fill="currentColor"
                     viewBox="0 0 20 20"
                     xmlns="http://www.w3.org/2000/svg">
                    <path clip-rule="evenodd"
                          d="M18 10a8 8 0 1 1-16 0 8 8 0 0 1 16 0Zm-5.5-2.5a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0ZM10 12a5.99 5.99 0 0 0-4.793 2.39A6.483 6.483 0 0 0 10 16.5a6.483 6.483 0 0 0 4.793-2.11A5.99 5.99 0 0 0 10 12Z"
                          fill-rule="evenodd" />
                </svg>
                John Doe
                <svg class="ml-1 size-5"
                     fill="currentColor"
                     viewBox="0 0 20 20"
                     xmlns="http://www.w3.org/2000/svg">
                    <path clip-rule="evenodd"
                          d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z"
                          fill-rule="evenodd" />
                </svg>

            </span>
        </x-slot>

        <span class="ml-6 lg:ml-0">

            <a class="flex items-center px-4 py-2 text-sm text-gray-700 hover:bg-gray-100"
               href="#">
                <svg class="mr-2 size-4"
                     fill="currentColor"
                     viewBox="0 0 20 20"
                     xmlns="http://www.w3.org/2000/svg">
                    <path d="M17 2.75a.75.75 0 0 0-1.5 0v5.5a.75.75 0 0 0 1.5 0v-5.5ZM17 15.75a.75.75 0 0 0-1.5 0v1.5a.75.75 0 0 0 1.5 0v-1.5ZM3.75 15a.75.75 0 0 1 .75.75v1.5a.75.75 0 0 1-1.5 0v-1.5a.75.75 0 0 1 .75-.75ZM4.5 2.75a.75.75 0 0 0-1.5 0v5.5a.75.75 0 0 0 1.5 0v-5.5ZM10 11a.75.75 0 0 1 .75.75v5.5a.75.75 0 0 1-1.5 0v-5.5A.75.75 0 0 1 10 11ZM10.75 2.75a.75.75 0 0 0-1.5 0v1.5a.75.75 0 0 0 1.5 0v-1.5ZM10 6a2 2 0 1 0 0 4 2 2 0 0 0 0-4ZM3.75 10a2 2 0 1 0 0 4 2 2 0 0 0 0-4ZM16.25 10a2 2 0 1 0 0 4 2 2 0 0 0 0-4Z" />
                </svg>

                Settings
            </a>
            <hr class="my-2">
            <a class="flex items-center bg-red-50 px-4 py-2 text-sm text-red-800 hover:bg-red-100"
               href="#">
                <svg class="mr-2 size-4"
                     fill="currentColor"
                     viewBox="0 0 20 20"
                     xmlns="http://www.w3.org/2000/svg">
                    <path clip-rule="evenodd"
                          d="M10 18a8 8 0 1 0 0-16 8 8 0 0 0 0 16ZM6.75 9.25a.75.75 0 0 0 0 1.5h4.59l-2.1 1.95a.75.75 0 0 0 1.02 1.1l3.5-3.25a.75.75 0 0 0 0-1.1l-3.5-3.25a.75.75 0 1 0-1.02 1.1l2.1 1.95H6.75Z"
                          fill-rule="evenodd" />
                </svg>

                Logout</a>
        </span>
    </x-dropdown>

</div>
