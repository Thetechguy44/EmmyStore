@extends('dashboard.layout.app')
@section('title', 'Add Products')
@section('content')
    <style>
        .image-preview-container {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 15px;
        }
        .image-preview {
            width: 100px;
            height: 100px;
            border-radius: 5px;
            border: 1px solid #ddd;
            overflow: hidden;
            position: relative;
        }
        .image-preview img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .remove-image {
            position: absolute;
            top: 0;
            right: 0;
            background: rgba(255,255,255,0.8);
            border-radius: 50%;
            width: 20px;
            height: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            font-size: 12px;
        }
        .avatar-sm {
            width: 40px;
            height: 40px;
            object-fit: cover;
        }
        .card {
            box-shadow: 0 0.15rem 1.75rem 0 rgba(58, 59, 69, 0.15);
            border: 1px solid #e3e6f0;
        }
        .badge {
            font-size: 0.75em;
        }
    </style>
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
                            <form action="{{ route('store.product') }}" method="POST" enctype="multipart/form-data" id="productForm">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="name" class="form-label">Name</label>
                                            <input type="text" id="name" name="name" class="form-control" placeholder="Furniture Name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="category" class="form-label">Category</label>
                                            <input type="text" id="category" name="category" class="form-control" placeholder="Product Category">
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="price" class="form-label">Price</label>
                                            <input type="number" id="price" name="price" class="form-control" step="0.01" min="0" placeholder="0.00" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="discount_price" class="form-label">Discount Price (Optional)</label>
                                            <input type="number" id="discount_price" name="discount_price" class="form-control" step="0.01" min="0" placeholder="0.00">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="stock" class="form-label">Stock (Available)</label>
                                            <input type="number" id="stock" name="stock" class="form-control" min="0" placeholder="0" required>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea class="form-control" id="description" name="description" rows="5" spellcheck="false" required></textarea>
                                </div>
                                
                                <div class="mb-3">
                                    <label for="brand" class="form-label">Brand</label>
                                    <input type="text" id="brand" name="brand" class="form-control" placeholder="Product Brand">
                                </div>
                                
                                <div class="mb-4">
                                    <label class="form-label">Product Images</label>
                                    <div class="input-group">
                                        <input type="file" class="form-control" id="productImages" name="images[]" accept="image/*" multiple required>
                                        <label class="input-group-text" for="productImages">Upload</label>
                                    </div>
                                    <small class="form-text text-muted">You can select multiple images</small>
                                    
                                    <div class="image-preview-container" id="imagePreview"></div>
                                </div>
                                
                                <div class="form-check mb-3">
                                    <input type="checkbox" class="form-check-input" id="is_active" name="is_active" value="1" checked>
                                    <label class="form-check-label" for="is_active">Active Product</label>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Image preview functionality
        document.getElementById('productImages').addEventListener('change', function(e) {
            const previewContainer = document.getElementById('imagePreview');
            previewContainer.innerHTML = '';
            
            const files = e.target.files;
            
            for (let i = 0; i < files.length; i++) {
                const file = files[i];
                
                if (!file.type.match('image.*')) {
                    continue;
                }
                
                const reader = new FileReader();
                
                reader.onload = function(e) {
                    const previewDiv = document.createElement('div');
                    previewDiv.className = 'image-preview';
                    
                    const img = document.createElement('img');
                    img.src = e.target.result;
                    
                    const removeBtn = document.createElement('div');
                    removeBtn.className = 'remove-image';
                    removeBtn.innerHTML = '&times;';
                    removeBtn.onclick = function() {
                        previewDiv.remove();
                        // Create a new FileList without the removed image would require more complex logic
                        // For simplicity, we'll just remove the preview and handle it on server side
                    };
                    
                    previewDiv.appendChild(img);
                    previewDiv.appendChild(removeBtn);
                    previewContainer.appendChild(previewDiv);
                }
                
                reader.readAsDataURL(file);
            }
        });
        
        // Form validation
        document.getElementById('productForm').addEventListener('submit', function(e) {
            const price = parseFloat(document.getElementById('price').value);
            const discountPrice = parseFloat(document.getElementById('discount_price').value) || 0;
            
            if (discountPrice > price) {
                e.preventDefault();
                alert('Discount price cannot be higher than regular price.');
                return false;
            }
            
            const imageInput = document.getElementById('productImages');
            if (imageInput.files.length === 0) {
                e.preventDefault();
                alert('Please select at least one product image.');
                return false;
            }
        });
    </script>
@endsection