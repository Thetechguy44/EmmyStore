@extends('dashboard.layout.app')
@section('title', 'Add Products')
@section('content')
    <div class="content">
        <!-- Start Content-->
        <div class="container-fluid">

            <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
                <div class="flex-grow-1">
                    <h4 class="fs-18 fw-semibold m-0">Add Product</h4>
                </div>

                {{-- <div class="text-end">
                    <ol class="breadcrumb m-0 py-0">
                        <li class="breadcrumb-item"><a href="javascript: void(0);">Forms</a></li>
                        <li class="breadcrumb-item active">Add Product</li>
                    </ol>
                </div> --}}
            </div>

            <div class="row">

                <div class="col-lg-12">
                    <div class="card">

                        <div class="card-header">
                            <h5 class="card-title mb-0">Add Product</h5>
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
                            <form action="{{ route('store.product') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="simpleinput" class="form-label">Name</label>
                                    <input type="text" id="simpleinput" name="name" class="form-control" placeholder="Furniture Name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="simpleinput" class="form-label">Price</label>
                                    <input type="number" id="simpleinput" name="price" class="form-control" step="0.01" min="0" placeholder="0.00" required>
                                </div>
                                <div class="mb-3">
                                    <label for="simpleinput" class="form-label">Discount Price (Optional)</label>
                                    <input type="number" id="simpleinput" name="discount_price" class="form-control" step="0.01" min="0" placeholder="0.00">
                                </div>
                                <div class="mb-3">
                                    <label for="simpleinput" class="form-label">Stock (Available)</label>
                                    <input type="number" id="simpleinput" name="stock" class="form-control" min="0" placeholder="0">
                                </div>
                                <div class="mb-3">
                                    <label for="example-textarea" class="form-label">Description</label>
                                    <textarea class="form-control" id="example-textarea" name="description" rows="5" spellcheck="false" required></textarea>
                                </div>
                                <label class="form-label">Furniture Image</label>
                                <div class="input-group mb-4">
                                    <input type="file" class="form-control" id="inputGroupFile02" name="image" accept="image/*" required>
                                    <label class="input-group-text" for="inputGroupFile02">Upload</label>
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