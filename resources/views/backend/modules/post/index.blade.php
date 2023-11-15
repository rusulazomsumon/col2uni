@extends('backend.layouts.master')
<!-- page title and subtitle value -->
@section('page_title','Categories')
@section('page_sub_title','All Categories')
<!-- page main conten -->
@section('content')
<div class="row">
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h3 class="mb-0">Post Categories</h3>
            <a href="{{ route('category.create') }}" class="btn btn-success">
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
                        <th>SI</th>
                        <th>Name</th>
                        <th>Slug</th>
                        <th>Status</th>
                        <th>Order By</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                        $sl= 1
                    @endphp
                    @foreach($categories as $category)
                    <tr>
                        <td>{{ $sl++ }}</td>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->slug }}</td>
                        <td>{{ $category->status == 1 ? 'Active': 'Inactive' }}</td>
                        <td>{{ $category->order_by }}</td>
                        <td>
                            <div class="d-flex justify-content-center">
                                {{-- show --}}
                                <a href="{{ route('category.show', $category->id) }}">
                                    <li class="fa-solid fa-eye m-3 text-success"></li>
                                </a>
                                {{-- Edit --}}
                                <a href="{{ route('category.edit', $category->id) }}">
                                    <li class="fa-solid fa-edit m-3"></li>
                                </a>
                                {{-- delete --}}
                                {!! Form::open(['method'=>'delete', 'route'=>['category.destroy', $category->id]]) !!}
                                {!! Form::button('<li class="fa-solid fa-trash m-3 text-danger"></li>', ['type'=>'submit', 'class'=>'btn btn-sm']) !!}
                                {!! Form::close() !!}
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection