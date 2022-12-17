<tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
    <td class="py-4 px-6 font-semibold text-gray-900 dark:text-white">
        {{ $name }}
    </td>
    <td class="py-4 px-6">
        <p class="font-semibold text-gray-900">{{ $qty }}</p>
    </td>
    <td class="py-4 px-6 font-semibold text-gray-900 dark:text-white">
        Rp.{{ $price }}
    </td>
    <td class="py-4 px-6">
        <form action="{{ route("cartItem.destroy", ['cartItem'=>$id]) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" class="font-medium text-red-600 dark:text-red-500 hover:underline">Remove</button>
        </form>
    </td>
</tr>

