@extends('layouts.my-app-form')
@section('content')
<div class="w-full h-screen relative bg-gray-50">
    <div
        class="w-[300px] mx-auto absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 sm:w-[500px] lg:w-[700px]">
        <form method="POST" action="{{ route('register') }}"
            class="bg-white rounded-lg w-[100%] mx-auto p-5 shadow-sm lg:h-[100%] lg:p-10 lg:shadow-lg ">
            @csrf
            {{-- Title --}}
            <h2 class="font-poppins font-extrabold text-black italic text-2xl">Truk App</h2>

            <div class="w-full">
                <h3 class="font-poppins font-extrabold text-xl mr-20 pt-2 my-2">Create Your Account</h3>
                <p class="font-poppins text-sm font-normal text-gray-500 my-2">Run your business in seconds. Already
                    have an
                    account?
                    <a href="{{ route('login') }}" class="text-blue-800"> Login here. </a>
                </p>
            </div>

            <div class="flex flex-col w-full mt-5 lg:flex-row">
                <div class="w-full my-2 lg:w-[50%]">
                    <label for="your-name" class="font-poppins text-sm font-semibold text-black">Your Name</label>
                    <input type="text" name="name" value="{{ old('name') }}" id="" placeholder="ex: Andy"
                        class="w-full rounded-lg bg-gray-50 border-gray-200 lg:w-[300px]">
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>
                <div class="w-full my-2 lg:w-[50%]">
                    <label for="your-email" class="font-poppins text-sm font-semibold text-black">Your Email</label>
                    <input type="email" name="email" value="{{ old('email') }}" id="" placeholder="ex: name@company.com"
                        class="w-full rounded-lg bg-gray-50 border-gray-200 lg:w-[300px]">
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>
            </div>

            <div class="flex flex-col w-full lg:flex-row">
                <div class="w-full my-2 lg:w-[50%]">
                    <label for="your-password" class="font-poppins text-sm font-semibold text-black">Your
                        Password</label>
                    <input type="password" name="password" value="{{ old('password') }}" id="" placeholder="ex:********"
                        class="w-full rounded-lg bg-gray-50 border-gray-200 lg:w-[300px]">
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
                <div class="w-full my-2 lg:w-[50%]">
                    <label for="password-confirmation" class="font-poppins text-sm font-semibold text-black">Password
                        Confirmation</label>
                    <input type="password" name="password_confirmation" value="{{ old('Confirm Password') }}" id=""
                        placeholder="ex: **********" class="w-full rounded-lg bg-gray-50 border-gray-200 lg:w-[300px]">
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />

                </div>
            </div>

            <div class="flex flex-col w-full lg:flex-row">
                <div class="w-full my-2 lg:w-[50%]">
                    <label for="your-password" class="font-poppins text-sm font-semibold text-black">Type of
                        Account</label>
                    <select name="role_id" class="w-full rounded-lg bg-gray-50 border-gray-200 lg:w-[300px]">
                        <option value="" selected>Select your type of account</option>
                        <option value="2">Demo Account</option>
                        <option value="3">Broker</option>
                        <option value="4">Shipper</option>
                        <option value="5">Carrier</option>
                    </select>
                    {{-- <input type="password" name="password" value="{{ old('password') }}" id=""
                    placeholder="ex:********"
                    class="w-full rounded-lg bg-gray-50 border-gray-200 lg:w-[300px]"> --}}
                    <x-input-error :messages="$errors->get('role_id')" class="mt-2" />
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
    <form method="POST" action="{{ route('register') }}">
@csrf

<!-- Name -->
<div>
    <x-input-label for="name" :value="__('Name')" />
    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus
        autocomplete="name" />
    <x-input-error :messages="$errors->get('name')" class="mt-2" />
</div>

<!-- Email Address -->
<div class="mt-4">
    <x-input-label for="email" :value="__('Email')" />
    <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
        autocomplete="username" />
    <x-input-error :messages="$errors->get('email')" class="mt-2" />
</div>

<!-- Password -->
<div class="mt-4">
    <x-input-label for="password" :value="__('Password')" />

    <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
        autocomplete="new-password" />

    <x-input-error :messages="$errors->get('password')" class="mt-2" />
</div>

<!-- Confirm Password -->
<div class="mt-4">
    <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

    <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation"
        required autocomplete="new-password" />

    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
</div>

<div class="flex items-center justify-end mt-4">
    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
        href="{{ route('login') }}">
        {{ __('Already registered?') }}
    </a>

    <x-primary-button class="ml-4">
        {{ __('Register') }}
    </x-primary-button>
</div>
</form>
</x-guest-layout> --}}