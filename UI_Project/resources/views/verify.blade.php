@component('mail::message')
# Verify Account

Welcome to Ballooning Nest Eggs. Please click on this link to verify your email.

<!-- @component('mail::button', ['url' => ''])
Button Text
@endcomponent -->

Thanks,<br>
{{ config('app.name') }}
@endcomponent
