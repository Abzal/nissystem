<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <!-- Styles -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

        <style>

 html, body, #map {
            width: 100%; height: 900px;
              font-family: 'Nunito';
        }
        </style>


        <style>
[class*="ymaps-2"][class*="-ground-pane"] {
    filter: url("data:image/svg+xml;utf8,<svg xmlns=\'http://www.w3.org/2000/svg\'><filter id=\'grayscale\'><feColorMatrix type=\'matrix\' values=\'0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0.3333 0.3333 0.3333 0 0 0 0 0 1 0\'/></filter></svg>#grayscale");
    -webkit-filter: hue-rotate(50deg);
}
</style>

    <script src="https://api-maps.yandex.ru/2.1/?apikey=30372d87-30d2-4fae-ba5a-b7baab0e50b5&lang=ru_RU" type="text/javascript">
    </script>




   </head>

<body>

<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

@foreach ($alllist as $alllists)
        <div class="container">
          <div class="card mb-4 shadow-sm">
            <img src="{{ asset('storage/img/tet/'.$alllists->img) }}" class="card-img-top" alt="{{$alllists->name}}" width="200px" height="80px" >
            <div class="card-body">
              <h5 class="card-title">{{$alllists->name}}</h5>
              <button type="button" class="btn btn-light btn-lg btn-block" onclick="showAll('{{$alllists->lat}}', '{{$alllists->lng}}')">ТАБУ</button>
              <button type="button" class="btn btn-light btn-lg btn-block" onclick="routeShow('{{$alllists->lat}}', '{{$alllists->lng}}')">МАРШРУТ</button>
              
              </div>
          </div>          
        </div> 

@endforeach
</div>

    <div class="content">
    	<span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; </span>
        <div id="map"></div>
    </div>   


<script type="text/javascript">
    // Функция ymaps.ready() будет вызвана, когда
    // загрузятся все компоненты API, а также когда будет готово DOM-дерево.
    ymaps.ready(init);



    function getMap(){
    	return (new ymaps.Map("map", {
            // Координаты центра карты.
            // Порядок по умолчанию: «широта, долгота».
            // Чтобы не определять координаты центра карты вручную,
            // воспользуйтесь инструментом Определение координат.
            center: [42.381087, 69.593603], 
            // Уровень масштабирования. Допустимые значения:
            // от 0 (весь мир) до 19.
            controls: ['routeButtonControl'],
            zoom: 10


        }));
    }

    function setPlacemark(myMap =  null){
    	control = myMap.controls.get('routeButtonControl');

		// Программно установим начальную точку маршрута.
		control.routePanel.state.set({
		    fromEnabled: false,
		    from: [42.381087, 69.593603],
		    to: [42.320928, 69.581841],
		    type: "auto"
			});



		@foreach ($alllist as $alllists)


   		myPlacemark = new ymaps.Placemark([" {{$alllists->lat}} ", " {{$alllists->lng}} "], {
      	
        hintContent: '{{$alllists->name}}',
        balloonContent: '<div> <h5 align="center"> {{$alllists->name}} </h5> <img src="{{ asset('storage/img/tet/'.$alllists->img) }}" class="card-img-top" alt="{{$alllists->name}}" width="120px" height="40px" > </br> <a href = "{{route("show")}}"  class="btn btn-primary"> толығырақ </a></div>'

    	},
    	{
        	iconLayout: 'default#image',
        	iconImageHref: '{{ asset('storage/img/logo01.png/') }}',
        	iconImageSize: [76, 65]
        }
        );


    	myMap.geoObjects.add(myPlacemark);


		@endforeach 

		return myPlacemark;
    }

   var gMap = getMap();
   var placemark = setPlacemark(gMap);
    function init(){
        // Создание карты.
        gMap = getMap();


        setPlacemark(gMap);
    }

function showAll(lat, lng){
gMap.setCenter([lat, lng], 16);

}

function routeShow(){



}

</script>

<script>
function openNav() {
  document.getElementById("mySidenav").style.width = "300px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}
</script> 
</body>

</html>
