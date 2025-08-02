@extends('admin.layouts.main')
@section('main-container')
    <div class="page-wrapper">
        <div class="content">
            <div class="page-header">
                <div class="page-title">
                    <h4>ADD Category</h4>
                    <h6>Create new Category</h6>
                </div>
            </div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>There were some problems with your input:</strong>
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{ route('categories.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                        <div class="col-lg-3 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Category Name</label>
                                <input type="text" name="name" class="form-control" required>
                                @error('name')<small class="text-danger">{{ $message }}</small>@enderror
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label> Category Image</label>
                                <div class="image-upload">
                                    <input type="file" name="image" class="form-control">
                                    <div class="image-uploads">
                                        <img src="{{ asset('admin/assets/img/icons/upload.svg') }}" alt="img">
                                        <h4>Drag and drop a file to upload</h4>
                                    </div>
                                </div>
                                @error('image')<small class="text-danger">{{ $message }}</small>@enderror
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <button type="submit" class="btn btn-submit me-2">Create</button>
                            <a href="{{ route('brands.index') }}" class="btn btn-cancel">Cancel</a>
                        </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
      