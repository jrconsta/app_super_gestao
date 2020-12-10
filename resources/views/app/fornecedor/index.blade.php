<h3>Fornecedor</h3>



{{-- @if(count($fornecedores) > 0 && count($fornecedores) < 10)
    <h3>Existem menos de 10 cadastros</h3>
@elseif(count($fornecedores) > 10)
    <h3>Existem mais de 10 cadastros</h3>
@else
    <h3>Ainda não existem cadastros</h3>
@endif --}}


{{-- @unless ($fornecedores)
    Não existem cadastros    
@endunless --}}

{{--AULA 48--}}
{{-- @isset($fornecedores)

    Fornecedor: {{ $fornecedores[1]['nome'] }}
    <br>
    Status: {{ $fornecedores[1]['status'] }}
        @empty($fornecedores[1]['status'])
            - Vazio
        @endempty
    <br>
    CPF: {{ $fornecedores[1]['cpf'] ?? 'Valor não preenchido.'}}
@else
    <h1>Variável não foi passada para view !</h1>

@endisset --}}


{{--AULA 49--}}
{{-- @isset($fornecedores)

    Fornecedor: {{ $fornecedores[0]['nome'] }}
    <br>
    Status: {{ $fornecedores[0]['status'] }}
    <br>
    CPF: {{ $fornecedores[0]['cpf'] ?? "Valor não preenchido !"}}


@endisset --}}


{{--AULA 50 - SWITH/CASE--}}
{{-- @switch($fornecedores[2]['ddd'])
    @case(11)
        São Paulo - SP
        @break
    @case(69)
        Rondônia - RO
        @break
    @case(85)
        Fortaleza - CE
        @break
    @default
        
@endswitch() --}}

   
{{--AULA 51 - @for--}}
{{-- @isset($fornecedores)

    @for($i = 0; isset($fornecedores[$i]); $i++)
    Fornecedor: {{ $fornecedores[$i]['nome'] }}
    <br>
    Status: {{ $fornecedores[$i]['status'] }}
    <br>
    CPF: {{ $fornecedores[$i]['ddd'] ?? "Valor não preenchido !"}}

    <hr>
    @endfor
@endisset --}}


{{--AULA 52 - @while--}}

{{-- @php $i = 0; @endphp
@isset($fornecedores)

    @while(isset($fornecedores[$i]))
    Fornecedor: {{ $fornecedores[$i]['nome'] }}
    <br>
    Status: {{ $fornecedores[$i]['status'] }}
    <br>
    CPF: {{ $fornecedores[$i]['ddd'] ?? "Valor não preenchido !"}}

    <hr>
    @php $i++ @endphp
    @endwhile
@endisset --}}


{{--AULA 52 - @foreach--}}

{{-- @isset($fornecedores)

    @foreach ($fornecedores as $array => $i)
        Fornecedor: {{ $i['nome'] }}
        <br>
        Status: {{ $i['status'] }}
        <br>
        CPF: {{ $i['ddd'] ?? "Valor não preenchido !"}}

        <hr>
        
    @endforeach
    
@endisset --}}


{{--AULA 53 - @forelse--}}

{{-- @isset($fornecedores)

    @forelse ($fornecedores as $array => $i)
        Fornecedor: {{ $i['nome'] }}
        <br>
        Status: {{ $i['status'] }}
        <br>
        CPF: {{ $i['ddd'] ?? "Valor não preenchido !"}}

        <hr>
    
    @empty
        Nenhum valor encontrado.
        
    @endforelse
    
@endisset --}}


{{--AULA 56 - @variável loop--}}

@isset($fornecedores)
    
    @forelse ($fornecedores as $array => $i)
        Iteração atual: {{ $loop->iteration }}
        <br><br>
        @if ($loop->first)
           <strong>Primeira iteração</strong>. <br>
        @endif

        @if ($loop->last)
           <strong>Última iteração</strong>. <br>
        @endif
        
        Fornecedor: {{ $i['nome'] }}
        <br>
        Status: {{ $i['status'] }}
        <br>
        CPF: {{ $i['ddd'] ?? "Valor não preenchido !"}}
        
        <hr>
        
        Total de registros: {{$loop->count}}
    @empty
        Nenhum valor encontrado.
        
    @endforelse
    
    
@endisset