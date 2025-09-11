@component('mail::message')
# Welcome to Our Platform

Hi {{ $user->name }},

Thank you for registering on our platform. We're excited to have you on board!

@component('mail::button', ['url' => route('backend.auth.login')])
Login to Your Account
@endcomponent

If you have any questions, feel free to reach out to our support team.

Best Regards,<br>
{{ config('app.name') }}
@endcomponent
