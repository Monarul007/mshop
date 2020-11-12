<form>
    <div class="row">
        <div class="form-group col-md-4">
            <input wire:keydown.enter="foo" type="text" class="form-control" wire:model="title">
            @error('title') <span class="text-danger">{{ $message }}</span>@enderror
        </div>
        <div class="form-group pl-10 col-md-4">
            <input type="text" class="form-control" wire:model="body">
            @error('body') <span class="text-danger">{{ $message }}</span>@enderror
        </div>
        <button wire:click.prevent="addItem()" class="btn btn-success col-md-2">Save</button>
        <button wire:click.prevent="cancel()" class="btn btn-danger col-md-2 pl-10">Cancel</button>
    </div>
</form>