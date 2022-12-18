<!DOCTYPE html>
<html lang="en" data-theme="corporate">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link href='https://fonts.googleapis.com/css?family=Nunito' rel='stylesheet'>
    <title>@yield('title')</title>
    <style>
      .garamond{
        font-family: 'EB Garamond';
      }
      .nunito{
        font-family: 'Nunito';
      }
      .rate {
        float: left;
        height: 26px;
        padding: 0 10px;
        }
        .rate:not(:checked) > input {
            position:absolute;
            left:-9999px;
            top: auto;
            width: 1px;
            height: 1px;
            overflow: hidden;
        }
        .rate:not(:checked) > label {
            float:right;
            width:1em;
            overflow:hidden;
            white-space:nowrap;
            cursor:pointer;
            font-size:30px;
            color:#ccc;
        }
        .rate:not(:checked) > label:before {
            content: '★ ';
        }
        .rate > input:checked ~ label {
            color: #ffc700;    
        }
        .rate:not(:checked) > label:hover,
        .rate:not(:checked) > label:hover ~ label {
            color: #deb217;  
        }
        .rate > input:checked + label:hover,
        .rate > input:checked + label:hover ~ label,
        .rate > input:checked ~ label:hover,
        .rate > input:checked ~ label:hover ~ label,
        .rate > label:hover ~ input:checked ~ label {
            color: #c59b08;
        }
    </style>

</head>
<body class="bg-white text-black scroll-smooth nunito">
    
    {{-- navigation here --}}
    
   <nav class="bg-white px-2 sm:px-4 py-2.5 dark:bg-gray-900 fixed w-full top-0 left-0 border-b border-gray-200 dark:border-gray-600 z-50">
      <div class="container flex flex-wrap items-center justify-between mx-auto">
        <a href="/" class="flex items-center">
            <img src="/img/sgrwrsCap.png" class="h-6 mr-3 sm:h-9">
            <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">SegerWaras</span>
        </a>
        <div class="flex md:order-2">
            @auth
            <a href="/cart" class="hidden lg:flex flex-row text-white bg-green-400 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 md:mr-0 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                Cart
                <img src="/img/cartIcon.png" alt="" class="mx-2">
            </a>

            <a href="/profile" class="hidden lg:block text-white mx-3 bg-green-400 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 md:mr-0 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                Profile
            </a>

            <a href="/logout" class="hidden lg:block text-white mx-3 bg-green-400 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 md:mr-0 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                Logout
            </a>
            @if (Auth:: user() != NULL)
            @if (Auth:: user()->role == 'admin')
            <a href="/adminp" class="hidden lg:block text-white mx-3 bg-green-400 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 md:mr-0 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                AdminPanel
            </a>
            @endif
            @endif
            @endauth

            @guest
            <a href="/login" class="hidden lg:block text-white mx-3 bg-green-400 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 md:mr-0 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">
                Login
            </a>
            @endguest
            
            <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
            </button>
        </div>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
            <ul class="flex flex-col p-4 mt-4 border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                <li>
                    <a href="/" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-green-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">
                        BERANDA
                    </a>
                </li>
                <li>
                    <a href="/aboutus" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-green-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">
                        ABOUT US
                    </a>
                </li>
                <li>
                    <a href="/products" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-green-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">
                        PRODUK
                    </a>
                </li>
                <li>
                    <a href="/berita" class="block py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-green-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">
                        BERITA
                    </a>
                </li>
                @guest
                    <li>
                        <a href="/login" class="block md:hidden py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-green-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">
                            LOGIN
                        </a>
                    </li>
                @endguest
                @auth
                    <li>
                        <a href="/logout" class="block md:hidden py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-green-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">
                            LOGOUT
                        </a>
                    </li>
                @endauth
                
                <li>
                    <a href="/cart" class="block md:hidden py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-green-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">
                        CART
                    </a>
                </li>
                <li>
                    <a href="/profile" class="block md:hidden py-2 pl-3 pr-4 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-green-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">
                        PROFILE
                    </a>
                </li>
                @if (Auth:: user() != NULL)

                @if (Auth:: user()->role == 'admin')
                <li>
                    <a href="/adminp" class="block md:hidden py-2 pl-3 pr-4 text-gray-100 rounded bg-red-600 hover:bg-red-700 md:hover:bg-transparent md:hover:text-green-700 md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">
                        ADMIN PANEL
                    </a>
                </li>
                @endif
                @endif
            </ul>
        </div>
      </div>
   </nav>







    @yield('content')





    {{-- footer here --}}

    
    <footer class="p-4 bg-neutral-200 sm:p-6 dark:bg-gray-900 border-2 border-spacing-20 border-t-green-700">
        <div class="md:flex md:justify-between w-full">
            <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3 px-4 lg:pl-8 w-full">
                <div class="col-span-2 sm:col-span-1 hidden sm:block ml-6 mt-6">
                    <h2 class="mb-6 text-2xl font-semibold text-gray-900 uppercase dark:text-white">Seger Waras</h2>
                </div>
                <div>
                    <h2 class="mb-6 text-md font-semibold text-gray-900 uppercase dark:text-white mt-6 w-full border-b-2 border-b-green-800">Directory</h2>
                    <ul class="text-gray-600 dark:text-gray-400">
                        <li class="mb-4">
                            <a href="/" class="hover:underline">Beranda</a>
                        </li>
                        <li class="mb-4">
                            <a href="/aboutus" class="hover:underline">About Us</a>
                        </li>
                        <li class="mb-4">
                            <a href="/products" class="hover:underline">Produk</a>
                        </li>
                        <li>
                            <a href="/berita" class="hover:underline">Berita</a>
                        </li>
                    </ul>
                </div>
                <div>
                    <h2 class="mb-6 text-md font-semibold text-gray-900 uppercase dark:text-white mt-6 w-full border-b-2 border-b-green-800">CONTACT</h2>
                    <ul class="text-gray-600 dark:text-gray-400">
                        <li class="mb-4">
                            <a href="#" class="hover:underline hover:text-black text-sm">+62 827-482-889</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline hover:text-black text-sm">+62 347-194-743</a>
                        </li>
                        <li class="mb-4">
                            <a href="#" class="hover:underline hover:text-black text-sm">segerwaras@gmail.com</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
    </footer>

    <script src="https://unpkg.com/flowbite@1.5.4/dist/flowbite.js"></script>

</body>
</html>