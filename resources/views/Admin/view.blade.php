<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View</title>
    
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

</head>
<body>

<x-header />

<div class="row border border-default">
	
		<div class="bg-primary text-center p-2 col-md-12">
			<p class="lead text-white">View All data</p>
		</div>
	
	
	
		<div class="bg-secondary text-white p-2 mb-3 col-3 text-center d-none d-sm-block">
			<p>Name</p>
		</div>
		<div class="bg-secondary text-white p-2 mb-3 col-3 text-center d-block d-sm-none small">
			<p>n</p>
		</div>
		<div class="bg-secondary text-white p-2 mb-3 col-3 text-center d-none d-sm-block">
			<p>Pass</p>
		</div>
		<div class="bg-secondary text-white p-2 mb-3 col-3 text-center d-block d-sm-none small">
			<p>p</p>
		</div>
		<div class="bg-secondary text-white p-2 mb-3 col-3 text-center d-none d-sm-block">
			<p>Age</p>
		</div>
		<div class="bg-secondary text-white p-2 mb-3 col-3 text-center d-block d-sm-none small">
			<p>a</p>
		</div>
		<div class="bg-secondary text-white p-2 mb-3 col-3 text-center d-none d-sm-block">
			<p>Action</p>
		</div>
		<div class="bg-secondary text-white p-2 mb-3 col-3 text-center d-block d-sm-none small">
			<p>act</p>
		</div>

        @foreach($data as $item)
	
		<div class="py-2 col-3 text-center d-none d-sm-block small">
			<p>{{$item['name']}}</p>
		</div>
		<div class="py-2 col-3 text-center d-block d-sm-none small">
			<p></p>
		</div>
		<div class="py-2 odd col-3 text-center">
			<p>{{$item['pass']}}</p>
		</div>
		<div class="py-2even col-3 text-center">
			<p>{{$item['age']}}</p>
		</div>
        
		<div class="py-2 odd col-3 text-center">
			<p class="mark text-danger lead font-weight-bold"><a href="Delete/{{$item['id']}}">Delete</a>|<a href="Edit/{{$item['id']}}">Edit</a></p>
		</div>
        @endforeach
	
			<div class="text-center border py-4 col-md text-secondary">
			<p>[disclaimer-short]</p>
		</div>

</div>

<x-footer />

</body>
</html>