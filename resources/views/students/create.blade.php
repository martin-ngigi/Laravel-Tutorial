<h1>Create student form</h1>

<form action="/submit-std-data" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="text" placeholder="Name" name="name">
    <input type="text" placeholder="Age" name="age">
    <input type="submit" value="Create">
</form>