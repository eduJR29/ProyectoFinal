@component('mail::message')
# Paciente Creado

El paciente "{{ $paciente->nombre }}" se creo con éxito.

@component('mail::button', ['url' => route('paciente.show', $paciente)])
Ver Paciente
@endcomponent

<br>
{{ config('app.name') }}
@endcomponent