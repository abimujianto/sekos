@extends('master')
@section('content')
<div class="row">
    <div class="col-md-12 grid-margin">
      <div class="row">
        <div class="col-12 col-xl-8 mb-4 mb-xl-0">
          <h3 class="font-weight-bold">Welcome Aamir</h3>
          <h6 class="font-weight-normal mb-0">Dashboard penyewaan  <span class="text-primary">kontrakan & kos !</span></h6>
        </div>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6 grid-margin stretch-card">
      {{-- <div class="card tale-bg"> --}}
        <div class="card-people2 mt-auto">
          <img src="images/house.png" alt="people">
        </div>
      {{-- </div> --}}
    </div>
    <div class="col-md-6 grid-margin transparent">
      <div class="row">
        <div class="col-md-6 mb-4 stretch-card transparent">
          <div class="card card-tale">
            <div class="card-body">
              <p class="mb-4">Today’s Bookings</p>
              <p class="fs-30 mb-2">4006</p>
              <p>10.00% (30 days)</p>
            </div>
          </div>
        </div>
        <div class="col-md-6 mb-4 stretch-card transparent">
          <div class="card card-dark-blue">
            <div class="card-body">
              <p class="mb-4">Total Bookings</p>
              <p class="fs-30 mb-2">61344</p>
              <p>22.00% (30 days)</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
          <div class="card card-light-danger">
            <div class="card-body">
              <p class="mb-4">Number of Meetings</p>
              <p class="fs-30 mb-2">34040</p>
              <p>2.00% (30 days)</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection