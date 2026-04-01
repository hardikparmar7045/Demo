<h2>Add Student</h2>

<form method="POST" action="/students">
    @csrf
    Name: <input type="text" name="name"><br><br>
    Email: <input type="text" name="email"><br><br>
    Course: <input type="text" name="course"><br><br>
    <button type="submit">Save</button>
</form>

<a href="/students">Back</a>