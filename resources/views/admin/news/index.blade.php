@extends('admin.layouts.app')
@section('content')
    <div class="main-content">

        <!--breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">News</div>
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
                    <a class="btn btn-primary px-4" href="{{ route('admin.news.create') }}"><i
                            class="bi bi-plus-lg me-2"></i>Add News</a>
                </div>
            </div>
        </div><!--end row-->

        <div class="card mt-4">
            <div class="card-body">
                <div class="product-table">
                    <div class="table-responsive white-space-nowrap">
                        <table id="newsTable" class="table align-middle">
                            <thead class="table-light">
                                <tr>
                                    <th>Title</th>
                                    <th>Category</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($news as $n)
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center gap-3">
                                                <div class="product-box">
                                                    <img src="assets/images/orders/01.png" width="70" class="rounded-3"
                                                    alt="">
                                                </div>
                                                <div class="product-info">
                                                    <a href="javascript:;" class="product-title">{{ $n->title }}</a>
                                                    <p class="mb-0 product-category">{{ $n->slug }}</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>{{ $n->category->name ?? '-' }}</td>
                                        <td>
                                            {{ $n->created_at->format('M d, H:i A') }}
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.news.edit', $n->id) }}"
                                                class="btn btn-sm btn-warning">Edit</a>
                                            <button type="button" class="btn btn-sm btn-danger btn-delete"
                                                data-url="{{ route('admin.news.destroy', $n->id) }}">Delete</button>
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
                var table = $('#newsTable').DataTable({
                    "order": [],
                    "language": {
                        "search": "",
                        "searchPlaceholder": "Search news"
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
