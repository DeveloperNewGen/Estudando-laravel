<h3>fornecedores</h3>

{{-- Comentário que será descartado --}}


@php

@endphp

@isset($fornecedores)
    Fornecedor: {{$fornecedores[0]['nome']}}
    <br>
    Status: {{$fornecedores[0]['status']}}
    <br>
    CNPJ: {{$fornecedores[0]['CNPJ']}}
    @empty($fornecedores[0]['CNPJ'])
        -vazio
    @endempty
@endisset


