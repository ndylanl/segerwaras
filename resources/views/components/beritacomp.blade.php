<div class="max-w-sm bg-white border border-gray-200 shadow-md dark:bg-gray-800 dark:border-gray-700">
    <div class="p-5">
        <div class="flex">
            <img src="/img/calendarIcon.png" alt="">
            <p class="ml-2 mt-1 text-gray-600">{{ $date }}</p>
        </div>
        <div>
            <h5 class="mt-4 mb-12 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">{{ $title }}</h5>
        </div>
        <a href={{ $link }} class="px-3 py-2 my-2 text-sm font-medium text-center text-white bg-green-500 rounded-lg hover:bg-green-800 hover:text-white focus:ring-4 focus:outline-none focus:ring-green-300">
            Selengkapnya
        </a>
    </div>
</div>