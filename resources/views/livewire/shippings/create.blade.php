<div>
    <div class="card">
     <div class="card-header bg-info">
         <h3>Add Shipping</h3>
     </div>
     <div class="card-body">
         <div class="form-floating mb-3">
             <input type="text" class="form-control" wire:model.defer='name'>
             <label for="name">Shipping Name</label>
             @error('name')
             <div class="text-danger">{{$message}}</div>
             @enderror
         </div>

         <div class="form-floating mb-3">
             <input type="text" class="form-control" wire:model.defer='amount'>
             <label for="amount">amount</label>
             @error('amount')
             <div class="text-danger">{{$message}}</div>
             @enderror
         </div>

         <div class="form-floating mb-3">
            <input type="text" class="form-control" wire:model.defer='address'>
            <label for="address">address</label>
            @error('address')
            <div class="text-danger">{{$message}}</div>
            @enderror
        </div>




          <div class="form-group mb-3 d-grid gap-2 d-md-flex justify-content-end">
             <button class="btn btn-primary" type="submit" wire:click='addShipping()'>
                 Add
             </button>
          </div>
     </div>
    </div>
 </div>
