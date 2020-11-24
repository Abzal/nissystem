<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <div class="album py-5 bg-light">
    <div class="container">
      <div class="row">
@foreach ($boxes as $box)
        <div class="col-md-4">
          <div class="card mb-4 shadow-sm">
            <img src="{{ asset('storage/img/boxes/'.$box->img) }}" class="card-img-top" alt="{{$box->name}}" width="100%" >
            <div class="card-body">
              <h5 class="card-title">{{$box->name}}</h5>
              <p class="card-text">{{$box->description}} </p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group mt-2">                  
                <a class="btn btn-primary" href="{{ $box->link }}" role="button">Перейти</a>
                </div>
              </div>
            </div>
          </div>          
        </div> 
@endforeach
      </div>
    </div>
  </div>