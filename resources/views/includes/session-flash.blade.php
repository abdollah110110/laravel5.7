@if(session()->has('success'))
<div class="alert alert-success alert-dismissible fade show text-center">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    <h4>{{ session()->get('success') }}</h4>
</div>
@endif

@if(session()->has('warning'))
<div class="alert alert-warning alert-dismissible fade show text-center">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    <h4>{{ session()->get('warning') }}</h4>
</div>
@endif

@if(session()->has('danger'))
<div class="alert alert-success alert-dismissible fade show text-center">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    <h4>{{ session()->get('danger') }}</h4>
</div>
@endif