<div>
    Name: {{$name}} LastName: {{$lastName}}
    <br>   <br> 
    Request {{ $requestParam }}

    <h2>Lista de Usuarios</h2>

    @if($users)
        <ul>
            @foreach ($users as $user)
            <tr>
                <ul>{{  $user->name}}</ul>
            </tr>
            @endforeach
        
        </ul>
    @else
        Nenhum Usuario Econtrado
    @endif

    <hr>

    <input wire:model='name' type="text"><br>
    <input wire:model='lastName' type="text">

    <button wire:click='randomName'>Nome Randomico</button><br>

    @if($hydrate) hydrate - {{$hydrate->format('d/m/Y - H:i:s')}} @endif <br>
    @if($updated) updated - {{$updated->format('d/m/Y - H:i:s')}} @endif <br>
    @if($updating) updating - {{$updating->format('d/m/Y - H:i:s')}} @endif <br>
    @if($newUpdatedName) Nome Propetario - {{$newUpdatedName}} @endif <br>

</div>
