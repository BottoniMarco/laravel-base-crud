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
                <input type="text" class="form-control" id="id" name="id" placeholder="id" value="{{ old('id') }}">
            </div>
            <div class="form-group">
                <label for="brand"></label>
                <input type="text" class="form-control" id="brand" name="brand" placeholder="brand" value="{{ old('brabd') }}">
            </div>
            <div class="form-group">
                <label for="name"></label>
                <input type="text" class="form-control" id="name"  name="name" placeholder="name" value="{{ old('name') }}">
            </div>
            <div class="form-group">
                <label for="ABV"></label>
                <input type="text" class="form-control" id="ABV" name="ABV" placeholder="ABV" value="{{ old('ABV') }}">
            </div>
            <div class="form-group">
                <label for="description"></label>
                <textarea class="form-control" id="description" name="description" rows="6">{{ old('description') }}</textarea>

            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  
@endsection