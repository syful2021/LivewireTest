<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="card col-md-5">
            <div class="card-header">
                <h1>Add student</h1>
            </div>
            <div class="card-body">
                <form wire:submit="submit" method="POST">
                    <div class="form-group">
                        <label for="rollno">Roll Id</label>
                        <input type="number" class="form-control" wire:model="rollno" placeholder="Enter Id number">
                        {{-- for validation --}}
                        @if($errors->any())
                            <div class="alert alert-danger">
                                @error('rollno') {{ $message }} @enderror
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="name" class="form-control" wire:model="name" placeholder="Enter name number">
                        {{-- for validation --}}
                        @if($errors->any())
                            <div class="alert alert-danger">
                                @error('name') {{ $message }} @enderror
                            </div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" wire:model="email" placeholder="Enter email number">
                        {{-- for validation --}}
                        @if($errors->any())
                            <div class="alert alert-danger">
                                @error('email') <span>{{ $message }}</span> @enderror
                            </div>
                        @endif
                    </div>
                    <div class="form-group text-center">
                        <button type="submit" class="btn btn-primary mt-3 w-50">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
