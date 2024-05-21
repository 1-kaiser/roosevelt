<x-mail::message>
<strong>{{ $mailData['title']}}</strong>

<p>
    Hi ka-SOLID <strong>{{ $mailData['name']}}</strong> ! <br /><br />
    <strong>{{ $mailData['admin_reply'] }}</strong> <br/><br />
    If you need a quicker response, you can get in touch with us at the following numbers:
    <br /> 📞 Smart: 09998467586 / 09464583242
    <br /> 📞 Globe landline: (02) 700-56930
</p>

<p>
    Regards,<br>
{{ __('Solid Driving School') }}
</p>
</x-mail::message>
