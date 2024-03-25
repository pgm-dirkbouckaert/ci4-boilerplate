@extends('layouts.base')

@section('content')
  <div class="mt-5 container d-flex flex-column align-items-center"
       style="width:100%; min-width:18rem; max-width:25rem;">

    {{-- Error messages --}}
    @include('partials.alerts')

    {{-- Form --}}
    <div class="w-100 card shadow">
      <div class="card-body">
        <form action="{{ base_url('/reset-password') }}" method="post" class="needs-validation" novalidate>
          {!! csrf_field() !!}

          <h3 class="card-title mb-4">{{ lang('Auth.resetYourPassword') }}</h3>

          <div class="my-3">
            <label for="password" class="form-label">{{ lang('Auth.newPassword') }}</label>
            <input type="password" class="form-control" id="password" name="password" required>
            <p class="small text-danger">{{ $errors['password'] ?? ($errors['auth'] ?? null) }}</p>
          </div>

          <div class="my-3">
            <label for="password_confirm" class="form-label">{{ lang('Auth.newPasswordRepeat') }}</label>
            <input type="password" class="form-control" id="password_confirm" name="password_confirm" required>
            <p class="small text-danger">{{ $errors['password_confirm'] ?? ($errors['auth'] ?? null) }}</p>
          </div>

          <button type="submit" class="mt-4 btn btn-dark w-100">{{ lang('Auth.resetPassword') }}</button>
        </form>
      </div>
    </div>
  </div>
  @include('partials.bs-form-validation')
@endsection
