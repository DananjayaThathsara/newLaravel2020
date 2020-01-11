@extends('app')
@section('title','Our Services')
@section('content')
    <ul>
        {{--    normal foreach    --}}
        {{--        @foreach($services as $service)--}}
        {{--            <li>{{$service}}</li>--}}
        {{--        @endforeach--}}

        {{--        --}}{{--    if there no services we can give message forelse    --}}
        @if(count($errors)>0)

            @foreach($errors->all() as $error)

                <div style="width:auto;height: auto;padding: 10px">{{$error}}</div>
            @endforeach
        @endif
        <form action="/services" method="post">
            {{ csrf_field() }}
            <input type="text" name="name">
            <button type="submit">Add Service</button>
        </form>

        @forelse($services as $service)
            <li>{{$service->name}}</li>
        @empty
            {{ 'No servies yet' }}
        @endforelse
    </ul>
@endsection