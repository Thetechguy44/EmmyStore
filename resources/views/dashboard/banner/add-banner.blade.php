@extends('dashboard.layout.app')
@section('title', 'Add Banner')
@section('content')
    <div class="content">
        <!-- Start Content-->
        <div class="container-fluid">

            <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
                <div class="flex-grow-1">
                    <h4 class="fs-18 fw-semibold m-0">Add Banner</h4>
                </div>

                {{-- <div class="text-end">
                    <ol class="breadcrumb m-0 py-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                        <li class="breadcrumb-item active">Add Banner</li>
                    </ol>
                </div> --}}
            </div>

            <div class="row">

                <div class="col-lg-12">
                    <div class="card">

                        <div class="card-header">
                            <h5 class="card-title mb-0">Add Banner</h5>
                        </div>
                        <!-- end card header -->
                        
                        <div class="card-body">
                            @if (Session::has('success'))
                                <div class="toast show align-items-center text-white bg-primary border-0 mb-4" role="alert" aria-live="assertive" aria-atomic="true">
                                    <div class="d-flex">
                                        <div class="toast-body">
                                            {{ Session::get('success') }}
                                        </div>
                                        <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                                    </div>
                                </div>
                            @endif
                            <form action="{{ route('store.banner') }}" method="POST" enctype="multipart/form-data" id="productForm">
                                @csrf
                                <div class="col-md-6">
                                    <div class="mb-3">
                                        <label for="title" class="form-label">Title</label>
                                        <input type="text" id="title" name="title" class="form-control" placeholder="Banner Title" required>
                                    </div>
                                </div>
                                
                                <div class="mb-4 col-md-6">
                                    <label class="form-label">Banner Image</label>
                                    <div class="input-group">
                                        <input type="file" class="form-control" id="bannerImage" name="image" accept="image/*" required>
                                        <label class="input-group-text" for="bannerImage">Upload</label>
                                    </div>
                                </div>
                                
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- container-fluid -->
    </div>
@endsection