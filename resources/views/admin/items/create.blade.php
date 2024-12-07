@extends('layouts.admin')
@section('content')
<div class="container-fluid px-4">
    <div class="my-3">
        <h1 class="mt-4 d-inline">Items</h1>
        <a href="{{route('backend.items.index')}}" class="btn btn-primary float-end">Items</a>
    </div>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
        <li class="breadcrumb-item active"><a href="">Items</a></li>
        <li class="breadcrumb-item active">Items Create</li>
    </ol>
    
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table me-1"></i>
            Posts Lists
        </div>
        <div class="card-body">
            <div class="m-2">
                <label for="code_no" class="form-label">CodeNo</label>
                <input type="text" name="code_no" class="form-control" placeholder="">
            </div>
            <div class="m-2">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" placeholder="">
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Image</label>
                <input class="form-control" type="file" id="formFile" name="profile">
            </div>
            <div class="m-2">
                <label for="price" class="form-label">Price</label>
                <input type="text" name="price" class="form-control" placeholder="">
            </div>
            <div class="m-2">
                <label for="discount" class="form-label">Discount</label>
                <input type="text" name="discount" class="form-control" placeholder="">
            </div>
            <div class="m-2">
                <label for="instock" class="form-label">InStock</label>
                <input type="text" name="instock" class="form-control" placeholder="Yes">
            </div>
            <div class="m-2">
                <label for="name" class="form-label">Category</label>
                <select name="category" id="" class="form-select">
                    <option selected>Choose Category.....</option>
                    
                </select>
                        
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                <textarea class="form-control"  rows="3" name="description" id=""></textarea>
            </div>
            <div class="d-grid gap-2">
                <button class="btn btn-primary" type="submit">Save</button>
            </div>
        </div>
    </div>
</div>

@endsection