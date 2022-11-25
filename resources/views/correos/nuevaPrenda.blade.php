@component('mail::message')
# Notificación de nueva prenda

La prenda {{ $prenda->nombre }} ha sido creada.

@component('mail::button', ['url' => route('prenda.show', $prenda)])
Ver prenda
@endcomponent

Gracias,<br>
{{ config('app.name') }}
@endcomponent

{{-- <x-mail::message>
# Notificación de nueva prenda
 
La prenda {{ $prenda->nombre }} ha sido creada.

[Ver prenda]({{ route('prenda.show', $prenda) }}){: .btn .btn--primary} Comentario

<a href="{{ route('prenda.show', $prenda) }}" class="btn--primary">Ver prenda</a>

<x-mail::button :url="prenda"> Comentario
Ver prenda Comentario
</x-mail::button> Comentario
 
Gracias,<br>
{{ config('app.name') }}
</x-mail::message> --}}