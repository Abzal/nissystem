 
@extends('layout.total')

@section('title', 'add edit route')

@section('content')

<div class="container">

<form method="post" action="{{ route('add-teacher-route') }}<?= ($model->id != null)?'/'.$model->id : null ?> " >
@csrf

<div class="form-group">
 <label class="control-label">жылы/год</label>
<select class="form-control" name="ritemyear" value=<?= ($model->alldata != null)?json_decode($model->alldata, true)['ritemyear'] : "1000" ?>>
 <option selected> <?= ($model->alldata != null)?json_decode($model->alldata, true)['ritemyear'] : "" ?> </option>   
    @for ($i = 1990; $i < 2030; $i++ ) 
<option>
{{ $i }}
</option>
@endfor
</select>

    <br />
    <script>
        document.querySelector("input[type=number]")
        .oninput = e => console.log(new Date(e.target.valueAsNumber, 0, 1))
    </script>

    <?php        
        foreach ($routeItems as $routeItem) {
            echo '<label class="control-label" for="ritemid' . $routeItem->id . '">'.$routeItem->item.'</label>';

            $dataArr = json_decode($model->alldata, true);
            $val = "";
            if($dataArr!=null && array_key_exists($routeItem->id, $dataArr)){
                $val = $dataArr[$routeItem->id];
            }

            if($routeItem->type == 'text')
                echo '<input type="text" id = "ritemid' . $routeItem->id . '" class="form-control" name="ritem' . $routeItem->id . '" value="'. $val .'" >
                <br />'; 
            elseif ($routeItem->type == 'textarea') {
                echo '<textarea class="form-control" id = "ritemid' . $routeItem->id . '" name="ritem' . $routeItem->id . '" rows="6" aria-invalid="false">'. $val .'</textarea>
                <br />';            }
        }
        
    ?>

    <button type="submit" class="btn btn-primary">Сақтау/Сохранить</button>
</div>
</form>

</div>
@endsection