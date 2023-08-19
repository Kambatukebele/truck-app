@extends('layouts.broker-account.broker-app')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
  <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Load/</span>Create a Load</h4>
  <form method="POST" action="{{ route('broker-load-store') }}">
    @csrf
    <!-- Basic Layout -->
    @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif
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
                  name="pickup_date" value="{{ old('pickup_date') }}">
                @error('pickup_date')
                <h6 class="text-danger mt-1">
                  {{ $message }}
                </h6>
                @enderror
              </div>

              <div class="col">
                <label class="form-label" for="basic-default-fullname">Drop off Date</label>
                <input type="date" class="form-control" placeholder="12/12/12" aria-label="pickup-date"
                  name="drop_off_date" value="{{ old('drop_off_date') }}">
                @error('drop_off_date')
                <h6 class="text-danger mt-1">
                  {{ $message }}
                </h6>
                @enderror
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
                  name="pickup_company_name" value="{{ old('pickup_company_name') }}">
                @error('pickup_company_name')
                <h6 class="text-danger mt-1">
                  {{ $message }}
                </h6>
                @enderror
              </div>
              <div class="col">
                <label class="form-label" for="basic-default-fullname">Pickup Company Phone Number</label>
                <input type="text" class="form-control" placeholder="Text" aria-label="pickp-address"
                  name="pickup_company_phone" value="{{ old('pickup_company_phone') }}">
                @error('pickup_company_phone')
                <h6 class="text-danger mt-1">
                  {{ $message }}
                </h6>
                @enderror
              </div>
            </div>
            <div class="row mb-3">
              <div class="col">
                <label class="form-label" for="basic-default-fullname">Pickup Company Address</label>
                <input type="text" class="form-control" placeholder="Text" aria-label="pickp-address"
                  name="pickup_company_address" value="{{ old('pickup_company_address') }}">
                @error('pickup_company_address')
                <h6 class="text-danger mt-1">
                  {{ $message }}
                </h6>
                @enderror
              </div>
              <div class="col">
                <label class="form-label" for="basic-default-fullname">Pickup Company Address 2</label>
                <input type="text" class="form-control" placeholder="Text" aria-label="pickp-address"
                  name="pickup_company_address2" value="{{ old('pickup_company_address2') }}">
                @error('pickup_company_address2')
                <h6 class="text-danger mt-1">
                  {{ $message }}
                </h6>
                @enderror
              </div>
            </div>
            <div class="row mb-3">
              <div class="col">
                <label class="form-label" for="basic-default-fullname">Pickup Company City</label>
                <input type="text" class="form-control" placeholder="Text" aria-label="pickp-address"
                  name="pickup_company_city" value="{{ old('pickup_company_city') }}">
                @error('pickup_company_city')
                <h6 class="text-danger mt-1">
                  {{ $message }}
                </h6>
                @enderror
              </div>
              <div class="col">
                <label class="form-label" for="basic-default-fullname">Pickup Company State</label>
                <input type="text" class="form-control" placeholder="Text" aria-label="pickp-address"
                  name="pickup_company_state" value="{{ old('pickup_company_state') }}">
                @error('pickup_company_state')
                <h6 class="text-danger mt-1">
                  {{ $message }}
                </h6>
                @enderror
              </div>
            </div>
            <div class="row mb-3">
              <div class="col">
                <label class="form-label" for="basic-default-fullname">Pickup Company Zipecode</label>
                <input type="text" class="form-control" placeholder="Text" aria-label="pickp-address"
                  name="pickup_company_zipcode" value="{{ old('pickup_company_zipcode') }}">
                @error('pickup_company_zipcode')
                <h6 class="text-danger mt-1">
                  {{ $message }}
                </h6>
                @enderror
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
                <input type="text" class="form-control" placeholder="NY" aria-label="drop_off_address"
                  name="drop_off_company_name" value="{{ old('drop_off_company_name') }}">
                @error('drop_off_company_name')
                <h6 class="text-danger mt-1">
                  {{ $message }}
                </h6>
                @enderror
              </div>
              <div class="col">
                <label class="form-label" for="basic-default-fullname">Drop off Company Phone Number</label>
                <input type="text" class="form-control" placeholder="NY" aria-label="drop_off_address"
                  name="drop_off_company_phone" value="{{ old('drop_off_company_phone') }}">
                @error('drop_off_company_phone')
                <h6 class="text-danger mt-1">
                  {{ $message }}
                </h6>
                @enderror
              </div>
            </div>
            <div class="row mb-3">
              <div class="col">
                <label class="form-label" for="basic-default-fullname">Drop off Company address</label>
                <input type="text" class="form-control" placeholder="NY" aria-label="drop_off_address"
                  name="drop_off_company_address" value="{{ old('drop_off_company_address') }}">
                @error('drop_off_company_address')
                <h6 class="text-danger mt-1">
                  {{ $message }}
                </h6>
                @enderror
              </div>
              <div class="col">
                <label class="form-label" for="basic-default-fullname">Drop off Company address 2</label>
                <input type="text" class="form-control" placeholder="NY" aria-label="drop_off_address"
                  name="drop_off_company_address2" value="{{ old('drop_off_company_address2') }}">
                @error('drop_off_company_address2')
                <h6 class="text-danger mt-1">
                  {{ $message }}
                </h6>
                @enderror
              </div>
            </div>
            <div class="row mb-3">
              <div class="col">
                <label class="form-label" for="basic-default-fullname">Drop off Company city</label>
                <input type="text" class="form-control" placeholder="NY" aria-label="drop_off_address"
                  name="drop_off_company_city" value="{{ old('drop_off_company_city') }}">
                @error('drop_off_company_city')
                <h6 class="text-danger mt-1">
                  {{ $message }}
                </h6>
                @enderror
              </div>
              <div class="col">
                <label class="form-label" for="basic-default-fullname">Drop off Company state</label>
                <input type="text" class="form-control" placeholder="NY" aria-label="drop_off_address"
                  name="drop_off_company_state" value="{{ old('drop_off_company_state') }}">
                @error('drop_off_company_state')
                <h6 class="text-danger mt-1">
                  {{ $message }}
                </h6>
                @enderror
              </div>
            </div>
            <div class="row mb-3">
              <div class="col">
                <label class="form-label" for="basic-default-fullname">Drop off Company zipcode</label>
                <input type="text" class="form-control" placeholder="NY" aria-label="drop_off_address"
                  name="drop_off_company_zipcode" value="{{ old('drop_off_company_zipcode') }}">
                @error('drop_off_company_zipcode')
                <h6 class="text-danger mt-1">
                  {{ $message }}
                </h6>
                @enderror
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
                  name="required_trailer" value="{{ old('required_trailer') }}">
                @error('required_trailer')
                <h6 class="text-danger mt-1">
                  {{ $message }}
                </h6>
                @enderror
              </div>
              <div class="col">
                <label class="form-label" for="basic-default-fullname">Cargo Weight</label>
                <input type="text" class="form-control" placeholder="130kg" aria-label="drop_off_address"
                  name="cargo_weight" value="{{ old('cargo_weight') }}">
                @error('cargo_weight')
                <h6 class="text-danger mt-1">
                  {{ $message }}
                </h6>
                @enderror
              </div>
            </div>
            <div class="row mb-3">
              <div class="col">
                <label class="form-label" for="basic-default-fullname">Load Type</label>
                <input type="text" class="form-control" placeholder="FL" aria-label="load" name="load"
                  value="{{ old('load') }}">
                @error('load')
                <h6 class="text-danger mt-1">
                  {{ $message }}
                </h6>
                @enderror
              </div>
              <div class="col">
                <label class="form-label" for="basic-default-fullname">Commodity</label>
                <input type="text" class="form-control" placeholder="NY" aria-label="drop_off_address" name="commodity"
                  value="{{ old('commodity') }}">
                @error('commodity')
                <h6 class="text-danger mt-1">
                  {{ $message }}
                </h6>
                @enderror
              </div>
            </div>
            <div class="row mb-3">
              <div class="col">
                <label class="form-label" for="basic-default-fullname">Rate</label>
                <input type="text" class="form-control" placeholder="100USD" aria-label="required-trailer" name="rate"
                  value="{{ old('rate') }}">
                @error('rate')
                <h6 class="text-danger mt-1">
                  {{ $message }}
                </h6>
                @enderror
              </div>
              <div class="col">
                <label class="form-label" for="basic-default-fullname">Dimensions</label>
                <input type="text" class="form-control" placeholder="NY" aria-label="drop_off_address" name="dimensions"
                  value="{{ old('dimensions') }}">
                @error('dimensions')
                <h6 class="text-danger mt-1">
                  {{ $message }}
                </h6>
                @enderror
              </div>
            </div>
            <div class="row mb-3">
              <div class="col">
                <label class="form-label" for="basic-default-fullname">Additional Stops</label>
                <input type="text" class="form-control" placeholder="FLorida" aria-label="required-trailer"
                  name="additional-stops" value="{{ old('additional-stops') }}">
                @error('additional-stops')
                <h6 class="text-danger mt-1">
                  {{ $message }}
                </h6>
                @enderror
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
                  <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="hazmat" value="true" />
                  <label class="form-check-label" for="inlineCheckbox1">Hazmat</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="oversize" value="true" />
                  <label class="form-check-label" for="inlineCheckbox2">Oversize</label>
                </div>
                <div class="form-check form-check-inline">
                  <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="military_load"
                    value="true" />
                  <label class="form-check-label" for="inlineCheckbox2">Military load</label>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="row">
            <div class="col-md">
              <button class="form-control btn btn-primary">Create Load</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </form>
</div>
@endsection