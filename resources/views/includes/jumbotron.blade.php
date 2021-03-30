<!-- Begin page content -->
<div class="container">
	<div class="jumbotron w-100 text-center">
		<div class="jumbo-text">
			<h2 class="display-6"><i class="fas fa-user"></i> سلام کاربر گرامی@if(auth()->check()) <span class="text-blue">{{ auth()->user()->name }}</span>@endif</h2>
			<h1 class="display-5 mt-5">به سایت <span class="text-info">{{ config('app.name', 'Laravel') }}</span> خوش آمدید</h1>
			<p class="lead mt-5">می خواهیم با مواردی که یاد گرفتیم یه پروژه اجرا کنیم.</p>
		</div>
	</div>
</div>