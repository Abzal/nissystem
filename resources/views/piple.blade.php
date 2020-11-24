@extends('layout.total')

@section('title', 'Учащихся')

@section('content')


<div class="container mt-5">
	<div class="row">
		<div class="col-8">
				<table class="table table-striped">
				  <thead>
				    <tr>
				      <th scope="col">#</th>
				      <th scope="col">ФИО</th>
				      <th scope="col">ИИН</th>
				      <th scope="col">Язык обучение</th>
				    </tr>
				  </thead>
				  <tbody>
				  	@foreach ($skds as $skd)
				    <tr>
				      <th scope="row">{{$skd->Name}}</th>
				      <td>{{$skd->FirstName}}</td>
				    </tr>
				    @endforeach
				  </tbody>
				</table>

		</div>

		<div class="col-4">
			<ul class="list-group">
			 <input class="typeahead form-control" style="margin:0px auto;width:300px;" type="text">
			</ul>			
		</div>
		
	</div>	

</div>


@endsection