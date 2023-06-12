<div class="container">
    <h2>Student List</h2>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Roll Number</th>
                <th>Class</th>
                <th>Date of Birth</th>
                <th>Age</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->roll_no }}</td>
                    <td>{{ $student->class }}</td>
                    <td>{{ $student->dob }}</td>
                    <td>{{ $student->age }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
