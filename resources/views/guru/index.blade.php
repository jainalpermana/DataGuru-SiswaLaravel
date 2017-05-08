<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Index Guru</title>
	<link rel="stylesheet" href="{{asset('css/materialize.min.css')}}">
	<link rel="stylesheet" href="{{asset('css/style.css')}}">
	<link rel="stylesheet" href="{{asset('css/iconmaterialize.css')}}">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

</head>
<body>
<nav>
    <div class="nav-wrapper teal lighten-2">
      <a href="#" class="brand-logo teal lighten-2">DATA GURU</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down teal lighten-2">
      </ul>
    </div>
  </nav>
	<br>
	<a href="/guru/create"<a class="btn-floating btn-large waves-effect waves-teal lighten-2"><i class="material-icons">add</i></a>

       <table class="container row">
	
		<tr>
			<th>Id_guru</th>
			<th>Nama_guru</th>
			<th>Mapel</th>
			<th>Edit</th>
			<th>Detail</th>
			<th>Delete</th>
		
		</tr>
			@foreach($guru as $guru)

		<tr>
			<td>{{$guru->id_guru}}</td>
			<td>{{$guru->nama_guru}}</td>
			<td>{{$guru->mapel}}</td>
			
			<td><a href="/guru/{{$guru->id_guru}}/edit">edit</a></td>

			<td><a href="/guru/{{$guru->id_guru}}">detail</td>
			
			<td><form action="/guru/{{$guru->id_guru}}" method="post">			
			<input type="hidden" name="_token" value="{{ csrf_token() }}">

			<input type="hidden" name="_method" value="delete">

			<input type="submit" name="" value="Delete">
			
			</form>
			</td>

		</tr>
		@endforeach
	</table>
    </div>
	<br>


		 <footer class="page-footer teal lighten-2">
          <div class="footer-copyright teal lighten-2">
            <div class="container">
            © 2017 Copyright Jainal XI RPL 2
            </div>
          </div>
        </footer><!--end footer-->  
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="{{asset('js/materialize.min.js')}}"></script>
<script type="text/javascript">
	(function($){
  $(function(){

    $('.button-collapse').sideNav();

  }); // end of document ready
})(jQuery); // end of jQuery name space
$(".button-collapse").sideNav();
</script>

</body>
</html>

</body>
</html>




