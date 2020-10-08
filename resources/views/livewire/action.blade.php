<div>
    <h2>
        Name: {{$name}}
    </h2>

    <input type="text" wire:model="name" placeholder="age" class="form-control">

    <input type="number" wire:model="a" placeholder="age" class="form-control">
    <input type="number" wire:model="b" placeholder="age" class="form-control">

{{--    <input type="number" wire:model="sum()" placeholder="age" class="form-control">--}}

    {{$age}}

    <h3>Sum: {{$a + $b}}</h3>
</div>
