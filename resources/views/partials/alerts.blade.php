@if(session('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
@endif

@if (session('warninig'))
  <div class="alert alert-warning" role="alert">
    {{ session('warning') }}
  </div>
@endif

@if (session('error'))
  <div class="alert alert-warning" role="alert">
    {{ session('error') }}
  </div>
@endif

