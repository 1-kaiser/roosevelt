<x-mail::message>

<p>
    Good Day Ka-Solid. <br /><br />
    We have a schedule of Theoretical Driving Course on {{ $mailData['date'] }} from 9:00 am to 5:00 pm. <br /><br />
    Your Instructor: <strong>{{ $mailData['instructor']}}</strong> <br />
    For your requirements, please bring the following: <br />
    PSA or Valid Passport <br /><br />
    Thank you and See you!
</p>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
