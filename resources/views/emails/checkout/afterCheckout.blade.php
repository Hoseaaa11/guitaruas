@component('mail::message')
# Buy This {{$checkout->Camp->title}}

Hi {{$checkout->User->name}}
<br>
Thank you for buying this <b>{{$checkout->Camp->title}}</b>, please see payment instruction by click the button below.

@component('mail::button', ['url' => route('dashboard')])
My Guitars
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent