@extends('layouts.admin')
@section('content')
 <div class="container-fluid px-4">
        <div class="my-3">
            <h1 class="mt-4 d-inline">Edit Item</h1>
            <a href="{{route('backend.items.index')}}" class="btn btn-primary float-end">Cancel</a>
        </div>
        <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="index.html">Dashboard</a></li>
            <li class="breadcrumb-item active"><a href="">Items</a></li>
            <li class="breadcrumb-item active">Edit Item</li>
        </ol>
        
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Edit Item Lists
            </div>
            <div class="card-body">
                <form action="{{route('backend.items.update',$item->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('put')
                <div class="m-2">
                    <label for="code_no" class="form-label">CodeNo</label>
                    <input type="text" name="code_no" value="{{$item->code_no}}" class="form-control @error('code_no') is-invalid @enderror" placeholder="">
                    @error('code_no')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="m-2">
                    <label for="name" class="form-label">Item Name</label>
                    <input type="text" name="name" id="name" value="{{$item->name}}" class="form-control @error('name') is-invalid @enderror" placeholder="">
                    @error('name')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="image-tab" data-bs-toggle="tab" data-bs-target="#image-tab-pane" type="button" role="tab" aria-controls="image-tab-pane" aria-selected="true">Image</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="new_image-tab" data-bs-toggle="tab" data-bs-target="#new_image-tab-pane" type="button" role="tab" aria-controls="new_image-tab-pane" aria-selected="false">New Image</button>
                        </li>
                        
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="image-tab-pane" role="tabpanel" aria-labelledby="image-tab" tabindex="0">
                            <img src="{{$item->image}}" class="w-25 h-25 my-3" alt="">
                            <input type="hidden" name="old_image" id="" value="{{$item->image}}">
                        </div>
                        <div class="tab-pane fade" id="new_image-tab-pane" role="tabpanel" aria-labelledby="new_image-tab" tabindex="0">
                            <input class="form-control my-3 @error('image')is-invalid @enderror" type="file" accept="image/*" id="image" name="image">
                        </div>
                        
                    </div>
                    
                    @error('image')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="m-2">
                    <label for="price" class="form-label">Price</label>
                    <input type="text" name="price" value="{{$item->price}}" class="form-control @error('price')is-invalid @enderror" placeholder="">
                    @error('price')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="m-2">
                    <label for="discount" class="form-label">Discount</label>
                    <input type="text" name="discount" value="{{$item->discount}}" class="form-control @error('discount')is-invalid @enderror" placeholder="">
                    @error('discount')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="m-2">
                    <label for="in_stock" class="form-label">InStock</label>
                    <select name="in_stock" id="" class="form-select">
                        <option value="1" {{$item->in_stock == 1 ? 'selected':''}}>Yes</option>
                        <option value="0" {{$item->in_stock == 0 ? 'selected':''}}>No</option>
                        
                    </select>    
                </div>
                <div class="m-2">
                    <label for="category_id" class="form-label">Category</label>
                    <select name="category_id" id="category_id" class="form-select @error('category_id') is-invalid @enderror">
                        <option selected value="">Choose Category.....</option>
                        @foreach($categories as $category)
                            <option value="{{$category->id}}" {{$item->category_id == $category->id ?'selected':''}}>{{$category->name}}</option>
                        @endforeach
                        
                    </select>
                    @error('category_id')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror       
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Description</label>
                    <textarea class="form-control @error('description')is-invalid @enderror" rows="3" name="description" id="">{{$item->description}}</textarea>
                    @error('description')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>
                <div class="d-grid gap-2">
                    <button class="btn btn-warning" type="submit">Update</button>
                </div>
            </form>
            </div>
        </div>
    </div>


@endsection