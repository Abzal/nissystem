@extends('layout.total')

@section('title', 'Учащихся')

@section('content')

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<div class="container mt-5">
	<div class="row">

		<div class="col-md-8">




				<table class="table table-striped">
				  <thead>
				    <tr>
				      <th scope="col">№</th>
				      <th scope="col">ФИО</th>
				      <th scope="col">ИИН</th>
				      <th scope="col">Язык обучение</th>
				    </tr>
				  </thead>
				  <tbody>
				  	@foreach ($students as $student)
				   <tr>
				      <th scope="row">{{$student->id}}</th>
				      <td><a href="{{ route('categories')}}/{{$student->category_id}}/{{$student->id}}">{{$student->fullname}}</a></td>    
				      <td>{{$student->iin}}</td>
				      <td>{{$student->lang}}</td>
				   
				    </tr>

				    @endforeach

				  </tbody>
				</table>

		</div>

		<div class="col-md-4">

<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
   Список классов
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
  	@foreach ($categories as $category)
    <a class="dropdown-item" href="{{route('categories')}}/{{$category->id}}">{{$category->category}}</a>
    @endforeach
  </div>
</div>
		
<div class="card" style="width: 18rem; margin-top: 10px;">
  <img class="card-img-top" src="{{asset('storage'.$studentcards->image)}}" alt="">
  <div class="card-body">
    <h5 class="card-title">ИИН: {{$studentcards->iin}}</h5>
    <p class="card-text">{{$studentcards->fullname}}</p>
    <a href="#" class="btn btn-primary">Успеваемость</a>
  </div>
</div>

				<table class="table table-striped mt-5">
				  <thead>
				    <tr>
				      <th scope="col">Время</th>
				      <th scope="col">События</th>
				    </tr>
				  </thead>
  <tbody>
				  	@foreach ($skds as $skd)
				   <tr>
 				      <td>{{$skd->TimeVal}}</td>
 				      @if ($skd->Mode == 1)
				      <td>Вход</td>
				      @else
				      <td>Выход</td>
				      @endif	
				    </tr>
				    @endforeach

				    				  </tbody>
 				</table>
 		
		</div>
		
	</div>	

</div>



</body>
</html>
@endsection