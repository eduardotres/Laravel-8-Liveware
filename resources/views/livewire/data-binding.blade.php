<div>
    Nome:{{$name}}<br><br>
    {{-- Aguarde 3 segundos apois a digitação no campo para mostrar pro usuario --}}
    Campo 01: <input wire:model.debounce.3000ms="name" type="text" name="name"> 
    <br>   <br>
    {{-- Mostra por usuario apenas depois que ele sai do campo de digitação --}}
    Campo 02:<input wire:model.lazy="name" type="text" name="name"> <br>   <br>

    Idade: {{$age}}   <br>

    {{-- Mostra por usuario os campos que estão dentro do checkbox --}}
    Checkbox: <input wire:model="show"type="checkbox">
    @if ($show)
    <br>
            Idade: {{$age}}
    @endif <br> <br>

    <select wire:model="select"name="" id="">
        <option>PHP</option>
        <option>Laravel</option>
        <option>Livewire</option>
    </select><br> <br>
    Dado Selecionado: {{$select}}
</div>
