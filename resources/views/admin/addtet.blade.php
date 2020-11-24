@extends('../dashboard')

@section('title', 'Контент на главной станице')

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

@section('dashcontent')


<div class="container mt-5">

@include('layout.messages')
	<form action="{{route('tet-add')}}" method="post" enctype="multipart/form-data">
		@csrf

		<div class="form-group">
			<label for="name">Атауы</label>
			<input type="text" name="name" placeholder="Атауын енгіз" id="name" class="form-control">
		</div>

		<div class="form-group">
			<label for="category">Категориясы</label>
			<input type="text" name="category" placeholder="Категориясын енгіз" id="category" class="form-control">
		</div>

		<div class="form-group">
			<label for="file">Суреті</label>
			<input type="file" name="file" id="file">
		</div>		

		<div class="form-group">
			<label for="link">Ссылка</label>
			<input type="text" name="link" placeholder="Введите адрес сайта" id="link" class="form-control">
		</div>


		<div class="form-group">
			<label for="lat">Latitude</label>
			<input type="text" name="lat" placeholder="Latitude" id="lat" class="form-control">
			<label for="lng">Longitude</label>
			<input type="text" name="lng" placeholder="Longitude" id="lng" class="form-control">
		</div>	
		

		<div class="form-group">
			<label for="describe">Анықтама</label>
			<textarea name="describe" id="describe" class="form-control" placeholder="Қысқаша мағлұмат"></textarea>
		</div>			

		<button type="submit" class="btn btn-success" mt-5> Сақтау</button>

	</form>

</div>

@endsection