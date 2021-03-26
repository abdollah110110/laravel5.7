@component('mail::message')
# Introduction

<h2>Dear {{ $user->name }},</h2>
<h1>Your email sent successfully.</h1>
<p>{{ $body }}</p>

@component('mail::button', ['url' => 'http://localhost:8000'])
Go to the website
@endcomponent

<h4>Thanks.</h4>
{{ config('app.name') }}
@endcomponent
