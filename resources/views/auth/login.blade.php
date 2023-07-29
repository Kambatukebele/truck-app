@extends('layouts.my-app-form')
@section('content')

<div class="w-full h-screen relative bg-gray-50">
    <div class="w-[300px] mx-auto absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 sm:w-[500px]">

        @if (session('status'))
        <div class="block hideIn3s text-center font-poppins bg-green-600 text-white mb-3 py-3">
            {{ session('status') }}
            {{-- Your profile has been created successfully --}}
        </div>
        @endif
        <form method="POST" action="{{ route('login') }}"
            class="bg-white rounded-lg w-[100%] mx-auto p-5 shadow-sm lg:p-10">
            @csrf
            {{-- Title --}}
            <h2 class="font-poppins font-extrabold text-black italic text-2xl">Truk App</h2>

            <div class="w-full">
                <h3 class="font-poppins font-extrabold text-xl mr-20 pt-2 my-2">Login into Your Account</h3>
                <p class="font-poppins text-sm font-normal text-gray-500 my-2">Not having an account yet?
                    <a href="{{ route('register') }}" class="text-blue-800"> Register here. </a>
                </p>
            </div>

            <div class="flex flex-col w-full mt-5">
                <div class="w-full my-2">
                    <label for="your-email" class="font-poppins text-sm font-semibold text-black">Your Email</label>
                    <input type="email" name="email" value="{{ old('email') }}" id="" placeholder="ex: name@company.com"
                        class="w-full rounded-lg bg-gray-50 border-gray-200">
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
                <div class="w-full my-2">
                    <label for="your-password" class="font-poppins text-sm font-semibold text-black">Your
                        Password</label>
                    <input type="password" name="password" value="{{ old('password') }}" id="" placeholder="ex:********"
                        class="w-full rounded-lg bg-gray-50 border-gray-200">
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
            </div>


            <button type="submit"
                class="w-full my-3 bg-blue-800 hover:bg-blue-950 text-white font-poppins rounded py-2 cursor-pointer text-base lg:w-[200px]">Create
                an
                Account
            </button>
        </form>
    </div>
</div>
@endsection








{{-- <x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
@csrf

<!-- Email Address -->
<div>
    <x-input-label for="email" :value="__('Email')" />
    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
        autofocus autocomplete="username" />
    <x-input-error :messages="$errors->get('email')" class="mt-2" />
</div>

<!-- Password -->
<div class="mt-4">
    <x-input-label for="password" :value="__('Password')" />

    <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
        autocomplete="current-password" />

    <x-input-error :messages="$errors->get('password')" class="mt-2" />
</div>

<!-- Remember Me -->
<div class="block mt-4">
    <label for="remember_me" class="inline-flex items-center">
        <input id="remember_me" type="checkbox"
            class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
    </label>
</div>

<div class="flex items-center justify-end mt-4">
    @if (Route::has('password.request'))
    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
        href="{{ route('password.request') }}">
        {{ __('Forgot your password?') }}
    </a>
    @endif

    <x-primary-button class="ml-3">
        {{ __('Log in') }}
    </x-primary-button>
</div>
</form>
</x-guest-layout> --}}