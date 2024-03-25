@extends('layouts.base')

@section('content')
  <div class="mt-5 container d-flex flex-column align-items-center"
       style="width:100%; min-width:18rem; max-width:25rem;">

    {{-- Error messages --}}
    @include('partials.alerts')

    {{-- Form --}}
    <div class="w-100 card shadow">
      <div class="card-body">
        <form action="<?= base_url('/login/magic-link') ?>" method="post">
          {!! csrf_field() !!}

          <h3 class="card-title mb-4">{{ lang('Auth.useMagicLink') }}</h3>

          <div class="my-3">
            <label for="email" class="form-label"><?= lang('Auth.email') ?></label>
            <input type="email" class="form-control" id="email" name="email" required autocomplete="email"
                   value="<?= old('email', auth()->user()->email ?? null) ?>">
          </div>

          <button type="submit" class="mt-4 btn btn-dark w-100">{{ lang('Auth.send') }}</button>

        </form>

        <div class="mt-4 text-center small">
          <p>
            <a href="{{ base_url('/login') }}">{{ lang('Auth.backToLogin') }}</a>
          </p>
        </div>
      </div>
    </div>

  </div>
@endSection
