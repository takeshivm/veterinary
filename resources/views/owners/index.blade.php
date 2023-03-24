<x-app-layout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <form method="" action="">
            @csrf
            <div class="grid grid-cols-2 gap-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700">{{ __('First Name') }}</label>
                    <input type="text" name="first_name" value="{{ old('first_name') }}" class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                    <x-input-error :messages="$errors->get('first_name')" class="mt-2" />
                </div>
                <div>
                    <label class="block text-sm font-medium text-gray-700">{{ __('Last Name') }}</label>
                    <input type="text" name="last_name" value="{{ old('last_name') }}" class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                    <x-input-error :messages="$errors->get('last_name')" class="mt-2" />
                </div>
            </div>
            <div class="mt-4">
                <label class="block text-sm font-medium text-gray-700">{{ __('Address') }}</label>
                <textarea name="address" class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">{{ old('address') }}</textarea>
                <x-input-error :messages="$errors->get('address')" class="mt-2" />
            </div>
            <div class="mt-4">
                <label class="block text-sm font-medium text-gray-700">{{ __('Phone') }}</label>
                <input type="text" name="phone" value="{{ old('phone') }}" class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">
                <x-input-error :messages="$errors->get('phone')" class="mt-2" />
            </div>
            <x-primary-button class="mt-4">{{ __('Register Owner') }}</x-primary-button>
        </form>
    </div>
</x-app-layout>
