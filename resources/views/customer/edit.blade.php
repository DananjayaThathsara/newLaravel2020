@extends('app')
@section('title','Customers - Create')
@section('content')
    <h1>Add New Customer</h1>
    <form action="{{route('customer.update',$customer->id)}}" method="post">
        {{csrf_field()}}
        {{method_field('PATCH')}}
        <input type="text" name="name" autocomplete="off" value="{{$customer->name}}">
        <input type="email" name="email" autocomplete="off" value="{{$customer->email}}">
        <button type="submit">Update Customer</button>
    </form>
@endsection