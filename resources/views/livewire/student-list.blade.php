
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
                <livewire:student-update :store_id="$store_id" :name="$name" :email="$email" :rollno="$rollno" />
            @endif

        </div>
    </div>
