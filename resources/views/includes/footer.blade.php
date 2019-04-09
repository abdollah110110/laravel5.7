<div id="footer" class="container-fluid pt-5 bg-dark text-center">
	<div  id="contact_us" class="row flex-column">
		<h2>تماس با ما</h2>
		<p>اگر شما سوالی دارید میتوانید از طریق روشهای زیر سوالتان را بپرسید.</p>
		<p>سعی میکنیم در اولین فرصت جواب دهیم.</p>
	</div>
	<div class="container mt-5">
		<div class="row">
			<div class="col-md-4">
				<div class="d-flex justify-content-center flex-wrap">
					<a href="#" class="bg-light pb-2 pt-3 px-3 m-1  rounded-circle">
						<i class="ti-twitter-alt"></i>
					</a>
					<a href="#" class="bg-light pb-2 pt-3 px-3 m-1  rounded-circle">
						<i class="ti-instagram"></i>
					</a>
					<a href="#" class="bg-light pb-2 pt-3 px-3 m-1  rounded-circle">
						<i class="ti-google"></i>
					</a>
					<a href="#" class="bg-light pb-2 pt-3 px-3 m-1  rounded-circle">
						<i class="ti-facebook"></i>
					</a>
					<a href="#" class="mt-3">
						<img id="telegram" src="/images/telegram.png" >
					</a>
				</div>
			</div>
			<div class="col-md-8 px-5 text-right">
				<form id="contact_form" name="contact-form" action="mail.php" method="POST">
					<div class="row">
						<div class="col-md-6">
							<div class=" mb-0">
								<label for="name" class="mt-3">نام شما</label>
								<input type="text" id="name" name="name" class="form-control">
							</div>
						</div>
						<div class="col-md-6">
							<div class=" mb-0">
								<label for="email" class="mt-3">ایمیل شما</label>
								<input type="text" id="email" name="email" class="form-control">
							</div>
						</div>
					</div>
					<div class="row mt-3">
						<div class="col-md-12">
							<div class=" mb-0">
								<label for="subject" class="">موضوع پیام</label>
								<input type="text" id="subject" name="subject" class="form-control">
							</div>
						</div>
					</div>
					<div class="row mt-3">

						<div class="col-md-12">
							<div class="">
								<label for="message">متن پیام</label>
								<textarea type="text" id="message" name="message" rows="5" class="form-control md-textarea" style="resize:none;"></textarea>
							</div>
						</div>
					</div>
					<div class="row d-flex justify-content-center mt-3">
						<button class="btn btn-lg btn-secondary" type="submit">ارسال</button>
					</div>
				</form>
			</div>
		</div>
		<div class="row justify-content-center end">
			<i class="ti-arrow-circle-up" id="Scroll_to_top" title="برو ابتدای صفحه"></i>
			<p>&COPY; تمامی حقوق این سایت متعلق به <a href="/">{{ config('app.name') }}</a> می باشد.</p>
		</div>
	</div>
</div>