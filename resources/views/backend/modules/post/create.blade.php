@extends('backend.layouts.master')
<!-- page title and subtitle value -->
@section('page_title','Posts')
@section('page_sub_title','All Post')
<!-- page main conten -->
@section('content')
<div class="row justify-content-center">
    <div class="col-md-10">
        <div class="card">
            <div class="card-header">
                <h3 class="mb-0">Create New Post</h3>
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
                {!! Form::open(['method'=>'post', 'route'=>'post.store']) !!}
                {{-- form body  --}}
                @include('backend.modules.post.form')
                {{-- submin button --}}
                <div class="d-grid">
                    {!! Form::button('Submit Post', ['type'=>'submit','class'=>'btn btn-success btn-sm mt-2']) !!}
                </div>
                {{-- end of form --}}
                {!! Form::close([]) !!}
            </div>
        </div>
    </div>
</div>
{{-- Post slug autofill --}}
@push('js')
    <script>
        $('#title').on('input', function(){
            let name = $(this).val()
            let slug = name.replaceAll(' ','-')
            $('#slug').val(slug.toLowerCase());
        })
    </script>
@endpush   
@endsection