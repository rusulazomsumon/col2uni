@extends('backend.layouts.master')
<!-- page title and subtitle value -->
@section('page_title','Dashboard')
@section('page_sub_title','Blog Information')
<!-- page main conten -->
@section('content')
<div class="row">

    <div class="col-xl-6 col-md-6">
        <div class="card bg-primary text-white mb-4">
            <div class="card-body"><p>Total Posts: {{ $postCount }}</p></div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="/dashboard/post">View Details</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
    <div class="col-xl-6 col-md-6">
        <div class="card bg-warning text-white mb-4">
            <div class="card-body"><p>Total Categories: {{ $categoryCount }}</p></div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="/dashboard/category">View Details</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>

    {{-- <div class="col-xl-3 col-md-6">
        <div class="card bg-success text-white mb-4">
            <div class="card-body">Success Card</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="#">View Details</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div>
    <div class="col-xl-3 col-md-6">
        <div class="card bg-danger text-white mb-4">
            <div class="card-body">Danger Card</div>
            <div class="card-footer d-flex align-items-center justify-content-between">
                <a class="small text-white stretched-link" href="#">View Details</a>
                <div class="small text-white"><i class="fas fa-angle-right"></i></div>
            </div>
        </div>
    </div> --}}

</div>
@endsection