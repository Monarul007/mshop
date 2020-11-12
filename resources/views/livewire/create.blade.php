<form>
    <div class="row">
        <div class="form-group col-md-3 pr-5">
            <input wire:keydown.enter="foo" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Title" wire:model="title">
            @error('title') <span class="text-danger">{{ $message }}</span>@enderror
        </div>
        <div class="form-group pr-5 pl-5 col-md-4">
            <input type="text" class="form-control" id="exampleFormControlInput2" wire:model="body" placeholder="Enter Body">
            @error('body') <span class="text-danger">{{ $message }}</span>@enderror
        </div>
        <div class="form-group pr-5 pl-5 col-md-3">
            <input type="text" class="form-control" wire:keydown.debounce.500ms="foo()" wire:model="code" placeholder="Enter ID">
            @error('code') <span class="text-danger">{{ $message }}</span>@enderror
        </div>
        <div class="col-md-2"><button wire:click.prevent="foo()" style="width: 100%;" class="btn btn-success d-block">Save</button></div>
    </div>
</form>