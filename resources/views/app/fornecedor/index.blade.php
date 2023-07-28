<h2>fornecedor</h2>

@php
echo 'teste';
 
@endphp

@isset($fornecedores)
    Fornecedor: {{ $fornecedores[1]['nome'] }}
    <br>
    Status: {{ $fornecedores[1]['status'] }}
    <br>
    @isset($fornecedores[1]['cnpj'])
        CNPJ: {{ $fornecedores[1]['cnpj'] }}
    @endisset
@endisset

