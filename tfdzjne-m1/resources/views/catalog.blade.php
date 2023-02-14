@extends('layouts.app')

@section('content')

	<h1>Каталог</h1>

	<div class="upmenu d-flex">

		<form action="/public/filter" class="filter col-6">
			<select name="category_filter" class="category_filter">
				@foreach ($Category as $cat)	
				<option value="{{$cat -> id}}">{{$cat -> name}}</option>
				@endforeach
			</select>
			<select name="select_filter" class="select_filter">
				<option value="price">По цене</option>
				<option value="year">По году производства</option>
				<option value="name">По наименованию</option>
			</select>
			<button type="submit" class="btn btn-success">Подтвердить</button>
		</form>

		<div class="basket col-6 d-flex">
			<p>Корзина</p>
			<img src="/public/img/basket.png">
		</div>

	</div>

	<div class="containerCat w-100">	

		@foreach($Products as $pro)

		<div class="bordercard">

					<img class="catimg" src="{{ $pro -> photo }}">

					<p>{{ $pro -> name }}</p>

					<p>{{ $pro -> price }} руб.</p>

					<button class="btn btn-success" value="{{ $pro -> id }}"><a href="/public/soloproduct/{{ $pro -> id }}">Купить</a></button>

		</div>

		@endforeach

	</div>

@endsection