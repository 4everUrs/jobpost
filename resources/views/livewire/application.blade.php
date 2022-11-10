<div>
    <div>
        <h1 class="font-weight-bold text-center">Application Form</h1>
    </div>
    <br><br>
    <div class="container col-lg-5">
        <div class="form-group">
            <label for="">Full Name</label>
            <input wire:model="name"class="form-control" placeholder="Enter Full Name" type="text">
            @error('name') <span class="text-danger">{{$message}}</span> @enderror
            <br>
            <label for="">Email</label>
            <input wire:model="email"class="form-control" placeholder="Enter Email Address"type="text">
            @error('email') <span class="text-danger">{{$message}}</span> @enderror
            <br>
            <label for="">Phone Number</label>
            <input wire:model="phone"class="form-control" placeholder="Enter Phone Number"type="number">
            @error('phone') <span class="text-danger">{{$message}}</span> @enderror
            <br>
            <label for="">Address</label>
            <input wire:model="address"class="form-control" placeholder="Enter Address"type="text">
            @error('address') <span class="text-danger">{{$message}}</span> @enderror
            <br>
            <label for="">Resume</label>
            <input wire:model="resume_file"class="form-control" placeholder="No File Chosen" type="file">
            @error('resume_file') <span class="text-danger">{{$message}}</span> @enderror
            <br>
           
            <br><br>
            
        </div>
        <br>
        <button wire:click="saveApplication" wire:loading.attr="disabled" class="btn btn-primary">Submit Application</button>
        <br><br><br>
    </div>
</div>
