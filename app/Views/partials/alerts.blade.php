{{-- Error messages --}}
@if (session('error') !== null)
  <div class="w-100 alert alert-danger alert-dismissible fade show" role="alert">
    {{ session('error') }}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@elseif (session('errors') !== null)
  <div class="w-100 alert alert-danger alert-dismissible fade show" role="alert">
    @if (is_array(session('errors')))
      @foreach (session('errors') as $error)
        {{ $error }}
        <br>
      @endforeach
    @else
      {{ session('errors') }}
    @endif
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif

{{-- Success messages --}}
@if (session('success') !== null)
  <div class="w-100 alert alert-success alert-dismissible fade show" role="alert">
    @if (is_array(session('success')))
      @foreach (session('success') as $success)
        {{ $success }}
        <br>
      @endforeach
    @else
      {{ session('success') }}
    @endif
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
@endif
