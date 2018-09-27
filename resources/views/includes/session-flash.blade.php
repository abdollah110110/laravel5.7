@if(session()->has('success'))
<div class="alert alert-success text-center">
    <h4>{{ session()->get('success') }}</h4>
</div>
@endif

@if(session()->has('danger'))
<div class="alert alert-success text-center">
    <h4>{{ session()->get('danger') }}</h4>
</div>
@endif