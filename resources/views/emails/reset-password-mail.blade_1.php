@component('mail::message')

<div style="direction:rtl;text-align:right">

<h1>سلام {{ $name }} گرامی</h1>

<p>این ایمیل جهت درخواست شما برای تغییر رمز ارسال شده است.</p>
<p>برای تغییر رمز روی کلید زیر کلیک کنید.</p>

@component('mail::button', ['url' => $url])
تغییر رمز عبور
@endcomponent

<p>اگر تمایل به تغییر رمز ندارید هیچ کاری نکنید.</p>

با تشکر<br>
{{ config('app.name') }}

</div>

@endcomponent
