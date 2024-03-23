
 <div class="row justify-content-center mt-5">
        <div class="card col-md-8">

            @if ($check == true)

                <h1 class="bg-info">Students List</h1>

                <table class="table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Roll NO</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    @foreach ($students as $student)
                        <tbody>
                            <tr>
                                <td> {{ $student['id'] }} </td>
                                <td>{{ $student['rollno'] }}</td>
                                <td>{{ $student['name'] }}</td>
                                <td>{{ $student['email'] }}</td>
                                <td>
                                    <button wire:click="updateData({{ $student['id'] }})" class="btn btn-success"> Edit
                                    </button>
                                    <button type="button" wire:click="deleteStu({{ $student['id'] }})"
                                        wire:confirm="Are you sure you want to delete this post?" class="btn btn-danger">
                                        Delete </button>
                                </td>
                            </tr>
                        </tbody>
                    @endforeach
                </table>
            @else
            <form wire:submit.prevent="updateStudent" method="POST">
                <div class="form-group">
                    <label for="rollno">Roll Id</label>
                    <input type="number" class="form-control" wire:model="rollno" placeholder="Enter Id number">
                    {{-- for validation --}}
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            @error('rollno')
                                {{ $message }}
                            @enderror
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="name" class="form-control" wire:model="name" placeholder="Enter name number">
                    {{-- for validation --}}
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            @error('name')
                                {{ $message }}
                            @enderror
                        </div>
                    @endif
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" wire:model="email" placeholder="Enter email number">
                    {{-- for validation --}}
                    @if ($errors->any())
                        <div class="alert alert-danger">
                            @error('email')
                                <span>{{ $message }}</span>
                            @enderror
                        </div>
                    @endif
                </div>
                <div class="form-group text-center">
                    <button type="submit" class="btn btn-primary mt-3 w-50">Update</button>
                </div>
            </form>
            @endif

        </div>
    </div>
