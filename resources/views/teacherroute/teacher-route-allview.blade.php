
@extends('layout.total')

@section('title', 'Все маршруты учитилей')

@section('content')

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">

<table class="table table-striped">
				  <thead>
				    <tr>
				      <th scope="col">№</th>
				      <th scope="col">ФИО</th>	
				      <th> </th>			      				      		      
				    </tr>
				  </thead>
				  <tbody>				  
				  	
				  	<?php $i = 1; ?>
				  	@foreach ($users as $value) 
				  
				   <tr>
				      
				   	<th>
				   		<?= $i; $i++; ?>
				   	</th>
				   
		            <td>                  
              			{{$value->name}}                  
              		</td>
				   
				   <td>


                  		  <a href="{{route('teacher-route-view')}}/{{$value->iin}}">
  	<button type="button" class="btn btn-primary" >
  		<span class="fas fa-eye" aria-hidden="true"></span>
  	</button>
 </a>
				   </td>

				    </tr>

				    @endforeach

				  </tbody>
</table>
		 

@endsection