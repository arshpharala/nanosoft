@extends('admin.layouts.app')
@section('content')
    <div class="main-content">

        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Benefits</div>
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

        <div class="row g-3 mb-3">
            <div class="col-auto">
                <div class="position-relative">
                    <input id="searchInput" class="form-control px-5" type="search" placeholder="Search">
                    <span
                        class="material-icons-outlined position-absolute ms-3 translate-middle-y start-0 top-50 fs-5">search</span>
                </div>
            </div>
            <div class="col-auto flex-grow-1 overflow-auto"></div>
            <div class="col-auto">
                <div class="d-flex align-items-center gap-2 justify-content-lg-end">
                    <a class="btn btn-primary px-4" href="{{ route('admin.service.benefits.create', $service->id) }}"><i
                            class="bi bi-plus-lg me-2"></i>Add Benefit</a>
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
                                    <th>Service</th>
                                    <th>Benefit</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($benefits as $benefit)
                                    <tr>
                                        <td>{{ $service->title ?? '-' }}</td>
                                        <td>{{ $benefit->title ?? '-' }}</td>

                                        <td>
                                            {{ $service->created_at->format('M d, H:i A') }}
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.service.benefits.edit', ['service' => $service->id, 'benefit' => $benefit->id]) }}"
                                                class="btn btn-sm btn-warning">Edit</a>
                                            <button type="button" class="btn btn-sm btn-danger btn-delete"
                                                data-url="{{ route('admin.service.benefits.destroy', ['service' => $service->id, 'benefit' => $benefit->id]) }}">Delete</button>
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
