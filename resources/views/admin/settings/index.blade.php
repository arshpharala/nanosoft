@extends('admin.layouts.app')

@section('content')
    <div class="main-content">
        <!-- Breadcrumb -->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Settings</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a></li>
                        <li class="breadcrumb-item active" aria-current="page">Website Settings</li>
                    </ol>
                </nav>
            </div>
        </div>

        <form action="{{ route('admin.settings.store') }}" method="POST" enctype="multipart/form-data" class="ajax-form">
            @csrf

            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="card">
                        <div class="card-body">

                            <div class="mb-4">
                                <h5 class="mb-3">Site Title</h5>
                                <input type="text" class="form-control" name="site_title" value="{{ setting('site_title') }}" placeholder="Site Title">
                            </div>

                            <div class="mb-4">
                                <h5 class="mb-3">Contact Email</h5>
                                <input type="email" class="form-control" name="contact_email" value="{{ setting('contact_email') }}" placeholder="Email">
                            </div>

                            <div class="mb-4">
                                <h5 class="mb-3">Contact Phone</h5>
                                <input type="text" class="form-control" name="contact_phone" value="{{ setting('contact_phone') }}" placeholder="Phone number">
                            </div>

                            <div class="mb-4">
                                <h5 class="mb-3">Address</h5>
                                <textarea class="form-control" name="address" rows="3" placeholder="Address">{{ setting('address') }}</textarea>
                            </div>

                            <div class="mb-4">
                                <h5 class="mb-3">Header Logo</h5>
                                <input type="file" class="form-control" name="site_header_logo" accept="image/*">
                                @if(setting('site_header_logo'))
                                    <img src="{{ asset('storage/' . setting('site_header_logo')) }}" class="mt-2" width="100">
                                @endif
                            </div>

                            <div class="mb-4">
                                <h5 class="mb-3">Logo</h5>
                                <input type="file" class="form-control" name="site_logo" accept="image/*">
                                @if(setting('site_logo'))
                                    <img src="{{ asset('storage/' . setting('site_logo')) }}" class="mt-2" width="100">
                                @endif
                            </div>

                            <div class="mb-4">
                                <h5 class="mb-3">Favicon</h5>
                                <input type="file" class="form-control" name="site_favicon" accept="image/x-icon,image/png">
                                @if(setting('site_favicon'))
                                    <img src="{{ asset('storage/' . setting('site_favicon')) }}" class="mt-2" width="32">
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="mb-3">Social Links</h5>
                            <div class="row g-3">
                                <div class="col-12">
                                    <label class="form-label">Facebook</label>
                                    <input type="url" class="form-control" name="facebook" value="{{ setting('facebook') }}">
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Instagram</label>
                                    <input type="url" class="form-control" name="instagram" value="{{ setting('instagram') }}">
                                </div>
                                <div class="col-12">
                                    <label class="form-label">LinkedIn</label>
                                    <input type="url" class="form-control" name="linkedin" value="{{ setting('linkedin') }}">
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Pinterest</label>
                                    <input type="url" class="form-control" name="pinterest" value="{{ setting('pinterest') }}">
                                </div>
                                <div class="col-12">
                                    <label class="form-label">X (Twitter)</label>
                                    <input type="url" class="form-control" name="twitter" value="{{ setting('twitter') }}">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card mt-3">
                        <div class="card-body">
                            <h5 class="mb-3">Copyright</h5>
                            <input type="text" class="form-control" name="copyright" value="{{ setting('copyright') }}">
                        </div>
                    </div>

                    <div class="card mt-3">
                        <div class="card-body text-end">
                            <button type="submit" class="btn btn-outline-primary w-100">
                                <i class="bi bi-save me-2"></i>Save Settings
                            </button>
                        </div>
                    </div>
                </div>
            </div><!-- end row -->
        </form>
    </div>
@endsection
