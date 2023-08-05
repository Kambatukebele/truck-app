@extends('layouts.admin-account.admin-app')
@section('content')



@foreach ($user as $key)
{{ $key->role->title }}
@endforeach

@endsection