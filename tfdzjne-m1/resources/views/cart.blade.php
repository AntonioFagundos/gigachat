@extends('layouts.app')

@section('content')

    <div class="containerCart">

        <div class="tablecart d-block">

            <ul class="thname d-flex">
                <li>Название</li>
                <li>Цена</li>
                <li>Количество</li>
            </ul>

            <ul class="tdname d-flex">
                <li>varchar</li>
                <li>int</li>
                <li>int</li>
            </ul>

            <!-- <table>
                <tr><th>Название</th><th>Цена</th><th>Количество</th></tr>
                <tr><td>string</td><td>int</td><td>int</td></tr>
            </table> -->

        </div>

    </div>

@endsection