@component('mail::message')
# {{ $contact['subject'] }}

<p><strong>Name:</strong> {{ $contact['name'] }}</p>
<p><strong>Email:</strong> {{ $contact['email'] }}</p>
<p><strong>Message:</strong></p>
@component('mail::panel')
{{ $contact['message'] }}
@endcomponent
@endcomponent