<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="card col-md-8">
            <h1>Students List</h1>
            <hr>
            <table >
                    <tr>
                        <th>ID</th>
                        <th>Roll NO</th>
                        <th>Name</th>
                        <th>Email</th>
                    </tr>
                @foreach ($students as $student)
                    <tr>
                        <td> {{$student['id']}} </td>
                        <td>{{$student['rollno']}}</td>
                        <td>{{$student['name']}}</td>
                        <td>{{$student['email']}}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>

