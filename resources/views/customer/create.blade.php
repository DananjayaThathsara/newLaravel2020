@extends('app')
@section('title','Customers - Create')
@section('content')
    <h1>Add New Customer</h1>
    <form action="/customers" method="post">
        {{csrf_field()}}
        <input type="text" name="name" autocomplete="off" value="{{old('name')}}">
        <input type="email" name="email" autocomplete="off" value="{{old('email')}}">
        <button type="submit">Add Customer</button>
    </form>
@endsection