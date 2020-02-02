@extends('app')

@section('title')
    Services
@endsection

@section('content')
    We have many kind of services
    @foreach ($our_services as $service)
        <li>{{$service}}</li>
    @endforeach
@endsection

