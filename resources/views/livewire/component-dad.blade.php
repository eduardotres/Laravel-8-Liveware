<div>
 
    <hr>
    <h3>Component-Son</h3>
    @foreach ($users as $user)
    <div>
        @livewire('component-son', ['user' => $user])
    </div>
    @endforeach
<br><br>
    <hr>
    Pai:  <button wire:click='$refresh'>Clique</button> | {{now()}}<br>
    Filho:  <button wire:click="$emit('updateSon')">Clique</button> | {{now()}}
</div>
