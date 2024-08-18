<h3>fornecedores</h3>

{{-- Comentário que será descartado --}}


@php

@endphp

@isset($fornecedores)

    @for($i = 0; $i < count($fornecedores); $i++)
        Fornecedor: {{$fornecedores[$i]['nome']}}
        <br>
        Status: {{$fornecedores[$i]['status']}}
        <br>
        CNPJ: {{$fornecedores[$i]['CNPJ'] ?? 'valor não inserido'}}
        <br>
        Telefone: ({{$fornecedores[$i]['ddd'] ?? 'valor não inserido'}}) {{$fornecedores[$i]['telefone'] ?? 'valor não inserido'}}

        @switch($fornecedores[$i]['ddd'])
            @case('11')
                São Paulo - SP
                @break
            @case('32')
                Juiz de Fora - MG
                @break
            @case('85')
                Fortaleza - CE
                @break
            @default
                Estado não identificado
    @endswitch
     <hr>
    @endfor

@endisset


