<form action="/guru" method="post">
	id_guru    : 
	<input type="text" name="id_guru" placeholder="id_guru"><br>
	nama_guru   : 
	<input type="text" name="nama_guru" placeholder="nama_guru"><br>
	mapel  : 
	<input type="text" name="mapel" placeholder="mapel"><br>
	<input type="hidden" name="_token" value="{{ csrf_token() }}">
	
	<input type="submit" value="ok">
</form>