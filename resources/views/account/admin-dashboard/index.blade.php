@extends('layouts.my-app-form') @section('content')
<main class="font-poppins bg-theBackgroundColor w-full h-screen">
    {{-- Header Dashboard --}}
    <header class="w-[95%] mx-auto lg:w-[99%] fixed top-0 left-0 right-0 z-10">
        <div class="flex justify-between items-center py-3 lg:w-[99%] lg:mx-auto">
            {{-- Logo --}}
            <div class="flex justify-start items-center w-[140px] sm:w-[240px]">
                <div
                    class="w-[35px] h-[35px] rounded-full flex justify-center items-center cursor-pointer bg-gray-50 mr-1 sm:w-[45px] sm:h-[45px]">
                    <i class="fa-solid fa-bars text-xl"></i>
                </div>
                <a href="#" class="flex justify-start item-center w-[110px] sm:w-[210px]">
                    <div class="w-[30px] mr-2 sm:w-[40px]">
                        <img class="w-full h-[full] object-fill object-center" src="{{
                                url('/images/falcon.fa3b1ec66baa6b31819e.png')
                            }}" alt="image-logo" />
                    </div>
                    <div class="w-[30px] text-blue-700 font-bold flex items-center text-xl sm:w-[80px] sm:text-2xl">
                        falcon
                    </div>
                </a>
            </div>
            {{-- Search and Image profile. we can add more function here --}}
            <div
                class="w-[140px] flex justify-end items-center h-[35px] sm:w-[240px] sm:h-[45px] lg:justify-between lg:w-[80%]">
                <div class="hidden lg:block lg:bg-white lg:w-[300px] rounded-3xl">
                    <input class="hidden lg:block lg:w-full lg:border-none lg:rounded-3xl lg:pl-5" type="search"
                        placeholder="Search" />
                </div>
                <div class="w-[30px] h-[30px] lg:w-[40px] lg:h-[40px]">
                    <img class="w-full h-full rounded-full object-cover object-center"
                        src="{{ url('/images/3.b3477e97bffc3dc7e37d.jpg') }}" alt="" />
                </div>
            </div>
        </div>
    </header>
    {{-- Sidebar--}}
    <section class="hidden xl:block xl:w-[16%] xl:fixed xl:top-20 xl:left-0">
        <ul class="hidden xl:w-[220px] xl:mx-auto xl:h-screen xl:flex xl:justify-start xl:items-center xl:flex-col p-3">
            <a href="{{ route('admin-dashboard') }}"
                class="hidden xl:flex xl:justify-between xl:items-center xl:w-[180px] py-2">
                <i class="fa-solid fa-chart-line text-xl text-gray-600 w-4"></i>
                <li class="font-poppins font-normal text-base text-gray-600 w-[150px] text-center">
                    Dashboard
                </li>
                <!-- <i class="fa-solid fa-caret-down text-gray-600 w-4 text-xl"></i> -->
            </a>

            <a href="{{ route('admin.logs') }}"
                class="hidden xl:flex xl:justify-between xl:items-center xl:w-[180px] py-2">
                <i class="fa-solid fa-chart-line text-xl text-gray-600 w-4"></i>
                <li class="font-poppins font-normal text-base text-gray-600 w-[150px] text-center">
                    Logs
                </li>
                <i class="fa-solid fa-caret-down text-gray-600 w-4 text-xl"></i>
            </a>
        </ul>
    </section>
    {{-- End Sidebar--}}
    {{-- Contents --}}
    <section class="hidden xl:block xl:absolute xl:top-20 xl:right-14 xl:w-[77%] xl:h-screen">
        <h1 class="text-5xl">The COntent go here</h1>
        <!-- Authentication -->
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <a href="{{ route('logout') }}">
                <button type="submit">Logout</button>
            </a>
            {{-- <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                        this.closest('form').submit();">
                {{ __('Log Out') }}
            </x-dropdown-link> --}}
        </form>
    </section>
    {{-- End COntents --}}
</main>
@endsection