@extends('layout.total')

@section('title', 'Посещение урока')

@section('content')


<h1>Сабақты кешенді бақылау парағы</h1>
<form action="/lessons" method="post"> 
	<div class="form-group" >
		<label for="name">Мұғалімнің аты-жөні</label>
		<input type="text" name="name" placeholder="Введите имя" id="name" class="form-control">		
	</div>

	<div class="form-group" >
		<label for="name">Мұғалімнің шеберлік деңгейі</label>
		<input type="text" name="name" placeholder="Введите имя" id="name" class="form-control">		
	</div>
	
	<div class="form-group" >
		<label for="name">Шеберлік деңгейіне үміткер</label>
		<input type="text" name="name" placeholder="Введите имя" id="name" class="form-control">		
	</div>
	
	<div class="form-group" >
		<label for="name">Пәні</label>
		<input type="text" name="name" placeholder="Введите имя" id="name" class="form-control">		
	</div>
	
	<div class="form-group" >
		<label for="name">Сабақты бақылау күні</label>
		<input type="text" name="name" placeholder="Введите имя" id="name" class="form-control">		
	</div>
	
	<div class="form-group" >
		<label for="name">Сынып</label>
		<input type="text" name="name" placeholder="Введите имя" id="name" class="form-control">		
	</div>
	
	<div class="form-group" >
		<label for="name">Тақырып</label>
		<input type="text" name="name" placeholder="Введите имя" id="name" class="form-control">		
	</div>
	
	<div class="form-group" >
		<label for="name">Кәсіби даму мақсаты</label>
		<input type="text" name="name" placeholder="Введите имя" id="name" class="form-control">		
	</div>
				
				<!--Ұсынылған жоспар head -->
				<label for="name" mt-5 >Ұсынылған жоспар </label>
				<div class="form-check" pt-lg-0>
				  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
				  <label class="form-check-label" for="defaultCheck1">
				  өз бетінше әзірленген сабақтың
				  </label>
				</div>
				<div class="form-check">
				  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
				  <label class="form-check-label" for="defaultCheck1">
				  сабақты зерттеу аясындағы әріптестерімен бірлесе әзірлеген сабақтың
				  </label>
				</div>
				<div class="form-check">
				  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
				  <label class="form-check-label" for="defaultCheck1">
				  тәжірибені зерттеу аясындағы сабақтың
				  </label>
				</div>								
				<div class="form-check">
				  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
				  <label class="form-check-label" for="defaultCheck1">
				  авторлық бағдарлама бойынша сабақтың
				  </label>
				</div>								
				<div class="form-check">
				  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
				  <label class="form-check-label" for="defaultCheck1">
				  авторлық әдістеме бойынша сабақтың
				  </label>
				</div>		
				<!--Ұсынылған жоспар end -->

				<!--Оқытудың элементтері head -->
				<label for="name" mt-5>Оқытудың элементтері </label>
				<div class="form-check">
				  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
				  <label class="form-check-label" for="defaultCheck1">
				  Сабақ жоспары оқыту мақсаттарымен сәйкестендірілген сабақ мақсаттарын қамтиды
				  </label>
				</div>
				<div class="form-check">
				  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
				  <label class="form-check-label" for="defaultCheck1">
				  Мұғалім оқушылармен сабақ мақсаттарын және күтілетін нәтижелерді талқылайды
				  </label>
				</div>
				<div class="form-check">
				  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
				  <label class="form-check-label" for="defaultCheck1">
				  Мұғалім жоспарға сәйкес сабақ құрылымын сақтайды (қажеттілігіне қарай сабақ кезеңдерінің арасында логикалық байланыстарды сақтай отырып, сабақ жоспарына түзетулер енгізеді)
				  </label>
				</div>								
				<div class="form-check">
				  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
				  <label class="form-check-label" for="defaultCheck1">
				  Жоспарланған оқыту тәсілдері оқу мақсаттары және күтілетін нәтижелерімен арақатынасады
				  </label>
				</div>								
				<div class="form-check">
				  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
				  <label class="form-check-label" for="defaultCheck1">
				 Мұғалім әрбір оқушының қызығушылығын қадағалайды
				  </label>
				</div>		
				<div class="form-check">
				  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
				  <label class="form-check-label" for="defaultCheck1">
				 Мұғалімі оқушылардың оқуын тиісті формативті бағалау тәсілдерімен қолдайды
				  </label>
				</div>
				<div class="form-check">
				  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
				  <label class="form-check-label" for="defaultCheck1">
				 Мұғалім оқушыларға сындарлы кері байланыс ұсынады
				  </label>
				</div>	
				<div class="form-check">
				  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
				  <label class="form-check-label" for="defaultCheck1">
				 Мұғалім қалыптастырушы бағалаудың нәтижелерін сабақ жоспарлау үшін пайдаланады
				  </label>
				</div>														
				<!--Оқытудың элементтері end -->




</form>

@endsection