@extends('backend.auth.layouts.master')
@section('page_title','Register Form')

@section('content')
    {!! Form::open(['method'=>'post', 'route'=>'register']) !!}
    <!-- name -->
    {!! Form::label('name', 'Name') !!}
    {!! Form::text('name', null, ['class'=>'form-control from-control-sm']) !!}
     
    <!-- email -->
    {!! Form::label('email', 'Email') !!}
    {!! Form::email('email', null, ['class'=>'form-control from-control-sm']) !!}
     <!-- password -->
     {!! Form::label('password', 'Password') !!}
     {!! Form::password('password'  , ['class'=>'form-control from-control-sm']) !!}
     <!-- password confromation -->
     {!! Form::label('password_confirmation', 'Password Confirmation') !!}
     {!! Form::password('password_confirmation', ['class'=>'form-control from-control-sm']) !!}
    {{-- submin button --}}
     <div class="d-grid">
        {!! Form::button('Sign Up', ['type'=>'submit','class'=>'btn btn-info btn-sm mt-2']) !!}
    </div>
    {{-- end of form --}}
    {!! Form::close([]) !!}

    {{-- Sign in --}}
    <p class="mt-2">
        Already Registered? <a href="{{ route('login') }}">Sign In</a>
    </p>
@endsection