@extends('backend.layouts.master')
<!-- page title and subtitle value -->
@section('page_title','All Posts')
@section('page_sub_title','List of All publish and unpublish post')
<!-- page main conten -->
@section('content')
<div class="row">
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <div class="d-flex">
                <h3 class="mb-0">Total {{ $posts->total() }} Posts</h3>
            </div>
            <a href="{{ route('post.create') }}" class="btn btn-success">
                <i class="fas fa-plus "></i> Add New
            </a>            
        </div>
        <div class="card-body">
            @if(session('msg'))
                <div class="alert alert-{{ session('cls') }}">
                    {!! session('msg') !!}
                </div>
            @endif
            <table class="table table-striped table-bordered table-hover">
                <thead>
                    <tr>
                        {{-- <th>SI</th> --}}
                        <th>Photo</th>
                        <th>Title</th>
                        <th>Category</th>
                        <th>Writer</th>
                        <th>Date</th>
                        {{-- post status and date --}}
                        <th>Status</th>
                        <th>Options</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $sl= 1
                    @endphp
                    @foreach($posts as $post)
                    <tr>
                        {{-- <td>{{ $sl++ }}</td> --}}
                        {{-- post thumnails --}}
                        <td>
                            <img class="img-thumbnail" src="{{ url('post/thumbnail/'.$post->photo) }}" alt="{{ $post->title }}" width="100px">
                        </td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->category?->name }}</td>
                        <td>{{ $post->user?->name }}</td>
                        <td>{{ $post->created_at->toDayDateTimeString() }}</td>
                        <td>{{ $post->status == 1 ? 'Published': 'Not Published' }}</td>
                        {{-- options --}}
                        <td>
                            <div class="d-flex justify-content-center">
                                {{-- show --}}
                                <a href="{{ route('post.show', $post->id) }}">
                                    <li class="fa-solid fa-eye m-3 text-success"></li>
                                </a>
                                {{-- Edit --}}
                                <a href="{{ route('post.edit', $post->id) }}">
                                    <li class="fa-solid fa-edit m-3"></li>
                                </a>
                                {{-- delete --}}
                                {!! Form::open(['method'=>'delete', 'route'=>['post.destroy', $post->id]]) !!}
                                {!! Form::button('<li class="fa-solid fa-trash m-3 text-danger"></li>', ['type'=>'submit', 'class'=>'btn btn-sm']) !!}
                                {!! Form::close() !!}
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{-- pagignate pages --}}
            <div class="pagination mt-3">
                {{ $posts->links() }}
            </div>
        </div>
    </div>
</div>
@endsection