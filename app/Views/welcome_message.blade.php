@extends('layouts.base')

@section('content')
  {{-- Alert messages --}}
  <div class="mt-5 container d-flex flex-column align-items-center"
       style="width:100%; min-width:18rem; max-width:25rem;">

    @include('partials.alerts')
  </div>

  <div class="container">
    <h1>homepage</h1>
  </div>
@endsection
