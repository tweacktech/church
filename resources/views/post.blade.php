<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>post</title>
</head>
<body>
<center>
	<form method="POST" action="{{url('/load')}}">
@csrf

		<label>Title</label>
		<input type="text" name="Title"><br>
		<br>

		<label>Description</label>
		<input type="text" name="Description"><br>
		<br>

		<label>Image</label>
		<input type="file" name="Image"><br>
		<br>

		<label>Audio</label>
		<input type="text" name="Audio"><br>
		<br>
		<input type="submit"><br>
<a href="{{url('load')}}">mttt</a>

	</form>
</center>
</body>
</html>