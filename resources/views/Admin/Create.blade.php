<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert</title>
</head>
<body>
<x-header />
<center>
<H4>Create</H4>
<br>

<form action="Add" method="post">
 @csrf
<label>Name</label>
<input type="text" name="name" placeholder="Enter Your Name">
<br>
<br>
<label>Password</label>
<input type="text" name="pass" placeholder="Enter Your password">

<br>
<br>
<label>Age</label>
<input type="text" name="age" placeholder="Enter Your Age">
<br>
<br>
<input type="submit" value="Create">

</form>


</center>
    <x-footer />
</body>
</html>