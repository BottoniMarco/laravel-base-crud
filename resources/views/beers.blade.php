<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>Document</title>
</head>
<body>
<main class="container">

    <h1>birra</h1>
    <table class="table table-dark table-striped table-bordered">
        <thead >
            <tr>ID</tr>
            <tr>Brand</tr>
            <tr>Name</tr>
            <tr>ABV</tr>
            <tr>Description</tr>
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

                </tr>
            @endforeach
        </tbody>

    
    </table>
</main>
</body>
</html>


