<x-mail::message>
<strong>{{ $mailData['title']}}</strong>

<span class="text-black">{{ $mailData['body'] }}</span>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
