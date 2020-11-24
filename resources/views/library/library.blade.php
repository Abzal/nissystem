@extends('layout.total')

@section('title', 'Библиотека')

@section('content')


<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

<div class="container mt-5">
	<div class="row">
		<div class="col-md-10">
@include('layout.messages')

<!-- Button to Open the Modal -->
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">
  Добавить
</button>



			<table class="table table-striped">
				  <thead>
				    <tr>
				      <th scope="col">№</th>
				      <th scope="col">Вид</th>
				      <th scope="col">Сл</th>
				      <th scope="col">Автор</th>
				      <th scope="col">Заглавие</th>
				      <th scope="col">Место</th>
				      <th scope="col">Год</th>
				      <th scope="col">Экз</th>
				      <th scope="col">Создан</th>
				      <th scope="col">Действия</th>
				    </tr>
				  </thead>
				  <tbody>
				  	@foreach ($admission as $admissions)
				   <tr>
				      <td>{{$admissions->id}}</td>
				      <td>{{$admissions->lview}}</td>
				      <td>{{$admissions->sl}}</td>
				      <td>{{$admissions->author}}</td>
				      <td>{{$admissions->name}}</td>
				      <td>{{$admissions->location}}</td>
				      <td>{{$admissions->year}}</td>
				      <td>{{$admissions->copies}}</td>
				      <td>{{$admissions->created_at}}</td>
                        <td>


  <a href="#">  
  	<button type="button" class="btn btn-primary edit" >
  		<span class="fas fa-edit" aria-hidden="true"></span>
  	</button>
 </a>

   <a href="{{route('library-deletebook', $admissions->id)}}"> 
  	@csrf 
  	<button type="button" class="btn btn-danger">
  		<span class="fas fa-trash-alt" aria-hidden="true">
  	</button>
 </a>

                        </td>				      
				     				   
				    </tr>
				    @endforeach				    

				  </tbody>
				</table>

<!-- The add Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Добавить коллекцию книг</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
			       	<form action="{{route('library-addbook')}}" method="post" enctype="multipart/form-data">
			       		@csrf

					<div class="form-group">
						<label for="lview">Вид</label>
						<input type="text" name="lview" value="" placeholder="Введите вид" id="lview" class="form-control">
					</div>

					<div class="form-group">
						<label for="sl">Сл</label>
						<input type="text" name="sl" placeholder="Введите СЛ" id="sl" class="form-control">
					</div>

					<div class="form-group">
						<label for="author">Автор</label>
						<input type="text" name="author" placeholder="Введите автора" id="author" class="form-control">
					</div>						

					<div class="form-group">
						<label for="name">Заглавие</label>
						<input type="text" name="name" placeholder="Введите название" id="name" class="form-control">
					</div>	

					<div class="form-group">
						<label for="location">Место</label>
						<input type="text" name="location" placeholder="Введите место" id="location" class="form-control">
					</div>

					<div class="form-group">
						<label for="year">Год</label>
						<input type="text" name="year" placeholder="Выберите год" id="year" class="form-control">
					</div>
					<div class="form-group">
						<label for="copies">Экземпляр</label>
						<input type="text" name="copies" placeholder="Введите количество экземпляра" id="copies" class="form-control">
					</div>	
												
					<button type="submit" class="btn btn-success" mt-5>Сохранить</button>



					</form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Закрыть</button>
      </div>

    </div>
  </div>
</div>
<!--   -->




<!-- The Update Modal -->
<div class="modal" id="editModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Добавить коллекцию книг</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
			       	<form action="/library" method="post" enctype="multipart/form-data" id="editForm">
					{{csrf_field()}}
					{{ method_field('PUT')}}

					<div class="form-group">
						<label for="lview">Вид</label>
						<input type="text" name="lview" value="" placeholder="Введите вид" id="lview" class="form-control">
					</div>

					<div class="form-group">
						<label for="sl">Сл</label>
						<input type="text" name="sl" placeholder="Введите СЛ" id="sl" class="form-control">
					</div>

					<div class="form-group">
						<label for="author">Автор</label>
						<input type="text" name="author" placeholder="Введите автора" id="author" class="form-control">
					</div>						

					<div class="form-group">
						<label for="name">Заглавие</label>
						<input type="text" name="name" placeholder="Введите название" id="name" class="form-control">
					</div>	

					<div class="form-group">
						<label for="location">Место</label>
						<input type="text" name="location" placeholder="Введите место" id="location" class="form-control">
					</div>

					<div class="form-group">
						<label for="year">Год</label>
						<input type="text" name="year" placeholder="Выберите год" id="year" class="form-control">
					</div>
					<div class="form-group">
						<label for="copies">Экземпляр</label>
						<input type="text" name="copies" placeholder="Введите количество экземпляра" id="copies" class="form-control">
					</div>	
												
					<button type="submit" class="btn btn-success" mt-5>Сохранить</button>



					</form>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Закрыть</button>
      </div>

    </div>
  </div>
</div>
<!--   -->

		</div>	</div>
	
</div>

<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js"></script>

<script type="text/javascript">

	$(document).ready(function() {

		var table = $('#datatable').DataTable();

		table.on('click', '.edit', function() {

		$tr = $(this).closest('tr');
		if ($($tr).hasClass('child')) {
			$tr = $tr.prev('.parent');			
		}

		var data = table.row($tr).data();
		console.log(data);

		$('#lview').val(data[1]);
		$('#sl').val(data[2]);
		$('#author').val(data[3]);
		$('#name').val(data[4]);
		$('#location').val(data[5]);
		$('#year').val(data[6]);
		$('#copies').val(data[7]);

		$('#editForm').attr('action', '/library/'+data[0]);
		$('#editModal').modal('show');

	
		});
	});


</script>

@endsection