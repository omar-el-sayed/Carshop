@extends('layouts.layout')

@section('content')
<h1>Itemsssssssssssss</h1>

<div>
    <a href="/carshop">Car Shops</a>
</div>

<table border="1" width="100%">

    <thead>
        <th>id</th>
        <th>car name</th>
        <th>color</th>
        <th>model</th>
        <th>price</th>
        <th>year</th>
        <th>img</th>
        <th>car shop</th>
    </thead>

    <tbody>
        @foreach($cars as $car)
        <tr>
            <td>{{ $car->id }}</td>
            <td>{{ $car->car_name }}</td>
            <td>{{ $car->color }}</td>
            <td>{{ $car->model }}</td>
            <td>{{ $car->price }}</td>
            <td>{{ $car->year }}</td>
            <td>
                <img src="{{$car->img_path}}" width="100" />
            </td>
            <td>
                @foreach($carShops as $carShop)
                @if($carShop['id'] == $car['carshop_id'])
                {{ $carShop -> name }}
                @endif
                @endforeach
            </td>
        </tr>
        @endforeach
    </tbody>

</table>

@endsection