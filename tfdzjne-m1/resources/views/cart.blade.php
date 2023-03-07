@extends('layouts.app')

@section('content')

    <div class="container">

        <h1>Корзина</h1>

        <div class="knopka">

        <button class="btn btn-success"><a href="/public/catalog">Назад</a></button>

        </div>

        @foreach ($Cart as $c)

            <div class="cart-t">

                <div class="cartimg">
                    <img class="img-fluid" src="{{ $c -> cartpro -> photo }}">
                </div>
                
                <p>{{ $c -> cartpro -> name }}</p>
                <p>Цена: {{ $c -> cartpro ->price * $c->quantity }} Р</p>
                <div class="m-p">
                    <a class="minus" href="/public/cart/minus/{{ $c -> id }}">-</a>
                    <p>{{ $c -> quantity }}</p>
                    <a class="plus" href="/public/cart/plus/{{ $c -> id }}">+</a>
                </div>

            </div>

        @endforeach

    </div>

@endsection