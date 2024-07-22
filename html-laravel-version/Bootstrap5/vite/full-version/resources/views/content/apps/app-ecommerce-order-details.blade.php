@extends('layouts/layoutMaster')

@section('title', 'eCommerce Order Details - Apps')

@section('vendor-style')
@vite([
  'resources/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.scss',
  'resources/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.scss',
  'resources/assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.scss',
  'resources/assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.scss',
  'resources/assets/vendor/libs/sweetalert2/sweetalert2.scss',
  'resources/assets/vendor/libs/select2/select2.scss',
  'resources/assets/vendor/libs/@form-validation/form-validation.scss'
])
@endsection

@section('vendor-script')
@vite([
  'resources/assets/vendor/libs/datatables-bs5/datatables-bootstrap5.js',
  'resources/assets/vendor/libs/cleavejs/cleave.js',
  'resources/assets/vendor/libs/cleavejs/cleave-phone.js',
  'resources/assets/vendor/libs/sweetalert2/sweetalert2.js',
  'resources/assets/vendor/libs/select2/select2.js',
  'resources/assets/vendor/libs/@form-validation/popular.js',
  'resources/assets/vendor/libs/@form-validation/bootstrap5.js',
  'resources/assets/vendor/libs/@form-validation/auto-focus.js'
])
@endsection

@section('page-script')
@vite([
  'resources/assets/js/app-ecommerce-order-details.js',
  'resources/assets/js/modal-add-new-address.js',
  'resources/assets/js/modal-edit-user.js'
])
@endsection

@section('content')
<div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-6 row-gap-4">

  <div class="d-flex flex-column justify-content-center">
    <div class="mb-1">
      <span class="h5">Order #32543 </span><span class="badge bg-label-success me-1 ms-2">Paid</span> <span class="badge bg-label-info">Ready to Pickup</span>
    </div>
    <p class="mb-0">Aug 17, <span id="orderYear"></span>, 5:48 (ET)</p>
  </div>
  <div class="d-flex align-content-center flex-wrap gap-2">
    <button class="btn btn-label-danger delete-order">Delete Order</button>
  </div>
</div>

<!-- Order Details Table -->

<div class="row">
  <div class="col-12 col-lg-8">
    <div class="card mb-6">
      <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="card-title m-0">Order details</h5>
        <h6 class="m-0"><a href=" javascript:void(0)">Edit</a></h6>
      </div>
      <div class="card-datatable table-responsive">
        <table class="datatables-order-details table border-top">
          <thead>
            <tr>
              <th></th>
              <th></th>
              <th class="w-50">products</th>
              <th class="w-25">price</th>
              <th class="w-25">qty</th>
              <th>total</th>
            </tr>
          </thead>
        </table>
        <div class="d-flex justify-content-end align-items-center m-6 mb-2">
          <div class="order-calculations">
            <div class="d-flex justify-content-start mb-2">
              <span class="w-px-100 text-heading">Subtotal:</span>
              <h6 class="mb-0">$2093</h6>
            </div>
            <div class="d-flex justify-content-start mb-2">
              <span class="w-px-100 text-heading">Discount:</span>
              <h6 class="mb-0">$2</h6>
            </div>
            <div class="d-flex justify-content-start mb-2">
              <span class="w-px-100 text-heading">Tax:</span>
              <h6 class="mb-0">$28</h6>
            </div>
            <div class="d-flex justify-content-start">
              <h6 class="w-px-100 mb-0">Total:</h6>
              <h6 class="mb-0">$2113</h6>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="card mb-6">
      <div class="card-header">
        <h5 class="card-title m-0">Shipping activity</h5>
      </div>
      <div class="card-body pt-1">
        <ul class="timeline pb-0 mb-0">
          <li class="timeline-item timeline-item-transparent border-primary">
            <span class="timeline-point timeline-point-primary"></span>
            <div class="timeline-event">
              <div class="timeline-header">
                <h6 class="mb-0">Order was placed (Order ID: #32543)</h6>
                <small class="text-muted">Tuesday 11:29 AM</small>
              </div>
              <p class="mt-3">Your order has been placed successfully</p>
            </div>
          </li>
          <li class="timeline-item timeline-item-transparent border-primary">
            <span class="timeline-point timeline-point-primary"></span>
            <div class="timeline-event">
              <div class="timeline-header">
                <h6 class="mb-0">Pick-up</h6>
                <small class="text-muted">Wednesday 11:29 AM</small>
              </div>
              <p class="mt-3 mb-3">Pick-up scheduled with courier</p>
            </div>
          </li>
          <li class="timeline-item timeline-item-transparent border-primary">
            <span class="timeline-point timeline-point-primary"></span>
            <div class="timeline-event">
              <div class="timeline-header">
                <h6 class="mb-0">Dispatched</h6>
                <small class="text-muted">Thursday 11:29 AM</small>
              </div>
              <p class="mt-3 mb-3">Item has been picked up by courier</p>
            </div>
          </li>
          <li class="timeline-item timeline-item-transparent border-primary">
            <span class="timeline-point timeline-point-primary"></span>
            <div class="timeline-event">
              <div class="timeline-header">
                <h6 class="mb-0">Package arrived</h6>
                <small class="text-muted">Saturday 15:20 AM</small>
              </div>
              <p class="mt-3 mb-3">Package arrived at an Amazon facility, NY</p>
            </div>
          </li>
          <li class="timeline-item timeline-item-transparent border-left-dashed">
            <span class="timeline-point timeline-point-primary"></span>
            <div class="timeline-event">
              <div class="timeline-header">
                <h6 class="mb-0">Dispatched for delivery</h6>
                <small class="text-muted">Today 14:12 PM</small>
              </div>
              <p class="mt-3 mb-3">Package has left an Amazon facility, NY</p>
            </div>
          </li>
          <li class="timeline-item timeline-item-transparent border-transparent pb-0">
            <span class="timeline-point timeline-point-secondary"></span>
            <div class="timeline-event pb-0">
              <div class="timeline-header">
                <h6 class="mb-0">Delivery</h6>
              </div>
              <p class="mt-1 mb-0">Package will be delivered by tomorrow</p>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="col-12 col-lg-4">
    <div class="card mb-6">
      <div class="card-header">
        <h5 class="card-title m-0">Customer details</h5>
      </div>
      <div class="card-body">
        <div class="d-flex justify-content-start align-items-center mb-6">
          <div class="avatar me-3">
            <img src="{{asset('assets/img/avatars/1.png')}}" alt="Avatar" class="rounded-circle">
          </div>
          <div class="d-flex flex-column">
            <a href="{{url('app/user/view/account')}}" class="text-body text-nowrap">
              <h6 class="mb-0">Shamus Tuttle</h6>
            </a>
            <span>Customer ID: #58909</span></div>
        </div>
        <div class="d-flex justify-content-start align-items-center mb-6">
          <span class="avatar rounded-circle bg-label-success me-3 d-flex align-items-center justify-content-center"><i class='ti ti-shopping-cart ti-lg'></i></span>
          <h6 class="text-nowrap mb-0">12 Orders</h6>
        </div>
        <div class="d-flex justify-content-between">
          <h6 class="mb-1">Contact info</h6>
          <h6 class="mb-1"><a href=" javascript:void(0)" data-bs-toggle="modal" data-bs-target="#editUser">Edit</a></h6>
        </div>
        <p class=" mb-1">Email: Shamus889@yahoo.com</p>
        <p class=" mb-0">Mobile: +1 (609) 972-22-22</p>
      </div>
    </div>

    <div class="card mb-6">

      <div class="card-header d-flex justify-content-between">
        <h5 class="card-title m-0">Shipping address</h5>
        <h6 class="m-0"><a href=" javascript:void(0)" data-bs-toggle="modal" data-bs-target="#addNewAddress">Edit</a></h6>
      </div>
      <div class="card-body">
        <p class="mb-0">45 Roker Terrace <br>Latheronwheel <br>KW5 8NW,London <br>UK</p>
      </div>

    </div>
    <div class="card mb-6">
      <div class="card-header d-flex justify-content-between">
        <h5 class="card-title m-0">Billing address</h5>
        <h6 class="m-0"><a href=" javascript:void(0)" data-bs-toggle="modal" data-bs-target="#addNewAddress">Edit</a></h6>
      </div>
      <div class="card-body">
        <p class="mb-6">45 Roker Terrace <br>Latheronwheel <br>KW5 8NW,London <br>UK</p>
        <h5 class="mb-1">Mastercard</h5>
        <p class="mb-0">Card Number: ******4291</p>
      </div>

    </div>
  </div>
</div>

<!-- Modals -->
@include('_partials/_modals/modal-edit-user')
@include('_partials/_modals/modal-add-new-address')


@endsection
