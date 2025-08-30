@extends('dashboard.layout.app')
@section('title', 'Profile')
@section('content')
<div class="container-fluid">
    <div class="py-3 d-flex align-items-sm-center flex-sm-row flex-column">
        <div class="flex-grow-1">
            <h4 class="fs-18 fw-semibold m-0">Profile</h4>
        </div>

        {{-- <div class="text-end">
            <ol class="breadcrumb m-0 py-0">
                <li class="breadcrumb-item"><a href="javascript: void(0);">Components</a></li>
                <li class="breadcrumb-item active">Profile</li>
            </ol>
        </div> --}}
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                {{-- <img src="assets/images/small/user-image.jpg" class="rounded-top-2 img-fluid" alt="image data"> --}}

                <div class="card-body">
                    <div class="align-items-center">
                        
                        <div class="silva-main-sections">
                            {{-- <div class="silva-profile-main">
                                <img src="assets/images/users/user-11.jpg" class="rounded-circle img-fluid avatar-xxl img-thumbnail float-start" alt="image profile">
                            </div> --}}

                            @php
                                $nameParts = explode(' ', auth()->user()->name);
                                $initials = strtoupper(substr($nameParts[0], 0, 1) . (isset($nameParts[1]) ? substr($nameParts[1], 0, 1) : ''));
                            @endphp

                            <div class="rounded-circle bg-primary text-white d-flex align-items-center justify-content-center avatar-xxl img-thumbnail float-start" style="font-size: 24px; font-weight: bold;">
                                {{ $initials }}
                            </div>

                            <div class="overflow-hidden ms-md-4 ms-0">
                                <h4 class="m-0 text-dark fs-20 mt-2 mt-md-0">{{ auth()->user()->name }}</h4>
                                <p class="my-1 text-muted fs-16">Admin (Site Owner)</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body pt-0">
                    <ul class="nav nav-underline border-bottom pt-2" id="pills-tab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link p-2" id="setting_tab" data-bs-toggle="tab" href="#profile_setting" role="tab">
                                <span class="d-block d-sm-none"><i class="mdi mdi-information"></i></span>
                                <span class="d-none d-sm-block">Setting</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link p-2" id="friend_tab" data-bs-toggle="tab" href="#friends_setting" role="tab">
                                <span class="d-block d-sm-none"><i class="mdi mdi-all-inclusive-box"></i></span>
                                <span class="d-none d-sm-block">App Settings</span>
                            </a>
                        </li>
                    </ul>
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
                    @if (Session::has('error'))
                        <div class="toast show align-items-center text-white bg-danger border-0 mb-4" role="alert" aria-live="assertive" aria-atomic="true">
                            <div class="d-flex">
                                <div class="toast-body">
                                    {{ Session::get('error') }}
                                </div>
                                <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                            </div>
                        </div>
                    @endif

                    <div class="tab-content text-muted bg-white">
                        <div class="tab-pane active show pt-4" id="profile_setting" role="tabpanel">
                            <div class="row">

                                <div class="row">
                                    <div class="col-lg-6 col-xl-6">
                                        <form action="{{ route('profile.update') }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <div class="card border">

                                                <div class="card-header">
                                                    <div class="row align-items-center">
                                                        <div class="col">                      
                                                            <h4 class="card-title mb-0">Personal Information</h4>                      
                                                        </div><!--end col-->                                                       
                                                    </div>
                                                </div>

                                                <div class="card-body">
                                                    <div class="form-group mb-3 row">
                                                        <label class="form-label">Name</label>
                                                        <div class="col-lg-12 col-xl-12">
                                                            <input class="form-control" name="name" type="text" value="{{ auth()->user()->name }}">
                                                        </div>
                                                    </div>

                                                    <div class="form-group mb-3 row">
                                                        <label class="form-label">Contact Phone</label>
                                                        <div class="col-lg-12 col-xl-12">
                                                            <div class="input-group">
                                                                <span class="input-group-text"><i class="mdi mdi-phone-outline"></i></span>
                                                                <input class="form-control" name="phone" type="text" placeholder="Phone" aria-describedby="basic-addon1" value="{{ auth()->user()->phone }}">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group mb-3 row">
                                                        <label class="form-label">Email Address</label>
                                                        <div class="col-lg-12 col-xl-12">
                                                            <div class="input-group">
                                                                <span class="input-group-text"><i class="mdi mdi-email"></i></span>
                                                                <input type="text" class="form-control" name="email" value="{{ auth()->user()->email }}" placeholder="Email" aria-describedby="basic-addon1">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group mb-3 row">
                                                        <label class="form-label">Company</label>
                                                        <div class="col-lg-12 col-xl-12">
                                                            <input class="form-control" type="text" name="company" value="{{ auth()->user()->company }}">
                                                        </div>
                                                    </div>

                                                    <div class="form-group mb-3 row">
                                                        <label class="form-label">City</label>
                                                        <div class="col-lg-12 col-xl-12">
                                                            <input class="form-control" type="text" name="city" value="{{ auth()->user()->city }}">
                                                        </div>
                                                    </div>

                                                    <div class="form-group mb-3 row">
                                                        <label class="form-label">Address</label>
                                                        <div class="col-lg-12 col-xl-12">
                                                            <input class="form-control" type="text" name="address" value="{{ auth()->user()->address }}">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <div class="col-lg-12 col-xl-12">
                                                            <button type="submit" class="btn btn-primary mb-2 mb-md-0">Save</button>
                                                            {{-- <button type="button" class="btn btn-danger">Cancel</button> --}}
                                                        </div>
                                                    </div>

                                                </div><!--end card-body-->
                                            </div>
                                        </form>
                                    </div>

                                    <div class="col-lg-6 col-xl-6">
                                        <form action="{{ route('profile.change.password') }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                            <div class="card border mb-0">

                                                <div class="card-header">
                                                    <div class="row align-items-center">
                                                        <div class="col">                      
                                                            <h4 class="card-title mb-0">Change Password</h4>                      
                                                        </div><!--end col-->                                                       
                                                    </div>
                                                </div>

                                                <div class="card-body mb-0">
                                                    <div class="form-group mb-3 row">
                                                        <label class="form-label">Old Password</label>
                                                        <div class="col-lg-12 col-xl-12">
                                                            <input class="form-control" name="current_password" type="password" placeholder="Old Password">
                                                        </div>
                                                    </div>
                                                    <div class="form-group mb-3 row">
                                                        <label class="form-label">New Password</label>
                                                        <div class="col-lg-12 col-xl-12">
                                                            <input class="form-control" name="new_password" type="password" placeholder="New Password">
                                                        </div>
                                                    </div>
                                                    <div class="form-group mb-3 row">
                                                        <label class="form-label">Confirm Password</label>
                                                        <div class="col-lg-12 col-xl-12">
                                                            <input class="form-control" name="new_password_confirmation" type="password" placeholder="Confirm Password">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <div class="col-lg-12 col-xl-12">
                                                            <button type="submit" class="btn btn-primary mb-2 mb-md-0">Change Password</button>
                                                            {{-- <button type="button" class="btn btn-danger">Cancel</button> --}}
                                                        </div>
                                                    </div>

                                                </div><!--end card-body-->
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="tab-pane pt-4" id="friends_setting" role="tabpanel">
                            <div class="row">

                                <div class="row">
                                    <div class="col-lg-6 col-xl-6">
                                        <form action="{{ route('profile.update.settings') }}" method="POST">
                                            @csrf
                                            @method('PUT')
                                            <div class="card border">

                                                <div class="card-header">
                                                    <div class="row align-items-center">
                                                        <div class="col">                      
                                                            <h4 class="card-title mb-0">App Information</h4>                      
                                                        </div><!--end col-->                                                       
                                                    </div>
                                                </div>

                                                <div class="card-body">
                                                    <div class="form-group mb-3 row">
                                                        <label class="form-label">Company Name</label>
                                                        <div class="col-lg-12 col-xl-12">
                                                            <input class="form-control" name="company_name" type="text" value="{{ $setting->company_name ?? '' }}">
                                                        </div>
                                                    </div>

                                                    <div class="form-group mb-3 row">
                                                        <label class="form-label">Company Phone</label>
                                                        <div class="col-lg-12 col-xl-12">
                                                            <div class="input-group">
                                                                <span class="input-group-text"><i class="mdi mdi-phone-outline"></i></span>
                                                                <input class="form-control" name="company_phone" type="text" placeholder="Phone" aria-describedby="basic-addon1" value="{{ $setting->company_phone ?? '' }}">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group mb-3 row">
                                                        <label class="form-label">Company Email Address</label>
                                                        <div class="col-lg-12 col-xl-12">
                                                            <div class="input-group">
                                                                <span class="input-group-text"><i class="mdi mdi-email"></i></span>
                                                                <input type="text" class="form-control" name="company_email" value="{{ $setting->company_email ?? '' }}" placeholder="Email" aria-describedby="basic-addon1">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group mb-3 row">
                                                        <label class="form-label">About Company</label>
                                                        <div class="col-lg-12 col-xl-12">
                                                            <textarea class="form-control" type="text" name="company_description">{{ $setting->company_description ?? '' }}</textarea>
                                                        </div>
                                                    </div>

                                                    <div class="form-group mb-3 row">
                                                        <label class="form-label">Country</label>
                                                        <div class="col-lg-12 col-xl-12">
                                                            <input class="form-control" type="text" name="company_country" value="{{ $setting->company_country ?? '' }}">
                                                        </div>
                                                    </div>

                                                    <div class="form-group mb-3 row">
                                                        <label class="form-label">City</label>
                                                        <div class="col-lg-12 col-xl-12">
                                                            <input class="form-control" type="text" name="company_city" value="{{ $setting->company_city ?? '' }}">
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group mb-3 row">
                                                        <label class="form-label">State</label>
                                                        <div class="col-lg-12 col-xl-12">
                                                            <input class="form-control" type="text" name="company_state" value="{{ $setting->company_state ?? '' }}">
                                                        </div>
                                                    </div>

                                                    <div class="form-group mb-3 row">
                                                        <label class="form-label">Address</label>
                                                        <div class="col-lg-12 col-xl-12">
                                                            <input class="form-control" type="text" name="company_address" value="{{ $setting->company_address ?? '' }}">
                                                        </div>
                                                    </div>
                                                    <div class="form-group mb-3 row">
                                                        <label class="form-label">Whatsapp No</label>
                                                        <div class="col-lg-12 col-xl-12">
                                                            <input class="form-control" type="text" name="company_whatsapp" value="{{ $setting->company_whatsapp ?? '' }}">
                                                        </div>
                                                    </div>

                                                    <div class="form-group mb-3 row">
                                                        <label class="form-label">Facebook URL</label>
                                                        <div class="col-lg-12 col-xl-12">
                                                            <input class="form-control" type="text" name="company_facebook" value="{{ $setting->company_facebook ?? '' }}">
                                                        </div>
                                                    </div>

                                                    <div class="form-group mb-3 row">
                                                        <label class="form-label">Instagram URL</label>
                                                        <div class="col-lg-12 col-xl-12">
                                                            <input class="form-control" type="text" name="company_instagram" value="{{ $setting->company_instagram ?? '' }}">
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="form-group mb-3 row">
                                                        <label class="form-label">Twitter(X) URL</label>
                                                        <div class="col-lg-12 col-xl-12">
                                                            <input class="form-control" type="text" name="company_twitter" value="{{ $setting->company_twitter ?? '' }}">
                                                        </div>
                                                    </div>

                                                    <div class="form-group mb-3 row">
                                                        <label class="form-label">Footer</label>
                                                        <div class="col-lg-12 col-xl-12">
                                                            <textarea class="form-control" type="text" name="company_footer">{{ $setting->company_footer ?? '' }}</textarea>
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <div class="col-lg-12 col-xl-12">
                                                            <button type="submit" class="btn btn-primary mb-2 mb-md-0">Save</button>
                                                        </div>
                                                    </div>

                                                </div><!--end card-body-->
                                            </div>
                                        </form>
                                    </div>
                                    <div class="col-lg-6 col-xl-6">
                                        <form action="{{ route('profile.update.settings') }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                            <div class="card border mb-0">

                                                <div class="card-header">
                                                    <div class="row align-items-center">
                                                        <div class="col">                      
                                                            <h4 class="card-title mb-0">Logo Section</h4>                      
                                                        </div><!--end col-->                                                       
                                                    </div>
                                                </div>

                                                <div class="card-body mb-0">
                                                    @if ($setting && $setting->company_logo)
                                                        <div class="form-group mb-3 row">
                                                            <div class="col-lg-4 col-xl-4">
                                                                <img src="{{ asset('images/logos/' . $setting->company_logo) }}" alt="Logo" class="img-fluid">
                                                            </div>
                                                        </div>
                                                    @endif
                                                    <div class="form-group mb-3 row">
                                                        <label class="form-label">Logo</label>
                                                        <div class="col-lg-12 col-xl-12">
                                                            <input class="form-control" name="company_logo" type="file">
                                                        </div>
                                                    </div>

                                                    @if ($setting && $setting->company_favicon)
                                                        <div class="form-group mb-3 row">
                                                            <div class="col-lg-4 col-xl-4">
                                                                <img src="{{ asset('images/logos/' . $setting->company_favicon) }}" alt="Favicon" class="img-fluid">
                                                            </div>
                                                        </div>
                                                    @endif
                                                    <div class="form-group mb-3 row">
                                                        <label class="form-label">Favicon</label>
                                                        <div class="col-lg-12 col-xl-12">
                                                            <input class="form-control" name="company_favicon" type="file">
                                                        </div>
                                                    </div>

                                                    <div class="form-group row">
                                                        <div class="col-lg-12 col-xl-12">
                                                            <button type="submit" class="btn btn-primary mb-2 mb-md-0">Save</button>
                                                        </div>
                                                    </div>

                                                </div><!--end card-body-->
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- end education -->
                    </div>
                </div>
            </div>
        </div>
    </div>

</div> 
@endsection