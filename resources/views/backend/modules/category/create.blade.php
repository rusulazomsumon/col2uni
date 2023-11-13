@extends('backend.layouts.master')
<!-- page title and subtitle value -->
@section('page_title','Categories')
@section('page_sub_title','Create Category')
<!-- page main conten -->
@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h3 class="mb-0">Create New Category</h3>
            </div>
            <div class="card-body">
                {!! Form::open(['method'=>'post', 'route'=>'category.store']) !!}
                {{-- laravel form validation massage --}}
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                                <!-- Name -->
                {!! Form::label('name', 'Name') !!}
                {!! Form::text('name', null, ['id'=>'name','class'=>'form-control from-control-sm', 'placeholder'=>'Enter Category Name']) !!}
                <!-- Slug -->
                {!! Form::label('slug', 'Slug') !!}
                {!! Form::text('slug',  null, ['id'=>'slug','class'=>'form-control from-control-sm', 'placeholder'=>'Don not edit here']) !!}
                <!-- Order by -->
                {!! Form::label('order_by', 'Order By') !!}
                {!! Form::number('order_by',  null, ['class'=>'form-control from-control-sm']) !!}
                <!-- Active Status -->
                {!! Form::label('status', 'Status') !!}
                {!! Form::select('status',  [1=>'Active', 0=>'Inactive'],null, ['class'=>'form-select from-control-sm']) !!}
                
                {{-- submin button --}}
                <div class="d-grid">
                    {!! Form::button('Submit Category', ['type'=>'submit','class'=>'btn btn-success btn-sm mt-2']) !!}
                </div>
                {{-- end of form --}}
                {!! Form::close([]) !!}
            </div>
        </div>
    </div>
</div>
{{-- category slug autofill --}}
@push('js')
    <script>
        $('#name').on('input', function(){
            let name = $(this).val()
            let slug = name.replaceAll(' ','-')
            $('#slug').val(slug.toLowerCase());
        })
    </script>
@endpush   
@endsection