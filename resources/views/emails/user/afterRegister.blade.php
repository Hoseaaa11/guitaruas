@component('mail::message')
# Welcome!

Hi {{$user->name}}
<br>
Welcome to Guitar's Love, your account has been created successfully. Now you can choose your Guitar for your love!

@component('mail::button', ['url' => route('login')])
Login Here
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent