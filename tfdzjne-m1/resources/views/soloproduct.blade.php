@extends('layouts.app')

@section('content')

	<div class="containerSolo d-flex w-100">
		
		<div class="cards_solo">

				<img class="catimg_solo" src="{{ $pro -> photo }}">

				<p class="pros_name">{{ $pro -> name }}</p>

				<p class="pros_price">{{ $pro -> price }} руб.</p>

				<button class="btn btn-success">Купить</button>

		</div>

		<div class="character">

			<p class="pros">Характеристики товара:</p>

			<p class="pros">Страна: {{ $pro -> country }}</p>

			<p class="pros">Модель: {{ $pro -> model }}</p>

			<p class="pros">Год выпуска: {{ $pro -> year }}</p>

		</div>

	</div>

@endsection