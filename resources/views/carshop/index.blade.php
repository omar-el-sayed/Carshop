@extends('layouts.layout')

@section('content')
<h1>CarShoooooooooooooop</h1>

<div class="container mt-2">
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 9 CRUD Example Tutorial</h2>
            </div>
            <div class="pull-right mb-2">
                <a class="btn btn-success" href="{{ route('carshop.create') }}"> Create Company</a>
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif
    <table class="table table-bordered" border="1" width="100%">
        <thead>
            <tr>
                <th>ID</th>
                <th>CarShop Name</th>
                <th>CarShop Location</th>
                <th>CarShop Size</th>
                <th width="280px">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($carShops as $carShop)
            <tr>
                <td>{{ $carShop->id }}</td>
                <td>{{ $carShop->name }}</td>
                <td>{{ $carShop->location }}</td>
                <td>{{ $carShop->size }}</td>
                <td>
                    <form action="{{ route('carshop.destroy',$carShop->id) }}" method="Post">
                        <a class="btn btn-primary" href="{{ route('carshop.edit',$carShop->id) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection