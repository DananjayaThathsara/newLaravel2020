@extends('app')
@section('title','Customers')
@section('content')
    <a href="{{route('customer.create')}}">Create New Customer</a>
    @forelse($customers as $customer)
        <a href="{{route('customer.show',$customer->id)}}"><h3>{{$customer->name}} - ({{$customer->email}})</h3></a>
    @empty
        <p>No customers to show</p>
    @endforelse
@endsection