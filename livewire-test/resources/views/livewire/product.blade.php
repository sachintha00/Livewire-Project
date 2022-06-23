<div>
    Title : <input type="text" wire:model="title" /> <br>
    Name : <input type="text" wire:model="name" /> <br>
    mobile : <input type="text" wire:model="mobile" /> <br>

    <h3>Title : {{$title}}</h3>
    <h3>Name : {{$name}}</h3>

    <h3>Lifesycle Hooks Method</h3>

    @foreach ($infos as $info)
        <h4>{{$info}}</h4>
    @endforeach
</div>
