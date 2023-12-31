<div class="container">
@if ($notification = Session::get('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
   <strong>{{ $notification }}</strong>
   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
 </div>
@endif
@if ($notification = Session::get('error'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
   <strong>{{ $notification }}</strong>
   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
 </div>
@endif
@if ($notification = Session::get('warning'))

<div class="alert alert-warning alert-dismissible fade show" role="alert">
   <strong>{{ $notification }}</strong>
   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
 </div>
@endif
@if ($notification = Session::get('info'))
<div class="alert alert-info alert-dismissible fade show" role="alert">
   <strong>{{ $notification }}</strong>
   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
 </div>
@endif

@if ($errors->any())
<div class="alert alert-danger alert-dismissible fade show" role="alert">
   <strong>Please check the form under for errors.
   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
 </div>
 @endif
</div>