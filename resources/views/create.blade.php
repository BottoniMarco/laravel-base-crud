@extends('layouts.main')

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                   <li>{{ $error }}</li> 
                @endforeach
            </ul>
        </div>
        
    @endif
    <form action="{{ route('beers.store')}}" method="post">
        @csrf
        @method('POST')
        <div class="form-group">
            <div class="form-group">
                <label for="id"></label>
                <input type="text" class="form-control" id="id" name="id" placeholder="id">
            </div>
            <div class="form-group">
                <label for="brand"></label>
                <input type="text" class="form-control" id="brand" name="brand" placeholder="brand">
            </div>
            <div class="form-group">
                <label for="name"></label>
                <input type="text" class="form-control" id="name"  name="name" placeholder="name">
            </div>
            <div class="form-group">
                <label for="ABV"></label>
                <input type="text" class="form-control" id="ABV" name="ABV" placeholder="ABV">
            </div>
            <div class="form-group">
                <label for="description"></label>
                <textarea class="form-control" id="description" name="description" rows="3"></textarea>

            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  
@endsection