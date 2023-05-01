@component('mail::message')

Dear {{$data['name']}},
<br>

We just received your message. Thank you very much for writing to us. 

We are working on your request and will get in touch as soon as possible. 

If you have any urgent issues, please contact our staff by phone - +234 802 989 4444. We are happy to be of your assistance. 


<br>
Thanks,<br>
{{ config('app.name') }}
@endcomponent