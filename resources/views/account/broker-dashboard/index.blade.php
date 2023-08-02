@extends('layouts.my-app-form')
@section('content')
<h1 class="text-center font-bold text-6xl bg-green-300">Account for the Broker </h1>
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
@endsection