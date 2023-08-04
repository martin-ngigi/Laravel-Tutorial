<h1> Index page</h1>
<p> Welcome {{$name}} </p>

<p>My numbers</p>

@foreach( $numbers as $number)
<p>Number : {{$number}}</p>
@endforeach

<p>Students</p>
@foreach( $students as $student)
<p>Name : {{$student}}</p>
@endforeach