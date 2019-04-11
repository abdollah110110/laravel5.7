@if(session()->has('success'))
<div class="modal fade" id="flafh-modal">
	<div class="modal-dialog modal-sm">
		<div class="modal-content p-3">
			<!-- Modal body -->
			<div class="d-flex flex-column text-center">
				<i class="ti-check bg-light text-success"></i>
				<p>{{ session()->get('success') }}</p>
			</div>
			<!-- Modal footer -->
			<div class="d-flex justify-content-center pt-3">
				<button type="button" id="modal-close" class="btn btn-success btn-sm px-3" data-dismiss="modal">متوجه شدم</button>
			</div>
		</div>
	</div>
</div>
@elseif(session()->has('danger'))
<div class="modal fade" id="flafh-modal">
	<div class="modal-dialog modal-sm">
		<div class="modal-content p-3">
			<!-- Modal body -->
			<div class="d-flex flex-column text-center">
				<i class="ti-close bg-light text-danger"></i>
				<p>{{ session()->get('danger') }}</p>
			</div>
			<!-- Modal footer -->
			<div class="d-flex justify-content-center pt-3">
				<button type="button" id="modal-close" class="btn btn-danger btn-sm px-3" data-dismiss="modal">متوجه شدم</button>
			</div>
		</div>
	</div>
</div>
@elseif(session()->has('warning'))
<div class="modal fade" id="flafh-modal">
	<div class="modal-dialog modal-sm">
		<div class="modal-content p-3">
			<!-- Modal body -->
			<div class="d-flex flex-column text-center">
				<i class="ti-na bg-light text-warning"></i>
				<p>{{ session()->get('warning') }}</p>
			</div>
			<!-- Modal footer -->
			<div class="d-flex justify-content-center pt-3">
				<button type="button" id="modal-close" class="btn btn-warning btn-sm px-3" data-dismiss="modal">متوجه شدم</button>
			</div>
		</div>
	</div>
</div>
@endif

