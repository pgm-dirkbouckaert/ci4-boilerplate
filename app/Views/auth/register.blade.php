@extends('layouts.base')

@section('content')
  <div class="mt-5 container d-flex flex-column align-items-center"
       style="width:100%; min-width:18rem; max-width:25rem;">

    {{-- Error messages --}}
    @include('partials.alerts')

    {{-- Form --}}
    <div class="w-100 card shadow">
      <div class="card-body">
        <form action="{{ base_url('/register') }}" method="post" class="needs-validation" novalidate>
          {!! csrf_field() !!}

          <h3 class="card-title mb-4">{{ lang('Auth.register') }}</h3>

          <div class="my-3">
            <label for="firstname" class="form-label">{{ lang('Auth.firstname') }}</label>
            <input type="text" class="form-control" id="firstname" name="firstname" required autocomplete="email"
                   value="<?= old('firstname', auth()->user()->firstname ?? null) ?>">
            <p class="small text-danger">{{ $errors['firstname'] ?? ($errors['auth'] ?? null) }}</p>
          </div>

          <div class="my-3">
            <label for="lastname" class="form-label">{{ lang('Auth.lastname') }}</label>
            <input type="text" class="form-control" id="lastname" name="lastname" required
                   value="<?= old('lastname', auth()->user()->lastname ?? null) ?>">
            <p class="small text-danger">{{ $errors['lastname'] ?? ($errors['auth'] ?? null) }}</p>
          </div>

          <div class="my-3">
            <label for="email" class="form-label">{{ lang('Auth.email') }}</label>
            <input type="email" class="form-control" id="email" name="email" required
                   value="<?= old('email', auth()->user()->email ?? null) ?>">
            <p class="small text-danger">{{ $errors['email'] ?? ($errors['auth'] ?? null) }}</p>
          </div>

          <div class="my-3">
            <label for="password" class="form-label">{{ lang('Auth.password') }}</label>
            <input type="password" class="form-control" id="password" name="password" required>
            <p class="small text-danger">{{ $errors['password'] ?? ($errors['auth'] ?? null) }}</p>
          </div>

          <div class="my-3">
            <label for="password_confirm" class="form-label">{{ lang('Auth.passwordConfirm') }}</label>
            <input type="password" class="form-control" id="password_confirm" name="password_confirm" required>
            <p class="small text-danger">{{ $errors['password_confirm'] ?? ($errors['auth'] ?? null) }}</p>
          </div>

          <button type="submit" class="mt-4 btn btn-dark w-100">{{ lang('Auth.register') }}</button>

          <div class="mt-4 text-center small">
            <p>
              <a href="{{ base_url('/login') }}">{{ lang('Auth.alreadyRegistered') }} {{ lang('Login') }}</a>
            </p>
          </div>
        </form>
      </div>
    </div>
  </div>
  @include('partials.bs-form-validation')
@endsection
