@extends('admin.layouts.app')
@section('content')
    <div class="main-content">

        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Services</div>
            <div class="ps-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-0 p-0">
                        <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a></li>
                        <li class="breadcrumb-item active" aria-current="page">List</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!--end breadcrumb-->

        <div class="product-count d-flex align-items-center gap-3 gap-lg-4 mb-4 fw-medium flex-wrap font-text1">
            <a href="javascript:;"><span class="me-1">All</span><span
                    class="text-secondary">({{ $services->count() }})</span></a>
            <a href="javascript:;"><span class="me-1">Active</span><span
                    class="text-secondary">({{ $services->where('is_active', 1)->count() }})</span></a>
            <a href="javascript:;"><span class="me-1">Inactive</span><span
                    class="text-secondary">({{ $services->where('is_active', 0)->count() }})</span></a>
        </div>

        <div class="row g-3 mb-3">
            <div class="col-auto">
                <div class="position-relative">
                    <input id="searchInput" class="form-control px-5" type="search" placeholder="Search">
                    <span
                        class="material-icons-outlined position-absolute ms-3 translate-middle-y start-0 top-50 fs-5">search</span>
                </div>
            </div>
            <div class="col-auto">
                <select id="categoryFilter" class="form-select" aria-label="Filter by Category">
                    <option value="">Filter by Category</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->name }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-auto flex-grow-1 overflow-auto"></div>
            <div class="col-auto">
                <div class="d-flex align-items-center gap-2 justify-content-lg-end">
                    <a class="btn btn-primary px-4" href="{{ route('admin.services.create') }}"><i
                            class="bi bi-plus-lg me-2"></i>Add Service</a>
                </div>
            </div>
        </div><!--end row-->

        <div class="card mt-4">
            <div class="card-body">
                <div class="product-table">
                    <div class="table-responsive white-space-nowrap">
                        <table id="servicesTable" class="table align-middle">
                            <thead class="table-light">
                                <tr>
                                    <th>Category</th>
                                    <th>Service Name</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($services as $service)
                                    <tr>
                                        <td>{{ $service->category->name ?? '-' }}</td>
                                        <td>
                                            <div class="d-flex align-items-center gap-3">
                                                <div class="product-box">
                                                    <img src="assets/images/orders/01.png" width="70" class="rounded-3"
                                                        alt="">
                                                </div>
                                                <div class="product-info">
                                                    <a href="javascript:;" class="product-title">{{ $service->title }}</a>
                                                    <p class="mb-0 product-category">{{ $service->slug }}</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            @if ($service->is_active)
                                                <span
                                                    class="lable-table bg-success-subtle text-success rounded border border-success-subtle font-text2 fw-bold">
                                                    Active
                                                </span>
                                            @else
                                                <span
                                                    class="lable-table bg-danger-subtle text-danger rounded border border-danger-subtle font-text2 fw-bold">
                                                    Inactive
                                                </span>
                                            @endif
                                        </td>
                                        <td>
                                            {{ $service->created_at->format('M d, H:i A') }}
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.services.edit', $service->id) }}"
                                                class="btn btn-sm btn-warning">Edit</a>
                                            <button type="button" class="btn btn-sm btn-danger btn-delete"
                                                data-url="{{ route('admin.services.destroy', $service->id) }}">Delete</button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('script')
        <script>
            $(document).ready(function() {
                var table = $('#servicesTable').DataTable({
                    "order": [],
                    "language": {
                        "search": "",
                        "searchPlaceholder": "Search services"
                    }
                });

                // Custom search input to link with DataTables
                $('#searchInput').on('keyup', function() {
                    table.search(this.value).draw();
                });

                // Filter by Category dropdown
                $('#categoryFilter').on('change', function() {
                    var val = $.fn.dataTable.util.escapeRegex($(this).val());
                    table.column(0).search(val ? '^' + val + '$' : '', true, false).draw();
                });
            });
        </script>
    @endpush
@endsection
