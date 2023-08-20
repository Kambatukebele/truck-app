@extends('layouts.broker-account.broker-app')
@section('content')
<!-- Bootstrap Table with Header - Footer -->
<div class="container-xxl flex-grow-1 container-p-y">
  <div class="card">
    <h5 class="card-header">Current Loads</h5>
    <div class="table-responsive text-nowrap">
      <table class="table">
        <thead>
          <tr>
            <th>Dates</th>
            <th>Picking Company</th>
            <th>Drop-off Company</th>
            <th>Address Picking</th>
            <th>Address Drop-off</th>
            <th>Rate</th>
            <th>Load TYpe</th>
            <th>Status</th>
            <th>Actions</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>From 12.2.90 to 12.2.90</td>
            <td>KambaLLC</td>
            <td>HusseinLLC </td>
            <td>Milasnka 45</td>
            <td>Zelena 33</td>
            <td>$4500</td>
            <td>FL</td>
            <td>
              <span class="badge bg-label-primary me-1">Active</span>
            </td>
            <td>
              <div class="dropdown">
                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                  <i class="bx bx-dots-vertical-rounded"></i>
                </button>
                <div class="dropdown-menu">

                  <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                  <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td>From 12.2.90 to 12.2.90</td>
            <td>KambaLLC</td>
            <td>HusseinLLC </td>
            <td>Milasnka 45</td>
            <td>Zelena 33</td>
            <td>$4500</td>
            <td>FL</td>
            <td>
              <span class="badge bg-label-primary me-1">Active</span>
            </td>
            <td>
              <div class="dropdown">
                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                  <i class="bx bx-dots-vertical-rounded"></i>
                </button>
                <div class="dropdown-menu">

                  <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                  <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                </div>
              </div>
            </td>
          </tr>
          <tr>
            <td>From 12.2.90 to 12.2.90</td>
            <td>KambaLLC</td>
            <td>HusseinLLC </td>
            <td>Milasnka 45</td>
            <td>Zelena 33</td>
            <td>$4500</td>
            <td>FL</td>
            <td>
              <span class="badge bg-label-primary me-1">Active</span>
            </td>
            <td>
              <div class="dropdown">
                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                  <i class="bx bx-dots-vertical-rounded"></i>
                </button>
                <div class="dropdown-menu">

                  <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-edit-alt me-1"></i> Edit</a>
                  <a class="dropdown-item" href="javascript:void(0);"><i class="bx bx-trash me-1"></i> Delete</a>
                </div>
              </div>
            </td>
          </tr>
        </tbody>
        <tfoot class="table-border-bottom-0">
          <tr>
            <th>Dates</th>
            <th>Picking Company</th>
            <th>Drop-off Company</th>
            <th>Address Picking</th>
            <th>Address Drop-off</th>
            <th>Rate</th>
            <th>Load TYpe</th>
            <th>Status</th>
            <th>Actions</th>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>
</div>
@endsection