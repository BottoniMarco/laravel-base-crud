@extends('layouts.main')

@section('header')
    <h1>INFO</h1>
@endsection

@section('content')
    <table>
        @foreach ($beer->getAttributes() as key => value)
            <tr>
                <td>{{ key }}</td>
                <td>{{ value }}</td>
            </tr>

        @endforeach

    </table>
@endsection
