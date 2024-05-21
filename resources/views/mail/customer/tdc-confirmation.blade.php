<x-mail::message>
<strong>{{ $mailData['title']}}</strong>

<p>
    Hi ka-SOLID <strong>{{ $mailData['first_name']}}</strong> ! <br /><br />
    This is auto generated email for reservation request. Please reply <strong>YES</strong> to confirm your reservation and to notify the admin for your driving lessons on <strong>{{ $mailData['date'] }}</strong>. Reply NO if you wish to cancel your reservation. Request for enrolment cancelation and/or course downgrade is subject to company's approval. The company reserves the right to reject refund of the total course fee or any payment made upon enrolment.<br /> <br />
    The email confirmation will have 90 days validity. <br /><br />
    If you need a quicker response, you can get in touch with us at the following numbers:
    <br /> 📞 Smart: 09998467586 / 09464583242
    <br /> 📞 Globe landline: (02) 700-56930
    <br /> Your Driving Course: TDC
</p>

<p>
    Regards,<br>
{{ __('Solid Driving School') }}
</p>
</x-mail::message>
