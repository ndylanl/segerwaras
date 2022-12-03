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
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <title>@yield('title')</title>

</head>
<body class="bg-white text-black scroll-smooth">
    
    {{-- navigation here --}}

    <div class="navbar bg-white text-black" id="1">
        <div class="navbar-start">
          <div class="dropdown bg-white">
            <label tabindex="0" class="btn btn-ghost lg:hidden">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /></svg>
            </label>
            <ul tabindex="0" class="menu menu-compact dropdown-content mt-3 p-2 shadow bg-white rounded-box w-52">
              <li><a>Blog</a></li>
              <li><a>Products</a></li>
              <li><a>Locations</a></li>
            </ul>
          </div>
          <a class="btn btn-ghost normal-case text-xl">Seger Waras</a>
        </div>
        <div class="navbar-center hidden lg:flex">
          <ul class="menu menu-horizontal p-0">
            <li tabindex="0">
            <li><a>Home</a></li>
            <li><a>Blog</a></li>
            <li><a>Products</a></li>
            <li><a>Locations</a></li>
          </ul>
        </div>
        <div class="navbar-end">
          <a class="btn btn-success btn-outline">Login</a>
        </div>
      </div>






    @yield('content')





    {{-- footer here --}}

    <footer class="footer p-10 bg-white text-black">
        <div>
          <span class="uppercase font-bold">Services</span> 
          <a class="link link-hover">Branding</a>
          <a class="link link-hover">Design</a>
          <a class="link link-hover">Marketing</a>
          <a class="link link-hover">Advertisement</a>
        </div> 
        <div>
          <span class="uppercase font-bold">Company</span> 
          <a class="link link-hover">About us</a>
          <a class="link link-hover">Contact</a>
          <a class="link link-hover">Jobs</a>
          <a class="link link-hover">Press kit</a>
        </div> 
        <div>
          <span class="uppercase font-bold">Legal</span> 
          <a class="link link-hover">Terms of use</a>
          <a class="link link-hover">Privacy policy</a>
          <a class="link link-hover">Cookie policy</a>
        </div>
      </footer>

</body>
</html>