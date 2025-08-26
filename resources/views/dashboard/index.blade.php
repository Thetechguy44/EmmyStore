@extends('dashboard.layout.app')
@section('title', 'Dashboard')
@section('content')
    <div class="content">

        <!-- Start Content-->
        <div class="container-fluid">
            <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
                <div class="flex-grow-1">
                    <h4 class="fs-18 fw-semibold m-0">Dashboard</h4>
                </div>
            </div>
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

            <!-- start row -->
            <div class="row mb-4">

                <div class="col-md-12 col-xl-12">
                    <div class="row g-3">

                        <div class="col-md-6 col-xl-6">
                            <div class="card mb-0">
                                <div class="card-body">
                                    <div class="widget-first">

                                        <div class="d-flex align-items-center mb-2">
                                            <div class="p-2 border border-primary border-opacity-10 bg-primary-subtle rounded-pill me-2">
                                                <div class="bg-primary rounded-circle widget-size text-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"><path fill="#ffffff" d="M12 4a4 4 0 0 1 4 4a4 4 0 0 1-4 4a4 4 0 0 1-4-4a4 4 0 0 1 4-4m0 10c4.42 0 8 1.79 8 4v2H4v-2c0-2.21 3.58-4 8-4"/></svg>
                                                </div>
                                            </div>
                                            <p class="mb-0 text-dark fs-15">Total Products</p>
                                        </div>

                                        <div class="d-flex justify-content-between align-items-center">
                                            <h3 class="mb-0 fs-22 text-black me-3">{{ $products->count()}}</h3>
                                            {{-- <div class="text-center">
                                                <span class="text-primary fs-14"><i class="mdi mdi-trending-up fs-14"></i> 12.5%</span>
                                                <p class="text-dark fs-13 mb-0">Last 7 days</p>
                                            </div> --}}
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-xl-6">
                            <div class="card mb-0">
                                <div class="card-body">
                                    <div class="widget-first">

                                        <div class="d-flex align-items-center mb-2">
                                            <div class="p-2 border border-secondary border-opacity-10 bg-secondary-subtle rounded-pill me-2">
                                                <div class="bg-secondary rounded-circle widget-size text-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 640 512"><path fill="#ffffff" d="M96 224c35.3 0 64-28.7 64-64s-28.7-64-64-64s-64 28.7-64 64s28.7 64 64 64m448 0c35.3 0 64-28.7 64-64s-28.7-64-64-64s-64 28.7-64 64s28.7 64 64 64m32 32h-64c-17.6 0-33.5 7.1-45.1 18.6c40.3 22.1 68.9 62 75.1 109.4h66c17.7 0 32-14.3 32-32v-32c0-35.3-28.7-64-64-64m-256 0c61.9 0 112-50.1 112-112S381.9 32 320 32S208 82.1 208 144s50.1 112 112 112m76.8 32h-8.3c-20.8 10-43.9 16-68.5 16s-47.6-6-68.5-16h-8.3C179.6 288 128 339.6 128 403.2V432c0 26.5 21.5 48 48 48h288c26.5 0 48-21.5 48-48v-28.8c0-63.6-51.6-115.2-115.2-115.2m-223.7-13.4C161.5 263.1 145.6 256 128 256H64c-35.3 0-64 28.7-64 64v32c0 17.7 14.3 32 32 32h65.9c6.3-47.4 34.9-87.3 75.2-109.4"/></svg>
                                                </div>
                                            </div>
                                            <p class="mb-0 text-dark fs-15">Total Banner</p>
                                        </div>

                                        <div class="d-flex justify-content-between align-items-center">
                                            <h3 class="mb-0 fs-22 text-black me-3">{{ $banners->count() }}</h3>
                                            {{-- <div class="text-center">
                                                <span class="text-danger fs-14 me-2"><i class="mdi mdi-trending-down fs-14"></i> 1.5%</span>
                                                <p class="text-dark fs-13 mb-0">Last 7 days</p>
                                            </div> --}}
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end start -->

            <!-- Start Monthly Sales -->
            <div class="row">
                <div class="col-md-12 col-xl-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="d-flex align-items-center">
                                <h5 class="card-title text-black mb-0">Latest Products</h5>
                            </div>
                        </div>

                        <div class="card-body">
                            <ul class="list-group list-group-flush list-group-no-gutters">
                                @forelse ($products as $product)
                                    <li class="list-group-item">
                                        <div class="d-flex">

                                            <div class="flex-shrink-0 align-self-center">
                                                <!-- Avatar -->
                                                <div class="align-content-center text-center border border-dashed rounded-circle p-1">
                                                    <img src="{{ asset('images/products/' . $product->image) }}" class="avatar avatar-sm rounded-circle">
                                                </div>
                                                <!-- End Avatar -->
                                            </div>

                                            <div class="flex-grow-1 ms-3 align-content-center">
                                                <div class="row">
                                                    <div class="col-7 col-md-5 order-md-1">
                                                        <h6 class="mb-1 text-black fs-15">{{ $product->name }}</h6>
                                                        {{-- <span class="fs-14 text-muted">Transfer to bank account</span> --}}
                                                    </div>

                                                    <div class="col-5 col-md-4 order-md-3 text-end mt-2 mt-md-0">
                                                        <h6 class="mb-1 text-black fs-14">{{ $product->price }} NGN</h6>
                                                        <span class="fs-13 text-muted">{{ $product->created_at->format('d M, Y') }}</span>
                                                    </div>

                                                    <div class="col-auto col-md-3 order-md-2 align-self-center">
                                                        @if ($product->is_active === 1)
                                                            <span class="badge bg-success-subtle text-success fw-semibold rounded-pill">Active</span>
                                                        @else
                                                            <span class="badge bg-danger-subtle text-danger fw-semibold rounded-pill">Inactive</span>
                                                        @endif
                                                    </div>
                                                </div>
                                                <!-- End Row -->
                                            </div>

                                        </div>
                                    </li>
                                @empty
                                    <tr>
                                        <td colspan="2" class="text-center">No Products found.</td>
                                    </tr>
                                @endforelse

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Monthly Sales -->

            <div class="row">

                <div class="col-xl-12">
                    <div class="card overflow-hidden">

                        <div class="card-header">
                            <div class="d-flex align-items-center">
                                <h5 class="card-title text-black mb-0">Banners</h5>
                            </div>
                        </div>

                        <div class="card-body mt-0">
                            <div class="table-responsive table-card mt-0">
                                <table class="table table-borderless table-centered align-middle table-nowrap mb-0">
                                    <thead class="text-muted table-light">
                                        <tr>
                                            <th scope="col" class="cursor-pointer">Title</th>
                                            <th scope="col" class="cursor-pointer">Image</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($banners as $banner)
                                            <tr>
                                                <td>
                                                    {{ $banner->title }}
                                                </td>
                                                <td><img src="{{ asset('images/banners/' . $banner->image_path) }}" class="avatar avatar-sm rounded-circle me-3"></td>
                                            </tr>
                                            
                                        @empty
                                            <tr>
                                                <td colspan="2" class="text-center">No Banners found.</td>
                                            </tr>
                                        @endforelse
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
        <!-- container-fluid -->
    </div>
@endsection