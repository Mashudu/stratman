@if(count($errors)>0)
@foreach($errors->all() as $error)
<div class="alert alert-danger alert-dismissible fade show" role="alert">
  {{ $error }} 
  </div>
@endforeach
@endif

@if(session('success'))
<div class="alert alert-success" role="alert">
    {{ session('success') }}
  </div>
@endif

@if(session('error'))
<div class="alert alert-danger sm" role="alert">
    {{ session('error') }}
  </div>
@endif