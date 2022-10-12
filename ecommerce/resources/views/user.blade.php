<h1>
    Hello World
</h1>

{{ $user->name }} <br>
{{ $user->email }} <br>

<br>

{{ date('d/m/y') }}

<br>

@php
    $amount = 100;
    $array = [];
    $boolean = true;
@endphp

{{-- Unless --}}
@unless ($boolean)
    Falso
@endunless
<br><br>

{{-- If --}}
@if ($boolean)
    True
@endif

@empty($array)
   o array está vazio
@endempty

{{-- If --}}
@if ($amount > 100)
    Muito caro
    @elseif($amount > 80)
    Ta ok
    @elseif($amount > 50)
    Ta barato
@endif
