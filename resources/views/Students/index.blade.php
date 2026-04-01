<h2>Student List</h2>

<a href="/students/create">Add Student</a>

<table border="1">
<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Course</th>
    <th>Edit</th>
    <th>Delete</th>
</tr>

@foreach($students as $student)
<tr>
    <td>{{ $student->id }}</td>
    <td>{{ $student->name }}</td>
    <td>{{ $student->email }}</td>
    <td>{{ $student->course }}</td>
    <td><a href="/students/{{ $student->id }}/edit">Edit</a></td>
    <td>
        <form method="POST" action="/students/{{ $student->id }}">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </td>
</tr>
@endforeach
</table>