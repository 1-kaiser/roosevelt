<x-mail::message>
<strong>{{ $mailData['title']}}</strong>

<p>
    {{ $mailData['body'] }} <br /><br />
    Name: {{ $mailData['name']}} <br />
    Email: {{ $mailData['email'] }} <br />
    Branch: {{ $mailData['branch'] }} <br />
    Date: {{ $mailData['date'] }} <br />
    Course: {{ $mailData['course'] }} <br />
    Driving Vehicle: {{ $mailData['vehicle'] }} <br />
    Driving Course: {{ $mailData['transmission'] }} <br /><br />
</p>

<p>
    Thanks,<br>
{{ __('Roosevelt Driving School') }}
</p>
</x-mail::message>
