@extends('layouts.admin-account.admin-app')
@section('content')
<!-- Bordered Table -->
<div class="container-xxl flex-grow-1 container-p-y">
  <div class="card">
    <h5 class="card-header">Daily Logs</h5>
    <div class="card-body">
      <div class="table-responsive text-nowrap">
        <form class="form-control"
          style=" display:flex; justify-content:space-between; align-items:center; height:100px; margin-bottom:30px">
          <div
            style="width: 150px; display:flex; justify-content:space-between; align-items:start; flex-direction:column; height:50px">
            <label class="form-label" for="user">User</label>
            <input class="form-control" type="text" placeholder="Type name or id">
          </div>
          <div
            style="width: 150px; display:flex; justify-content:space-between; align-items:start; flex-direction:column; height:50px">
            <label class="form-label" for="user">Log Type</label>
            <input class="form-control" type="text" placeholder="Log Type">
          </div>
          <div
            style="width: 150px; display:flex; justify-content:space-between; align-items:start; flex-direction:column; height:50px">
            <label class="form-label" for="user">Table</label>
            <input class="form-control" type="text" placeholder="Type name or id">
          </div>
          <div
            style="width: 150px; display:flex; justify-content:space-between; align-items:start; flex-direction:column; height:50px">
            <label class="form-label" for="user">From</label>
            <input class="form-control" type="date" style="padding: 18px 3px">
          </div>
          <div
            style="width: 150px; display:flex; justify-content:space-between; align-items:start; flex-direction:column; height:50px">
            <label class="form-label" for="user">To</label>
            <input class="form-control" type="date" placeholder="Choose Table" style="padding: 18px 3px">
          </div>
          <div
            style="width: 170px; display:flex; justify-content:flex-end; align-items:center; flex-direction:column; height:80px">
            <button type="submit" class="btn btn-primary">Filter</button>
          </div>
        </form>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>User ID</th>
              <th>Log Type</th>
              <th>Date</th>
              <th>Model</th>
              <th>Actions</th>
            </tr>
          </thead>

          <tbody>
            @foreach ($activity as $logs)
            <tr>
              <td>
                @if ($logs->subject_id)
                {{ $logs->subject_id }}
                @else
                {{ $logs->causer_id }}
                @endif
              </td>
              <td>
                {{ Str::ucfirst($logs->description) }}
              </td>
              <td>
                {{ $logs->created_at }}
              </td>
              <td>
                <span class="badge bg-label-primary me-1">
                  @if ($logs->subject_type)
                  {{ $logs->subject_type }}
                  @else
                  {{ $logs->causer_type }}
                  @endif
                </span>
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
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
<!--/ Bordered Table -->
@endsection