@extends('dashboard.layout.app')
@section('title', 'Furniture')
@section('content')
    <div class="container-fluid">

        <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
            <div class="flex-grow-1">
                <h4 class="fs-18 fw-semibold m-0">Furniture Tables</h4>
            </div>

            {{-- <div class="text-end">
                <ol class="breadcrumb m-0 py-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                    <li class="breadcrumb-item active">Furniture Tables</li>
                </ol>
            </div> --}}
        </div>

        <div class="row">
            <div class="col-xl-12">
                <div class="card overflow-hidden">

                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <h5 class="card-title text-black mb-0">All Furniture</h5>
                        </div>
                    </div>

                    <div class="card-body mt-0">
                        <div class="table-responsive table-card mt-0">
                            <table class="table table-borderless table-centered align-middle table-nowrap mb-0">
                                <thead class="text-muted table-light">
                                    <tr>
                                        <th scope="col" class="cursor-pointer">Name</th>
                                        <th scope="col" class="cursor-pointer">Price</th>
                                        <th scope="col" class="cursor-pointer">Discount</th>
                                        <th scope="col" class="cursor-pointer">Stock</th>
                                        <th scope="col" class="cursor-pointer">Status</th>
                                        <th scope="col" class="cursor-pointer">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @if ($products)
                                        @forelse ($products as $product)
                                            <tr>
                                                <td>
                                                    <img src="{{ asset('images/products/' . $product->image) }}" class="avatar avatar-sm rounded-circle me-3"> {{ $product->name }}
                                                </td>
                                                <td>{{ $product->price }}</td>
                                                <td>{{ $product->discount_price }}</td>
                                                <td>{{ $product->stock }}</td>
                                                <td>
                                                    @if ($product->is_active == true)
                                                        <span class="badge bg-success-subtle text-success fw-semibold">Active</span>
                                                    @else
                                                        <span class="badge bg-danger-subtle text-danger fw-semibold">Inactive</span>
                                                    @endif
                                                </td>
                                                <td>
                                                    <a aria-label="anchor" class="me-1" data-bs-toggle="tooltip" data-bs-original-title="Edit">
                                                        <i class="mdi mdi-pencil-outline fs-16 text-muted"></i>
                                                    </a>
                                                    <a aria-label="anchor" class="" data-bs-toggle="tooltip" data-bs-original-title="Delete">
                                                        <i class="mdi mdi-delete fs-16 text-muted"></i>
                                                    </a>
                                                </td>
                                            </tr> 
                                        @empty
                                            No Product found
                                        @endforelse
                                    @endif
                                </tbody>
                                <!-- end tbody -->
                            </table>
                            <!-- end table -->
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection