<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>create</title>

<body>
	
<form action="/siswa" method="post">
	id    : 
	<input type="text" name="id" placeholder="id"><br>
	nama   : 
	<input type="text" name="nama" placeholder="nama"><br>
	kelas  : 
	<input type="text" name="kelas" placeholder="kelas"><br>

	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	
	<input type="submit" value="ok">
</form>

</body>
</html>