<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
    <td class="p-4 w-32">
        <img src="/img/sgrwrsCap.png" alt="Apple Watch">
    </td>
    <td class="py-4 px-6 font-semibold text-gray-900 dark:text-white">
        {{ $name }}
    </td>
    <td class="py-4 px-6">
        <div class="grid grid-cols-3 w-fit">

            <button class="border-gray-500 border hover:ring-1 hover:ring-green-500 text-3xl" id="substract{{ $id }}">
                -
            </button>
            <input class="text-center" type="number" min="1" max="10" id="number{{ $id }}" value={{ $qty }} disabled>
            <button class="border-gray-500 border hover:ring-1 hover:ring-green-500 text-3xl" id="add{{ $id }}">
                 +
            </button>

        </div>
    </td>
    <td class="py-4 px-6 font-semibold text-gray-900 dark:text-white">
        {{ $price }}
    </td>
    <td class="py-4 px-6">
        <form action="{{ route("cartItem.destroy", ['cartItem'=>$id]) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="font-medium text-red-600 dark:text-red-500 hover:underline">Remove</button>
        </form>
    </td>
</tr>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        document.getElementById('add{{ $id }}').addEventListener('click', function() {
            document.getElementById('number{{ $id }}').value++;
        });
        document.getElementById('substract{{ $id }}').addEventListener('click', function() {
            if(document.getElementById('number{{ $id }}').value != 0){
                document.getElementById('number{{ $id }}').value--;
            }
        });
    });
</script>