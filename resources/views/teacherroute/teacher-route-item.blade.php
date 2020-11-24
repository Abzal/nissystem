<?
@extends('layout.total')

@section('title', 'Teacher route items')

@section('content')

@section('jsfileadd')
<script type="text/javascript">

$('#exampleModal').on('show.bs.modal', function (event) {
  var button = $(event.relatedTarget) // Button that triggered the modal
  var recipient = button.data('whatever') // Extract info from data-* attributes
  // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
  // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
  var modal = $(this)
  modal.find('.modal-title').text('New message to ' + recipient)
  modal.find('.modal-body input').val(recipient)
})
</script>
@stop

<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Add</button>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Добовление новой колонки для маршрута</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form method="post" action="{{ route('add-teacher-route-item') }}">
        @csrf
          <div class="form-group">
            <label for="item-name" class="col-form-label">Колонка маршрута:</label>
            <input type="text" class="form-control" id="item-name" name="item-name">
          </div>
          <div class="form-group">
            <label for="item-type" class="col-form-label">Тип колонки</label>
           <select class="form-control" id="item-type" name="item-type">
              @foreach (App\Http\Controllers\TeacherRouteItemController::getRouteItemTypeValues() as $value) 
                <option value = {{$value}}>{{$value}}</option>  
              @endforeach
            </select>
          </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save</button>
      </div>

        </form>
      </div>
      
    </div>
  </div>
</div>



<table class="table table-striped">
				  <thead>
				    <tr>
				      <th scope="col">№</th>
				      <th scope="col">Items</th>
				      <th scope="col">Type</th>				      
				    </tr>
				  </thead>
				  <tbody>
				  	@for ($i = 0; $i < sizeof($allItems); $i++)
				   <tr>
				      
				      <td>{{$i + 1}}</td>    
				      <td>{{$allItems[$i]->item}}</td>
				      <td>{{$allItems[$i]->type}}</td>
              <td>
                  <a href="{{route('del-teacher-route-item')}}/{{$allItems[$i]->id}}">del</a>
              </td>
				   
				    </tr>

				    @endfor

				  </tbody>
</table>
	
	 {{ $allItems->links() }}

@endsection