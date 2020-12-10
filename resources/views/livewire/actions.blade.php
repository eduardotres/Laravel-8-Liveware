<div>
    {{-- wire:(QUALQUER FUNÇÃO DO JAVASCRIPT) --}}
    Meu valor é: <input wire:model='input' type="text">

    {{-- Botão para limpar o campo --}}
    <button wire:click='clear'>Limpar</button>
    
    {{-- Botão para setar o nome fixo no campo --}}
    <button wire:click='setValue'>SetNome</button>

    {{-- Botão para setar o nome dinamico no campo 
    <button wire:click="setData($variavel)">Data</button>
    --}} 
    <button wire:click="setData('Antonio')">Data</button>

    {{-- .prevent é para não submit o formulario apenas mostrar por usuario --}}
    <form action="#" wire:submit.prevent="submit">
        <button>Enviar</button>
    </form>
    <br>

    {{-- Altera o campo sem precisar criar outros meteodos --}}
    <button wire:click="$set('input', '{{$souza}}')">Direto</button>
</div>
