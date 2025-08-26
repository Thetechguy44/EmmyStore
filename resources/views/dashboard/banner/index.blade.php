@extends('dashboard.layout.app')
@section('title', 'Banners')
@section('content')
    <div class="container-fluid">

        <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
            <div class="flex-grow-1">
                <h4 class="fs-18 fw-semibold m-0">Banners Tables</h4>
            </div>

            {{-- <div class="text-end">
                <ol class="breadcrumb m-0 py-0">
                    <li class="breadcrumb-item"><a href="javascript: void(0);">Tables</a></li>
                    <li class="breadcrumb-item active">Banners Tables</li>
                </ol>
            </div> --}}
        </div>

        <div class="row">
            <div class="col-xl-12">
                <div class="card overflow-hidden">

                    <div class="card-header">
                        <div class="d-flex align-items-center">
                            <h5 class="card-title text-black mb-0">All Banners</h5>
                        </div>
                    </div>

                    <div class="card-body mt-0">
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
                        <div class="table-responsive table-card mt-0">
                            <table class="table table-borderless table-centered align-middle table-nowrap mb-0">
                                <thead class="text-muted table-light">
                                    <tr>
                                        <th scope="col" class="cursor-pointer">Title</th>
                                        <th scope="col" class="cursor-pointer">Image</th>
                                        <th scope="col" class="cursor-pointer">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($banners as $banner)
                                        <tr>
                                            <td>
                                                {{ $banner->title }}
                                            </td>
                                            <td><img src="{{ asset('images/banners/' . $banner->image_path) }}" class="avatar avatar-sm rounded-circle me-3"></td>
                                            <td>
                                                <a href="{{ route('edit.banner', $banner->id) }}" aria-label="anchor" class="me-1" data-bs-toggle="tooltip" data-bs-original-title="Edit">
                                                    <i class="mdi mdi-pencil-outline fs-16 text-muted"></i>
                                                </a>
                                                <a href="#" aria-label="anchor" class="" data-bs-toggle="modal" data-bs-target="#deleteProductModal" data-product-id="{{ $banner->id }}" data-bs-original-title="Delete">
                                                    <i class="mdi mdi-delete fs-16 text-muted"></i>
                                                </a>
                                            </td>
                                        </tr> 
                                    @empty
                                        No Product found
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
    <!-- Delete Confirmation Modal -->
    <div class="modal fade" id="deleteProductModal" tabindex="-1" aria-labelledby="deleteProductModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header border-bottom-0">
                    <h5 class="modal-title" id="deleteProductModalLabel">Confirm Deletion</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center py-4">
                    <div class="mb-3">
                        <i class="mdi mdi-alert-circle-outline text-warning" style="font-size: 48px;"></i>
                    </div>
                    <h6 class="mb-2">Are you sure you want to delete this Banner?</h6>
                    <p class="text-muted mb-0">This action cannot be undone.</p>
                </div>
                <div class="modal-footer border-top-0 justify-content-center">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                    <form id="deleteProductForm" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete Banner</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const deleteModal = document.getElementById('deleteProductModal');
        const deleteForm = document.getElementById('deleteProductForm');
        
        // When modal is triggered, update the form action with the correct product ID
        deleteModal.addEventListener('show.bs.modal', function(event) {
            const button = event.relatedTarget; // Button that triggered the modal
            const productId = button.getAttribute('data-product-id');
            
            // Update the form action - adjust the route name as needed
            deleteForm.action = `{{ route('delete.banner', '') }}/${productId}`;
        });
    });
    </script>
@endsection