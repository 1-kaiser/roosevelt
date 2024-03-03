<x-mail::message>
<strong>{{ $mailData['title']}}</strong>

<span>{{ $mailData['body'] }}</span>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
