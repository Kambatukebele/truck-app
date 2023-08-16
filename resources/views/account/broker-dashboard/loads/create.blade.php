@extends('layouts.broker-account.broker-app')
@section('content')
<div class="container-xxl flex-grow-1 container-p-y">
  <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Load/</span>Create a Load</h4>

  <!-- Basic Layout -->
  <div class="row">
    <div class="col-xl">
      <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
          <h5 class="mb-0">Create</h5>
          <small class="text-muted float-end">Default label</small>
        </div>
        <div class="card-body">
          <form method="POST" action="{{ route('broker-load-store') }}">
            @csrf
            <div class="row mb-3">
              <div class="col">
                <label class="form-label" for="basic-default-fullname">Pickup Date</label>
                <input type="date" class="form-control" placeholder="12/12/12" aria-label="pickup-date"
                  name="pickup-date">
              </div>
              <div class="col">
                <label class="form-label" for="basic-default-fullname">Pickup Address</label>
                <input type="text" class="form-control" placeholder="Text" aria-label="pickp-address"
                  name="pickup-address">
              </div>
            </div>
            <div class="row mb-3">
              <div class="col">
                <label class="form-label" for="basic-default-fullname">Drop off address</label>
                <input type="text" class="form-control" placeholder="NY" aria-label="drop-off-address"
                  name="drop-off-address">
              </div>
              <div class="col">
                <label class="form-label" for="basic-default-fullname">Required Trailer</label>
                <input type="text" class="form-control" placeholder="Last name" aria-label="required-trailer"
                  name="required-trailer">
              </div>
            </div>
            <div class="row mb-3">
              <div class="col">
                <label class="form-label" for="basic-default-fullname">Cargo Weight</label>
                <input type="text" class="form-control" placeholder="130kg" aria-label="drop-off-address"
                  name="cargo-weight">
              </div>
              <div class="col">
                <label class="form-label" for="basic-default-fullname">Load Type</label>
                <input type="text" class="form-control" placeholder="FL" aria-label="load" name="load">
              </div>
            </div>
            <div class="row mb-3">
              <div class="col">
                <label class="form-label" for="basic-default-fullname">Commodity</label>
                <input type="text" class="form-control" placeholder="NY" aria-label="drop-off-address" name="commodity">
              </div>
              <div class="col">
                <label class="form-label" for="basic-default-fullname">Rate</label>
                <input type="text" class="form-control" placeholder="100USD" aria-label="required-trailer" name="rate">
              </div>
            </div>
            <div class="row mb-3">
              <div class="col">
                <label class="form-label" for="basic-default-fullname">Dimensions</label>
                <input type="text" class="form-control" placeholder="NY" aria-label="drop-off-address"
                  name="dimensions">
              </div>
              <div class="col">
                <label class="form-label" for="basic-default-fullname">Additional Stops</label>
                <input type="text" class="form-control" placeholder="FLorida" aria-label="required-trailer"
                  name="additional-stops">
              </div>
            </div>
            <div class="row mt-3 mb-3">
              <div class="col-md">
                <small class="text-light fw-semibold d-block">Additional information</small>
                <div class="form-check form-check-inline mt-3">
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
            <button type="submit" class="btn btn-primary">Create Load</button>
          </form>
        </div>
      </div>
    </div>
    <div class="col-xl">
      <div class="card mb-4">
        <div class="card-header d-flex justify-content-between align-items-center">
          <h5 class="mb-0">Basic with Icons</h5>
          <small class="text-muted float-end">Merged input group</small>
        </div>
        <div class="card-body">
          <form>
            <div class="mb-3">
              <label class="form-label" for="basic-icon-default-fullname">Full Name</label>
              <div class="input-group input-group-merge">
                <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
                <input type="text" class="form-control" id="basic-icon-default-fullname" placeholder="John Doe"
                  aria-label="John Doe" aria-describedby="basic-icon-default-fullname2" />
              </div>
            </div>
            <div class="mb-3">
              <label class="form-label" for="basic-icon-default-company">Company</label>
              <div class="input-group input-group-merge">
                <span id="basic-icon-default-company2" class="input-group-text"><i class="bx bx-buildings"></i></span>
                <input type="text" id="basic-icon-default-company" class="form-control" placeholder="ACME Inc."
                  aria-label="ACME Inc." aria-describedby="basic-icon-default-company2" />
              </div>
            </div>
            <div class="mb-3">
              <label class="form-label" for="basic-icon-default-email">Email</label>
              <div class="input-group input-group-merge">
                <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                <input type="text" id="basic-icon-default-email" class="form-control" placeholder="john.doe"
                  aria-label="john.doe" aria-describedby="basic-icon-default-email2" />
                <span id="basic-icon-default-email2" class="input-group-text">@example.com</span>
              </div>
              <div class="form-text">You can use letters, numbers & periods</div>
            </div>
            <div class="mb-3">
              <label class="form-label" for="basic-icon-default-phone">Phone No</label>
              <div class="input-group input-group-merge">
                <span id="basic-icon-default-phone2" class="input-group-text"><i class="bx bx-phone"></i></span>
                <input type="text" id="basic-icon-default-phone" class="form-control phone-mask"
                  placeholder="658 799 8941" aria-label="658 799 8941" aria-describedby="basic-icon-default-phone2" />
              </div>
            </div>
            <div class="mb-3">
              <label class="form-label" for="basic-icon-default-message">Message</label>
              <div class="input-group input-group-merge">
                <span id="basic-icon-default-message2" class="input-group-text"><i class="bx bx-comment"></i></span>
                <textarea id="basic-icon-default-message" class="form-control"
                  placeholder="Hi, Do you have a moment to talk Joe?" aria-label="Hi, Do you have a moment to talk Joe?"
                  aria-describedby="basic-icon-default-message2"></textarea>
              </div>
            </div>
            <button type="submit" class="btn btn-primary">Send</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection