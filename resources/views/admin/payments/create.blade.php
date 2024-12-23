@extends('layouts.admin')
@section('content')
<form action="{{route('backend.payments.store')}}" method="post" enctype="multipart/form-data">
@csrf
    <div class="container-fluid px-4">
        <div class="my-3">
            <h1 class="mt-4 d-inline">Items</h1>
            <a href="{{route('backend.payments.index')}}" class="btn btn-primary float-end">Payments</a>
        </div>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="">Payments</a></li>
            <li class="breadcrumb-item active">Payments Create</li>
        </ol>
        
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Posts Lists
            </div>
            <div class="card-body">
                <div class="m-2">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" name="name" value="{{old('name')}}" class="form-control @error ('name') is-invalid @enderror" placeholder="">
                    @error('name')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="logo" class="form-label">Logo</label>
                    <input class="form-control @error ('logo') is-invalid @enderror" type="file" id="formFile" name="logo">
                    @error('logo')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="d-grid gap-2">
                    <button class="btn btn-primary" type="submit">Save</button>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection