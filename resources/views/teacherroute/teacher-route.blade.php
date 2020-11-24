<?
@extends('layout.total')

@section('title', 'Маршрут для учитилей')

@section('content')



<a href="{{route('add-teacher-route')}}">
  <button type="button" class="btn btn-primary">Добавить новый маршрут</button>
</a>
<br />
<br />

<table class="table table-striped">
				  <thead>
				    <tr>
				      <th scope="col">№</th>
				      <th scope="col">Год</th>				      		      
				    </tr>
				  </thead>
				  <tbody>
				  	@for ($i = 0; $i < sizeof($staffRoutes); $i++)
				   <tr>
				      
				      <td>{{$i + 1}}</td>    
				      <td>{{json_decode($staffRoutes[$i]->alldata, true)['ritemyear']}}</td>				      
              <td>
                  <a href="{{route('del-teacher-route')}}/{{$staffRoutes[$i]->id}}">
                      del
                  </a>

                  <a href="{{route('add-teacher-route')}}/{{$staffRoutes[$i]->id}}">
                      edit
                  </a>
              </td>
				   
				    </tr>

				    @endfor

				  </tbody>
</table>
		 

@endsection