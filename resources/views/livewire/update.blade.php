<form>
    <div class="row">
        <input type="hidden" wire:model="post_id">
        <div class="form-group col-md-4">
            <label for="exampleFormControlInput1">Title:</label>
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Title" wire:model="title">
            @error('title') <span class="text-danger">{{ $message }}</span>@enderror
        </div>
        <div class="form-group pl-10 col-md-6">
            <label for="exampleFormControlInput2">Body:</label>
            <input type="text" class="form-control" id="exampleFormControlInput2" wire:model="body" placeholder="Enter Body">
            @error('body') <span class="text-danger">{{ $message }}</span>@enderror
        </div>
        <h5>Update</h5>
        <div class="row">
            <button wire:click.prevent="update()" class="btn btn-success col-md-1">Update</button>
            <button wire:click.prevent="cancel()" class="btn btn-danger col-md-1">Cancel</button>
        </div>
    </div>
</form>