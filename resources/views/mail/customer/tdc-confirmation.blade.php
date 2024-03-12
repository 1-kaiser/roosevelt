<x-mail::message>
<strong>{{ $mailData['title']}}</strong>

<p>
    Hello <strong>{{ $mailData['name']}}</strong>. This is auto generated email for reservation request. Please reply <strong>YES</strong> to confirm your reservation and to notify the admin for your driving lessons on <strong>{{ $mailData['date'] }}</strong>. Reply NO if you wish to cancel your reservation.
</p>

<p>
    Regards,<br>
{{ __('Solid Driving School') }}
</p>
</x-mail::message>
