<form action="/guru/{{$guru->id_guru}}" method="post">

	<input type="hidden" name="id_guru" placeholder="id_guru" value="{{$guru->id_guru}}"><br>
	nama guru  : 
	<input type="text" name="nama_guru" placeholder="nama_guru" value="{{$guru->nama_guru}}"><br>
	mapel  : 
	<input type="text" name="mapel" placeholder="mapel" value="{{$guru->mapel}}"><br>
	
	<input type="hidden" name="_token" value="{{ csrf_token() }}">

	<input type="hidden" name="_method" value="put">
	
	<input type="submit" value="ok">
</form>