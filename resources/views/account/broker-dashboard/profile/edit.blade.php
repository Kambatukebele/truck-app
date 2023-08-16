@extends('layouts.broker-account.broker-app') @section('content')
<div class="container-xxl flex-grow-1 container-p-y">
  <h4 class="fw-bold py-3 mb-4">
    <span class="text-muted fw-light">Account/</span> Edit your Profile
  </h4>

  <!-- Basic Layout -->
  <div class="row">
    <div class="col-xl">
      <!-- Profile information -->
      <div class="card mb-4">
        <div class="card-header d-block">
          <h5 class="mb-0">Profile Information</h5>
          <small class="text-muted">Update your account's profile information and email
            address.</small>
        </div>
        <div class="card-body">
          <form id="send-verification" method="post" action="{{ route('verification.send') }}">
            @csrf
          </form>
          <form method="POST" action="{{ route('broker-profile.update') }}">
            @csrf
            @method('patch')
            <div class="mb-3">
              <label class="form-label" for="basic-icon-default-fullname">Name</label>
              <div class="input-group input-group-merge">
                <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
                <input type="text" class="form-control" name="name" value="{{ old('name', $user->name) }}" required />
              </div>
            </div>
            <div class="mb-3">
              <label class="form-label" for="basic-icon-default-email">Email</label>
              <div class="input-group input-group-merge">
                <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                <input type="email" id="email" value="{{ old('email', $user->email) }}" class="form-control" />
                {{-- <span id="basic-icon-default-email2" class="input-group-text">@example.com</span> --}}
              </div>
              <div class="form-text">
                You can use letters, numbers & periods
              </div>
            </div>
            <div class="mb-3">
              <label class="form-label" for="basic-icon-default-email">Company Name</label>
              <div class="input-group input-group-merge">
                <span class="input-group-text"><i class="bx bx-company"></i></span>
                <input type="text" id="company_name" value="" class="form-control" />
                {{-- <span id="basic-icon-default-email2" class="input-group-text">@example.com</span> --}}
              </div>
            </div>
            <div class="mb-3">
              <label class="form-label" for="basic-icon-default-email">Company Address</label>
              <div class="input-group input-group-merge">
                <span class="input-group-text"><i class="bx bx-company"></i></span>
                <input type="text" id="company_address" value="" class="form-control" />
                {{-- <span id="basic-icon-default-email2" class="input-group-text">@example.com</span> --}}
              </div>
            </div>
            <div class="mb-3">
              <label class="form-label" for="basic-icon-default-email">Company Phone Number</label>
              <div class="input-group input-group-merge">
                <span class="input-group-text"><i class="bx bx-company"></i></span>
                <input type="text" id="company_phone_number" value="" class="form-control" />
                {{-- <span id="basic-icon-default-email2" class="input-group-text">@example.com</span> --}}
              </div>
            </div>
            <div class="mb-3">
              <label class="form-label" for="basic-icon-default-email">Company Website</label>
              <div class="input-group input-group-merge">
                <span class="input-group-text"><i class="bx bx-company"></i></span>
                <input type="text" id="company_website" value="" class="form-control" />
                {{-- <span id="basic-icon-default-email2" class="input-group-text">@example.com</span> --}}
              </div>
            </div>
            <div>
              {{-- //Check if User is verified --}}
              @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
              <div>
                <p class="text-sm mt-2 text-gray-800">
                  {{ __('Your email address is unverified.') }}

                  <button form="send-verification"
                    class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                    {{ __('Click here to re-send the verification email.') }}
                  </button>
                </p>

                @if (session('status') === 'verification-link-sent')
                <p class="mt-2 font-medium text-sm text-green-600">
                  {{ __('A new verification link has been sent to your email address.') }}
                </p>
                @endif
              </div>
              @endif
            </div>
            <button type="submit" class="btn btn-primary">
              SAVE
            </button>
          </form>
        </div>
      </div>
    </div>
    <!-- Update password -->
    <div class="col-xl">
      <div class="card mb-4">
        <div class="card-header d-block">
          <h5 class="mb-0">Update Password</h5>
          <small class="text-muted">Ensure your account is using a long, random password to
            stay secure</small>
        </div>
        <div class="card-body">
          <form method="POST" action="{{ route('password.update') }}"">
            @csrf
            @method('put')
            <div class=" mb-3">
            <label class="form-label" for="basic-icon-default-email">Current Password</label>
            <div class="input-group input-group-merge">
              <span class="input-group-text"><i class="bx bx-lock"></i></span>
              <input id="current_password" name="current_password" type="password" class="form-control" />
            </div>
        </div>
        <div class="mb-3">
          <label class="form-label" for="basic-icon-default-email">New Password</label>
          <div class="input-group input-group-merge">
            <span class="input-group-text"><i class="bx bx-lock"></i></span>
            <input id="password" name="password" type="password" class="form-control" />
          </div>
        </div>
        <div class="mb-3">
          <label class="form-label" for="basic-icon-default-email">Confirm Password</label>
          <div class="input-group input-group-merge">
            <span class="input-group-text"><i class="bx bx-lock"></i></span>
            <input id="password_confirmation" name="password_confirmation" type="password" class="form-control" />
          </div>
        </div>
        <button type="submit" class="btn btn-primary">
          SAVE
        </button>
        @if (session('status') === 'password-updated')
        <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
          class="text-sm text-gray-600">{{ __('Saved.') }}</p>
        @endif
        </form>
      </div>
    </div>
  </div>
  <!-- Delete Account -->
  <div class="col-xl">
    <div class="card mb-4">
      <div class="card-header d-block">
        <h5 class="mb-0">Delete Account</h5>
        <small class="text-muted">Once your account is deleted, all of its resources and
          data will be permanently deleted. Before deleting your
          account, please download any data or information that
          you wish to retain</small>
      </div>
      <div class="card-body">
        <form method="POST" action="{{ route('broker-profile.destroy') }}">
          @csrf
          @method('delete')
          <button type="submit" class="btn btn-danger">
            DELETE ACCOUNT
          </button>
        </form>
      </div>
    </div>
  </div>
</div>
</div>
@endsection