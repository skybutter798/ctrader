{{-- blade-formatter-disable --}}
@component('mail::message')
# {{ $salutaion ? $salutaion : "Hello" }} {{ $recipient}},

@if ($attachment != null)
    <img src="{{ $message->embed(asset('storage/app/public/'. $attachment)) }}">
@endif
{!! $body !!}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
{{-- blade-formatter-disable --}}
