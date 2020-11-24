@extends('admin.templdash')

@section('title', 'Dashboard')

@section('dashcontent')

<div class="container mt-5">
    <div class="row mt-5">
        <div class="col-md-4">
            <ul id="links" class="list-group">
              <a href="{{route('boxes')}}" class="list-group-item list-group-item-action ">Main page boxes</a>
              <a href="{{ route('profile.show') }}" class="list-group-item list-group-item-action">Profile</a>
              <a href="{{ route('teacher-route-item') }}" class="list-group-item list-group-item-action">TeacherRouteItems</a>
              <a href="{{ route('index') }}" class="list-group-item list-group-item-action">Main</a>
              <a href="{{ route('index') }}" class="list-group-item list-group-item-action"></a>
              <a href="{{ route('teacher-route-item')}}" class="list-group-item list-group-item-action">TeacherRouteItems</a>
            </ul>                        
        </div>

        <div class="col-md-8">
            <div class="jumbotron">
              <h1 class="display-4">Last Update</h1>
              <p class="lead">In this you can write and describe your new function when designed</p>
              <hr class="my-4">
              <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
              <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
            </div>
            
        </div>        
    </div>
</div>
@endsection