<h1>Create students list</h1>
<a href="/create-student">Add Student</a>

@foreach($students as $student)
<p>Name {{$student['name']}}.       Age{{$student->age}} </p>
@endforeach