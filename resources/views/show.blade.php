@extends('layouts.main')

@section('header')
    <h1>INFO</h1>
@endsection

@section('content')
    <table class="table table-dark table-striped table-bordered">
        @foreach ($beer->getAttributes() as $key => $value)
            <tr>
                <td>{{ $key }}</td>
                <td>{{ $value }}</td>
            </tr>

        @endforeach

    </table>
@endsection

@section('footer')
    <div class="text-right">
        <a href="{{ route('beers.index') }}" class="btn btn-lg btn-primary">INDIETRO</a>
    </div>
@endsection 