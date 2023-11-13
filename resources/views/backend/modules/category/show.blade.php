@extends('backend.layouts.master')
<!-- page title and subtitle value -->
@section('page_title','Categories')
@section('page_sub_title','Single Category')
<!-- page main conten -->
@section('content')
<div class="row">
    <div class="card">
        <div class="card-header">
            <h3 class="mb-0">Categories Details</h3>
        </div>
        <div class="card-body">
            <table class="table table-striped table-bordered table-hover">
                <tbody>
                    <tr>
                        <th>ID</th>
                        <td>{{ $category->id }}</td>
                    </tr>
                    <tr>
                        <th>Name</th>
                        <td>{{ $category->name }}</td>
                    </tr>
                    <tr>
                        <th>Slug</th>
                        <td>{{ $category->slug }}</td>
                    </tr>
                    <tr>
                        <th>Order By</th>
                        <td>{{ $category->order_by }}</td>
                    </tr>
                    <tr>
                        <th>Status</th>
                        <td>{{ $category->status==1?'Active': 'Inactive' }}</td>
                    </tr>
                
                </tbody>
            </table>
            {{-- back to cat list --}}
            <a href="{{ route('category.index') }}"><button class="btn btn-success btn-sm mt-2">Back</button></a>
        </div>
    </div>
</div>
@endsection