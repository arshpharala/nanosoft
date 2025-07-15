@extends('admin.layouts.app')
@section('content')
    <div class="main-content">
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
            <div class="breadcrumb-title pe-3">Statistic</div>
        </div>

        <form action="{{ route('admin.statistics.update', $statistic->id) }}" method="POST" enctype="multipart/form-data" class="ajax-form">
            @csrf
            @method('PUT')

            <div class="row">
                <div class="col-12 col-lg-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="mb-4">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    value="{{ old('name', $statistic->name) }}" required>
                            </div>
                            <div class="mb-4">
                                <label for="description" class="form-label">Description</label>
                                <textarea class="form-control" name="description" cols="4" rows="6"
                                    placeholder="Write a description here.." required>{{ $statistic->description }}</textarea>
                            </div>
                            <div class="mb-4">
                                <label for="icon" class="form-label">Icon</label>
                                <input type="file" class="form-control" name="icon" accept=".jpg,.jpeg,.png,.svg">
                                @if ($statistic->icon)
                                    <div class="mt-2">
                                        <img src="{{ asset('storage/' . $statistic->icon) }}" width="60" alt="icon">
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center gap-3">
                                <a href="{{ route('admin.categories.index') }}"
                                    class="btn btn-outline-danger flex-fill">Discard</a>
                                <button type="submit" class="btn btn-outline-primary flex-fill">Update</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
