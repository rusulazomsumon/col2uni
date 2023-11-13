@extends('backend.layouts.master')
<!-- page title and subtitle value -->
@section('page_title','Category')
@section('page_sub_title','Edit')
<!-- page main conten -->
@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h3 class="mb-0">Edit Existing Category</h3>
            </div>
            <div class="card-body">
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
                {!! Form::model($category,['method'=>'put', 'route'=>['category.update',$category->id]]) !!}
                    @include('backend.modules.category.form')
                {{-- submin button --}}
                <div class="d-grid">
                    {!! Form::button('Update Category', ['type'=>'submit','class'=>'btn btn-success btn-sm mt-2']) !!}
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