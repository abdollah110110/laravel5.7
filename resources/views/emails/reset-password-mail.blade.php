@component('mail::message')

@component('mail::panel')
<h3>سلام {{ $name }} گرامی</h3>

<p>این ایمیل برایتان ارسال شد چون درخواست تغییر رمز داده بودید.</p>

<p>برای تغییر رمز روی کلید زیر کلیک نمایید:</p>

@component('mail::button', ['url' => $url, 'color' => 'primary'])
تغییر رمز عبور
@endcomponent

<p>اگر مایل به تغییر رمز عبور نیستید هیچ کاری نکنید و کلید را کلیک نمایید.</p>

<p>متشکریم</p>

<a href="{{ config('app.url') }}" target="_blank">{{ config('app.name') }}</a>

@endcomponent

@endcomponent