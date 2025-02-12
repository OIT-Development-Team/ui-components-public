<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1"
          name="viewport">
    <title>{{ $title }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        html {
            height: 100vh;
            padding: 0;
            margin: 0;
        }

        [x-cloak] {
            display: none;
        }
    </style>
    <link href="https://assetfiles.ua.edu/brand/favicons/favicon.ico"
          rel="icon"
          sizes="32x32">
    <link href="https://assetfiles.ua.edu/brand/favicons/icon.svg"
          rel="icon"
          type="image/svg+xml">
    <link href="https://assetfiles.ua.edu/brand/favicons/apple-touch-icon.png"
          rel="apple-touch-icon">
    <link href="https://assetfiles.ua.edu/brand/favicons/manifest.webmanifest"
          rel="manifest">
    @livewireStyles
</head>

<body class="flex min-h-screen flex-col">

    <!-- Main Navigation -->
    <nav x-data="{
        mobileNavOpen: false,
        toggleMobileNav() {
            this.mobileNavOpen = !this.mobileNavOpen;
        }
    }"
         x-on:keydown.escape="mobileNavOpen = false">
        <div class="bg-crimson">
            <div class="container mx-auto flex items-center justify-between">
                <a class="px-2 py-6 hover:bg-crimson-600"
                   href="#">
                    <img alt="The University of Alabama Logo - Click to return to the homepage"
                         class="my-0.5 h-4"
                         src="/img/nameplate.png">
                </a>

                <!-- Mobile Nav Trigger Button -->
                <button class="px-4 py-6 lg:hidden"
                        x-on:click="toggleMobileNav()">
                    <svg class="size-6 text-white"
                         fill="none"
                         stroke="currentColor"
                         viewBox="0 0 24 24"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M4 6h16M4 12h16m-7 6h7"
                              stroke-linecap="round"
                              stroke-linejoin="round"
                              stroke-width="2" />
                    </svg>
                </button>

                <!-- Desktop Nav -->
                <div class="hidden lg:block">
                    <x-nav-links />
                </div>
            </div>
        </div>

        <div class="border-b border-gray-200 bg-white py-4">
            <div class="container mx-auto">
                <h1 class="px-4 text-2xl font-bold">{{ $appName }}</h1>
            </div>

        </div>

        <!-- Mobile Nav -->
        <div class="absolute right-0 top-0 h-screen w-3/4 max-w-96 border-l border-gray-200 bg-white shadow-lg"
             x-cloak
             x-on:click.away="toggleMobileNav()"
             x-show="mobileNavOpen">

            <div class="flex flex-row-reverse px-4 py-6">
                <button x-on:click="toggleMobileNav()">Close</button>
            </div>
            <x-nav-links :mobile="true" />
        </div>
    </nav>


    <!-- Main Content -->
    <div class="container mx-auto flex-1 px-2 py-8">
        <div class="row">
            <div class="col-md-12">
                <div class="content">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="container mx-auto border-t border-gray-100">
        <div class="flex items-center justify-center py-4">
            <p class="text-center text-sm text-gray-500">The University of </p>
            <svg class="size-4 text-crimson"
                 preserveAspectRatio="none"
                 version="1.0"
                 viewBox="0 0 1653.000000 1651.000000"
                 width="36px"
                 xmlns="http://www.w3.org/2000/svg">
                <g class="fill-current"
                   fill="#990000"
                   stroke="none"
                   transform="translate(0.000000,1651.000000) scale(0.100000,-0.100000)">
                    <path d="M5 8255 c0 -4543 1 -6403 2 -4133 2 2269 2 5986 0 8260 -1 2273 -2 416 -2 -4127z"></path>
                    <path d="M13150 14253 c-697 -528 -1059 -745 -1410 -846 -464 -134 -1485 -166 -2133 -67 -672 103 -1080 337 -1194 684 -23 70 -26 99 -27 209 l-1 129 -40 -6 c-78 -12 -177 -70 -251 -148 -179 -188 -249 -478 -189 -774 116 -566 551 -878 1385 -993 210 -29 468 -49 855 -66 526 -23 827 -44 842 -58 3 -3 -53 -79 -124 -169 -979 -1234 -2018 -2744 -2861 -4159 -128 -216 -151 -248 -176 -253 -46 -10 -191 -7 -248 5 -172 36 -320 171 -402 368 -80 189 -99 496 -40 645 6 16 4 17 -17 11 -41 -12 -176 -82 -236 -122 -75 -49 -203 -171 -264 -251 -91 -120 -179 -321 -214 -486 -35 -173 -29 -386 17 -576 106 -434 400 -732 783 -792 41 -6 75 -15 75 -19 0 -4 -15 -34 -34 -66 -18 -32 -144 -261 -279 -509 -341 -626 -488 -876 -707 -1204 -752 -1125 -1539 -1590 -2458 -1454 -310 46 -515 144 -736 354 -363 344 -580 804 -563 1190 7 151 23 207 108 376 71 140 71 142 67 207 -4 72 -24 104 -82 134 -52 27 -151 14 -242 -32 -134 -67 -351 -299 -467 -500 -208 -359 -263 -840 -148 -1287 41 -158 72 -242 151 -403 277 -570 786 -990 1406 -1160 266 -73 334 -80 769 -80 352 1 404 3 530 23 615 97 1172 375 1750 876 151 131 463 448 616 626 557 648 1064 1444 1636 2568 96 188 178 342 181 342 4 1 484 76 1067 168 900 142 1060 165 1063 152 1 -8 -27 -395 -63 -860 -82 -1046 -89 -1179 -81 -1510 9 -423 47 -735 126 -1045 49 -193 95 -319 174 -480 77 -154 140 -252 233 -360 215 -248 482 -395 833 -457 125 -22 468 -16 624 10 509 87 1006 300 1293 554 257 227 418 497 468 786 35 197 7 307 -76 304 -18 0 -120 -44 -238 -101 -316 -153 -581 -244 -851 -293 -153 -27 -409 -29 -525 -4 -289 63 -475 233 -534 487 -77 328 -97 1415 -41 2194 24 328 91 939 105 953 2 2 73 20 157 39 119 27 184 35 293 40 128 5 145 3 199 -17 74 -28 138 -86 171 -155 27 -55 54 -179 55 -252 0 -24 4 -43 8 -43 26 0 209 137 299 223 230 222 296 357 334 682 15 131 6 327 -20 430 -73 285 -258 454 -589 538 -77 19 -113 22 -312 22 -174 0 -247 -5 -323 -19 -54 -10 -101 -16 -103 -13 -3 2 0 24 5 48 6 24 62 278 125 564 297 1347 522 2187 800 2994 216 625 489 1256 743 1721 44 80 79 146 79 146 -1 1 -197 95 -436 209 -239 114 -446 213 -460 220 -24 12 -35 5 -230 -142z m-1201 -2744 c-198 -663 -376 -1353 -704 -2723 -80 -335 -148 -612 -151 -615 -5 -6 -1595 -202 -1605 -198 -3 1 60 112 141 247 81 135 220 376 310 535 399 713 492 875 630 1105 355 593 680 1045 1075 1496 135 154 365 397 371 391 2 -2 -28 -109 -67 -238z"></path>
                    <path d="M14681 2789 c-214 -41 -296 -313 -143 -472 51 -53 105 -79 178 -85 80 -6 148 17 209 70 63 55 87 107 93 196 4 66 2 78 -27 137 -59 118 -180 179 -310 154z m144 -78 c169 -77 175 -309 11 -393 -117 -60 -270 9 -306 138 -48 171 134 329 295 255z"></path>
                    <path d="M14627 2673 c-4 -3 -7 -78 -7 -165 l0 -158 35 0 35 0 0 65 c0 57 2 65 19 65 14 0 27 -18 47 -65 28 -63 29 -65 66 -65 l38 0 -32 65 -32 65 27 28 c56 58 36 140 -40 161 -42 12 -146 15 -156 4z m161 -87 c5 -26 -24 -46 -65 -46 -31 0 -33 2 -33 36 l0 35 47 -3 c38 -2 49 -7 51 -22z"></path>
                </g>
            </svg>
            <p class="text-center text-sm text-gray-500">labama {{ date('Y') }}</p>
        </div>
    </footer>
    @livewireScripts
</body>

</html>
