@extends('layouts.app')

@section('title', 'Owners')

@section('content')
<div class="bg-blue-100 py-4">
    <div class="container mx-auto px-4">
        <div class="bg-white shadow-md rounded px-8 py-6">
            <h1 class="text-2xl font-bold mb-6 text-blue-600">{{ __('Add Owner') }}</h1>
            <form action="{{ route('owners.store') }}" method="POST">
                @csrf
                <div class="mb-6">
                    <label class="block text-blue-600 font-bold mb-2" for="first_name">{{ __('First Name') }}</label>
                    <input class="appearance-none bg-blue-100 border-b border-blue-600 w-full py-2 px-3 text-blue-600 leading-tight focus:outline-none focus:shadow-outline @error('first_name') border-red-500 @enderror" id="first_name" type="text" name="first_name" value="{{ old('first_name') }}" required autofocus>
                    @error('first_name')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label class="block text-blue-600 font-bold mb-2" for="last_name">{{ __('Last Name') }}</label>
                    <input class="appearance-none bg-blue-100 border-b border-blue-600 w-full py-2 px-3 text-blue-600 leading-tight focus:outline-none focus:shadow-outline @error('last_name') border-red-500 @enderror" id="last_name" type="text" name="last_name" value="{{ old('last_name') }}" required>
                    @error('last_name')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label class="block text-blue-600 font-bold mb-2" for="address">{{ __('Address') }}</label>
                    <input class="appearance-none bg-blue-100 border-b border-blue-600 w-full py-2 px-3 text-blue-600 leading-tight focus:outline-none focus:shadow-outline @error('address') border-red-500 @enderror" id="address" type="text" name="address" value="{{ old('address') }}">
                    @error('address')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-6">
                    <label class="block text-blue-600 font-bold mb-2" for="phone">{{ __('Phone') }}</label>
                    <input class="appearance-none bg-blue-100 border-b border-blue-600 w-full py-2 px-3 text-blue-600 leading-tight focus:outline-none focus:shadow-outline @error('phone') border-red-500 @enderror" id="phone" type="tel" name="phone" value="{{ old('phone') }}">
                    @error('phone')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                </div>
                <div class="flex items-center justify-center">
                    <button class="bg-teal-400 hover:bg-teal-500 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                        {{ __('Add') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection
