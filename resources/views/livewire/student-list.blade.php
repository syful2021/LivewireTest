<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="card col-md-8">
            <h1>Students List</h1>
            <hr>
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
                        <td> {{$student['id']}} </td>
                        <td>{{$student['rollno']}}</td>
                        <td>{{$student['name']}}</td>
                        <td>{{$student['email']}}</td>
                        <td>
                            <button 
                            type="button" 
                            wire:click="deleteStu({{$student['id']}})"
                            wire:confirm="Are you sure you want to delete this post?"
                            class="btn btn-danger">Delete</button>
                        </td>
                    </tr>
                </tbody>
                @endforeach
            </table>
        </div>
    </div>
</div>

