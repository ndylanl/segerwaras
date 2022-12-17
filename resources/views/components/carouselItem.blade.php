<div class="hidden duration-700 ease-in-out" data-carousel-item>
    <div class="w-full md:h-full h-fit flex flex-col md:flex-row justify-between p-10">
        <div class="w-full relative">
            <h4 class="text-3xl font-bold mt-4">{{ $name }}</h4>
            <p class="mt-8 mb-7">{{ $desc }}</p>

            @if ($whot == 'dist')
                <a href="distributor/{{ $id }}" class="px-3 py-2 my-2 md:mt-8 text-sm font-medium text-center text-white bg-green-500 rounded-lg hover:bg-green-800 hover:text-white focus:ring-4 focus:outline-none focus:ring-green-300">Detail</a>
            @endif

        </div>
    </div>
</div>