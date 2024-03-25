@extends('layouts.base')

@section('content')
  <div class="mt-5 container d-flex flex-column align-items-center"
       style="width:100%; min-width:18rem; max-width:25rem;">

    <div class="w-100 card shadow">
      <div class="card-body">
        <h3 class="card-title mb-5">{{ lang('Auth.useMagicLink') }}</h3>

        <p><b>{{ lang('Auth.checkYourEmail') }}</b></p>

        <p>{{ lang('Auth.magicLinkDetails', [setting('Auth.magicLinkLifetime') / 60]) }}</p>
      </div>
    </div>
  </div>
@endSection
