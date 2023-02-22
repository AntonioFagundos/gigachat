@extends('layouts.app')

@section('content')

    <div class="container">

        @foreach ($Cart as $c)

            <div class="rowcart d-flex">
                <div class="cartimg">
                    <img src="{{ $c -> cartpro -> photo }}">
                </div>
                <p> {{ $c -> cartpro -> name }} </p>
                <p> {{ $c -> cartpro -> country }} </p>
                <p> {{ $c -> cartpro -> price }} </p>
                <p> {{ $c -> cartpro -> quantity }} </p>
                <button value="{{ $c -> cartpro -> id }}">x</button>

            </div>

        @endforeach

    </div>

@endsection