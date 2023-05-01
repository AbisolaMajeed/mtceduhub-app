@component('mail::message')

# {{$data['msg_subject']}}


{{$data['message']}}

Thanks,<br>
{{$data['name']}}
@endcomponent