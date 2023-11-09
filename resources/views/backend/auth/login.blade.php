@extends('backend.auth.layouts.master')
@section('page_title','Login Form')

@section('content')
    {!! Form::open([]) !!}
    <!-- email -->
    {!! Form::label('email', 'Email') !!}
    {!! Form::email('email', null, ['class'=>'form-control from-control-sm']) !!}
     <!-- password -->
     {!! Form::label('password', 'Password') !!}
     {!! Form::password('password', ['class'=>'form-control from-control-sm']) !!}
      {{-- submin button --}}
    <div class="d-grid">
        {!! Form::button('login', ['type'=>'submit','class'=>'btn btn-info btn-sm mt-2']) !!}
    </div>
    {{-- end of form --}}
    {!! Form::close([]) !!}
    {{-- forgot password --}}
    <p class="mt-2">
        Forgot Password? <a href="{{ route('password.request') }}">Reset</a>
    </p>
    {{-- Sign Up --}}
    <p class="mt-2">
        Not Registered? <a href="{{ route('register') }}">Register</a>
    </p>
@endsection