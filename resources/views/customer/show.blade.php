@extends('app')
@section('title','Customers - Create')
@section('content')
    <a href="{{route('customer.index')}}">Back</a> |
    <a href="{{route('customer.edit',$customer->id)}}">Edit</a>
    <form action="{{route('customer.delete',$customer->id)}}" method="post">
        {{csrf_field()}}
        {{method_field('DELETE')}}
        <button type="submit">Delete</button>
    </form>
    <a href="{{route('customer.edit',$customer->id)}}">Edit</a>
    <br>
    <h1>Customer Details</h1>
    <h4>Name : <strong>{{$customer->name}}</strong></h4>
    <h4>Email : <strong>{{$customer->email}}</strong></h4>
@endsection