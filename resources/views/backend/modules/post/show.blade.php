@extends('backend.layouts.master')
<!-- page title and subtitle value -->
@section('page_title','Post')
@section('page_sub_title','Post Information')
<!-- page main conten -->
@section('content')
<div class="row">
    <div class="card">
        <div class="card-header">
            <h3 class="mb-0">Post In Details</h3>
        </div>
        <div class="card-body">
            <table class="table table-striped table-bordered table-hover">
                <tbody>
                    {{-- post title --}}
                    <tr>
                        <th>Title</th>
                        <td><h1>{{ $post->title }}</h1></td>
                    </tr>
                    {{-- post photo --}}
                    <tr>
                        <th>Photo</th>
                        {{-- post thumnails --}}
                        <td>
                            <img class="img-thumbnail" src="{{ url('post/original/'.$post->photo) }}" alt="{{ $post->title }}">
                        </td>
                    </tr>
                    {{-- Post Description --}}
                    <tr>
                        <th>Description</th>
                        {{-- <td>{{ $post->description }}</td> --}}
                        {{-- for show rander view --}}
                        <td> {!! $post->description !!} </td>
                    </tr>
                    {{-- post writer --}}
                    <tr>
                        <th>Category</th>
                        <td>{{ $post->category?->name }}</td>
                    </tr>
                    {{-- post writer --}}
                    <tr>
                        <th>Writer</th>
                        <td>{{ $post->user?->name }}</td>
                    </tr>
                    {{-- post dates --}}
                    <tr>
                        <th>Dates</th>
                        <td>{{ $post->created_at->toDayDateTimeString() }}</td>
                    </tr>
                
                    <tr>
                        <th>Status</th>
                        <td>{{ $post->status==1?'Published': 'Not Published' }}</td>
                    </tr>
                
                </tbody>
            </table>
            {{-- back to cat list --}}
            <a href="{{ route('post.index') }}"><button class="btn btn-success btn-sm mt-2">Back</button></a>
        </div>
    </div>
</div>
@endsection