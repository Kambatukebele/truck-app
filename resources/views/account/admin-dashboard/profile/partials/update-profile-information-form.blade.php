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
    <form method="POST" action="{{ route('admin-profile.update') }}">
      @csrf
      <div class="mb-3">
        <label class="form-label" for="basic-icon-default-fullname">Name</label>
        <div class="input-group input-group-merge">
          <span id="basic-icon-default-fullname2" class="input-group-text"><i class="bx bx-user"></i></span>
          <input type="text" class="form-control" name="name" value="old('name', $user->name)" required />
        </div>
      </div>
      <div class="mb-3">
        <label class="form-label" for="basic-icon-default-email">Email</label>
        <div class="input-group input-group-merge">
          <span class="input-group-text"><i class="bx bx-envelope"></i></span>
          <input type="email" id="email" value="old('email', $user->email)" class="form-control" />
          {{-- <span id="basic-icon-default-email2" class="input-group-text">@example.com</span> --}}
        </div>
        <div class="form-text">
          You can use letters, numbers & periods
        </div>
      </div>
      <div>
        <x-input-label for="email" :value="__('Email')" />
        <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)"
          required autocomplete="username" />
        <x-input-error class="mt-2" :messages="$errors->get('email')" />

        //Check if User is verified
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

//


{{-- <section>
  <header>
    <h2 class="text-lg font-medium text-gray-900">
      {{ __('Profile Information') }}
</h2>

<p class="mt-1 text-sm text-gray-600">
  {{ __("Update your account's profile information and email address.") }}
</p>
</header>

<form id="send-verification" method="post" action="{{ route('verification.send') }}">
  @csrf
</form>

<form method="post" action="{{ route('profile.update') }}" class="mt-6 space-y-6">
  @csrf
  @method('patch')

  <div>
    <x-input-label for="name" :value="__('Name')" />
    <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name', $user->name)" required
      autofocus autocomplete="name" />
    <x-input-error class="mt-2" :messages="$errors->get('name')" />
  </div>

  <div>
    <x-input-label for="email" :value="__('Email')" />
    <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $user->email)"
      required autocomplete="username" />
    <x-input-error class="mt-2" :messages="$errors->get('email')" />

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

  <div class="flex items-center gap-4">
    <x-primary-button>{{ __('Save') }}</x-primary-button>

    @if (session('status') === 'profile-updated')
    <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2000)"
      class="text-sm text-gray-600">{{ __('Saved.') }}</p>
    @endif
  </div>
</form>
</section> --}}