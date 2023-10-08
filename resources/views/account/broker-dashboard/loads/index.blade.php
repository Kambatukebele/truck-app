@extends('layouts.broker-account.broker-app')
@section('content')
<!-- Bootstrap Table with Header - Footer -->
<div class="container-xxl flex-grow-1 container-p-y">
  <div class="card">
    <h5 class="card-header">Current Loads</h5>
    @if (session('status'))
    <script>
      alert({{ session('status') }})
    </script>
    @endif
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
          @foreach ($loads as $load)
          <tr>
            <td>From {{ $load->pickup_time }} to {{ $load->drop_off_time }} </td>
            <td>{{ $load->pickup_company_name }}</td>
            <td>{{ $load->drop_off_company_name }}</td>
            <td>{{ $load->pickup_company_address }}</td>
            <td>{{ $load->drop_off_company_address }}</td>
            <td>{{ $load->rate }}</td>
            <td>{{ $load->load }}</td>
            <td >
              @if ($load->status === "active")
                <span class="btn btn-primary">{{ $load->status }}</span>
              @else
                <span class="btn btn-danger">{{ $load->status }}</span>
              @endif              
            </td>
            <td>
              <div class="dropdown">
                <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                  <i class="bx bx-dots-vertical-rounded"></i>
                </button>
                <div class="dropdown-menu">
                  <a href="{{ route('broker-load-edit', ['id' => $load->id]) }}" class="dropdown-item" href="javascript:void(0);">
                    <i class="bx bx-edit-alt me-1"></i>
                     Edit
                  </a>
                  <form action="{{ route('broker-load-destroy', ['id' => $load->id]) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="dropdown-item">
                      <i class="bx bx-trash me-1"></i>
                         Delete
                    </button>
                  </form>
                </div>
              </div>
            </td>
          </tr>
          @endforeach
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