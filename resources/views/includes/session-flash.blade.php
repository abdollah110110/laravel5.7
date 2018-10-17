@if(session()->has('flash'))
<?php
$flash = session()->get('flash');
?>
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content text-{{ $flash['class'] }} border border-{{ $flash['class'] }} bg-light">
            @if($flash['title'] != '')
            <div class="modal-title border-0 p-2">
                <h5 class="modal-title" id="exampleModalLongTitle">
                    {{ $flash['title'] }}
                </h5>
            </div>
            @endif
            <div class="modal-body mt-2 mb-4 text-center text-dark">
                @if($flash['class'] == 'success')
                <h1>
                    <i class="ti-check text-{{ $flash['class'] }}"></i>
                </h1><br />
                @elseif($flash['class'] == 'danger')
                <h1>
                    <i class="ti-alert text-{{ $flash['class'] }}"></i>
                </h1><br />
                @elseif($flash['class'] == 'warning')
                <h1>
                    <i class="ti-pencil-alt text-{{ $flash['class'] }}"></i>
                </h1><br />
                @elseif($flash['class'] == 'info')
                <h1>
                    <i class="ti-close text-{{ $flash['class'] }}"></i>
                </h1><br />
                @endif
                {{ $flash['message'] }}
            </div>
            <div class="p-0 my-2 text-center">
                <button type="button" class="btn btn-{{ $flash['class'] }} btn-sm" data-dismiss="modal" aria-label="Close">بسته شود</button>
            </div>
        </div>
    </div>
</div>
@endif

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
<div class="alert alert-danger alert-dismissible fade show text-center">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
    <h4>{{ session()->get('danger') }}</h4>
</div>
@endif