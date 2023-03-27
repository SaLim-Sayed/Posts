<x-mail::message>
Welcom  {{$user->name}}

Welcom from Salim Soft

<x-mail::button :url="'http://localhost:8000/home'">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
