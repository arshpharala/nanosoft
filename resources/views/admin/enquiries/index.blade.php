@extends('admin.layouts.app')
@section('content')
    <div class="main-content">
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Enquiries</div>
        </div>

        <div class="row g-3 mb-3">
            <div class="col-auto">
                <div class="position-relative">
                    <input id="searchInput" class="form-control px-5" type="search" placeholder="Search">
                    <span
                        class="material-icons-outlined position-absolute ms-3 translate-middle-y start-0 top-50 fs-5">search</span>
                </div>
            </div>
            <div class="col-auto flex-grow-1 overflow-auto"></div>
        </div><!--end row-->

        <div class="card mt-4">
            <div class="card-body">
                <div class="product-table">
                    <div class="table-responsive white-space-nowrap">
                        <table id="enquiryTable" class="table align-middle">
                            <thead class="table-light">
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Company</th>
                                    <th>Service</th>
                                    <th>IP</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($enquiries as $enquiry)
                                    <tr>
                                        <td>{{ $enquiry->id }}</td>
                                        <td>{{ $enquiry->first_name }} {{ $enquiry->last_name }}</td>
                                        <td>{{ $enquiry->email }}</td>
                                        <td>{{ $enquiry->company }}</td>
                                        <td>{{ $enquiry->service_id ? optional($enquiry->service)->title : '-' }}</td>
                                        <td>{{ $enquiry->ip }}</td>
                                        <td>{{ $enquiry->created_at->format('Y-m-d H:i') }}</td>
                                        <td>
                                            <a href="{{ route('admin.enquiries.show', $enquiry->id) }}"
                                                class="btn btn-sm btn-info">View</a>
                                            <button type="button" class="btn btn-sm btn-danger btn-delete"
                                                data-url="{{ route('admin.enquiries.destroy', $enquiry->id) }}">Delete</button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    @endsection

    @push('script')
        <script>
            $(document).ready(function() {
                var table = $('#enquiryTable').DataTable({
                    "order": [],
                    "language": {
                        "search": "",
                        "searchPlaceholder": "Search Enquiry"
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
