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
			<a href="/public/cart">
				<p>Корзина</p>
			</a>
		</div>

	</div>

	<div class="containerCat w-100">	

		@foreach($Products as $pro)

		<div class="bordercard">

			<div class="imgsize">

			<div class="imginner d-flex">

				<a href="/public/soloproduct/{{ $pro -> id }}">

					<img class="catimg img-fluid" src="{{ $pro -> photo }}">

				</a>

			</div>

			</div>

			<div class="carddown">

				<p>{{ $pro -> name }}</p>

				<p>{{ $pro -> price }} руб.</p>

			<button class="btn btn-success" value="{{ $pro -> id }}"><a href="/public/cart">В корзину</a></button>

			</div>

		</div>

		@endforeach

	</div>

@endsection