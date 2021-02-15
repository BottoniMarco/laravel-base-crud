@extends('layouts.main')

@section('content')
    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif
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
                        <a href="{{ route('beers.show' , $beer->id) }}" class="btn btn-outline-light"><i class="fas fa-search-plus"></i>
                        </a>
                    </td>
                    <td>
                        <a href="{{ route('beers.edit' , $beer->id) }}" class="btn btn-outline-light"><i class="fas fa-pencil-alt"></i>
                        </a>
                    </td>
                    <td>
                        <form action="{{ route('beers.destroy' , $beer->id) }}" method="POST">    
                            @csrf
                            @method('DELETE')                        
                            <button  class="btn btn-outline-light"><i class="fas fa-trash-alt"></i>
                            </button>
                        </form>
                    </td>



                </tr>
            @endforeach
        </tbody>

    
    </table>

@endsection

@section('header')
    <h1>birra</h1>
@endsection

@section('footer')
    <div class="text-right">
        <a href="{{ route('beers.create') }}" class="btn btn-lg btn-primary">AGGIUNGI BIRRA</a>
    </div>
@endsection 
