@extends('layouts.app')

@section('content')
    {!! Form::open(['url' => route('blogs.store'), 'method' => 'POST']) !!}
        {{-- @include('blogs._form') --}}
    {!! Form::close() !!}
@endsection