<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>
    
<center>
<H4>Create</H4>
<br>

<form action="Edit/{{$data['id']}}" method="post">
 @csrf
<label>Name</label>
<input type="text" name="name" value="{{$data['name']}}" placeholder="Enter Your Name">
<br>
<br>
<label>Password</label>
<input type="text" name="pass" value="{{$data['pass']}}" placeholder="Enter Your password">

<br>
<br>
<label>Age</label>
<input type="text" name="age" value="{{$data['age']}}" placeholder="Enter Your Age">
<br>
<br>
<input type="submit" value="Update">

</form>


</center>


</body>
</html>