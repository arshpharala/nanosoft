@extends('admin.layouts.app')
@section('content')
<div class="main-content">
    <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Enquiry Details</div>
    </div>
    <div class="card mt-4">
        <div class="card-body">
            <h5>Name: {{ $enquiry->first_name }} {{ $enquiry->last_name }}</h5>
            <p><b>Email:</b> {{ $enquiry->email }}</p>
            <p><b>Company:</b> {{ $enquiry->company }}</p>
            <p><b>Phone:</b> {{ $enquiry->phone }}</p>
            <p><b>Service:</b> {{ $enquiry->service_id ? optional($enquiry->service)->title : '-' }}</p>
            <p><b>Message:</b> {{ $enquiry->message }}</p>
            <p><b>IP:</b> {{ $enquiry->ip }}</p>
            <p><b>Date:</b> {{ $enquiry->created_at->format('Y-m-d H:i') }}</p>
        </div>
    </div>
</div>
@endsection
