<h2>Edit Student</h2>

<form method="POST" action="/students/{{ $student->id }}">
    @csrf
    @method('PUT')

    Name: <input type="text" name="name" value="{{ $student->name }}"><br><br>
    Email: <input type="text" name="email" value="{{ $student->email }}"><br><br>
    Course: <input type="text" name="course" value="{{ $student->course }}"><br><br>

    <button type="submit">Update</button>
</form>

<a href="/students">Back</a>