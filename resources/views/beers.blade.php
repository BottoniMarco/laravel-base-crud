@extends('layouts.main')

@section('content')
    <table class="table table-dark table-striped table-bordered">
        <thead >
            <th>ID</th>
            <th>Brand</th>
            <th>Name</th>
            <th>ABV</th>
            <th>Description</th>
        </thead>
        <tbody  >
            @foreach ($beers as $beer)
                <tr>
                    <td>{{ $beer->id }}</td>
                    <td>{{ $beer->brand }}</td>
                    <td>{{ $beer->name }}</td>
                    <td>{{ $beer->ABV }}</td>
                    <td>{{ $beer->description }}</td>
                    <td>{{ $beer->created_at }}</td>
                    <td>{{ $beer->updated_at }}</td>
                    <td>
                        <a href="{{ route('beers.show' , $beer->id) }}" class="btn btn-outline-light">mostra</a>
                    </td>

                </tr>
            @endforeach
        </tbody>

    
    </table>

@endsection

@section('header')
    <h1>birra</h1>
@endsection
