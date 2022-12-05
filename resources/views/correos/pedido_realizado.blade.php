@component('mail::message')
# Nuevo pedido

Se realizó el pedido con ID {{ $pedido->id }}.

@component('mail::button', ['url' => route('pedido.index')])
Ver pedido
@endcomponent

Gracias,<br>
{{ config('app.name') }}
@endcomponent

{{-- <x-mail::message>
# Introduction

The body of your message.

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message> --}}
