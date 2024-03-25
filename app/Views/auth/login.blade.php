@extends('layouts.base')

@section('content')
  <div class="mt-5 container d-flex flex-column align-items-center"
       style="width:100%; min-width:18rem; max-width:25rem;">

    {{-- Error messages --}}
    @include('partials.alerts')

    {{-- Form --}}
    <div class="w-100 card shadow">
      <div class="card-body">
        <form action="{{ base_url('/login') }}" method="post" class="needs-validation" novalidate>
          {!! csrf_field() !!}

          <h3 class="card-title mb-4">{{ lang('Auth.login') }}</h3>

          <div class="my-3">
            <label for="email" class="form-label">{{ lang('Auth.email') }}</label>
            <input type="email" class="form-control" id="email" name="email" required autocomplete="email"
                   value="<?= old('email', auth()->user()->email ?? null) ?>">
          </div>

          <div class="my-3">
            <label for="password" class="form-label">{{ lang('Auth.password') }}</label>
            <input type="password" class="form-control" id="password" name="password" required>
          </div>

          <button type="submit" class="mt-4 btn btn-dark w-100">{{ lang('Auth.login') }}</button>

          <div class="mt-4 text-center small">
            <p>
              @if (setting('Auth.allowRegistration'))
                {{ lang('Auth.needAnAccount') }} <a href="{{ base_url('/register') }}">{{ lang('Auth.register') }}</a>
              @endif
            </p>
            <p>
              @if (setting('Auth.allowMagicLinkLogins'))
                {{ lang('Auth.forgotPassword') }}
                <a href="<?= url_to('magic-link') ?>"><?= lang('Auth.useMagicLink') ?></a>
              @endif
            </p>
          </div>
        </form>
      </div>
    </div>
  </div>
  @include('partials.bs-form-validation')
@endsection
