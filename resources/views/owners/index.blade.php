<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Owners') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <table class="table-auto w-full">
                        <thead>
                            <tr>
                                <th class="px-4 py-2">{{ __('First Name') }}</th>
                                <th class="px-4 py-2">{{ __('Last Name') }}</th>
                                <th class="px-4 py-2">{{ __('Address') }}</th>
                                <th class="px-4 py-2">{{ __('Phone') }}</th>
                                <th class="px-4 py-2">{{ __('Actions') }}</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($owners as $owner)
                            <tr>
                                <td class="border px-4 py-2">{{ $owner->first_name }}</td>
                                <td class="border px-4 py-2">{{ $owner->last_name }}</td>
                                <td class="border px-4 py-2">{{ $owner->address }}</td>
                                <td class="border px-4 py-2">{{ $owner->phone }}</td>
                                <td class="border px-4 py-2">
                                    <a href="{{ route('owners.show', $owner->id) }}" class="text-blue-600 hover:text-blue-800">{{ __('View') }}</a>
                                    <a href="{{ route('owners.edit', $owner->id) }}" class="text-green-600 hover:text-green-800">{{ __('Edit') }}</a>
                                    <form action="{{ route('owners.destroy', $owner->id) }}" method="POST" class="inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:text-red-800">{{ __('Delete') }}</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
