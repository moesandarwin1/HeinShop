@extends('layouts.admin')
@section('content')
<form action="{{route('backend.items.store')}}" method="post" enctype="multipart/form-data">
    @csrf
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
                    <input type="text" name="code_no" value="{{old('code_no')}}" class="form-control @error('code_no') is-invalid @enderror" placeholder="">
                    @error('code_no')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="m-2">
                    <label for="name" class="form-label">Item Name</label>
                    <input type="text" name="name" id="name" value="{{old('name')}}" class="form-control @error('name') is-invalid @enderror" placeholder="">
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input class="form-control @error('image')is-invalid @enderror" type="file" accept="image/*" id="image" name="image">
                    @error('image')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="m-2">
                    <label for="price" class="form-label">Price</label>
                    <input type="text" name="price" value="{{old('price')}}" class="form-control @error('price')is-invalid @enderror" placeholder="">
                    @error('price')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="m-2">
                    <label for="discount" class="form-label">Discount</label>
                    <input type="text" name="discount" value="{{old('discount')}}" class="form-control @error('discount')is-invalid @enderror" placeholder="">
                    @error('discount')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="m-2">
                    <label for="in_stock" class="form-label">InStock</label>
                    <select name="in_stock" id="" class="form-select">
                        <option value="1" selected>Yes</option>
                        <option value="0">No</option>
                        
                    </select>    
                </div>
                <div class="m-2">
                    <label for="category_id" class="form-label">Category</label>
                    <select name="category_id" id="category_id" class="form-select @error('category_id') is-invalid @enderror">
                        <option selected value="">Choose Category.....</option>
                        @foreach($categories as $category)
                            <option value="{{$category->id}}" {{old('category_id')== $category->id ?'selected':''}}>{{$category->name}}</option>
                        @endforeach
                        
                    </select>
                    @error('category_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror       
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                    <textarea class="form-control @error('description')is-invalid @enderror" rows="3" name="description" id="">{{old('description')}}</textarea>
                    @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
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