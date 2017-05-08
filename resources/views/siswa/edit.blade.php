<form action="/siswa/{{$siswa->id}}" method="post">

	<input type="hidden" name="id" placeholder="id" value="{{$siswa->id}}"><br>
	nama   : 
	<input type="text" name="nama" placeholder="nama" value="{{$siswa->nama}}"><br>
	kelas  : 
	<input type="text" name="kelas" placeholder="kelas" value="{{$siswa->kelas}}"><br>
	
	<input type="hidden" name="_token" value="{{ csrf_token() }}">

	<input type="hidden" name="_method" value="put">
	
	<input type="submit" value="ok">
</form>