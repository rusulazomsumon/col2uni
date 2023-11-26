@extends('backend.layouts.master')
<!-- page title and subtitle value -->
@section('page_title','Edit Post')
@section('page_sub_title','Edit and Update Your Post')
<!-- page main conten -->
@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header">
                <h3 class="mb-0">Edit Existing Post</h3>
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
                {!! Form::model($post,['method'=>'put', 'route'=>['post.update',$post->id], '$files'=>true]) !!}
                <!-- Name -->
                {!! Form::label('title', 'Titile') !!}
                {!! Form::text('title', null, ['id'=>'title','class'=>'form-control from-control-sm']) !!}
                <!-- Slug -->
                {!! Form::label('slug', 'Slug') !!}
                {!! Form::text('slug',  null, ['id'=>'slug','class'=>'form-control from-control-sm']) !!}
                <!-- Active Status -->
                {!! Form::label('status', 'Post Status') !!}
                {!! Form::select('status',  [1=>'Published', 0=>'Not Published'],null, ['class'=>'form-select from-control-sm']) !!}
                {{-- Categories --}}
                {!! Form::label('category_id', 'Post Category', ['class'=>'mt-2']) !!}
                {!! Form::select('category_id', $categories, null , ['class'=>'form-select from-control-sm', 'placeholder'=>'--select--']) !!}
                {{-- Post Description --}}
                {!! Form::label('description', 'Description', ['class'=>'mt-2']) !!} <br>
                {!! Form::textarea('description', null, ['id'=>'description','class'=>'from-control', 'placeholder'=>'Description']) !!}
                {{-- Fetured Images --}}
                {!! Form::label('photo', 'Fetured Images', ['class'=>'mt-2']) !!}
                {!! Form::file('photo', ['class'=>'from-control' ]) !!} <br>
                <div class="my-3">
                    <img class="img-thumbnail" src="{{ url('post/original/'.$post->photo) }}" alt="{{ $post->title }}">
                </div>
                {{-- Meta Description --}}
                {!! Form::label('meta_description', 'Meta Description', ['class'=>'mt-2']) !!} <br>
                {!! Form::text('meta_description', null, ['class' => 'form-control', 'placeholder' => 'Add Meta Description', 'maxlength' => '140']) !!}
                {{-- submin button --}}
                <div class="d-grid">
                    {!! Form::button('Update Post', ['type'=>'submit','class'=>'btn btn-success btn-sm mt-2']) !!}
                </div>
                {{-- end of form --}}
                {!! Form::close([]) !!}
            </div>
        </div>
    </div>
</div>
{{-- CK Editors CSS Code --}}
@push('css')
    <style>
        .ck.ck-editor__main>.ck-editor__editable{
            min-height:250px;v
        }
    </style>
@endpush
{{-- Post slug autofill & CK Editor (RichText Editor) --}}
@push('js')
    {{-- ck editor for description cdn--}}
    <script src="https://cdn.ckeditor.com/ckeditor5/40.0.0/classic/ckeditor.js"></script>

    <script>
        // ck editor code 
        ClassicEditor.create( document.querySelector( '#description' ),{
            ckfinder:{
                    // uploadUrl: '{{ route('ckeditor.upload').'?_token='.csrf_token() }}'
                    uploadUrl: '{{ route('ckeditor.upload') }}?_token={{ csrf_token() }}'
                }
            })
            
        .catch( error => {
            console.error( error );
        } );
        // slug code 
        $('#title').on('input', function(){
            let name = $(this).val()
            let slug = name.replaceAll(' ','-')
            $('#slug').val(slug.toLowerCase());
        });
    </script>
@endpush   
@endsection