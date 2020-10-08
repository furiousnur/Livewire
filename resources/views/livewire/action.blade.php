<div>
    <h2> Name: {{$selectOption}} {{$name}}  </h2>
        <input type="checkbox" wire:model="divHide">

        @if($divHide)
        <div>
            <input type="text" wire:model="name" placeholder="age" class="form-control">
            <input type="number" wire:model="a" placeholder="age" class="form-control">
            <input type="number" wire:model="b" placeholder="age" class="form-control">
            <input type="checkbox" wire:model="loud">

            <select wire:model="selectOption" name="" class="form-control" id="">
                <option value="Hello">Hello</option>
                <option value="Good Bye">Good Bye</option>
            </select>
        {{--    <input type="number" wire:model="sum()" placeholder="age" class="form-control">--}}
            {{$age}}
            <h3>Sum: {{$a + $b}}@if($loud) ! @endif </h3>
        </div>
        @endif
</div>
