<div style="direction:rtl;text-align:justify;">
@component('mail::message')

<h1>سلام {{ $user->name }} گرامی</h1>

<p>برای فعال سازی اکانت خود، روی دکمه زیر کلیک کنید:</p>

@component('mail::button', ['url' => route('activation', $code)])
فعال سازی اکانت
@endcomponent

با تشکر<br>
{{ config('app.name') }}
@endcomponent
</div>
