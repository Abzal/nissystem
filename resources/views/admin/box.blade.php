@extends('../dashboard')

@section('title', 'Контент на главной станице')

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

@section('dashcontent')


<div class="container mt-5">


	<form action="{{route('box-form')}}" method="post" enctype="multipart/form-data">
		@csrf

		<div class="form-group">
			<label for="name">Названия сайта</label>
			<input type="text" name="name" placeholder="Введите названия" id="name" class="form-control">
		</div>

		<div class="form-group">
			<label for="link">Адрес сайта</label>
			<input type="text" name="link" placeholder="Введите адрес сайта" id="link" class="form-control">
		</div>
			

		<div class="form-group">
			<label for="file">Изображения</label>
			<input type="file" name="file" id="file">
		</div>

		<div class="form-group">
			<label for="description">Описания</label>
			<textarea name="description" id="description" class="form-control" placeholder="Введите текст"></textarea>
		</div>			

		<button type="submit" class="btn btn-success" mt-5> Отправить</button>

	</form>




</div>

@endsection