@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Inventory Management Dashboard</h1>
@stop

@section('content')

<div class="row">

    <div class="col-lg-3 col-6">
        <div class="small-box bg-info">
            <div class="inner">
                <h3>{{ $totalCategories ?? 0 }}</h3>
                <p>Categories</p>
            </div>
            <div class="icon">
                <i class="fas fa-list"></i>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-6">
        <div class="small-box bg-success">
            <div class="inner">
                <h3>{{ $totalProducts ?? 0 }}</h3>
                <p>Products</p>
            </div>
            <div class="icon">
                <i class="fas fa-box"></i>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-6">
        <div class="small-box bg-warning">
            <div class="inner">
                <h3>{{ $totalSkus ?? 0 }}</h3>
                <p>SKUs</p>
            </div>
            <div class="icon">
                <i class="fas fa-barcode"></i>
            </div>
        </div>
    </div>

    <div class="col-lg-3 col-6">
        <div class="small-box bg-danger">
            <div class="inner">
                <h3>{{ $totalUsers ?? 0 }}</h3>
                <p>Users</p>
            </div>
            <div class="icon">
                <i class="fas fa-users"></i>
            </div>
        </div>
    </div>

</div>

<div class="card">
    <div class="card-header">
        <h3 class="card-title">
            Welcome
        </h3>
    </div>

    <div class="card-body">
        <h5>Hello, {{ auth()->user()->name }}</h5>

        <p>
            Welcome to Inventory Management System.
        </p>

        <p>
            You are logged in as:
            <strong>{{ auth()->user()->role->role_name ?? 'N/A' }}</strong>
        </p>
    </div>
</div>

@stop