<x-mail::message>
# Contact Query Message

This is a query message from <b>{{$name}}</b>

Message:
<br>
{{$message}}

<x-mail::button :url="''">
Explore More
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
