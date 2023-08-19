@extends('layouts.broker-account.broker-app')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
  <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Load/</span>Create a Load</h4>
  <form method="POST" action="{{ route('broker-load-store') }}">
    @csrf
    <!-- Basic Layout -->
    <div class="row">
      <div class="col-xl">
        <div class="card mb-4">
          <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Please pick dates</h5>
          </div>
          <div class="card-body">
            <div class="row mb-3">
              <div class="col">
                <label class="form-label" for="basic-default-fullname">Pickup Date</label>
                <input type="date" class="form-control" placeholder="12/12/12" aria-label="pickup-date"
                  name="pickup-date">
              </div>
              <div class="col">
                <label class="form-label" for="basic-default-fullname">Drop off Date</label>
                <input type="date" class="form-control" placeholder="12/12/12" aria-label="pickup-date"
                  name="drop_off_date">
              </div>
            </div>
          </div>
        </div>
        <!--pickup company information -->
        <div class="card mb-4">
          <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Pick up company information</h5>
          </div>
          <div class="card-body">
            <div class="row mb-3">
              <div class="col">
                <label class="form-label" for="basic-default-fullname">Pickup Company Name</label>
                <input type="text" class="form-control" placeholder="Text" aria-label="pickp-address"
                  name="pickup-company_name">
              </div>
              <div class="col">
                <label class="form-label" for="basic-default-fullname">Pickup Company Phone Number</label>
                <input type="text" class="form-control" placeholder="Text" aria-label="pickp-address"
                  name="pickup-company_phone">
              </div>
            </div>
            <div class="row mb-3">
              <div class="col">
                <label class="form-label" for="basic-default-fullname">Pickup Company Address</label>
                <input type="text" class="form-control" placeholder="Text" aria-label="pickp-address"
                  name="pickup-company_address">
              </div>
              <div class="col">
                <label class="form-label" for="basic-default-fullname">Pickup Company Address 2</label>
                <input type="text" class="form-control" placeholder="Text" aria-label="pickp-address"
                  name="pickup-company_address2">
              </div>
            </div>
            <div class="row mb-3">
              <div class="col">
                <label class="form-label" for="basic-default-fullname">Pickup Company City</label>
                <input type="text" class="form-control" placeholder="Text" aria-label="pickp-address"
                  name="pickup-company_city">
              </div>
              <div class="col">
                <label class="form-label" for="basic-default-fullname">Pickup Company State</label>
                <input type="text" class="form-control" placeholder="Text" aria-label="pickp-address"
                  name="pickup-company_state">
              </div>
            </div>
            <div class="row mb-3">
              <div class="col">
                <label class="form-label" for="basic-default-fullname">Pickup Company Zipecode</label>
                <input type="text" class="form-control" placeholder="Text" aria-label="pickp-address"
                  name="pickup-company_zipcode">
              </div>
              <div class="col">

              </div>
            </div>
          </div>
        </div>
        <!-- Drop off company information -->
        <div class="card mb-4">
          <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Drop off company information</h5>
          </div>
          <div class="card-body">
            <div class="row mb-3">
              <div class="col">
                <label class="form-label" for="basic-default-fullname">Drop off company name</label>
                <input type="text" class="form-control" placeholder="NY" aria-label="drop-off-address"
                  name="drop-off-company_name">
              </div>
              <div class="col">
                <label class="form-label" for="basic-default-fullname">Drop off Company Phone Number</label>
                <input type="text" class="form-control" placeholder="NY" aria-label="drop-off-address"
                  name="drop-off-company_phone">
              </div>
            </div>
            <div class="row mb-3">
              <div class="col">
                <label class="form-label" for="basic-default-fullname">Drop off Company address</label>
                <input type="text" class="form-control" placeholder="NY" aria-label="drop-off-address"
                  name="drop-off-company_address">
              </div>
              <div class="col">
                <label class="form-label" for="basic-default-fullname">Drop off Company address 2</label>
                <input type="text" class="form-control" placeholder="NY" aria-label="drop-off-address"
                  name="drop-off-company_address2">
              </div>
            </div>
            <div class="row mb-3">
              <div class="col">
                <label class="form-label" for="basic-default-fullname">Drop off Company city</label>
                <input type="text" class="form-control" placeholder="NY" aria-label="drop-off-address"
                  name="drop-off-company_city">
              </div>
              <div class="col">
                <label class="form-label" for="basic-default-fullname">Drop off Company state</label>
                <input type="text" class="form-control" placeholder="NY" aria-label="drop-off-address"
                  name="drop-off-company_state">
              </div>
            </div>
            <div class="row mb-3">
              <div class="col">
                <label class="form-label" for="basic-default-fullname">Drop off Company zipcode</label>
                <input type="text" class="form-control" placeholder="NY" aria-label="drop-off-address"
                  name="drop-off-company_zipcode">
              </div>
              <div class="col">
              </div>
            </div>
          </div>
        </div>

      </div>
      <div class="col-xl">
        <div class="card mb-4">
          <div class="card-header d-flex justify-content-between align-items-center">
            <h5 class="mb-0">Additional Information</h5>
            {{-- <small class="text-muted float-end">Merged input group</small> --}}
          </div>
          <div class="card-body">
            <div class="row mb-3">
              <div class="col">
                <label class="form-label" for="basic-default-fullname">Status</label>
                <select class="form-control" name="status">
                  <option value="draft" selected>Draft</option>
                  <option value="active">Active</option>
                </select>
              </div>
            </div>
            <div class="row mb-3">
              <div class="col">
                <label class="form-label" for="basic-default-fullname">Required Trailer</label>
                <input type="text" class="form-control" placeholder="Last name" aria-label="required-trailer"
                  name="required-trailer">
              </div>
              <div class="col">
                <label class="form-label" for="basic-default-fullname">Cargo Weight</label>
                <input type="text" class="form-control" placeholder="130kg" aria-label="drop-off-address"
                  name="cargo-weight">
              </div>
            </div>
            <div class="row mb-3">
              <div class="col">
                <label class="form-label" for="basic-default-fullname">Load Type</label>
                <input type="text" class="form-control" placeholder="FL" aria-label="load" name="load">
              </div>
              <div class="col">
                <label class="form-label" for="basic-default-fullname">Commodity</label>
                <input type="text" class="form-control" placeholder="NY" aria-label="drop-off-address" name="commodity">
              </div>
            </div>
            <div class="row mb-3">
              <div class="col">
                <label class="form-label" for="basic-default-fullname">Rate</label>
                <input type="text" class="form-control" placeholder="100USD" aria-label="required-trailer" name="rate">
              </div>
              <div class="col">
                <label class="form-label" for="basic-default-fullname">Dimensions</label>
                <input type="text" class="form-control" placeholder="NY" aria-label="drop-off-address"
                  name="dimensions">
              </div>
            </div>
            <div class="row mb-3">
              <div class="col">
                <label class="form-label" for="basic-default-fullname">Additional Stops</label>
                <input type="text" class="form-control" placeholder="FLorida" aria-label="required-trailer"
                  name="additional-stops">
              </div>
              <div class="col">

              </div>
            </div>
          </div>
        </div>
        <div class="card mb-4">
          <div class="card-header">
            <h5 class="mb-0">Extra Information</h5>
            {{-- <small class="text-muted float-end">Merged input group</small> --}}
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-md">
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="hazmat" name="hazmat" />
                  <label class="form-check-label" for="inlineCheckbox1">Hazmat</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="oversize"
                    name="oversize" />
                  <label class="form-check-label" for="inlineCheckbox2">Oversize</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="military-load"
                    name="military-load" />
                  <label class="form-check-label" for="inlineCheckbox2">Military load</label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="row">
            <div class="col-md">
              <button type="submit" class="form-control btn btn-primary">Create Load</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>
</div>
@endsection